@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Solar</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('solar') }}">Solar</a></li>
            <li class="breadcrumb-item active">Edit Solar</li>
        </ol>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('solar/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF Token for form submission -->

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="statessolar_id">Select State</label>
                            <select name="statessolar_id" class="form-control" >
                                <option value="">-- Select State --</option>
                                @foreach($statesolar as $state)
                                    <option value="{{ $state->id }}" 
                                        {{ isset($data->statessolar_id) && $data->statessolar_id == $state->id ? 'selected' : '' }}>
                                        {{ $state->solar_state_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Solar Name</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $data->title) }}"  placeholder="Enter Solar Name">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6 form-group">
                            <label>View More Link</label>
                            <input type="text" class="form-control" name="url" value="{{ old('url', $data->url) }}"  placeholder="Enter URL">
                            @if ($errors->has('url'))
                                <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Description</label>
                            <textarea id="summernote-header" class="form-control" name="description"  placeholder="Enter Description">{{ old('description', $data->description) }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div id="faq-fields">
                        @if(!empty($data->proname_description))
                        @foreach($data->proname_description as $faq)
                        <div class="faq-field">
                            <div class="row">
                                <!-- Product Name -->
                                <div class="col-sm-6 form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" name="productname[]" value="{{ $faq['productname'] }}">
                                </div>
                    
                                <!-- Product Description -->
                                <div class="col-sm-6 form-group">
                                    <label>Product Description</label>
                                    <textarea name="product_desc[]" class="form-control summernote">{{ $faq['product_desc'] }}</textarea>
                                </div>
                    
                                <!-- Product Image -->
                                <div class="col-sm-6 form-group">
                                    <label>Product Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="product_image[]"
                                            id="customFile{{ $loop->index }}">
                                        <label class="custom-file-label" for="customFile{{ $loop->index }}">Choose file</label>
                                    </div>
                    
                                    <!-- Display Existing Image -->
                                    @if(!empty($faq['product_image']))
                                    <img src="{{ asset('public/Solar_Product_Images/' . $faq['product_image']) }}" width="50px"
                                        height="50px" alt="Current Image">
                                    @endif
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger remove-field">Remove</button>
                        </div>
                        @endforeach
                        @else
                        <!-- If no existing data, display empty fields -->
                        <div class="faq-field">
                            <div class="row">
                                <!-- Product Name -->
                                <div class="col-sm-6 form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" name="productname[]" placeholder="Enter Product Name">
                                </div>
                    
                                <!-- Product Description -->
                                <div class="col-sm-6 form-group">
                                    <label>Product Description</label>
                                    <textarea name="product_desc[]" class="form-control summernote"></textarea>
                                </div>
                    
                                <!-- Product Image -->
                                <div class="col-sm-6 form-group">
                                    <label>Product Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="product_image[]" id="customFileNew">
                                        <label class="custom-file-label" for="customFileNew">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <button type="button" id="add-more" class="btn btn-success mb-3">Add More</button>

                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Banner Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @if(isset($data->image))
                                <img src="{{ asset('public/Solar_Images/' . $data->image) }}" width="50px" height="50px" alt="Current Image">
                            @endif
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Solar</button>
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
    });
</script>
<script>
    $(document).ready(function() {
        $('#add-more').click(function() {
            var newField = `<div class="faq-field">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="productname[]" placeholder="Enter Product">
                    </div>
                    <div class="col-sm-6">
                        <label>Product Description</label>
                        <textarea name="product_desc[]" class="form-control summernote"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <label>Product Image</label>
                        <input type="file" class="form-control" name="product_image[]">
                    </div>
                </div>
                <button type="button" class="btn btn-danger remove-field">Remove</button>
            </div>`;
            $('#faq-fields').append(newField);
            $('.summernote').summernote(); 
        });

        $(document).on('click', '.remove-field', function() {
            $(this).closest('.faq-field').remove();
        });

        $('.summernote').summernote({
            height: 200
        });
    });
</script>