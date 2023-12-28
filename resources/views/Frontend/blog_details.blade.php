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
                        <h2>blog details</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">blog details</a></li>
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
        BLOG DETAILS PAGE START
    ==================================-->
    <section class="tf__blog_details_page mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="tf__blog_details_area">
                        <div class="tf__blog_details_img wow fadeInUp" data-wow-duration="1.5s">
                            <img src="images/blog_details_img.jpg" alt="blog details" class="img-fluid w-100">
                        </div>
                        <div class="tf__blog_details_text wow fadeInUp" data-wow-duration="1.5s">
                            <ul class="date d-flex flex-wrap">
                                <li><i class="far fa-user-edit"></i> jhon deo</li>
                                <li><i class="fal fa-calendar-alt"></i> 30 Jan 2023</li>
                            </ul>
                            <h3>Learn with these award winning best collage study for blog collage courses best.</h3>
                            <p>Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed
                                do eiusmod tempor incididunt ut abore et dolore magna aliqua lonm andhn is a long to
                                fors established fact that a reader will be distracted by the readable content.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum,bean
                                you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                                necessary, making this the first true generator on the Internet. </p>
                            <div class="tf__details_quot_text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, oris ut. In interdum sem quis
                                    congue accumsan. Pellentesque convallis scelerisque eros. Etiam vestibulum ultricies
                                    finibus. . Nunc ac sem sit amet purus luctus lobortis dui inorci.</p>
                                <h4>Porata Masat</h4>
                                <h5>Devlopment</h5>
                            </div>
                            <div class="tf__blog_details_center_img">
                                <img src="images/blog_details_center_img.jpg" alt="blog details"
                                    class="img-fluid w-100">
                            </div>
                            <p>Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit
                                eiusmod tempor incididunt ut abore et dolore magna aliqua lonm andhn is a lon
                                established fact that a reader will be distracted by the readable content</p>
                            <ul class="list">
                                <li>Business school's Institut constructivism.</li>
                                <li>We give management school best.</li>
                                <li>Media in this school solution.</li>
                            </ul>
                        </div>
                        <div class="tf__blog_comment mt_60 wow fadeInUp" data-wow-duration="1.5s">
                            <h3>Comments (3)</h3>
                            <div class="tf__single_comment">
                                <div class="tf__single_comment_img">
                                    <img src="images/client_img_1.png" alt="client" class="img-fluid w-100">
                                </div>
                                <div class="tf__single_comment_text">
                                    <h4>Rubel Merat</h4>
                                    <p>Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing
                                        elit sed do iusmod tempor incididu.</p>
                                    <span>31 jan 2023 at 03.16 pm <a href="#">reply</a></span>
                                </div>
                            </div>
                            <div class="tf__single_comment reply">
                                <div class="tf__single_comment_img">
                                    <img src="images/client_img_2.png" alt="client" class="img-fluid w-100">
                                </div>
                                <div class="tf__single_comment_text">
                                    <h4>Korat Berata</h4>
                                    <p>Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing
                                        elit sed do iusmod tempor incididu.</p>
                                    <span>31 jan 2023 at 03.16 pm <a href="#">reply</a></span>
                                </div>
                            </div>
                            <div class="tf__single_comment">
                                <div class="tf__single_comment_img">
                                    <img src="images/client_img_3.png" alt="client" class="img-fluid w-100">
                                </div>
                                <div class="tf__single_comment_text">
                                    <h4>Norat Berata</h4>
                                    <p>Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing
                                        elit sed do iusmod tempor incididu.</p>
                                    <span>31 jan 2023 at 03.16 pm <a href="#">reply</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="tf__comment_reply mt_65 wow fadeInUp" data-wow-duration="1.5s">
                            <h3>leave a Comment</h3>
                            <form>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea rows="5" placeholder="Comment..."></textarea>
                                        <button type="submit">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_search">
                            <form>
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="tf__sidebar_certificate">
                            <span><i class="fas fa-share-alt"></i></span>
                            <h3>Online Certificates</h3>
                            <p>We can provide you with a reliable handyan in London. you need to
                                included the today.</p>
                            <a href="#"><i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <div class="tf__sidebar_blog sidebar_item">
                            <h3>Recent Post</h3>
                            <ul>

                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_blog_1.jpg" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="far fa-calendar-alt"></i> 31 jan 2023</p>
                                        <a href="#">Promote blog posts udied product.</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_blog_2.jpg" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="far fa-calendar-alt"></i> 31 jan 2023</p>
                                        <a href="#">Dramatically business engage.</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_blog_3.jpg" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="far fa-calendar-alt"></i> 31 jan 2023</p>
                                        <a href="#">Dramatically business engage.</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="tf__sidebar_category sidebar_item">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#"> Business <span>(08)</span></a></li>
                                <li><a href="#"> Maintenance <span>(14)</span></a></li>
                                <li><a href="#"> Professional <span>(20)</span></a></li>
                                <li><a href="#"> Technology<span>(29)</span></a></li>
                                <li><a href="#"> Single-Business<span>(32)</span></a></li>
                                <li><a href="#"> Innovation <span>(22)</span></a></li>
                            </ul>
                        </div>
                        <div class="tf__sidebar_tags sidebar_item pr_10">
                            <h3>Tag</h3>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#">design</a></li>
                                <li><a href="#">service</a></li>
                                <li><a href="#">top</a></li>
                                <li><a href="#">help</a></li>
                                <li><a href="#">new</a></li>
                                <li><a href="#">best</a></li>
                                <li><a href="#">UI/UX</a></li>
                                <li><a href="#">sound</a></li>
                            </ul>
                        </div>
                        <div class="tf__sidebar_apply">
                            <img src="images/sidebar_img.jpg" alt="apply" class="img-fluid w-100">
                            <a href="#">apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BLOG DETAILS PAGE END
    ==================================-->


    @endsection