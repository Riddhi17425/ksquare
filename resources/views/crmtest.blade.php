@include('header')
<style>
.crm-banner {
  color: white;
}

.timeline {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  position: relative;
  width: 100%;
  margin-top: 40px;
}

.step {
  flex: 1;
  text-align: center;
  position: relative;
}

/* Common connector line */
.step::before {
  content: "";
  position: absolute;
  top: 38px;
  left: 100%;
  transform: translateX(-50%);
  width: 100%;
  border: 1px solid #ddd;
  z-index: 1;
}

/* Remove line after last */
.step:last-child::before {
  display: none;
  content: none;
}

/* Default icon */
.step::after {
  content: "🗋";
  position: absolute;
  top: 25px;
  left: 50%;
  transform: translateX(-50%);
  width: 26px;
  height: 26px;
  border-radius: 50%;
  border: 3px solid #fff;
  background: #fff;
  color: #555;
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
}

/* Completed */
.step.completed::after {
  background: #1ea920;
  color: #fff;
  content: "✓";
}

/* In progress */
.step.in-progress::after {
  background: #3c90db;
  color: #fff;
  content: "⟳";
}

/* Pending */
.step.pending::after {
  background: #5f7f8f;
  color: #fff;
}

/* Completed connector color */
.step.completed::before {
  border-color: #1ea920;
}

/* In progress connector color */
.step.in-progress::before {
  border-color: #DDD;
}

.role {
  font-size: 12px;
  color: #777;
  margin-top: 60px;
  font-weight: 500;
}

.label {
  font-size: 13px;
  font-weight: 600;
  color: #555;
  margin-top: 10px;
}

.status {
  margin-top: 10px;
  padding: 4px 10px;
  border-radius: 15px;
  font-size: 12px;
  display: inline-block;
  font-weight: 500;
}

.completed .status {
  background: #e8f8f0;
  color: #2ecc71;
  border: 1px solid #2ecc71;
}

.in-progress .status {
  background: #eaf3ff;
  color: #3498db;
  border: 1px solid #3498db;
}

.pending .status {
  background: #f8f8f8;
  color: #999;
  border: 1px solid #ccc;
}

.timestamp {
  font-size: 11px;
  color: #888;
  margin-top: 10px;
}

/* Search Box */
.search_main {

  /*margin: 40px auto;*/
  /*margin-top:0px;*/
  gap: 10px;
  display: flex;
  /*flex-wrap: wrap;*/
  align-items: center;
}

#searchInput {
  max-width: 250px;
  padding: 10px 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 14px;
}

#searchBtn {
  padding: 12px 24px;
  /*font-size: 14px;*/
  /*border: none;*/
  /*border-radius: 5px;*/
  /*background: #3498db;*/
  color: #fff;
  /*cursor: pointer;*/
  margin-left: 6px;
  /*transition: background 0.3s;*/
}

#searchBtn:hover {
  color:#263b7f;
}

#searchBtn:disabled {
  background: #95a5a6;
  cursor: not-allowed;
}

.t_bottom_detail {
  margin-top: 60px;
}

.t_bottom_detail b {
  margin-right: 7px;
}

.error-message {
  color: #e74c3c;
  padding: 15px;
  margin-top: 20px;
  background: #fadbd8;
  border-radius: 5px;
  display: none;
  border-left: 4px solid #e74c3c;
}

.success-message {
  color: #27ae60;
  padding: 15px;
  margin-top: 20px;
  background: #d4edda;
  border-radius: 5px;
  display: none;
  border-left: 4px solid #27ae60;
}

.loading {
  text-align: center;
  padding: 20px;
  display: none;
  color: #3498db;
  font-weight: 500;
}

.loading::after {
  content: '';
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 3px solid #3498db;
  border-top-color: transparent;
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
  margin-left: 10px;
  vertical-align: middle;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

@media (min-width: 1900px) 
{
    .crm_container
    {
        margin-top:42px;
    }
}

/* Responsive fix */
@media (max-width: 768px) {
      .timeline {
        gap: 30px;
        overflow-x: scroll;
        margin-top:15px;
    }
    
    

  .step {
    width: 100%;
    margin-bottom: 20px;
  }

  .step::before {
    display: none;
  }

  .step::after {
    position: static;
    margin: 10px auto;
    transform: none;
  }

  .role,
  .label,
  .status,
  .timestamp {
    display: block;
    text-align: center;
  }
  
  .role {
    margin-top: 20px;
  }
  
  .table-container {
    width: 100%;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    /*margin-top: 30px;*/
    scrollbar-color: #ccc #f5f5f5;
    scrollbar-width: thin;
  }

  .table-container::-webkit-scrollbar {
    height: 8px;
  }
  .table-container::-webkit-scrollbar-track {
    background: #f5f5f5;
  }
  .table-container::-webkit-scrollbar-thumb {
    background: #bbb;
    border-radius: 4px;
  }
  .table-container::-webkit-scrollbar-thumb:hover {
    background: #999;
  }

  .responsive-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 900px;
    border: 1px solid #ddd;
    font-size: 14px;
  }

  .responsive-table th,
  .responsive-table td {
    padding: 10px 12px;
    text-align: left;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #eee;
    white-space: nowrap;
  }

  .responsive-table th {
    background-color: #f5f5f5;
    font-weight: bold;
  }

  .responsive-table tr:nth-child(even) {
    background-color: #fafafa;
  }

  .responsive-table td:last-child,
  .responsive-table th:last-child {
    border-right: none;
  }
}
.table-container{
    overflow-x:auto;
}
</style>

            <div class="crm-banner cspt-bg-color-transparent cspt-bg-image-yes">
                <div class="container">
                    <div class="cspt-title-bar-content">
                        <div class="cspt-title-bar-content-inner">
                            <div class="cspt-tbar">
                                <div class="cspt-tbar-inner container">
                                    <!--<h1 class="cspt-tbar-title"> Certificates</h1>-->
                                </div>
                            </div>
                            <div class="cspt-breadcrumb">
                              
                            </div>
                        </div>
                    </div><!-- .cspt-title-bar-content -->
                </div><!-- .container -->
            </div><!-- .cspt-title-bar-wrapper -->
        </header><!-- #masthead -->
<section class="crm_container">
  <div class="container">
    <div class="search_main">
      <input type="text" id="searchInput" placeholder="Enter Consumer Number..." />
      <a id="searchBtn" class="btn btn-primary">Search</a>
    </div>

    <div class="error-message" id="errorMessage"></div>
    <div class="success-message" id="successMessage"></div>
    <div class="loading" id="loading"></div>

    <!-- Table Container: Hidden initially -->
    <div class="table-container" id="tableContainer" style="display:none;">
      <table style="border: 0;" class="mt-5 responsive-table">
        <tbody>
          <tr>
            <td><b>Sr. No</b></td>
            <td><b>Application Number</b></td>
            <td><b>Consumer Number</b></td>
            <td><b>Consumer Name</b></td>
            <td><b>Mobile No.</b></td>
            <td><b>Proposed Capacity (kWp)</b></td>
            <td><b>Government Status</b></td>
            <td><b>Main Status</b></td>
            <td><b>Submitted On</b></td>
            <td><b>File Person</b></td>
            <td><b>File Person Contact</b></td>
            
          </tr>
          <tr>
            <td>1</td>
            <td id="appNumber"></td>
            <td id="consumerNumber"></td>
            <td id="consumerName"></td>
            <td id="mobileNo"></td>
            <td id="proposedCapacity"></td>
            <td id="status"></td>
            <td id="mainstatus"></td>
            <td id="submittedOn"></td>
            <td id="filePerson"></td>
            <td id="filePersonContact"></td>
           
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Timeline: Hidden initially -->
    <div class="timeline" id="timeline" style="display:none;">
      <!-- Steps will be generated dynamically -->
    </div>
    

    <div class="t_bottom_detail">
      <div class="row">
        <div class="col-md-3 mb-4 mb-md-0">
          <p style="text-align: start;">For More Information Please Download the brochure</p>
          <a href="{{ asset('public/images/crmtest.pdf')}}" target="_blank" class="btn btn-primary new_car_btn">Download</a> 
         
        </div>
        <div class="col-md-3 mb-2 mb-md-0">
           <div  id="downloadbtn" style="display:none;">
                <p style="text-align: start;">You can Download the Inovice From Below</p>
              <a href="" class="btn btn-primary" id="downinvlink" download>Download Invoice</a>
            </div>
        </div>
        <div class="col-md-2" id="showduediv" style="display:none">
            <lable>Customer Due</lable> : <p id="x_studio_consumer_r_due"></p>
            </div>
        <div class="col-md-4">
          <ul>
            <p>If You Have Any Query Please Contact Us On Given Number or Mail Id :</p>
            <li><b>Mail Id : </b><a href="mailto:support@ksquareenergy.com" target="_blank">support@ksquareenergy.com</a></li>
            <li class="mt-3 mt-md-0">
                <b  class="d-block d-md-inline">Escalation/Complaint :</b>
              
                    <a href="tel:916358174249" target="_blank">+91 6358 174 249</a> <b>,</b>
                   <a href="tel:919725260778" target="_blank"  class="d-block d-md-inline">+91 9725 260 778</a>
               
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const searchBtn = document.getElementById('searchBtn');
  const searchInput = document.getElementById('searchInput');
  const timelineContainer = document.getElementById('timeline');
  const errorMessage = document.getElementById('errorMessage');
  const loading = document.getElementById('loading');
  const tableContainer = document.getElementById('tableContainer');

  // Fixed list jahan hum apna naam force karna chahte hain
  const FIXED_STAGES = {
    333: "Registration",
    151: "Feasibility",
    316: "Vendor Selection",
    317: "Upload Agreement",
    319: "Installation",
    324: "Inspection",
    320: "Project Commissioning",
    163: "Subsidy Request",
    322: "Subsidy Disbursal",
    458: "Hold",
    390: "Cancelled Projects",
    325: "Deleted Files"
  };

  // Sirf in stages ke liye timeline dikhegi
  const TIMELINE_STAGES = [
    "Registration", "Feasibility", "Vendor Selection", "Upload Agreement",
    "Installation", "Inspection", "Project Commissioning", "Subsidy Request", "Subsidy Disbursal"
  ];

  const stepsTemplate = [
    { role: 'Consumer', label: 'Registration' },
    { role: 'Discom',    label: 'Feasibility' },
    { role: 'Consumer', label: 'Vendor Selection' },
    { role: 'Vendor',   label: 'Upload Agreement' },
    { role: 'Vendor',   label: 'Installation' },
    { role: 'Discom',   label: 'Inspection' },
    { role: 'Discom',   label: 'Project Commissioning' },
    { role: 'Consumer', label: 'Subsidy Request' },
    { role: 'REC',      label: 'Subsidy Disbursal' }
  ];

  searchBtn.addEventListener('click', async function() {
    const consumerNo = searchInput.value.trim();
    if (!consumerNo) {
      showError('Please enter a consumer number');
      return;
    }

    hideAll();
    loading.style.display = 'block';
    searchBtn.disabled = true;

    try {
      const response = await fetch('{{ url("/crmtestsubmit") }}', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
          '_token': '{{ csrf_token() }}',
          'consumer_no': consumerNo
        })
      });

      const text = await response.text();
      const jsonMatch = text.match(/(\{[\s\S]*\})/);
      if (!jsonMatch) throw new Error('Invalid response');
      const data = JSON.parse(jsonMatch[1]);

      if (data.error || !data.result || data.result.length === 0) {
        showError(data.error?.data?.message || 'No record found');
        return;
      }

      const record = data.result[0];
      const stageIdArray = Array.isArray(record.stage_id) ? record.stage_id : [];
      const stageId = stageIdArray[0];
      const apiStageName = stageIdArray[1] || 'Unknown';

      let displayStatusText = '';
      let currentTimelineLabel = null;

      if (stageId && FIXED_STAGES.hasOwnProperty(stageId)) {
        // Hamari list mein hai → fixed name use karo
        displayStatusText = ` ${FIXED_STAGES[stageId]}`;
        if (TIMELINE_STAGES.includes(FIXED_STAGES[stageId])) {
          currentTimelineLabel = FIXED_STAGES[stageId]; // For timeline
        }
      } else {
        // List mein nahi hai → API ka original naam dikhao
        displayStatusText = stageId ? `${apiStageName}` : apiStageName;
        // Timeline nahi dikhegi
      }

      // Fill Table
      document.getElementById('appNumber').innerText         = record.x_studio_application_number || 'N/A';
      document.getElementById('consumerNumber').innerText    = record.x_studio_consumer_no_mis_1 || consumerNo;
      document.getElementById('consumerName').innerText      = record.x_studio_consumer_name_mis || 'N/A';
      document.getElementById('mobileNo').innerText          = record.x_studio_consumer_mo_no_mis || 'N/A';
      document.getElementById('proposedCapacity').innerText  = record.x_studio_pv_capacity_kw || 'N/A';
      document.getElementById('status').innerText            = record.x_studio_20_mis_stage || 'N/A';
      document.getElementById('mainstatus').innerText        = displayStatusText;
      document.getElementById('submittedOn').innerText       = record.x_studio_entry_date || 'N/A';
        if(record.x_studio_consumer_r_due != ''){
          $('#showduediv').css('display','');
          document.getElementById('x_studio_consumer_r_due').innerText       = record.x_studio_consumer_r_due || 'N/A';      
        }
      
    //   document.getElementById('invoicedownload').innerText       = record.x_studio_invoice_pdf_1 || 'N/A';

if(record.x_studio_invoice_pdf_url){
    $('#downinvlink').attr('href',record.x_studio_invoice_pdf_url);
    $('#downloadbtn').css('display','');
}else{
    $('#downloadbtn').css('display','none');
}
      const filePerson = Array.isArray(record.x_studio_file_person_1)
        ? record.x_studio_file_person_1[1]
        : (record.x_studio_file_person_1 || 'N/A');
      document.getElementById('filePerson').innerText         = filePerson;
      document.getElementById('filePersonContact').innerText = record.x_studio_file_person_contact_no || 'N/A';

      // Timeline show/hide
      if (currentTimelineLabel) {
        renderTimeline(currentTimelineLabel);
        timelineContainer.style.display = 'flex';
      } else {
        timelineContainer.style.display = 'none';
      }

      tableContainer.style.display = 'block';

    } catch (err) {
      console.error(err);
      showError('Failed to load data. Please try again.');
    } finally {
      loading.style.display = 'none';
      searchBtn.disabled = false;
    }
  });

  function renderTimeline(currentLabel) {
    timelineContainer.innerHTML = '';
    let reached = false;

    stepsTemplate.forEach(step => {
      let cls = 'pending';
      let txt = 'Pending';

      if (step.label === currentLabel) {
        cls = 'in-progress';
        txt = 'In Progress';
        reached = true;
      } else if (!reached) {
        cls = 'completed';
        txt = 'Completed';
      }

      timelineContainer.innerHTML += `
        <div class="step ${cls}">
          <div class="role">${step.role}</div>
          <div class="label">${step.label}</div>
          <div class="status">${txt}</div>
        </div>`;
    });
  }

  function showError(msg) {
    errorMessage.textContent = msg;
    errorMessage.style.display = 'block';
    tableContainer.style.display = 'none';
    timelineContainer.style.display = 'none';
  }

  function hideAll() {
    errorMessage.style.display = 'none';
    tableContainer.style.display = 'none';
    timelineContainer.style.display = 'none';
  }

  searchInput.addEventListener('keypress', e => e.key === 'Enter' && searchBtn.click());
</script>

@include('footer')