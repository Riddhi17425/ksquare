@include('admin.include.navbar')
@include('admin.include.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Teams Life</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teams Life</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-info" data-toggle="modal" id="opnModal" data-target="#myModal"><b>+</b></button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-data" enctype="multipart/form-data" method="post" action="{{ route('addTeamslife') }}">
                                                {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label for="activity">Select Activity Name</label>
                                                    <select name="activity" id="activity" class="form-control" required>
                                                        <option value="" selected disabled>Select Activity</option>
                                                        <option value="Outdoor Activity">Outdoor Activity</option>
                                                        <option value="Indoor Activity">Indoor Activity</option>
                                                        <option value="Exhibition Visit">Exhibition Visit</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="hidden" name="editId" id="editId">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="front_image">Upload Front Image</label>
                                                    <input type="file" class="form-control" name="front_image" id="front_image">
                                                </div>

                                                <div class="form-group">
                                                    <label for="image">Upload Images</label>
                                                    <input type="file" class="form-control" name="image[]" multiple id="image">
                                                </div>

                                                <div class="form-group">
                                                    <label>Existing Images</label>
                                                    <div id="imagePreview" class="d-flex flex-wrap gap-2"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Activity</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allTeamslife as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->activity }}</td>
                                        <td>
                                            @php
                                                $imgs = is_array($record->image) ? $record->image : json_decode($record->image, true);
                                            @endphp
                                            @if(is_array($imgs))
                                                @foreach($imgs as $img)
                                                    <img src="{{ asset('public/images/teamslife/' . $img) }}" height="50" width="50" style="margin: 2px;" alt="">
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <a onclick="edit({{ $record->id }})"><i class="fas fa-edit"></i></a>
                                            <a onclick="deleteR({{ $record->id }})"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.include.footer')

<!-- Styling for preview -->
<style>
    #imagePreview .preview-box {
        margin: 5px;
        text-align: center;
    }
    #imagePreview img {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 60px;
        height: 60px;
        object-fit: cover;
        box-shadow: 0 1px 5px rgba(0,0,0,0.2);
    }
    #imagePreview .label {
        font-size: 12px;
        margin-top: 3px;
        display: block;
    }
</style>

<!-- JS -->
<script>
$(document).ready(function() {
    tinymce.init({
        selector: '#description'
    });
});

function edit(id) {
    $.ajax({
        url: "{{ url('/editTeamslife') }}/" + id,
        type: 'GET',
        success: function(res) {
            $('#editId').val(res.id);
            $('#name').val(res.name);
            $('#activity').val(res.activity);
            tinyMCE.activeEditor.setContent(res.description);
            $('#imagePreview').empty();

            if (res.front_image) {
                $('#imagePreview').append(`
                    <div class="preview-box">
                        <img src="{{ asset('public/images/frontimage_teamslife') }}/` + res.front_image + `" alt="Front Image">
                        <span class="label">Front Image</span>
                    </div>
                `);
            }

            let images = [];
            if (Array.isArray(res.image)) {
                images = res.image;
            } else {
                try {
                    images = JSON.parse(res.image);
                } catch (e) {
                    images = [];
                }
            }

            images.forEach(function(img, index) {
                $('#imagePreview').append(`
                    <div class="preview-box">
                        <img src="{{ asset('public/images/teamslife') }}/` + img + `" alt="Image ` + (index + 1) + `">
                        <span class="label">Image ` + (index + 1) + `</span>
                    </div>
                `);
            });

            $('#myModal').modal('show');
        }
    });
}

function deleteR(id) {
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            url: "{{ url('/deleteTeamslife') }}/" + id,
            type: 'GET',
            success: function() {
                location.reload();
            }
        });
    }
}
</script>
