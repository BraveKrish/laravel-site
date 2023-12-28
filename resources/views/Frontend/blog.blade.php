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
                        <h2>blog</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">blog</a></li>
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
        BLOG PAGE START
    ==================================-->
    <section class="tf__blog_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>LATEST NEWS & BLOG</h5>
                        <h2>Our latest Blog And News.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="blog_details.html">
                            <img src="images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category light_blue" href="#">design</a>
                            <a class="title" href="blog_details.html">Learn with these award winning best
                                blog collage courses</a>
                            <p>We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <a class="read_btn" href="blog_details.html">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="blog_details.html">
                            <img src="images/blog_2.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category orange" href="#">wordpress</a>
                            <a class="title" href="blog_details.html">Learn with these award winning best
                                blog collage courses</a>
                            <p>We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <a class="read_btn" href="blog_details.html">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="blog_details.html">
                            <img src="images/blog_3.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category green" href="#">english</a>
                            <a class="title" href="blog_details.html">Learn with these award winning best
                                blog collage courses</a>
                            <p>We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <a class="read_btn" href="blog_details.html">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="blog_details.html">
                            <img src="images/blog_4.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category red" href="#">UI/UX</a>
                            <a class="title" href="blog_details.html">Learn with these award winning best
                                blog collage courses</a>
                            <p>We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <a class="read_btn" href="blog_details.html">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="blog_details.html">
                            <img src="images/blog_5.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category light_blue" href="#">drawing</a>
                            <a class="title" href="blog_details.html">Learn with these award winning best
                                blog collage courses</a>
                            <p>We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <a class="read_btn" href="blog_details.html">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="blog_details.html">
                            <img src="images/blog_6.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category orange" href="#">wordpress</a>
                            <a class="title" href="blog_details.html">Learn with these award winning best
                                blog collage courses</a>
                            <p>We can provide you with a reliable hand
                                in London you need to the today.</p>
                            <a class="read_btn" href="blog_details.html">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
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
        BLOG PAGE END
    ==================================-->


    @endsection