@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                                                action="{{route('addCategory')}}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="name">Category Name</label>
                                                    <input type="hidden" name="editId" id="editId">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Enter Category name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">SEO URL</label>
                                                    <input type="text" class="form-control" name="seourl" id="seourl"
                                                        placeholder="Enter SEO URL" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">SEO Title</label>
                                                    <input type="text" class="form-control" name="seo_title" id="seo_title"
                                                        placeholder="Enter SEO Title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">SEO Description</label>
                                                    <input type="text" class="form-control" name="seo_desc" id="seo_desc"
                                                        placeholder="Enter SEO Description" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact_no">Photo</label>
                                                    <img src="" id="pImg" height="100px" width="100px" class="photo">
                                                    <input type="file" class="form-control" name="image[]"
                                                        multiple="multiple" id="image">
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact_no">Description</label>
                                                    <textarea name="description" class="form-control" id="description"
                                                        cols="30" rows="5"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact_no">Product Page Description</label>
                                                    <textarea name="productDesc" class="form-control" id="productDesc" cols="30"
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
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allProducts as $record)
                                    <tr>
                                        <td>{{$record->id}}</td>
                                        <td>{{$record->name}}</td>
                                        <td><img src="{{$record->image}}" height="100" width="100" alt=""></td>
                                        <td>
                                            <a onclick="edit(<?=$record->id?>)"><i class='fas fa-edit'></i></a>
                                            <a onclick="deleteR(<?=$record->id?>)"><i class="fa fa-trash"></i></a>
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
@include('admin.include.footer')

<script>
$(document).ready(function() {

    tinymce.init({
        selector: '#description'
    });
    
    tinymce.init({
        selector: '#productDesc'
    });
});

function edit(userId) {
    console.log(userId + " userId");
    $.ajax({
        url: "<?php echo URL::to('/'); ?>/editCategory/" + userId,
        type: 'GET',
        success: function(res) {
            console.log(res);
            $("#editId").val(res.id);
            $("#name").val(res.name);
            $("#seourl").val(res.seourl);
            $("#seo_title").val(res.seo_title);
            $("#seo_desc").val(res.seo_desc);
            $("#pImg").css('display', 'block');
            $("#pImg").attr('src', res.image);
            tinymce.get('description').setContent(res.description);
            tinymce.get('productDesc').setContent(res.productDesc);
            $('#myModal').modal('show');
        }

    });
}

function deleteR(userId) {
    console.log(userId + " userId");
    var r = confirm("Are you sure you want to delete?");
    if (r == true) {
        $.ajax({
            url: "<?php echo URL::to('/'); ?>/deleteCategory/" + userId,
            type: 'GET',
            success: function(res) {
                if (res == 'done') {
                    window.location.replace("<?php echo URL::to('/'); ?>/category");
                }
            }

        });
    }
}


var alpha = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
var numberValid = /[0-9]{10}/;
var email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
$(document).ready(function() {
    $("#name").change(function() {
        if ($(this).val().match(alpha)) {} else {
            alert("Only alphabets allowed in Category Name.");
            $("#name").focus();
        }
    });
});
</script>