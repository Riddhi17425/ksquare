<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Solar Installation Quote Generator</title>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f5f5f5; }
    .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    h1 { color: #333; margin-bottom: 20px; }
    .form-group { margin-bottom: 15px; }
    label { display: block; margin-bottom: 5px; font-weight: bold; }
    input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
    button { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
    button:hover { background-color: #45a049; }
    .pdf-container { margin-top: 30px; border: 1px solid #ddd; height: 600px; }
    .button-group { display: flex; gap: 10px; margin-top: 20px; }
    .loading { display: none; margin-left: 10px; }
  </style>
</head>
<body>
<div class="container">
  <h1>Solar Installation Quote Generator</h1>

  <div class="form-group"><label for="quotationNo">Quotation No:</label><input type="text" id="quotationNo" value="QT-2025-0512" /></div>
  <div class="form-group"><label for="clientName">Client Name:</label><input type="text" id="clientName" value="John Doe" /></div>
  <div class="form-group"><label for="clientMobile">Client Mobile No:</label><input type="text" id="clientMobile" value="9876543210" /></div>
  <div class="form-group"><label for="rate">Rate ($/kWh):</label><input type="text" id="rate" value="0.15" /></div>
  <div class="form-group"><label for="subsidy">Subsidy ($):</label><input type="text" id="subsidy" value="2500" /></div>
  <div class="form-group"><label for="panels">Number of Panels:</label><input type="number" id="panels" value="24" /></div>
  <div class="form-group"><label for="capacity">Capacity (kW):</label><input type="text" id="capacity" value="8.4" /></div>

  <div class="button-group">
    <button onclick="fillAndPreviewPDF()">Preview PDF</button>
    <button onclick="fillAndDownloadPDF()">Download PDF</button>
    <span id="loading" class="loading">Processing...</span>
  </div>

  <div id="pdf-container" class="pdf-container"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.5.141/pdf.min.js"></script>
<script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>

<script>
  const pdfPath = 'https://www.ksquareenergy.com/public/Rooftop.pdf';

  class PDFFormFiller {
    constructor() { this.pdfDoc = null; this.formData = {}; }

    async loadPDF(pdfSource) {
      const response = await fetch(pdfSource);
      const pdfBytes = await response.arrayBuffer();
      this.pdfDoc = await PDFLib.PDFDocument.load(pdfBytes);
    }

    getFormFields() {
      const form = this.pdfDoc.getForm();
      return form.getFields().map(field => ({
        name: field.getName(),
        type: field.constructor.name,
        isRequired: field.isRequired()
      }));
    }

    fillForm(data) {
      const form = this.pdfDoc.getForm();
      const fields = form.getFields();
      const availableFields = {};
      fields.forEach(field => availableFields[field.getName().trim().toLowerCase()] = field);

      Object.entries(data).forEach(([key, value]) => {
        const field = availableFields[key.trim().toLowerCase()];
        if (field) {
          try { field.setText(value.toString()); } catch (e) {}
        }
      });
    }

    async saveForm() {
      return await this.pdfDoc.save();
    }

    async downloadPDF(filename = 'filled-form.pdf') {
      const pdfBytes = await this.saveForm();
      const blob = new Blob([pdfBytes], { type: 'application/pdf' });
      const link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = filename;
      link.click();
      URL.revokeObjectURL(link.href);
    }

    async displayPDF(elementId) {
      const pdfBytes = await this.saveForm();
      const blob = new Blob([pdfBytes], { type: 'application/pdf' });
      const url = URL.createObjectURL(blob);
      const container = document.getElementById(elementId);
      container.innerHTML = `<embed src="${url}" type="application/pdf" width="100%" height="100%">`;
    }
  }

  function calculateValues() {
    const panels = parseInt(document.getElementById('panels').value) || 0;
    const capacity = parseFloat(document.getElementById('capacity').value) || 0;
    const rate = parseFloat(document.getElementById('rate').value) || 0;
    const dailyGeneration = (capacity * 3.65).toFixed(1);
    const yearlyGeneration = Math.round(dailyGeneration * 365);
    const yearlySavings = Math.round(yearlyGeneration * rate);
    const savingsOver25Years = yearlySavings * 25;
    const co2SavingPerYear = (yearlyGeneration * 0.0007).toFixed(1);
    const equivalentTrees = Math.round(co2SavingPerYear * 1000 / 25);
    const panelCost = panels * 500;
    const subsidy = parseFloat(document.getElementById('subsidy').value) || 0;
    const totalCost = panelCost - subsidy;
    const roi = (totalCost / yearlySavings).toFixed(1);
    return {
      dailyGeneration: dailyGeneration + " kWh",
      yearlyGeneration: yearlyGeneration + " kWh",
      yearlySavings: "$" + yearlySavings,
      savingsOver25Years: "$" + savingsOver25Years,
      co2SavingPerYear: co2SavingPerYear + " tons",
      equivalentTrees: equivalentTrees + " trees",
      totalCost: "$" + totalCost,
      roi: roi + " years",
      rate: "$" + rate + "/kWh",
      subsidy: "$" + subsidy
    };
  }

  async function fillAndPreviewPDF() {
    document.getElementById('loading').style.display = 'inline';
    const formFiller = new PDFFormFiller();
    try {
      await formFiller.loadPDF(pdfPath);
      const calculated = calculateValues();
      const data = {
        'Quotation_No:': document.getElementById('quotationNo').value,
        'Client_Name:': document.getElementById('clientName').value,
        'Client_Mo._No.:': document.getElementById('clientMobile').value,
        'Date_&_Time:': new Date().toLocaleString(),
        'Rate': calculated.rate,
        'Subsidy': calculated.subsidy,
        'Total': calculated.totalCost,
        'No._of_Panels': document.getElementById('panels').value,
        'Capacity': document.getElementById('capacity').value + " kW",
        'Yearly_Savings': calculated.yearlySavings,
        'Estimate_ROI': calculated.roi,
        'Saving_Over_25_Years': calculated.savingsOver25Years,
        'Yearly_Generation': calculated.yearlyGeneration,
        'Daily_Generation': calculated.dailyGeneration,
        'Co2_Saving/Year': calculated.co2SavingPerYear,
        'Equivalet_Trees_': calculated.equivalentTrees,
        'Visualize_Your_Solar_Setup': 'South-facing roof installation'
      };
      formFiller.fillForm(data);
      await formFiller.displayPDF('pdf-container');
    } catch (error) {
      alert('PDF Preview Failed. Check console.');
      console.error(error);
    } finally {
      document.getElementById('loading').style.display = 'none';
    }
  }

  async function fillAndDownloadPDF() {
    document.getElementById('loading').style.display = 'inline';
    const formFiller = new PDFFormFiller();
    try {
      await formFiller.loadPDF(pdfPath);
      const calculated = calculateValues();
      const data = {
        'Quotation_No:': document.getElementById('quotationNo').value,
        'Client_Name:': document.getElementById('clientName').value,
        'Client_Mo._No.:': document.getElementById('clientMobile').value,
        'Date_&_Time:': new Date().toLocaleString(),
        'Rate': calculated.rate,
        'Subsidy': calculated.subsidy,
        'Total': calculated.totalCost,
        'No._of_Panels': document.getElementById('panels').value,
        'Capacity': document.getElementById('capacity').value + " kW",
        'Yearly_Savings': calculated.yearlySavings,
        'Estimate_ROI': calculated.roi,
        'Saving_Over_25_Years': calculated.savingsOver25Years,
        'Yearly_Generation': calculated.yearlyGeneration,
        'Daily_Generation': calculated.dailyGeneration,
        'Co2_Saving/Year': calculated.co2SavingPerYear,
        'Equivalet_Trees_': calculated.equivalentTrees,
        'Visualize_Your_Solar_Setup': 'South-facing roof installation'
      };
      formFiller.fillForm(data);
      const clientName = document.getElementById('clientName').value.replace(/\s+/g, '_');
      await formFiller.downloadPDF(`solar-quote-${clientName}.pdf`);
    } catch (error) {
      alert('PDF Download Failed. Check console.');
      console.error(error);
    } finally {
      document.getElementById('loading').style.display = 'none';
    }
  }
</script>
</body>
</html>
