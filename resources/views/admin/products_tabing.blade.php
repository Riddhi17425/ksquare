@include('admin.include.navbar')
@include('admin.include.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products Tabing</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products Tabing</li>
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
                                            <form class="form-data" enctype="multipart/form-data" method="post" action="{{ route('addProductstabing') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="product_id">Select Product ID</label>
                                                    <select name="product_id" id="product_id" class="form-control" required>
                                                        <option value="" selected disabled>Select Product</option>
                                                        @foreach($products as $product)
                                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Product Name</label>
                                                    <input type="hidden" name="editId" id="editId">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Photo</label>
                                                    <input type="file" class="form-control" name="image[]" multiple id="image">
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

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Product ID</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allProductsTabing as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->product_id }}</td>
                                        <td><img src="{{ $record->image }}" height="100" width="100" alt=""></td>
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
$(document).ready(function() {
    tinymce.init({
        selector: '#description'
    });
});

function edit(id) {
    $.ajax({
        url: "{{ url('/editProductstabing') }}/" + id,
        type: 'GET',
        success: function(res) {
            $('#editId').val(res.id);
            $('#name').val(res.name);
            $('#product_id').val(res.product_id);
            tinyMCE.activeEditor.setContent(res.description);
            $('#pImg').attr('src', res.image).show();
            $('#myModal').modal('show');
        }
    });
}

function deleteR(id) {
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            url: "{{ url('/deleteProductstabing') }}/" + id,
            type: 'GET',
            success: function() {
                location.reload();
            }
        });
    }
}
</script>
