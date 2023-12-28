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
                <a class="btn btn-info my-3" href="{{ route('Add') }}">Add Course</a>
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
                        <td>
                          <img height="50px" width="auto" src="{{ asset('images/'.$course->image_url) }}" alt="">
                        </td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->course_category }}</td>
                        <td>
                          <a href="{{ route('view.course', $course->id) }}" class="btn btn-info">View</a>
                          <a href="{{ route('course.update',$course->id) }}" class="btn btn-warning">Edit</a>
                          <a href="{{ route('course.delete',$course->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection