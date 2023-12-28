@extends('Dashboard.layout.dashboard-master')
<!-- Content Wrapper. Contains page content -->
@section('dashboard-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blogs</h1>
            {{-- @php
                $user = auth()->user()
            @endphp
            {{ $user->name }} --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
              {{-- <li class="breadcrumb-item"><a href="{{ route('logout') }}">Logout</a></li> --}}
              <li class="breadcrumb-item active">Our Blogs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div id="blogModal" class="col-md-12">
                {{-- <a class="btn btn-info my-3" href="">Add Course</a> --}}
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBlogModal">
                    Add Blog
                </button>

                <div id="show_all_blog" class="col-md-12">
                  <h2>Display all blogs</h2>
                </div>
  
               


                  <!-- Modal -->
                <div class="modal fade" id="addBlogModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addBlogModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="errors" class="alert alert-danger" style="display: none;">
                          <ul></ul>
                        </div>

                        <div class="errorMsgContainer">

                        </div>
                          <form action="{{route('blog.add')}}" method="post" id="add_blog_form" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                <label for="blog_title" class="form-label">Blog Title</label>
                                <input type="text" name="blog_title" class="form-control" id="blog_title" aria-describedby="courseNameHelp">
                                <span class="text-danger error-text blog_title_error"></span>
                                <div id="courseNameHelp" class="form-text">Enter the title of the blog.</div>
                              </div>
                              <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" ></textarea>
                                <span class="text-danger error-text description_error"></span>
                              </div>
                              <div class="mb-3">
                                <label for="blog_category" class="form-label">Course Category</label>
                                <select name="blog_category" class="form-select" id="blog_category" >
                                  <option value="">Select Category</option>
                                  <option value="programming">Programming</option>
                                  <option value="design">Design</option>
                                  <option value="business">Business</option>
                                  <!-- Add more options as needed -->
                                </select>
                                <span class="text-danger error-text blog_category_error"></span>
                              </div>
                              <div class="mb-3">
                                <label for="image" class="form-label">Image URL</label>
                                <input type="file" name="image" class="form-control" id="image" >
                                <span class="text-danger error-text image_error"></span>
                              </div>
                              <button type="submit" class="btn btn-primary blog-save" id="add_blog_btn">Add Blog</button>
                            </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script>
    // fetchAll();
    const blogFetch = "{{ route('allBlog') }}"
    const blogAddUrl = "{{ route('blog.add') }}";
  </script>
@endsection





