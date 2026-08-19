@include('include.navbar')
<!-- Main Sidebar Container -->
@include('include.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                            <button class="btn btn-info" data-toggle="modal" id="opnModal"
                                data-target="#myModal"><b>+</b></button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-data" enctype="multipart/form-data" method="post"
                                                action="{{route('addProducts')}}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="name">Product Name</label>
                                                    <input type="hidden" name="editId" id="editId">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Enter Product name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact_no">Photo</label>
                                                    <img src="" id="pImg" height="100px" width="100px" class="photo">
                                                    <input type="file" class="form-control" name="image[]"
                                                        multiple="multiple" id="image">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Price</label>
                                                    <input type="text" class="form-control" name="price"
                                                        id="price" placeholder="Enter Price" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact_no">Description</label>
                                                    <textarea name="description" class="form-control" id="description" cols="30"
                                                        rows="5" ></textarea>
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
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allProducts as $data1)
                                        <tr>
                                            <td>{{ $data1->id }}</td>
                                            <td>{{ $data1->name }}</td>
                                            <td><img height="100" width="100" src="{{ $data1->image }}"> </td>
                                        <td> {{$data1->price}} </td>
                                        <td>
                                            <a onclick="edit(<?= $data1->id ?>)"><i class='fas fa-edit'></i></a>
                                            <a onclick="deleteR(<?= $data1->id ?>)"><i class="fa fa-trash"></i></a>
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

<!-- /.content-wrapper -->
@include('include.footer')

<script>
    function edit(userId) {
        // console.log(userId + " userId");
        $.ajax({
            url: "<?php echo URL::to('/'); ?>/editProducts/" + userId,
            type: 'GET',
            success: function(res) {
                // console.log(res);
                $("#editId").val(res.id);
                $("#name").val(res.name);
                $("#description").val(res.description);
                tinyMCE.activeEditor.setContent(res.description);
                $("#price").val(res.price);

                $("#myModal").modal('show');
            }

        });
    }

    function deleteR(userId) {
        // console.log(userId + " userId");
        var r = confirm("Are you sure you want to delete?");
        if (r == true) {
            $.ajax({
                url: "<?php echo URL::to('/'); ?>/deleteProducts/" + userId,
                type: 'GET',
                success: function(res) {
                    if (res == 'done') {
                        window.location.replace("<?php echo URL::to('/'); ?>/Products");
                    }
                }

            });
        }
    }

    function changeStatus(status, id) {
        // console.log(status);
        console.log(id);
        if (status == 1) {
            var r1 = confirm("Are you sure you want to deactivate product?");
            if (r1 == true) {
                $.ajax({
                    url: "{!! route('changeStatus', ['status' => '2','id'=>" + id + "]) !!}",
                    success: function(res) {
                        if (res == 'done') {
                            window.location.replace("/Products");
                        }
                    }

                });
            }
        } else {
            var r2 = confirm("Are you sure you want to activate product?");
            if (r2 == true) {
                $.ajax({
                    url: "/changeStatus/1/" + id,
                    type: 'GET',
                    success: function(res) {
                        if (res == 'done') {
                            window.location.replace("/Products");
                        }
                    }

                });
            }
        }
    }

    function view(userId) {
        // console.log(userId + " userId");
        $.ajax({
            url: "/viewProducts/" + userId,
            type: 'GET',
            success: function(res) {
                console.log(res);

                res['imgs'].forEach(myFunction);

                function myFunction(item, index) {
                    // console.log(res['imgs'][index].photo);
                    $("#imgL").append("<img src='" + res['allData'][0].photo +
                        "' id='pImage' height='100px' width='100px'>");
                }

                $("#editId").val(res['allData'][0].id);
                $("#pName").html(res['allData'][0].productName);
                $("#pDesc").html(res['allData'][0].pDesc);
                if (res['allData'][0].status == 1) {
                    $("#pStatus").html("Active");
                } else {
                    $("#pStatus").html("Not Active");
                }

                $("#pStock").html(res['allData'][0].pendingStock);
                $("#ptyreBrand").html(res['allData'][0].tyreBname);
                $("#ptyreType").html(res['allData'][0].tyreTname);
                if ((res['allData'][0].priceOrAskFor) == 2)
                {
                    $("#pprice").html("Ask For Price");
                    $("#priceDivView").css('display','none');
                }
                else{
                    $("#pprice").html(res['allData'][0].price);
                }

                
                $("#pafterDiscountPrice").html(res['allData'][0].afterDiscountPrice);
                $("#pStock").html(res['allData'][0].totalStock);
                $("#pImage").attr("src", res['allData'][0].pImg);
                $('#vDataModal').modal('show');
            }

        });
    }

    var alpha = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
    var numberValid = /[0-9]/;
    var email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    $(document).ready(function() {

        tinymce.init({
        selector: '#description'
        });

        $("#totalStock").change(function() {
            if ($(this).val().match(numberValid)) {} else {
                alert("Only numbers allowed in Total Stock.");
                $("#totalStock").focus();
            }
        });

        $("#pendingStock").change(function() {
            if ($(this).val().match(numberValid)) {} else {
                alert("Only numbers allowed in Pending Stock.");
                $("#pendingStock").focus();
            }
        });

        $("#price").change(function() {
            if ($(this).val().match(numberValid)) {} else {
                alert("Only numbers allowed in Price.");
                $("#price").focus();
            }
        });

        $("#afterDiscountPrice").change(function() {
            if ($(this).val().match(numberValid)) {} else {
                alert("Only numbers allowed in Discounted Price.");
                $("#afterDiscountPrice").focus();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {

        $('#vehicle').change(function() {
            var vehicle_id = $('#vehicle').val();
            $('#car_model').empty();
            $.ajax({
                type: "GET",
                url: "{!! url('/getvehiclemodel') !!}/" + vehicle_id,
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(resp) {
                    $('#car_model').append($('<option>', {
                        value: "",
                        text: "Select Model"
                    }));
                    $.each(resp.car_model_list, function(key, val) {
                        $('#car_model').append($('<option>', {
                            value: val.id,
                            text: val.model
                        }));
                    });
                    getCarmodel();
                }
            });
        });

        $('#car_model').change(function() {
            getCarmodel();
        });

        function getCarmodel() {
            var vehicle_id = $('#vehicle').val();
            var model_id = $('#car_model').val();
            $('#car_submodel').empty();
            if (vehicle_id != '' && model_id != '') {
                $.ajax({
                    type: "GET",
                    url: "{!! url('/getvehiclesubmodel') !!}/" + vehicle_id + "/" + model_id,
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(resp) {
                        $('#car_submodel').append($('<option>', {
                            value: "",
                            text: "Select Sub Model"
                        }));
                        $.each(resp.car_submodel_list, function(key, val) {
                            $('#car_submodel').append($('<option>', {
                                value: val.id,
                                text: val.subModel
                            }));
                        });
                    }
                });
            } else {
                $('#car_submodel').append($('<option>', {
                    value: "",
                    text: "Select Model First"
                }));
            }

        }



    });
</script>
