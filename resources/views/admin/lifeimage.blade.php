@include('admin.include.navbar')
@include('admin.include.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Life Image</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Life Image</li>
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
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-data" enctype="multipart/form-data" method="post" action="{{ route('addlifeimage') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="name">Title</label>
                                                    <input type="hidden" name="editId" id="editId">
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Photo</label>
                                                    <input type="file" class="form-control" name="image[]" multiple id="image">
                                                </div>
                                                <div class="form-group">
                                                    <label>Existing Images</label>
                                                    <div id="imagePreview" style="display: flex; flex-wrap: wrap; gap: 5px;"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alt_tag">Alt Tag</label>
                                                    <input type="text" class="form-control" name="alt_tag" id="alt_tag">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                         <th>Alt Tag</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alllifeimage as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->title }}</td>
                                        <td>
                                            @if(is_array($record->image))
                                                @foreach($record->image as $img)
                                                    <img src="{{ asset('public/images/lifeimage/' . $img) }}" height="50" width="50" style="margin: 2px;" alt="">
                                                @endforeach
                                            @else
                                                @php
                                                    $imgs = is_string($record->image) ? json_decode($record->image, true) : [];
                                                @endphp
                                                @if(is_array($imgs))
                                                    @foreach($imgs as $img)
                                                        <img src="{{ asset('public/images/lifeimage/' . $img) }}" height="50" width="50" style="margin: 2px;" alt="">
                                                    @endforeach
                                                @endif
                                            @endif
                                        </td>
                                         <td>{!! $record->alt_tag !!}</td>

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

<script>
// $(document).ready(function() {
//     tinymce.init({
//         selector: '#alt_tag'
//     });
// });

function edit(id) {
    $.ajax({
        url: "{{ url('/editlifeimage') }}/" + id,
        type: 'GET',
        success: function(res) {
            $('#editId').val(res.id);
            $('#title').val(res.title);
            $('#alt_tag').val(res.alt_tag);

            // Show existing images
            $('#imagePreview').empty(); // Clear previous previews

            if (res.image) {
                let images = typeof res.image === 'string' ? JSON.parse(res.image) : res.image;

                if (Array.isArray(images)) {
                    images.forEach(function(img) {
                        $('#imagePreview').append(`
                            <div style="position: relative;">
                                <img src="{{ asset('public/images/lifeimage') }}/${img}" height="60" width="60" style="margin: 2px;" />
                            </div>
                        `);
                    });
                }
            }

            $('#myModal').modal('show');
        }
    });
}

function deleteR(id) {
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            url: "{{ url('/deletelifeimage') }}/" + id,
            type: 'GET',
            success: function() {
                location.reload();
            }
        });
    }
}
</script>
