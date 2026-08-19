@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit City State</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('citysolar') }}">City Solar</a></li>
            <li class="breadcrumb-item active">Edit City Solar</li>
        </ol>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
               <form action="{{ url('citysolar/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf <!-- CSRF Token for form submission -->
                    <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>City Name</label>
                                <input type="text" class="form-control" name="city_name" value="{{ old('city_name', $data->city_name) }}" placeholder="Enter City Name">
                                @if ($errors->has('city_name'))
                                    <span class="text-danger">{{ $errors->first('city_name') }}</span>
                                @endif
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>State Name</label>
                                <input type="text" class="form-control" name="state_name" value="{{ old('state_name', $data->state_name) }}"  placeholder="Enter State Name">
                                @if ($errors->has('state_name'))
                                    <span class="text-danger">{{ $errors->first('state_name') }}</span>
                                @endif
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>URL</label>
                            <input type="text" class="form-control" name="url" value="{{ old('url', $data->url) }}"  placeholder="Enter URL">
                            @if ($errors->has('url'))
                                <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                    </div>
           
                   
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>meta title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title', $data->meta_title) }}" placeholder="Enter meta title">
                            @if ($errors->has('meta_title'))
                                <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label>meta description</label>
                            <input type="text" class="form-control" name="meta_description" value="{{ old('meta_description', $data->meta_description) }}"  placeholder="Enter meta description">
                            @if ($errors->has('meta_description'))
                                <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                            @endif
                        </div>
                        <!--<div class="col-md-6 form-group">-->
                        <!--    <label>Og title</label>-->
                        <!--    <input type="text" class="form-control" name="og_title" value="{{ old('og_title', $data->og_title) }}"  placeholder="Enter Og title">-->
                        <!--    @if ($errors->has('og_title'))-->
                        <!--        <span class="text-danger">{{ $errors->first('og_title') }}</span>-->
                        <!--    @endif-->
                        <!--</div>-->
                        <!--<div class="col-md-6 form-group">-->
                        <!--    <label>Og description</label>-->
                        <!--    <input type="text" class="form-control" name="og_description" value="{{ old('og_description', $data->og_description) }}"  placeholder="Enter Og description">-->
                        <!--    @if ($errors->has('og_description'))-->
                        <!--        <span class="text-danger">{{ $errors->first('og_description') }}</span>-->
                        <!--    @endif-->
                        <!--</div>-->
                    </div>
                  
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="form-control btn btn-primary">Update City Solar</button>
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