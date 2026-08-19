@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Solar State</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('statessolar') }}">States Solar</a></li>
            <li class="breadcrumb-item active">Edit Solar State</li>
        </ol>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
               <form action="{{ url('statessolar/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf <!-- CSRF Token for form submission -->
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Solar State Name</label>
                            <input type="text" class="form-control" name="solar_state_name" value="{{ old('solar_state_name', $data->solar_state_name) }}"  placeholder="Enter Solar State Name">
                            @if ($errors->has('solar_state_name'))
                                <span class="text-danger">{{ $errors->first('solar_state_name') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>URL</label>
                            <input type="text" class="form-control" name="url" value="{{ old('url', $data->url) }}"  placeholder="Enter URL">
                            @if ($errors->has('url'))
                                <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Header Title</label>
                            <input type="text" class="form-control" name="header_title" value="{{ old('header_title', $data->header_title) }}"  placeholder="Enter Header Title">
                            @if ($errors->has('header_title'))
                                <span class="text-danger">{{ $errors->first('header_title') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Header Description</label>
                            <textarea id="summernote-header" class="form-control" name="header_description"  placeholder="Enter Header Description">{{ old('header_description', $data->header_description) }}</textarea>
                            @if ($errors->has('header_description'))
                                <span class="text-danger">{{ $errors->first('header_description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Trusted Title</label>
                            <input type="text" class="form-control" name="trusted_title" value="{{ old('trusted_title', $data->trusted_title) }}" placeholder="Enter Trusted Title">
                            @if ($errors->has('trusted_title'))
                                <span class="text-danger">{{ $errors->first('trusted_title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Trusted Description</label>
                            <textarea id="summernote-trusteddisc" name="trusted_disc" class="textarea">
                                {{ old('trusted_disc', $data->trusted_disc) }}
                            </textarea>
                            @if ($errors->has('trusted_disc'))
                                <span class="text-danger">{{ $errors->first('trusted_disc') }}</span>
                            @endif
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Solar Inverter Title</label>
                            <input type="text" class="form-control" name="inverter_title" value="{{ old('inverter_title', $data->inverter_title) }}" placeholder="Solar Inverter Title">
                            @if ($errors->has('inverter_title'))
                                <span class="text-danger">{{ $errors->first('inverter_title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Solar Inverter Description</label>
                            <textarea id="summernote-inverterdisc" name="inverter_disc" class="textarea">
                                {{ old('inverter_disc', $data->inverter_disc) }}
                            </textarea>
                            @if ($errors->has('inverter_disc'))
                                <span class="text-danger">{{ $errors->first('inverter_disc') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>LT Panels Title</label>
                            <input type="text" class="form-control" name="lt_title" value="{{ old('lt_title', $data->lt_title) }}" placeholder="LT Panels Title">
                            @if ($errors->has('lt_title'))
                                <span class="text-danger">{{ $errors->first('lt_title') }}</span>
                            @endif
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>LT Panels Description</label>
                            <textarea id="summernote-ltdisc" name="lt_disc" class="textarea">
                                {{ old('lt_disc', $data->lt_disc) }}
                            </textarea>
                            @if ($errors->has('lt_disc'))
                                <span class="text-danger">{{ $errors->first('lt_disc') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Cables & Wires Title</label>
                            <input type="text" class="form-control" name="cable_title" value="{{ old('cable_title', $data->cable_title) }}" placeholder="Cables & Wires Title">
                            @if ($errors->has('cable_title'))
                                <span class="text-danger">{{ $errors->first('cable_title') }}</span>
                            @endif
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Cables & Wires Description</label>
                            <textarea id="summernote-cabledisc" name="cable_disc" class="textarea">
                                {{ old('cable_disc', $data->cable_disc) }}
                            </textarea>
                            @if ($errors->has('cable_disc'))
                                <span class="text-danger">{{ $errors->first('cable_disc') }}</span>
                            @endif
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>DCDB Title</label>
                            <input type="text" class="form-control" name="dcdb_title" value="{{ old('dcdb_title', $data->dcdb_title) }}" placeholder="DCDB Title">
                            @if ($errors->has('dcdb_title'))
                                <span class="text-danger">{{ $errors->first('dcdb_title') }}</span>
                            @endif
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>DCDB Description</label>
                            <textarea id="summernote-dcdbdisc" name="dcdb_disc" class="textarea">
                                {{ old('dcdb_disc', $data->dcdb_disc) }}
                            </textarea>
                            @if ($errors->has('dcdb_disc'))
                                <span class="text-danger">{{ $errors->first('dcdb_disc') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>ACDB Title</label>
                            <input type="text" class="form-control" name="acdb_title" value="{{ old('acdb_title', $data->acdb_title) }}" placeholder="ACDB Title">
                            @if ($errors->has('acdb_title'))
                                <span class="text-danger">{{ $errors->first('acdb_title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>ACDB Description</label>
                            <textarea id="summernote-acdbdisc" name="acdb_disc" class="textarea">
                                {{ old('acdb_disc', $data->acdb_disc) }}
                            </textarea>
                            @if ($errors->has('acdb_disc'))
                                <span class="text-danger">{{ $errors->first('acdb_disc') }}</span>
                            @endif
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Earthing Kit Title</label>
                            <input type="text" class="form-control" name="kit_title" value="{{ old('kit_title', $data->kit_title) }}" placeholder="Earthing Kit Title">
                            @if ($errors->has('kit_title'))
                                <span class="text-danger">{{ $errors->first('kit_title') }}</span>
                            @endif
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Earthing Kit Description</label>
                            <textarea id="summernote-kitdisc" name="kit_disc" class="textarea">
                                {{ old('kit_disc', $data->kit_disc) }}
                            </textarea>
                            @if ($errors->has('kit_disc'))
                                <span class="text-danger">{{ $errors->first('kit_disc') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>map title</label>
                            <input type="text" class="form-control" name="map_title" value="{{ old('map_title', $data->map_title) }}" placeholder="Enter map title">
                            @if ($errors->has('map_title'))
                                <span class="text-danger">{{ $errors->first('map_title') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Map description</label>
                            <textarea id="summernote-map" class="form-control" name="map_description"  placeholder="Enter Map Description">{{ old('map_description', $data->map_description) }}</textarea>
                            @if ($errors->has('map_description'))
                                <span class="text-danger">{{ $errors->first('map_description') }}</span>
                            @endif
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- OG Image Upload -->
                            <div class="form-group">
                                <label>Map Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="map_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            @if(isset($data->map_image))
                                <img src="{{ asset('public/Solar_Sates_MapImages/' . $data->map_image) }}" width="50px" height="50px" alt="Current Image">
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
                            <!-- OG Image Upload -->
                            <div class="form-group">
                                <label>Banner Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <!-- Display existing image -->
                            @if(isset($data->image))
                                <img src="{{ asset('public/Solar_Sates_Images/' . $data->image) }}" width="50px" height="50px" alt="Current Image">
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
      
        $('#summernote-whychoose').summernote({
            height: 200 // set editor height
        });
        $('#summernote-trusteddisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-inverterdisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-ltdisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-cabledisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-dcdbdisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-acdbdisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-kitdisc').summernote({
            height: 200 // set editor height
        });
        $('#summernote-map').summernote({
            height: 200 // set editor height
        });
    });
</script>
