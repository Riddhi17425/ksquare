@include('admin.include.navbar')
@include('admin.include.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Life Video</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Life Video</li>
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
                                            <form class="form-data" enctype="multipart/form-data" method="post" action="{{ route('addlifevideos') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="name">Title</label>
                                                    <input type="hidden" name="editId" id="editId">
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="videolink">Video Link (YouTube, Vimeo etc)</label>
                                                    <input type="text" class="form-control" name="videolink" id="videolink" placeholder="Enter Video Link">
                                                </div>
                                                <div class="form-group">
                                                    <label for="video">Upload Video File</label>
                                                    <input type="file" class="form-control" name="video" id="video">
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
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alllifevideo as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->title }}</td>
                                        <td>
                                            @if($record->video)
                                                <video width="120" height="80" controls>
                                                    <source src="{{ asset('videos/lifevideo/' . $record->video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @elseif($record->videolink)
                                                <a href="{{ $record->videolink }}" target="_blank">View Link</a>
                                            @else
                                                N/A
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

<script>

function edit(id) {
    $.ajax({
        url: "{{ url('/editlifevideos') }}/" + id,
        type: 'GET',
        success: function(res) {
            $('#editId').val(res.id);
            $('#title').val(res.title);
            $('#videolink').val(res.videolink);
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
