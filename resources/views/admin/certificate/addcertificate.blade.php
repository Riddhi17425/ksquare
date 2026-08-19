@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Certificate</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Certificate</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
        <div class="container-fluid">   
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Add States Solar</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('insertcertificate') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Certificate Category</label>
                                <input type="text" class="form-control" name="certificate_cat" required placeholder="Enter Certificate Name">
                                @if ($errors->has('certificate_cat'))
                                    <span class="text-danger">{{ $errors->first('certificate_cat') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Certificate Name</label>
                                <input type="text" class="form-control" name="certificate_name" required placeholder="Enter Certificate Title">
                                @if ($errors->has('certificate_name'))
                                    <span class="text-danger">{{ $errors->first('certificate_name') }}</span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="row">
                            <div class="col-sm-12 form-group">
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                        <label class="custom-file-label" for="thumbnail">Choose Thumbnail</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12 form-group">
                                <!-- Image Upload -->
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="certificate_file" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        $('#summernote-manufacturing').summernote({
            height: 200
        });
        $('#summernote-whychoose').summernote({
            height: 200
        });
    });
</script>

@include('admin.include.footer')
