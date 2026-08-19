@include('admin.include.navbar')
<!-- Main Sidebar Container -->
@include('admin.include.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Blog</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">   
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{ route('insertblog') }}" >
                  @csrf
                  <div class="row">
                    
                      <div class="col-sm-12 form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter Title">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                      </div>
                     
                      <div class="col-sm-12 form-group">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="summernote" name="description" class="textarea"></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                      </div>
                    </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="blogimage" id="blogImage">
                            <label class="custom-file-label" for="blogImage">Choose file</label>
                        </div>
                    </div>
                      <!--<div class="form-group">-->
                      <!--  <label>File</label>-->
                      <!--  <div class="custom-file">-->
                      <!--      <input type="file" class="custom-file-input" name="blogimage" id="customFile">-->
                      <!--      <label class="custom-file-label" for="customFile">Choose file</label>-->
                      <!--  </div>-->
                      <!--</div>-->
                    </div>
                    <div class="col-sm-6">
  <div class="form-group">
    <label>Publish Date</label>
    <div class="input-group" id="reservationdate">
      <input type="text" name="publish_date" class="form-control datepicker" data-toggle="flatpickr" data-target="#reservationdate"/>
      <div class="input-group-append">
        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
      </div>
    </div>
    @if ($errors->has('publish_date'))
    <span class="text-danger">{{ $errors->first('publish_date') }}</span>
    @endif
  </div>
</div>
</div>
                 
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>URL</label>
                              <input type="text" class="form-control" name="url"  placeholder="Enter Url">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Short Description</label>
                              <input type="text" class="form-control" name="short_description"  placeholder="Enter Short Description">
                          </div>
                      </div>
                  </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="status">
                                <option value="Active" selected>Active</option>
                                <option value="InActive">InActive</option>
                              </select>
                              @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                              @endif
                            </div>
                          </div>
                        </div> 
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Meta Title</label>
                              <input type="text" class="form-control" name="meta_title"  placeholder="Enter Meta Title">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Meta Description</label>
                              <input type="text" class="form-control" name="meta_description"  placeholder="Enter Meta Description">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Og Title</label>
                              <input type="text" class="form-control" name="og_title"  placeholder="Enter Og Title">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Og Description</label>
                              <input type="text" class="form-control" name="og_description"  placeholder="Enter Og Description">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                            <label>Og Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="og_image" id="ogImage">
                                <label class="custom-file-label" for="ogImage">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>CTA Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="cta_image" id="ctaImage">
                                <label class="custom-file-label" for="ctaImage">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                              <label>CTA Link</label>
                              <input type="text" class="form-control" name="cta_link" value="{{ old('cta_link') }}" placeholder="Enter CTA Link">
                          </div>
                       </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12 form-group">
                          <label>Conclusion</label>
                          <textarea id="summernote-conclusion" name="conclusion" class="textarea">{{ old('conclusion') }}</textarea>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <label>Is Publish</label>
                          <input class="form-check-input" name="is_publish" type="checkbox">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                          <button class="form-control btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                  
                </form>
                </div>
              <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    flatpickr('.datepicker', {
      dateFormat: 'Y-m-d', // Change the format as per your ment
      allowInput: true
    });

    $('#summernote').summernote({
      height: 250
    });

    $('#summernote-conclusion').summernote({
      height: 200
    });
  });
</script>
 @include('admin.include.footer')