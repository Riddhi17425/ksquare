@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Solar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Solar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
        <div class="container-fluid">   
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Add Solar</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('insertsolarfaq') }}">
                        @csrf
                        <div class="form-group">
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
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Image Upload -->
                                <div class="form-group">
                                    <label>Faq Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="faq-fields">
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
                        </div>
                        <button type="button" id="add-more" class="btn btn-success mb-3">Add More</button>
                     

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

@include('admin.include.footer')
