@extends('Frontend.layout.frontend-master')

@section('body')
    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>courses</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=================================
        COURSES PAGE START
    ==================================-->
    <section class="tf__courses_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>OUR POPULAR COURSES</h5>
                        <h2>Educational For Students Popular Courses.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_courses">
                        <div class="tf__single_courses_img">
                            <img src="{{ asset('images/'.$course->image_url) }}" alt="courses" class="img-fluid w-100">
                            <a class="categories orange" href="#">{{ $course->course_category }}</a>
                            <span>${{ $course->price}}</span>
                        </div>
                        <ul class="tf__single_course_header">
                            <li><i class="fas fa-user"></i> smith jhon</li>
                            <li><i class="fas fa-folder-open"></i> 14 lessons</li>
                        </ul>
                        <div class="tf__single_courses_text">
                            <a class="title" href="{{ route('courses.details',$course->slug) }}">{{ $course->course_name }}</a>
                            <p class="description">{{ $course->description }}</p>
                            <ul>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(04)</span>
                                </li>
                                <li>50+ students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_courses">
                        <div class="tf__single_courses_img">
                            <img src="images/courses_img_2.jpg" alt="courses" class="img-fluid w-100">
                            <a class="categories green" href="#">english</a>
                            <span>$65.00</span>
                        </div>
                        <ul class="tf__single_course_header">
                            <li><i class="fas fa-user"></i> hasan mahamud</li>
                            <li><i class="fas fa-folder-open"></i> 23 lessons</li>
                        </ul>
                        <div class="tf__single_courses_text">
                            <a class="title" href="courses_details.html">Learn Photography</a>
                            <p class="description">We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(20)</span>
                                </li>
                                <li>94+ students</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_courses">
                        <div class="tf__single_courses_img">
                            <img src="images/courses_img_3.jpg" alt="courses" class="img-fluid w-100">
                            <a class="categories red" href="#">design</a>
                            <span>$99.00</span>
                        </div>
                        <ul class="tf__single_course_header">
                            <li><i class="fas fa-user"></i> khalid hasan</li>
                            <li><i class="fas fa-folder-open"></i> 40 lessons</li>
                        </ul>
                        <div class="tf__single_courses_text">
                            <a class="title" href="courses_details.html">Advance Wordpress</a>
                            <p class="description">We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(42)</span>
                                </li>
                                <li>72+ students</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_courses">
                        <div class="tf__single_courses_img">
                            <img src="images/courses_img_4.jpg" alt="courses" class="img-fluid w-100">
                            <a class="categories blue" href="#">UI/UX</a>
                            <span>$75.00</span>
                        </div>
                        <ul class="tf__single_course_header">
                            <li><i class="fas fa-user"></i> sazal ahmed</li>
                            <li><i class="fas fa-folder-open"></i> 40 lessons</li>
                        </ul>
                        <div class="tf__single_courses_text">
                            <a class="title" href="courses_details.html">The Complete Financial Analyst</a>
                            <p class="description">We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(57)</span>
                                </li>
                                <li>72+ students</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_courses">
                        <div class="tf__single_courses_img">
                            <img src="images/courses_img_5.jpg" alt="courses" class="img-fluid w-100">
                            <a class="categories orange" href="#">drowing</a>
                            <span>$50.00</span>
                        </div>
                        <ul class="tf__single_course_header">
                            <li><i class="fas fa-user"></i> smith jhon</li>
                            <li><i class="fas fa-folder-open"></i> 14 lessons</li>
                        </ul>
                        <div class="tf__single_courses_text">
                            <a class="title" href="courses_details.html">Development Theory Learn</a>
                            <p class="description">We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(04)</span>
                                </li>
                                <li>50+ students</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_courses">
                        <div class="tf__single_courses_img">
                            <img src="images/courses_img_6.jpg" alt="courses" class="img-fluid w-100">
                            <a class="categories green" href="#">english</a>
                            <span>$65.00</span>
                        </div>
                        <ul class="tf__single_course_header">
                            <li><i class="fas fa-user"></i> hasan mahamud</li>
                            <li><i class="fas fa-folder-open"></i> 23 lessons</li>
                        </ul>
                        <div class="tf__single_courses_text">
                            <a class="title" href="courses_details.html">Learn Photography</a>
                            <p class="description">We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(20)</span>
                                </li>
                                <li>94+ students</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="tf__pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="far fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="far fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        COURSES PAGE END
    ==================================-->


    @endsection