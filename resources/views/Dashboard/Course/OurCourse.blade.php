@php
    $current_url = $_SERVER['REQUEST_URI'];
    // $url = $_GET['url'];
    // echo $url;
    $url = $_GET['url'] ?? $current_url;
    
    // $url = strtolower($url);
    $url = explode('/',$url);

   

    if(isset($url[2])){
      $url_id = $url[2];
    }
    $section = $url[1];
    // $action = $url[2];
    // echo $action;
    // echo $section;
    // echo $id;
    // echo $url[2];
    // echo $current_url;
    // print_r($current_url);
@endphp
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
            @php
                if($current_url == '/OurCourse'):
                
            @endphp
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($data as $id => $course)
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->image_url }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->course_category }}</td>
                        <td>
                          <a href="{{ route('view.course', $course->id) }}" class="btn btn-info">View</a>
                          {{-- <a href="{{ route('course.update',$course->id) }}" class="btn btn-warning">Edit</a> --}}
                          <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <div>
                <a href="{{ route('add_course') }}">Add Course</a>
            </div>
            @php
                elseif ($current_url == "/NewCourse"):
            @endphp
            <div class="col-lg-12">
                <form action="{{ route('course.add') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="courseName" class="form-label">Course Name</label>
                      <input type="text" name="course_name" class="form-control" id="courseName" aria-describedby="courseNameHelp" required>
                      <div id="courseNameHelp" class="form-text">Enter the name of the course.</div>
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="courseCategory" class="form-label">Course Category</label>
                      <select name="course_category" class="form-select" id="courseCategory" required>
                        <option value="">Select Category</option>
                        <option value="programming">Programming</option>
                        <option value="design">Design</option>
                        <option value="business">Business</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="imageUrl" class="form-label">Image URL</label>
                      <input type="file" name="image_url" class="form-control" id="imageUrl" required>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="price" class="form-control" id="price" step="0.01" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  
            </div>
            @php
                // $id = $url[2];
                // $section = $url[1];
                // echo $section;
                elseif ($section == "OurCourse" && isset($url_id)):
            @endphp
            <div>
               {{ $course->course_name }}
            </div>

            @php
                endif;
                // elseif($section == 'OurCourse' &&  isset($url_id)):
            @endphp
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection