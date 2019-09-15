@extends('layout.site')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>
@endsection
@section('wrapper')


    @include('inc.slider')
    <div class="section bgcolor noover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message">
                        <h3><mark class="rotate">Hello, Bonjour, Merhaba</mark> we are Genius, we have brought together the best quality services, offers, projects for you!</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section lb nopadtop noover">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="service-box m30">
                        <i class="flaticon-monitor"></i>
                        <h3>Outstanding design</h3>
                        <p>Designed to be flexible according to all your needs. Create your site with all module position.</p>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="service-box m30">
                        <i class="flaticon-technology"></i>
                        <h3>Responsive Layout</h3>
                        <p>Genius template can be easily viewed on any mobile device. Smoothly responsive.</p>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="service-box m30">
                        <i class="flaticon-gears"></i>
                        <h3>Easy to use</h3>
                        <p>The modules we have prepared are simple to use. No code information is needed.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="text-widget">
                        <h3>Powerful template features</h3>

                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in <a href="#">semper vel</a>, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringill torquent per conubia nostra.</p>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                <ul class="check">
                                    <li>Custom Shortcodes</li>
                                    <li>Visual Page Builder</li>
                                    <li>Unlimited Shortcodes</li>
                                    <li>Responsive Theme</li>
                                    <li>Tons of Layouts</li>
                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="check">
                                    <li>Font Awesome Icons</li>
                                    <li>Pre-Defined Colors</li>
                                    <li>AJAX Transitions</li>
                                    <li>High Quality Support</li>
                                    <li>Unlimited Options</li>
                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                <ul class="check">
                                    <li>Shopping Layouts</li>
                                    <li>Pre-Defined Fonts</li>
                                    <li>Style Changers</li>
                                    <li>Footer Styles</li>
                                    <li>Header Styles</li>
                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                        </div><!-- end row -->
                    </div><!-- end widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="perspective-image hidden-sm hidden-xs hidden-md">
            <img src="images/upload/p1.jpg" alt="" class="img-responsive">
        </div>
    </section>

    <section class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Recent Works</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class="case-top clearfix">
                <div class="pull-left hidden-xs">
                    <p>Showing 1–12 of 24 results</p>
                </div><!-- end col -->

                <div class="pull-right">
                    <div class="dropdown portfolio-filter">
                        <button class="btn btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Product Filter
                            <span class="fa fa-angle-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a class="active" href="#" data-filter="*">All Projects</a></li>
                            <li><a class="" href="#" data-filter=".cat1">Web Design</a></li>
                            <li><a class="" href="#" data-filter=".cat2">Motion Design</a></li>
                            <li><a class="" href="#" data-filter=".cat3">Graphic Design</a></li>
                            <li><a class="" href="#" data-filter=".cat4">Development</a></li>
                        </ul>
                    </div><!-- end dropdown -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio row with-desc">
                        <div class="post-media pitem item-w1 item-h1 cat1">
                            <div class="entry">
                                <img src="images/upload/desc_work_01.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Plumeria Logo Design</a></h4>
                                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sed. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat2">
                            <div class="entry">
                                <img src="images/upload/desc_work_02.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Back to Life</a></h4>
                                <p>Aliquam erat volutpat. Donec pharetra imperdiet metus, eget cras.</p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat3">
                            <div class="entry">
                                <img src="images/upload/desc_work_03.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Creative Share App</a></h4>
                                <p>Aenean consectetur semper lorem, sit amet volutpat. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat4">
                            <div class="entry">
                                <img src="images/upload/desc_work_04.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Luana 3D Max</a></h4>
                                <p>Nunc vitae metus sagittis, pharetra risus non, luctus ligula volutpat. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat1">
                            <div class="entry">
                                <img src="images/upload/desc_work_05.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Custom M Logo</a></h4>
                                <p>Proin non mollis orci, quis maximus nisi. In imperdiet neque eu metus. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat2">
                            <div class="entry">
                                <img src="images/upload/desc_work_06.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Internal App Project</a></h4>
                                <p>Etiam fermentum, urna sed varius aliquet, sem enim ultrices arcu amet. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat3">
                            <div class="entry">
                                <img src="images/upload/desc_work_07.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Audio Player App</a></h4>
                                <p>Ut convallis mollis est, eu tincidunt magna varius dignissim. Sed sed.</p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat4">
                            <div class="entry">
                                <img src="images/upload/desc_work_08.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Geek Vector Design</a></h4>
                                <p>Ut porttitor aliquet auctor. Donec pellentesque libero et mattis amet. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat1">
                            <div class="entry">
                                <img src="images/upload/desc_work_09.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Sweet Admin Dashboard</a></h4>
                                <p>Aliquam quis euismod metus, vitae iaculis ipsum. Aliquam non enim sed.</p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat1">
                            <div class="entry">
                                <img src="images/upload/desc_work_10.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Smooth Keyboard Design</a></h4>
                                <p>Nunc aliquet mi ante. Nulla magna ante, porttitor in sagittis posuere. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat2">
                            <div class="entry">
                                <img src="images/upload/desc_work_11.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Click Smart App</a></h4>
                                <p>Vivamus mattis sit amet ipsum vitae pretium. Proin vitae nulla nullam. </p>
                            </div>
                        </div><!-- end post-media -->

                        <div class="post-media pitem item-w1 item-h1 cat3">
                            <div class="entry">
                                <img src="images/upload/desc_work_12.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a class="golink" href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="item-desc">
                                <h4><a href="#">Gabfire Vector Logo</a></h4>
                                <p>Maecenas nisl magna, ultricies lobortis tortor vel, dapibus cras amet. </p>
                            </div>
                        </div><!-- end post-media -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <div class="section bgcolor noover">
        <div class="container-fluid">
            <div class="client-box">
                <img src="images/upload/client_01.png" alt="" class="img-responsive">
            </div><!-- end col -->

            <div class="client-box">
                <img src="images/upload/client_02.png" alt="" class="img-responsive">
            </div><!-- end col -->

            <div class="client-box">
                <img src="images/upload/client_03.png" alt="" class="img-responsive">
            </div><!-- end col -->

            <div class="client-box">
                <img src="images/upload/client_04.png" alt="" class="img-responsive">
            </div><!-- end col -->

            <div class="client-box">
                <img src="images/upload/client_05.png" alt="" class="img-responsive">
            </div><!-- end col -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Case Studies</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                <div class="item">
                    <img src="images/upload/work_03.jpg" alt="" class="img-responsive">
                    <div class="magnifier">
                        <div class="magni-desc">
                            <h4>
                                <a href="#">Website Template</a>
                                <small>in: websites</small>
                            </h4>
                            <a class="goitem" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/upload/work_04.jpg" alt="" class="img-responsive">
                    <div class="magnifier">
                        <div class="magni-desc">
                            <h4>
                                <a href="#">CSS3 Animation</a>
                                <small>in: animations</small>
                            </h4>
                            <a class="goitem" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/upload/work_01.jpg" alt="" class="img-responsive">
                    <div class="magnifier">
                        <div class="magni-desc">
                            <h4>
                                <a href="#">Mockup Template</a>
                                <small>in: mockups</small>
                            </h4>
                            <a class="goitem" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/upload/work_02.jpg" alt="" class="img-responsive">
                    <div class="magnifier">
                        <div class="magni-desc">
                            <h4>
                                <a href="#">Mockup Template</a>
                                <small>in: css3</small>
                            </h4>
                            <a class="goitem" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>

    <section class="section parallax" data-stellar-background-ratio="0.6" style="background-image:url('images/upload/parallax_01.jpg');">
        <div class="container">
            <div class="section-title light-color text-center">
                <h3>Working Process</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-box">
                        <div class="process-front text-center">
                            <i class="flaticon-lightbulb-idea"></i>
                            <h3>We plan properly</h3>
                        </div><!-- end front -->

                        <div class="process-end text-center">
                            <h3>Result</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div><!-- end end -->
                    </div><!-- end process -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="process-box">
                        <div class="process-front text-center">
                            <i class="flaticon-computer"></i>
                            <h3>We start project</h3>
                        </div><!-- end front -->

                        <div class="process-end text-center">
                            <h3>Result</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div><!-- end end -->
                    </div><!-- end process -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="process-box">
                        <div class="process-front text-center">
                            <i class="flaticon-people"></i>
                            <h3>We showcase work</h3>
                        </div><!-- end front -->

                        <div class="process-end text-center">
                            <h3>Result</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div><!-- end end -->
                    </div><!-- end process -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="process-box">
                        <div class="process-front text-center">
                            <i class="flaticon-smiley"></i>
                            <h3>You'll be happy</h3>
                        </div><!-- end front -->

                        <div class="process-end text-center">
                            <h3>Result</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div><!-- end end -->
                    </div><!-- end process -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Latest News</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu.</p>
            </div><!-- end title -->

            <div class="row text-center">
                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="#"><img src="images/upload/blog_01.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end media -->

                        <div class="blog-desc">
                            <h4><a href="#">The most suitable web design</a></h4>
                            <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">21 March 2017</a></li>
                                <li><a href="#">by HTML Design</a></li>
                                <li><a href="#">14 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="#"><img src="images/upload/blog_02.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end media -->

                        <div class="blog-desc">
                            <h4><a href="#">The most suitable web design</a></h4>
                            <p>Sed suscipit neque in erat posuere tristique aliquam porta vestibulum. Cras placerat tincidunt. </p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">20 March 2017</a></li>
                                <li><a href="#">by HTML Design</a></li>
                                <li><a href="#">11 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="#"><img src="images/upload/blog_03.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end media -->

                        <div class="blog-desc">
                            <h4><a href="#">Design for all mobile devices</a></h4>
                            <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui vivamus. </p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">19 March 2017</a></li>
                                <li><a href="#">by HTML Design</a></li>
                                <li><a href="#">44 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>

    <section class="section bgcolor">
        <div class="container">
            <a href="#">
                <div class="row callout">
                    <div class="col-md-4 text-center">
                        <h3><sup>$</sup>49.99</h3>
                        <h4>Start your awesome project today!</h4>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead">Limited time offer! Your Agency profile will be added to our "Agencies" directory as well. </p>
                    </div>
                </div><!-- end row -->
            </a>
        </div><!-- end container -->
    </section>

    <footer class="section footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="widget clearfix">
                        <div class="newsletter-widget">
                            <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy policy</a>.</p>
                            <form class="form-inline" role="search">
                                <div class="form-1">
                                    <input type="text" class="form-control" placeholder="Enter email here..">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </form>
                        </div><!-- end newsletter -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-4">
                    <div class="widget clearfix">
                        <div class="list-widget">
                            <ul>
                                <li><a href="page-about.html">About us</a></li>
                                <li><a href="page-about-me.html">About me</a></li>
                                <li><a href="page-services.html">Our Services</a></li>
                                <li><a href="page-team.html">Our Team</a></li>
                                <li><a href="page-contact-01.html">Contact us</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-4">
                    <div class="widget clearfix">
                        <div class="list-widget">
                            <ul>
                                <li><a href="page-contact-02.html">Get In Touch</a></li>
                                <li><a href="page-faqs.html">FAQ's</a></li>
                                <li><a href="page-testimonials.html">Testimonials</a></li>
                                <li><a href="page-elements-html">Elements</a></li>
                                <li><a href="page-404.html">Not Found</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-4">
                    <div class="widget clearfix">
                        <div class="list-widget">
                            <ul>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                                <li><a href="shop-cart.html">Shopping Cart</a></li>
                                <li><a href="shop-account.html">My Account</a></li>
                                <li><a href="shop-login.html">Login / Register</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="section copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="cop-logo">
                        <img src="images/logo-normal.png" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 text-right">
                    <div class="cop-links">
                        <ul class="list-inline">
                            <li>&copy; 2018 Genius | Design: <a href="https://html.design">HTML Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection