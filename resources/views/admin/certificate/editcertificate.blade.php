@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Solar State</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('certificate') }}">Certificate</a></li>
            <li class="breadcrumb-item active">Edit Certificate</li>
        </ol>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
               <form action="{{ url('certificate/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf <!-- CSRF Token for form submission -->
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Certificate Category</label>
                            <input type="text" class="form-control" name="certificate_cat" value="{{ old('certificate_cat', $data->certificate_cat) }}" required placeholder="Enter Solar State Name">
                            @if ($errors->has('certificate_cat'))
                                <span class="text-danger">{{ $errors->first('certificate_cat') }}</span>
                            @endif
                        </div>
                       <div class="col-md-6 form-group">
                            <label>Certificate name</label>
                            <input type="text" class="form-control" name="certificate_name" value="{{ old('certificate_name', $data->certificate_name) }}" placeholder="Enter meta title">
                            @if ($errors->has('certificate_name'))
                                <span class="text-danger">{{ $errors->first('certificate_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- OG Image Upload -->
                            <div class="form-group">
                                <label> Thumbnail</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                                </div>
                            </div>
                            <!-- Display existing image -->
                            @if(isset($data->thumbnail))
                                <img src="{{ asset('public/Thumbnail_Certificate_Files/' . $data->thumbnail) }}" width="50px" height="50px" alt="Current Image">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- OG Image Upload -->
                            <div class="form-group">
                                <label> Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="certificate_file" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <!-- Display existing image -->
                            @if(isset($data->certificate_file))
                                <img src="{{ asset('public/Certificate_Files/' . $data->certificate_file) }}" width="50px" height="50px" alt="Current Image">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="form-control btn btn-primary">Update Solar State</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@include('admin.include.footer')

<!-- Summernote CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote-header').summernote({
            height: 200 // set editor height
        });
        $('#summernote-manufacturing').summernote({
            height: 200 // set editor height
        });
        $('#summernote-whychoose').summernote({
            height: 200 // set editor height
        });
    });
</script>
