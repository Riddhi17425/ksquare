@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Solar</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('solarfaq') }}">Solar</a></li>
            <li class="breadcrumb-item active">Edit Solar Faq</li>
        </ol>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('solarfaq/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF Token for form submission -->

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="statessolar_id">Select State</label>
                            <select name="statessolar_id" class="form-control" required>
                                <option value="">-- Select State --</option>
                                @foreach($statesolar as $state)
                                    <option value="{{ $state->id }}" 
                                        {{ isset($data->statessolar_id) && $data->statessolar_id == $state->id ? 'selected' : '' }}>
                                        {{ $state->solar_state_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Faq Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @if(isset($data->image))
                                <img src="{{ asset('public/Solar_Images/' . $data->image) }}" width="50px" height="50px" alt="Current Image">
                            @endif
                        </div>
                    </div>

                    <div id="faq-fields">
                        @if(!empty($data->title_description))
                            @foreach($data->title_description as $faq)
                                <div class="faq-field">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Solar Faq Name</label>
                                            <input type="text" class="form-control" name="title[]" value="{{ $faq['title'] }}" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Solar Faq Description</label>
                                            <textarea name="description[]" class="form-control summernote" required>{{ $faq['description'] }}</textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger remove-field">Remove</button>
                                </div>
                            @endforeach
                            @else
                                <!-- If no data, show a single empty field -->
                                <div class="faq-field">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Solar Faq Name</label>
                                            <input type="text" class="form-control" name="title[]" placeholder="Enter Solar Name" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Solar Faq Description</label>
                                            <textarea name="description[]" class="form-control summernote" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    <button type="button" id="add-more" class="btn btn-success mb-3">Add More</button>


                    

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
        $('#add-more').click(function() {
            var newField = `<div class="faq-field">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Solar Faq Name</label>
                        <input type="text" class="form-control" name="title[]" placeholder="Enter Solar Name">
                    </div>
                    <div class="col-sm-6">
                        <label>Solar Faq Description</label>
                        <textarea name="description[]" class="form-control summernote"></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-danger remove-field">Remove</button>
            </div>`;
            $('#faq-fields').append(newField);
            $('.summernote').summernote(); // Initialize summernote for new fields
        });

        $(document).on('click', '.remove-field', function() {
            $(this).closest('.faq-field').remove();
        });

        $('.summernote').summernote({
            height: 200
        });
    });
</script>
