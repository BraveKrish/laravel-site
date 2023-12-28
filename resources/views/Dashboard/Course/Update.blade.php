@extends('Dashboard.layout.dashboard-master')
<!-- Content Wrapper. Contains page content -->
@section('dashboard-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Courses</h1>
            {{-- @php
                $user = auth()->user()
            @endphp
            {{ $user->name }} --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
              {{-- <li class="breadcrumb-item"><a href="{{ route('logout') }}">Logout</a></li> --}}
              <li class="breadcrumb-item active">Our Courses</li>
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
            <div class="col-md-12">
                <form action="{{ route('update',$course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="courseName" class="form-label">Course Name</label>
                      <input value="{{ $course->course_name }}" type="text" name="course_name" class="form-control" id="courseName" aria-describedby="courseNameHelp" required>
                      <div id="courseNameHelp" class="form-text">Enter the name of the course.</div>
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3" required>{{ $course->description }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="courseCategory" class="form-label">Course Category</label>
                      <select name="course_category" class="form-select" id="courseCategory" required>
                        <option value="">Select Category</option>
                        <option value="programming" {{ $course->course_category == "programming" ? 'selected':'' }}>Programming</option>
                        <option value="design" {{ $course->course_category == "design" ? 'selected':'' }}>Design</option>
                        <option value="business" {{ $course->course_category == "business" ? 'selected':'' }}>Business</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="imageUrl" class="form-label">Image URL</label>
                      <input value="{{ $course->image_url }}" type="file" name="image" class="form-control" id="imageUrl" required>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input value="{{ $course->price }}" type="number" name="price" class="form-control" id="price" step="0.01" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection