@include('header')
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
        <div class="site-content-contain">
        
            <!-- #content -->
        <section class="custom-certificates-tabs">
            <div class="container">
                <div class="custom-tab-wrapper">
                   <form action="{{ url('/crmapisubmit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="consumer_no" class="form-label">Consumer Number</label>
                            <input type="text" name="consumer_no" id="consumer_no" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                @if(isset($result))
                @if(isset($result['error']))
                    <div class="alert alert-danger">{{ $result['error'] }}</div>
                @elseif(!empty($result['result'][0]))
                    @php $data = $result['result'][0]; @endphp
                    <h3>Search Result</h3>
                    <table class="table table-bordered">
                        <tr><th>Consumer Name</th><td>{{ $data['x_studio_consumer_name_mis'] ?? 'N/A' }}</td></tr>
                        <tr><th>Mobile No</th><td>{{ $data['x_studio_consumer_mo_no_mis'] ?? 'N/A' }}</td></tr>
                        <tr><th>PV Capacity (KW)</th><td>{{ $data['x_studio_pv_capacity_kw'] ?? 'N/A' }}</td></tr>
                        <tr><th>Stage</th><td>{{ $data['x_studio_20_mis_stage'] ?? 'N/A' }}</td></tr>
                        <tr><th>Entry Date</th><td>{{ $data['x_studio_entry_date'] ?? 'N/A' }}</td></tr>
                        <tr><th>Application No</th><td>{{ $data['x_studio_application_number'] ?? 'N/A' }}</td></tr>
                        <tr>
                            <th>Invoice</th>
                            <td>
                                @if(!empty($data['x_studio_invoice_pdf_url']))
                                    <a href="{{ $data['x_studio_invoice_pdf_url'] }}" target="_blank">Download</a>
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                        <tr><th>Task ID</th><td>{{ $data['id'] ?? 'N/A' }}</td></tr>
                    </table>
                @else
                    <div class="alert alert-warning">No record found for this consumer number.</div>
                @endif
            @endif
            </div>
        </section>
       
@include('footer')