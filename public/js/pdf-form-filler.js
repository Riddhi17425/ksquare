// pdf-form-filler.js

/**
 * Client-side PDF form filling using PDF.js and pdf-lib
 *
 * Required libraries:
 * - PDF.js: https://mozilla.github.io/pdf.js/
 * - pdf-lib: https://pdf-lib.js.org/
 */

// Include the necessary libraries in your HTML:
// <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.5.141/pdf.min.js"></script>
// <script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>

class PDFFormFiller {
    constructor() {
        this.pdfDoc = null;
        this.formData = {};
    }

    /**
     * Load a PDF document
     * @param {string|Uint8Array|ArrayBuffer} pdfSource - Path or binary data of PDF
     * @returns {Promise<void>}
     */
    async loadPDF(pdfSource) {
        try {
            if (typeof pdfSource === 'string') {
                // If it's a URL or file path, fetch it
                const response = await fetch(pdfSource);
                const pdfBytes = await response.arrayBuffer();
                this.pdfDoc = await PDFLib.PDFDocument.load(pdfBytes);
            } else {
                // If it's already binary data
                this.pdfDoc = await PDFLib.PDFDocument.load(pdfSource);
            }

            console.log('PDF loaded successfully');
            return this.pdfDoc;
        } catch (error) {
            console.error('Error loading PDF:', error);
            throw error;
        }
    }

    /**
     * List all form fields in the PDF
     * @returns {Array} - List of field names and types
     */
    getFormFields() {
        if (!this.pdfDoc) {
            throw new Error('No PDF loaded. Call loadPDF first.');
        }

        const form = this.pdfDoc.getForm();
        const fields = form.getFields();

        return fields.map(field => {
            return {
                name: field.getName(),
                type: field.constructor.name,
                isRequired: field.isRequired()
            };
        });
    }

    /**
     * Set form field values
     * @param {Object} data - Key-value pairs of field names and values
     */
    fillForm(data) {
        if (!this.pdfDoc) {
            throw new Error('No PDF loaded. Call loadPDF first.');
        }

        this.formData = data;
        const form = this.pdfDoc.getForm();
        const fields = form.getFields();

        // Create a map of normalized field names
        const availableFields = {};
        fields.forEach(field => {
            const name = field.getName();
            const normalized = name.trim().toLowerCase();
            availableFields[normalized] = field;
            console.log("Found field:", name);
        });

        // Fill the form fields
        Object.entries(data).forEach(([key, value]) => {
            const normalizedKey = key.trim().toLowerCase();
            const field = availableFields[normalizedKey];

            if (field) {
                try {
                    field.setText(value.toString());
                } catch (e) {
                    console.warn(`Could not set value for field "${field.getName()}": ${e.message}`);
                }
            } else {
                console.warn(`Field not found for key: "${key}"`);
            }
        });

        console.log('Form filled successfully');
    }


    /**
     * Save the filled PDF
     * @returns {Promise<Uint8Array>} - PDF data
     */
    async saveForm() {
        if (!this.pdfDoc) {
            throw new Error('No PDF loaded. Call loadPDF first.');
        }

        try {
            // Flatten form fields if needed (makes them non-editable)
            // const form = this.pdfDoc.getForm();
            // form.flatten();

            const pdfBytes = await this.pdfDoc.save();
            return pdfBytes;
        } catch (error) {
            console.error('Error saving PDF:', error);
            throw error;
        }
    }

    /**
     * Download the filled PDF
     * @param {string} filename - Name for the downloaded file
     */
    async downloadPDF(filename = 'filled-form.pdf') {
        const pdfBytes = await this.saveForm();

        // Create a blob from the PDF data
        const blob = new Blob([pdfBytes], { type: 'application/pdf' });

        // Create a link element and trigger download
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = filename;
        link.click();

        // Clean up
        URL.revokeObjectURL(link.href);
    }

    /**
     * Display the PDF in an iframe or embed element
     * @param {string} elementId - ID of the container element
     */
    async displayPDF(elementId) {
        const pdfBytes = await this.saveForm();
        const blob = new Blob([pdfBytes], { type: 'application/pdf' });
        const url = URL.createObjectURL(blob);

        const container = document.getElementById(elementId);
        if (!container) {
            throw new Error(`Element with ID ${elementId} not found`);
        }

        container.innerHTML = `<embed src="${url}" type="application/pdf" width="100%" height="100%">`;
    }
}

// Usage example
async function fillAndDownloadPDF() {
    const formFiller = new PDFFormFiller();

    try {
        // Load the PDF template
        await formFiller.loadPDF('Rooftop.pdf');

        // Get form fields (optional, for debugging)
        const fields = formFiller.getFormFields();
        console.log('Available fields:', fields);

        // Prepare data for the form
        const data = {
            'Quotation_No:': 'QT-2025-0512',
            'Client_Name:': 'John Doe',
            'Client_Mo._No:': '9876543210',
            'Date_&_Time:': new Date().toLocaleString(),
            'Rate': '$0.15/kWh',
            'Subsidy': '$2,500',
            'Total': '$12,450',
            'No._of_Panels': '24',
            'Capacity': '8.4 kW',
            'Yearly_Savings': '$1,680',
            'Estimate_ROI': '7.4 years',
            'Saving_Over_25_Years': '$42,000',
            'Yearly_Generation': '11,200 kWh',
            'Daily_Generation': '30.7 kWh',
            'Co2_Saving/Year': '7.8 tons',
            'Equivalet_Trees_': '312 trees',
            'Visualize_Your_Solar_Setup': 'South-facing roof installation'
        };

        // Fill the form
        formFiller.fillForm(data);

        // Download the filled PDF
        await formFiller.downloadPDF('solar-quotation.pdf');

        // Alternatively, display in the page
        // await formFiller.displayPDF('pdf-container');

    } catch (error) {
        console.error('Error processing PDF:', error);
    }
}