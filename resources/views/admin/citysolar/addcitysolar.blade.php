@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add City Solar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">City Solar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
        <div class="container-fluid">   
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Add City Solar</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('insertcitysolar') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>City Name</label>
                                <input type="text" class="form-control" name="city_name"  placeholder="Enter City Name">
                                @if ($errors->has('city_name'))
                                    <span class="text-danger">{{ $errors->first('city_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>State Name</label>
                                <input type="text" class="form-control" name="state_name"  placeholder="Enter State Name">
                                @if ($errors->has('state_name'))
                                    <span class="text-danger">{{ $errors->first('state_name') }}</span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>URL</label>
                                <input type="text" class="form-control" name="url"  placeholder="Enter URL">
                                @if ($errors->has('url'))
                                    <span class="text-danger">{{ $errors->first('url') }}</span>
                                @endif
                            </div>
                        </div>
                     
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" placeholder="Enter meta title">
                                @if ($errors->has('meta_title'))
                                    <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Meta Description</label>
                                <input type="text" class="form-control" name="meta_description" placeholder="Enter meta description">
                                @if ($errors->has('meta_description'))
                                    <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                @endif
                            </div>
                           
                            <!--<div class="col-md-6 form-group">-->
                            <!--    <label>Og title</label>-->
                            <!--    <input type="text" class="form-control" name="og_title" placeholder="Enter Og title">-->
                            <!--    @if ($errors->has('og_title'))-->
                            <!--        <span class="text-danger">{{ $errors->first('og_title') }}</span>-->
                            <!--    @endif-->
                            <!--</div>-->
                            <!--<div class="col-md-6 form-group">-->
                            <!--    <label>Og description</label>-->
                            <!--    <input type="text" class="form-control" name="og_description"  placeholder="Enter Og description">-->
                            <!--    @if ($errors->has('og_description'))-->
                            <!--        <span class="text-danger">{{ $errors->first('og_description') }}</span>-->
                            <!--    @endif-->
                            <!--</div>-->
                        </div>
                        
                      

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button class="form-control btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>

<!-- Include Summernote CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote-header').summernote({
            height: 200
        });

        $('#summernote-whychoose').summernote({
            height: 200
        });
        $('#summernote-num-disc').summernote({
            height: 200
        });
        $('#summernote-subsidy-disc').summernote({
            height: 200
        });
        $('#summernote-why-choose-disc').summernote({
            height: 200
        });
        $('#summernote-cabledisc').summernote({
            height: 200
        });
       
    });
</script>

@include('admin.include.footer')