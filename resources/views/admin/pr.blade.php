@include('admin.include.navbar')
@include('admin.include.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">PR</li>
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
                                            <form class="form-data" enctype="multipart/form-data" method="post" action="{{ route('addPr') }}">
                                                @csrf
                                                <input type="hidden" name="editId" id="editId">

                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="url">URL</label>
                                                    <input type="text" class="form-control" name="url" id="url" placeholder="Enter Slug or URL">
                                                </div>

                                                <div class="form-group">
                                                    <label for="front_image">Upload Front Image</label>
                                                    <input type="file" class="form-control" name="front_image" id="front_image">
                                                </div>

                                                <div class="form-group">
                                                    <label>Existing Front Image</label>
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
                                        <th>URL</th>
                                        <th>Front Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allPr as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->url }}</td>
                                        <td>
                                            @if($record->front_image)
                                                <img src="{{ asset('images/frontimage_Pr/' . $record->front_image) }}" height="50" width="50" alt="Front Image">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="edit({{ $record->id }})"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" onclick="deleteR({{ $record->id }})"><i class="fa fa-trash"></i></a>
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

<!-- Preview Style -->
<style>
    #imagePreview img {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 60px;
        height: 60px;
        object-fit: cover;
        box-shadow: 0 1px 5px rgba(0,0,0,0.2);
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
        url: "{{ url('/editPr') }}/" + id,
        type: 'GET',
        success: function(res) {
            $('#editId').val(res.id);
            $('#name').val(res.name);
            $('#url').val(res.url);
            tinyMCE.activeEditor.setContent(res.description ?? '');
            $('#imagePreview').empty();

            if (res.front_image) {
                $('#imagePreview').append(`
                    <img src="{{ asset('images/frontimage_Pr') }}/` + res.front_image + `" alt="Front Image">
                `);
            }

            $('#myModal').modal('show');
        }
    });
}

function deleteR(id) {
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            url: "{{ url('/deletePr') }}/" + id,
            type: 'GET',
            success: function() {
                location.reload();
            }
        });
    }
}
</script>
