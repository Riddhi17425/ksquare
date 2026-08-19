@include('admin.include.navbar')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contacts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <button class="btn btn-info" data-toggle="modal" id="opnModal" data-target="#myModal"><b>+</b></button> --}}

                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-lg">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="multipart" enctype="multipart/form-data" method="post"
                                                action="#">
                                                <div class="form-group">
                                                    <label for="name">Name : </label> <span id="name" class="text-dark p-1"></span> <br>
                                                    <label for="phone">Phone :</label> <span id="phone" class="text-dark p-1"></span> <br>
                                                    <label for="email">Email :</label> <span id="email" class="text-dark p-1"></span> <br>
                                                    <label for="message">Message :</label> <span id="message" class="text-dark p-1"></span> <br>
                                                    <label for="subject">Subject :</label> <span id="subject" class="text-dark p-1"></span> <br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allContacts as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                                            <td>
                                                <a onclick="edit(<?= $data->id ?>)"><i class='fas fa-eye'></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script>
    function edit(userId) {
        // console.log(userId + " userId");
        $.ajax({
            url: "{{ URL::to('/') }}/viewContact/" + userId,
            type: 'GET',
            success: function(res) {
                // console.log(res);
                $("#name").html(res.name);
                $("#phone").html(res.phone);
                $("#email").html(res.email);
                $("#subject").html(res.subject);
                $("#message").html(res.message);
                $("#myModal").modal('show');
            }

        });
    }
</script>
<!-- /.content -->
@include('admin.include.footer')
