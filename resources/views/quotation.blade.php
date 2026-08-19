<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System Quotation</title>
    <style>
        @page {
            margin: 30px 25px;
        }
        h1{color: #0b0e6f;}
        h1 span{font-weight:400;}
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            color: #333;
            line-height: 1.5;
            font-size: 12px;
        }
        p{margin-bottom:0px;}
        .header {
            padding: 0;
            text-align: center;
            border-bottom: 2px solid #111c46;
        }
        .header img {
            max-width: 180px;
        }
        .info-section {
            margin-bottom: 5px;
        }
        .info-section h3 {
            background-color:#111c46;
            color: white;
            padding: 5px 10px;
            margin-bottom: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding:0;
        }
        th {
            background-color: #f2f2f2;
            padding: 8px;
            text-align: left;
            font-weight: bold;
        }
        td {
            padding: 8px;
        }
        .customer-details {
            float: left;
            width: 50%;
        }
        .quotation-details {
            float: right;
            width: 50%;
            text-align: right;
        }
        .clear {
            clear: both;
        }
        .highlight {
            background-color: #e7f1e5;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #111c46;
            padding-top: 10px;
        }
        .box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
        }
        .two-column {
            width: 48%;
            display: inline-block;
            vertical-align: top;
        }
        .left {
            margin-right: 2%;
        }
        .summary {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .green-text {
            color: #5aa748;
        }
        .centered {
            text-align: center;
        }
        .roi-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        .roi-table td {
            width: 25%;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            padding: 10px;
            text-align: center;
            font-size: 11px;
            vertical-align: middle;
        }
        .roi-table img {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }
        .material_thead th {
              background-color: #c4c4c5;
            }
        .section-header {
          background-color: #ddd;
          font-weight: bold;
        }
        .material h2{color:#00004f; font-size: 30px; text-align: center;}
        .solar_box h2{color:#00004f; font-size: 25px;    line-height: normal;}
        .highlight-box {
          background-color: #586acd;
          color: #fff;
          font-size: 18px; 
          display: inline-block;
          padding: 8px;
          line-height: 25px;
          font-weight: bold;
        }
        .solar_box{
        display: -webkit-box;
          display: flex;
          display: -webkit-flex;
          webkit-justify-content: space-between;
justify-content: space-between;
          margin-bottom: 50px;
          gap: 30px;
        }
        #WARRANTY{
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="info-section">
         <table border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;border: none;">
             <tr style="border:none;" colspan="3">
                  <img src="https://www.ksquareenergy.com/quotation_pdf/header.jpg" alt="Solar Panels and Pipes" style="width: 100%; height:250px">
             </tr>
  <tr style="border:none;">
    <td style="padding: 0;border:none;">
      <div style="position: relative; width: 100%;">
        <!-- Image -->
        <img src="https://www.ksquareenergy.com/quotation_pdf/cover.jpg" alt="Cover" style="width: 100%; display: block;">
 
        <!-- Overlay Content -->
        <div style="position: absolute; top: 20px; left: 20px; ">
          <table border="0" cellspacing="0" cellpadding="0" style="font-size: 14px; border-collapse: collapse; border: none;">
        <tr style="border-bottom:2px solid #fff;">
        <td style="padding: 2px 5px; border: none; font-weight: bold; vertical-align: top;">Quotation No.:</td>
        <td style="padding: 2px 5px; border: none; background-color: #f1f4ff; vertical-align: top;">{{ $data['quotation_no'] }}</td>
    </tr>
    <tr style="border-bottom:2px solid #fff;">
        <td style="padding: 2px 5px; border: none; font-weight: bold; vertical-align: top;">Client Name:</td>
        <td style="padding: 2px 5px; border: none; background-color: #f1f4ff; vertical-align: top;">{{ $data['name'] }}</td>
    </tr>
    <tr style="border-bottom:2px solid #fff;">
        <td style="padding: 2px 5px; border: none; font-weight: bold; vertical-align: top;">Client Mo. No.:</td>
        <td style="padding: 2px 5px; border: none; background-color: #f1f4ff; vertical-align: top;">{{ $data['phone'] }}</td>
    </tr>
    <tr>
        <td style="padding: 2px 5px; border: none; font-weight: bold; vertical-align: top;">Date & Time:</td>
        <td style="padding: 2px 5px; border: none; background-color: #f1f4ff; vertical-align: top;">{{ $data['formatted_date'] }}</td>
    </tr>
</table>
 
        </div>
        <div style="">
          <table border="0" cellspacing="0" cellpadding="0" style="font-family: Arial, sans-serif; font-size: 14px; color: #000;border-collapse: collapse; border: none;">
  <tr style="border:none;">
    <td style="border:none;">
        <img src="https://www.ksquareenergy.com/quotation_pdf/front_foot.jpg" alt="Cover" style="width: 100%; display: block;">
    </td>
  </tr>
</table>
 
        </div>
      </div>
    </td>
  </tr>
</table>
    </div>
    <div class="info-section">
       <table width="100%" cellpadding="0" cellspacing="0" style="border-color:transparent;">
  <!-- Part 1: About Us -->
  <tr style="border: none;">
    <td colspan="2" style="border: none;">
      <h1 style="color: #1a1a8f;">About <span style="color: #000;">Us</span></h1>
      <p>
        Ksquare Energy Pvt. Ltd., based in Gujarat, is a leading solar energy solutions provider specializing 
        in manufacturing solar array junction boxes, PV system materials, and offering comprehensive 
        EPC services for utility scale and distributed solar projects. Our dedicated team ensures 
        seamless project completion from design to commissioning. We also produce ACDB and DCDB 
        Boxes and Earthing Kits for various solar applications. With over six years of experience, we've 
        served esteemed clients like GEDA, MNRE, and Swaminarayan Gurukul, in addition to over 4000 
        residential and commercial projects. Our commitment to excellence, extensive experience, and 
        broad customer base establish us as a trusted leader in the solar industry.
      </p>
    </td>
  </tr>

  <!-- Part 2: Corporate Film & Brochure -->
  <tr style="border: none;vertical-align: top;">
    <td width="50%" align="center" style="border: none;">
      <h1 style="color: #1a1a8f;">Ksquare <span style="color: #000;">Corporate Film</span></h1>
      <img src="https://www.ksquareenergy.com/quotation_pdf/27.png" alt="Corporate Film" width="300" height="150">
    </td>
    <td width="50%" align="center" style="border: none;">
      <h1 style="color: #1a1a8f;">Ksquare <span style="color: #000;">Brochure</span></h1>
      <img src="https://www.ksquareenergy.com/quotation_pdf/28.png" alt="Brochure" width="300" height="150">
    </td>
  </tr>

  <!-- Part 3: Journey + Awards Image -->
  <tr style="border: none;">
    <td colspan="2" align="center" style="border: none;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/journey.jpg" alt="Ksquare Journey and Awards" style="width: 100%; height: 500px;">
    </td>
  </tr>
</table>

    </div>
    <div class="info-section">
        <table style="border: none;">
            <tr>
        <td colspan="3" style="border: none;">
            <h1>Our Works!!!</h1>
        </td>
    </tr>
    <tr>
        <td style="border: none; vertical-align: top; width: 33.33%;">
            <img src="https://www.ksquareenergy.com/quotation_pdf/work_1.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
        </td>
        <td style="border: none; vertical-align: top; width: 33.33%;">
            <img src="https://www.ksquareenergy.com/quotation_pdf/work_2.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
        </td>
        <td style="border: none; vertical-align: top; width: 33.33%;">
            <img src="https://www.ksquareenergy.com/quotation_pdf/work_3.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
        </td>
    </tr>
     <tr>
        <td colspan="3" style="border: none;">
            <h1>Why Choose Us!!!</h1>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="border: none;">
            <img src="https://www.ksquareenergy.com/quotation_pdf/work_4.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
        </td>
    </tr>
    <tr>
        <td colspan="3" style="border: none;">
            <img src="https://www.ksquareenergy.com/quotation_pdf/work_5.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
        </td>
    </tr>
    <tr>
        <td colspan="3" style="border: none;">
            <h1> Satisfied Clients!!!</h1>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="border: none;">
            <img src="https://www.ksquareenergy.com/quotation_pdf/work_6.png" alt="Solar Panels and Pipes" style="max-width: 100%; height: 250px;">
        </td>
    </tr>
        </table>
    </div>
    <div class="header">
        <table style="border:none;">
            <tr style="border:none;">
                <td style="border:none;text-align:right;margin:0;padding:0;">
                    <img src="https://www.ksquareenergy.com/public/images/logo1.png" alt="ksquareenergy">
                </td>
            </tr>
            <tr style="border:none;">
                <td style="border:none;margin:0;padding:0;">
                    <h1 style="text-align:center;">QUOTATION</h1>
                </td>
            </tr>
        </table>
        
    </div>
    
    <div class="info-section">
        <div class="customer-details">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        </div>
        <div class="quotation-details">
            <p><strong>Quotation No:</strong> {{ $data['quotation_no'] }}</p>
            <p><strong>Date:</strong> {{ $data['formatted_date'] }}</p>
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="info-section">
        <h3>SYSTEM SPECIFICATIONS</h3>
        <table>
            <tr>
                <th>System Capacity</th>
                <td>{{ number_format($data['capacity'], 2) }} kW</td>
                <th>No. of Solar Panels</th>
                <td>{{ $data['panels'] }}</td>
            </tr>
            <tr>
                <th>Average Daily Generation</th>
                <td>{{ number_format($data['daily_generation'], 2) }} kWh/day</td>
                <th>Annual Generation</th>
                <td>{{ number_format($data['yearly_generation']) }} kWh</td>
            </tr>
            <tr>
                <th>Required Roof Area</th>
                <td colspan="3">Approximately {{ $data['panels'] * 28 }} sq. ft.</td>
            </tr>
        </table>
    </div>
    <div class="info-section">
        <h3>ROI & OTHERS</h3>
        <table class="roi-table">
            <tr>
                <td>
                    <img src="https://img.icons8.com/fluency/48/solar-panel.png" alt="System Capacity Icon"><br>
                    System Capacity<br>{{ number_format($data['capacity'], 2) }} kW
                </td>
                <td>
                    <img src="https://img.icons8.com/color/48/grid.png" alt="Panels Icon"><br>
                    No. of Panels<br>{{ $data['panels'] }}
                </td>
                <td>
                    <img src="https://img.icons8.com/color/48/money--v1.png" alt="Project Cost Icon"><br>
                    Project Cost<br>₹ {{ number_format($data['project_cost']) }}
                </td>
                <td>
                    <img src="https://img.icons8.com/color/48/receive-cash.png" alt="Subsidy Icon"><br>
                    Subsidy<br>₹ {{ number_format($data['subsidy']) }}
                </td>
                <td>
                    <img src="https://img.icons8.com/color/48/price-tag.png" alt="Landed Cost Icon"><br>
                    Landed Cost<br>₹ {{ number_format($data['landed_cost']) }}
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://img.icons8.com/fluency/48/light.png" alt="Daily Generation Icon"><br>
                    Daily Generation<br>{{ number_format($data['daily_generation'], 2) }} kWh
                </td>
                <td>
                    <img src="https://img.icons8.com/color/48/sun.png" alt="Yearly Generation Icon"><br>
                    Yearly Generation<br>{{ number_format($data['yearly_generation']) }} kWh
                </td>
                <td>
                    <img src="https://img.icons8.com/fluency/48/money-bag.png" alt="Yearly Savings Icon"><br>
                    Yearly Savings<br>₹ {{ number_format($data['yearly_savings']) }}
                </td>
                <td>
                    <img src="https://img.icons8.com/color/48/graph.png" alt="ROI Icon"><br>
                    Estimated ROI<br>{{ number_format($data['roi'], 1) }} years
                </td>
                <td>
                    <img src="https://img.icons8.com/fluency/48/safe--v1.png" alt="Savings 25 Years Icon"><br>
                    Saving Over 25 Years<br>₹ {{ number_format($data['savings_25yrs']) }}
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://img.icons8.com/color/48/deciduous-tree.png" alt="Trees Icon"><br>
                    Equivalent Trees<br>{{ number_format($data['tree_equivalent']) }}
                </td>
                <td>
                    <img src="https://img.icons8.com/ios/50/stopwatch.png" alt="Lifespan Icon"><br>
                    System Lifespan<br>25 Years
                </td>
                <td>
                    <img src="https://img.icons8.com/ios/50/co2.png" alt="CO2 Savings Icon"><br>
                    CO2 Savings/Year<br>{{ number_format($data['co2_saving']) }} kg
                </td>
            </tr>
        </table>
    </div>
    
    <div class="info-section">
        <h3>FINANCIAL DETAILS</h3>
        <table>
            <tr>
                <th>Total Project Cost</th>
                <td>₹ {{ number_format($data['project_cost']) }}</td>
            </tr>
            <tr>
                <th>Government Subsidy</th>
                <td>₹ {{ number_format($data['subsidy']) }}</td>
            </tr>
            <tr>
                <th>Net Project Cost</th>
                <td>₹ {{ number_format($data['landed_cost']) }}</td>
            </tr>
            <tr>
                <th>Annual Electricity Bill Savings</th>
                <td>₹ {{ number_format($data['yearly_savings']) }}</td>
            </tr>
            <tr>
                <th>Payback Period</th>
                <td>{{ number_format($data['roi'], 1) }} years</td>
            </tr>
            <tr>
                <th>Total 25-year Savings</th>
                <td>₹ {{ number_format($data['savings_25yrs']) }}</td>
            </tr>
        </table>
    </div>
    
    <div class="info-section">
        <h3>ENVIRONMENTAL IMPACT</h3>
        <div class="box">
            <div class="two-column left">
                <p><strong>Annual CO₂ Reduction:</strong><br>{{ number_format($data['co2_saving']) }} kg</p>
            </div>
            <div class="two-column">
                <p><strong>Equivalent Trees Planted:</strong><br>{{ number_format($data['tree_equivalent']) }} trees</p>
            </div>
        </div>
    </div>
    
    <div class="material">
        <h2 style="margin-bottom:50px;">Bill of Material</h2>
    <table>
        <thead class="material_thead">
          <tr>
            <th>Sr. No</th>
            <th>Item</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Brand</th>
          </tr>
    </thead>
        <tbody class="material_tbody">
          <tr>
            <td>1.</td>
            <td>Solar Panels (PV Modules)</td>
            <td>1.</td>
            <td>Set</td>
            <td>as specified in Quote</td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Solar Ongrid Inverter</td>
            <td>1.</td>
            <td>Nos</td>
            <td>Ksquare Inverter</td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Solar Hot-dip GI Structure*<br>
              60 x 40 mm x 2 mm For Leg , Rafters<br>
              40 x 40 mm x 2 mm or C Channel (Which Will Selected) For purlins
            </td>
            <td>1.</td>
            <td>Set</td>
            <td>Any Reputed Make</td>
          </tr>
          <tr class="section-header">
            <td>4.</td>
            <td colspan="4">Protection Devices</td>
          </tr>
          <tr>
            <td>4.1</td>
            <td>ACDB (IP65) – With SPD, Fuse & MCB<br>DCDB (IP65) – With SPD, Fuse & MCB</td>
            <td>1.</td>
            <td>Nos</td>
            <td>Ksquare</td>
          </tr>
          <tr class="section-header">
            <td>5.</td>
            <td colspan="4">Cables</td>
          </tr>
          <tr>
            <td>5.1</td>
            <td>2.5/4 SQ MM DC Solar Copper Cable, XLS–R, UV RESISTANT, 1100V Grade, Double Insulated</td>
            <td>1.</td>
            <td>As per Required</td>
            <td>Polycab</td>
          </tr>
          <tr>
            <td>5.2</td>
            <td>4 SQ MM or 6 SQ MM AC Wire 2 Core , XLS– R</td>
            <td>1.</td>
            <td>As per Required</td>
            <td>Solsquare</td>
          </tr>
          <tr>
            <td>5.3</td>
            <td>4 SQ MM Copper Earthing wire for AC & DC</td>
            <td>1.</td>
            <td>As per Required</td>
            <td>Solsquare</td>
          </tr>
          <tr>
            <td>5.4</td>
            <td>16 SQ MM Aluminium Wire for LA</td>
            <td>1.</td>
            <td>As per Required</td>
            <td>SolSquare</td>
          </tr>
          <tr>
            <td>5.5</td>
            <td>UPVC Conduit Pipe for Wiring</td>
            <td>1.</td>
            <td>As per Required</td>
            <td>Solplast</td>
          </tr>
          <tr class="section-header">
            <td>6.</td>
            <td colspan="4">Earthing / LA - lightning arrestor</td>
          </tr>
          <tr>
            <td>6.1</td>
            <td>Copper Coated 1 Meter Earthing Rod for AC / DC & LA</td>
            <td>1.</td>
            <td>Set</td>
            <td>Standard</td>
          </tr>
          <tr>
            <td>6.2</td>
            <td>1 Meter LA with 3 Spike & Insulator</td>
            <td>1.</td>
            <td>Set</td>
            <td>Standard</td>
          </tr>
          <tr class="section-header">
            <td>7.</td>
            <td colspan="4">Data Logger</td>
          </tr>
          <tr>
            <td>7.1</td>
            <td>Wifi Stick : Data Loger for Online Monitoring</td>
            <td>1.</td>
            <td>Nos</td>
            <td>As per inverter</td>
          </tr>
          <tr class="section-header">
            <td>8.</td>
            <td colspan="4">Other Accessories</td>
          </tr>
          <tr>
            <td>8.1</td>
            <td>Cable tie, 300mm (100Pcs/Pkt)</td>
            <td>1.</td>
            <td>Set</td>
            <td>Solplast</td>
          </tr>
          <tr>
            <td>8.2</td>
            <td>Ferules & Cable Tags</td>
            <td>1.</td>
            <td>Set</td>
            <td>Standard</td>
          </tr>
          <tr>
            <td>8.3</td>
            <td>Lugs Ring Type As per wiring requirements</td>
            <td>1.</td>
            <td>Set</td>
            <td>Copper</td>
          </tr>
    </tbody>
    </table>
    </div>
    
     <div class="solar_box">
         <h2>What we Offer!!!</h2>
  </div>

  <table style="border:none; width: 100%; border-collapse: collapse; margin-bottom: 50px;">
  <tr>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
        Solar Panels and Mounting Structures
      </div>
      <p>"Our solar panels use advanced tech for durability and high power output, even in harsh environments."</p>
      <p>Mounting structures<strong> HDAC box pipe size 60x40mm or 40x40 mm</strong></p>
    </td>
    <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/11.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
  </tr>
  <tr>
      <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/offer_2.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
         Solar Distribution Boxes (AC & DC)
      </div>
      <p>“Equipped parts ensure continuous electricity flow, 
        with advanced circuitry ensuring safety for both AC and 
        DC systems.”
        </p>
    </td>
  </tr>
  <tr>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
         Inverters
      </div>
      <p>Our inverters: Solar system's core, with advanced 
algorithms for efficient DC to AC conversion.
        </p>
    </td>
    <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/offer_3.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
  </tr>
  <tr>
      <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/offer_4.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
         Cables
      </div>
      <p>Even in harsh settings, our cables' minimal energy 
        loss and great durability ensure that power is transmitted 
        with minuscule loss.
        </p>
    </td>
  </tr>
  <tr>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
        Single Spike Earthing Kit
      </div>
      <p>“Reliable grounding solution for solar projects, ensuring safety 
and stability in electrical systems."
        </p>
    </td>
    <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/offer_5.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
  </tr>
  <tr>
      <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/offer_6.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
         Solar PVC Solutions
      </div>
      <p> SolPlast is your go-to partner for PVC organization. 
From weather-proof ties to sturdy conduits, we have tools 
for efficient solutions, eliminating cable chaos.
        </p>
    </td>
    
  </tr>
  <tr>
    <td style="border:none; vertical-align: top; padding-right: 20px; width: 50%;">
      <div style="border:none; background-color: #4d6ddf; color: #fff; display: inline-block; padding: 8px 16px; font-weight: bold; border-radius: 4px; margin-bottom: 10px;">
         Other BOS
      </div>
      <p> Ksquare prioritizes quality BOS material for solar 
success, sourcing premium cables and components, 
optimizing design for maximum efficiency and 
performance.

        </p>
    </td>
    <td style="border:none; vertical-align: top; width: 50%;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/offer_7.png" alt="Solar Panels and Pipes" style="max-width: 100%;">
    </td>
  </tr>
</table>

<div class="info-section">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: none;padding-top:10px;">
    <tr>
      <td colspan="2" align="center" style="font-size: 20px; font-weight: bold; color: #2E3A87; border: none;">
          <h2>WARRANTY TERMS</h2>
      </td>
    </tr>
    <!-- General Terms -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">General Terms:</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>Material dispatch and installation shall be started upon DISCOM approval only.</li>
          <li>For better performance, solar panels should be cleaned by customer two times in a week.</li>
          <li>Concealed wiring shall be done by company, if possible only. Otherwise, customer should do concealed wiring with their wiremen where material shall be provided by Company.</li>
          <li>After successful installation, customer shall take care of solar plant by doing timely cleaning. If we found less generation at the time of attending complaint due to non-cleaning, we may charge you additional service charge.</li>
          <li>There is manufacturing warranty for all electronics equipment. Company will help to claim this warranty if required.</li>
        </ul>
      </td>
    </tr>

    <!-- Government Subsidy -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">Government Subsidy:</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li><strong>Delay Disclaimer:</strong> Subsidy amounts may experience delays from the government's side. We are not liable for any delays or non-receipt if not provided by the government.</li>
          <li><strong>Subsidy Credit:</strong> If applicable, subsidy will be directly credited to the customer's account. Company will handle documentation.</li>
        </ul>
      </td>
    </tr>

    <!-- Panel Warranty -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">1. Solar Panel (PV Modules) Performance Warranty</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>90% of rated capacity for the first 10 years.</li>
          <li>80% of rated capacity for the next 15 years.</li>
          <li>Total Panel Life: 25 years.</li>
          <li>Refer Solar Panel Datasheet for detailed warranty terms.</li>
        </ul>
      </td>
    </tr>

    <!-- Inverter Warranty -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">2. Inverter Manufacturing Defect Warranty</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>7 years, extendable.</li>
          <li>Refer Inverter Datasheet for detailed warranty terms.</li>
        </ul>
      </td>
    </tr>

    <!-- BOS -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">3. Balance of System (BOS)</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>Equipment/products supplied by us are warranted against defects due to poor material, design, or workmanship.</li>
          <li>This warranty is valid for 12 months from the date of commissioning or when put into service, whichever is earlier.</li>
        </ul>
      </td>
    </tr>

    <!-- Operation & Maintenance -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">4. Operation & Maintenance</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>We offer 5 years of O&M support, including fault finding, remote monitoring, site visits, and warranty claims.</li>
          <li>O&M does not include solar panel cleaning and washing.</li>
        </ul>
      </td>
    </tr>

    <!-- Warranty Notes -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">Warranty Notes:</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>All warranties are in favour of the buyer and cover the equipment for the specified period.</li>
          <li>Warranties ensure safe working of components and vary in validity period.</li>
          <li>Warranties do not cover damages caused by external hazardous conditions.</li>
        </ul>
      </td>
    </tr>

    <!-- Schedule for Completion -->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">Schedule for Site Completion:</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>Dispatch within 6 weeks after order confirmation with payment.</li>
          <li>Entire plant will be installed and commissioned within 60–70 days (approx.) after project accreditation, agreement, and site possession.</li>
        </ul>
      </td>
    </tr>
    <!--Payment Terms:-->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">Payment Terms:</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>10% advance payment upon contract signing</li>
          <li>90% Before Dispatch.</li>
        </ul>
      </td>
    </tr>
    <!--Warranty Exclusions:-->
    <!--Payment Terms:-->
    <tr>
      <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">Warranty Exclusions:</td>
    </tr>
    <tr>
      <td colspan="2" style="border: none;">
        <ul>
          <li>The warranty will not cover failures due to:</li>
          <li>Damage or defect caused by misuse, lack of maintenance, improper usage, or negligence by the
                owner</li>
                <li>Wilful damage, normal wear and tear, abuse, or misuse of equipment/product.</li>
    <li>Damage or defect caused by Force Majeure events, including fire, earthquake, flood, or other natural disasters.</li>
    <li>Damage or defect caused by unauthorized alterations, modifications, or conversions.</li>
    <li>Repairs carried out by personnel not authorized by the contractor.</li>
    <li>Defects or damages due to external causes.</li>
    <li>Parts and components repaired or replaced during the warranty period are warranted only for the original warranty period. The contractor will take back replaced or defective material.</li>
        </ul>
      </tr>
       <!--Scope of Work For Customer:-->
       <tr>
            <td colspan="2" style="color: #2E3A87; font-weight: bold; border: none;">Warranty Exclusions:</td>
       </tr>
       <tr>
      <td colspan="2" style="border: none;">
        <ul>
            <li>Providing access/approach to rooftop.</li>
            <li>If any electrical modification is required from DISCOM (i.e. ELCB, changeover switch etc.) Customer shall provide necessary support.</li>
            <li>Provide necessary documents for project approvals from State/Central Government.</li>
            <li>Site clearance, ladders, water, and electricity supply for smooth installation and commissioning of the project.</li>
            <li>Customer shall provide Safe Place for Material unloading and storage during the work execution</li>
        </ul>
      </tr>
      <!--contact-->
      <tr>
            <td colspan="2" style="border:none; vertical-align: top;">
      <img src="https://www.ksquareenergy.com/quotation_pdf/contact.jpg" alt="contact" style="max-width: 100%;">
    </td>
       </tr>
  </table>
</div>


    
    <!--<div class="footer">-->
    <!--    <p>K-Square Energy Private Limited</p>-->
    <!--    <p>Contact: +91 9999999999 | info@ksquareenergy.com | www.ksquareenergy.com</p>-->
    <!--    <p>This quotation is based on the information provided and is subject to site inspection.</p>-->
    <!--</div>-->
</body>
</html>