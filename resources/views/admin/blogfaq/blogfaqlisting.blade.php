@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blog Faq</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blog Faq</li>
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
                        <h3 class="card-title">Blog Faq Listing</h3>

                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 30px;margin: 0 auto;">
                            <div class="input-group-append">
                            <a href="{{ route('addblogfaq')}}"><i class="far fa-plus-square"></i></a>
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
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $key => $val)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <!-- Decode the title_description JSON to get the first title -->
                              <td>
                                @php
                                  $titles = json_decode($val->title_description, true);
                                @endphp
                                @if (!empty($titles))
                                  {{ $titles[0]['title'] }} <!-- Display the first title -->
                                @else
                                  No Title
                                @endif
                              </td>
                              <td>
                                <a href="{{ url('editblogfaq/'.$val['id']) }}"><i class="far fa-edit"></i></a> | 
                                <a href="{{ url('deleteblogfaq/'.$val['id']) }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a>
                              </td>
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
