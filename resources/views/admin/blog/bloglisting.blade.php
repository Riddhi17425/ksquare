@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')

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
    <section class="content">
        <div class="container-fluid">   
          <div class="row">
             <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Blogs Listing</h3>

                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 30px;margin: 0 auto;">
                            <div class="input-group-append">
                            <a href="{{ route('addblog')}}"><i class="far fa-plus-square"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Title</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Image</th> 
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $key=>$val)
                            <tr>
                              <td >{{ $key + 1 }}</td>
                              <td>{{ $val['title'] }}</td>
                              <td>{{ $val['publish_date'] }}</td>
                              <td>{{ $val['status'] ?? 'Inactive' }}</td>
                              <td><img src="{{ url('public/images/'. $val['image']) }}" width="100px" height="100px"></td>
                              <td><a href="{{ url('editblog/'.$val['id']) }}"><i class="far fa-edit"></i></a> | <a href="{{ url('deleteblog/'.$val['id']) }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>


                      </div>
                      {{$data->links()}}
                      <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin.include.footer')