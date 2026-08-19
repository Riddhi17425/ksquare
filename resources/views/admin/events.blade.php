@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Events</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


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
                                            <h4 class="modal-title">Add / Edit Events</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="form-data" enctype="multipart/form-data" method="post"
                                                action="{{ url('/addevents') }}">

                                                {{ csrf_field() }}

                                                <input type="hidden" name="editId" id="editId">

                                                <div class="form-group">
                                                    <label>Select Event Type</label>
                                                    <select name="activity" id="activity" class="form-control" required>
                                                        <option value="" disabled selected>Select Event</option>
                                                        <option value="Past Events">Past Events</option>
                                                        <option value="Upcoming Events">Upcoming Events</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Enter Name" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Upload Front Images (Multiple)</label>
                                                    <input type="file" class="form-control" name="front_image[]" id="front_image" multiple>
                                                </div>

                                                <div class="form-group">
                                                    <label>Existing Images</label>
                                                    <div id="imagePreview" class="d-flex flex-wrap"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- TABLE LIST -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Activity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($allevents as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->activity }}</td>

                                        <td>
                                            <a href="javascript:void(0)" onclick="edit({{ $record->id }})" class="text-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            &nbsp;&nbsp;

                                            <a href="javascript:void(0)" onclick="deleteR({{ $record->id }})" class="text-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
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

<style>
#imagePreview img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin: 5px;
    border-radius: 6px;
    border: 1px solid #ccc;
}
</style>

<script>
$(document).ready(function () {
    tinymce.init({ selector: '#description' });

    $("#opnModal").click(function () {
        $("#editId").val('');
        $("#name").val('');
        $("#activity").val('');
        tinymce.get("description").setContent('');
        $("#imagePreview").html('');
    });
});


function edit(id) {
    $.ajax({
        url: "{{ url('/editevents') }}/" + id,
        type: 'GET',
        success: function (res) {

            $("#editId").val(res.id);
            $("#name").val(res.name);
            $("#activity").val(res.activity);
            tinymce.get("description").setContent(res.description);

            $("#imagePreview").html('');

            let imgs = [];

            try {
                imgs = JSON.parse(res.front_image);
            } catch (error) {
                imgs = [];
            }

            imgs.forEach(img => {
                $("#imagePreview").append(`
                    <img src="{{ asset('public/images/events_images') }}/` + img + `" />
                `);
            });

            $("#myModal").modal("show");
        }
    });
}



function deleteR(id) {
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            url: "{{ url('/deleteevents') }}/" + id,
            type: 'GET',
            success: function () {
                location.reload();
            }
        });
    }
}
</script>
