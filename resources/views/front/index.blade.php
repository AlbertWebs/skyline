@extends('front.master')
@section('content')

       <!-- Main Slider Section Starts -->
    @include('front.slider')
    <!-- Main Slider Section Ends -->
    <!-- About Section Starts -->
    <section id="about" class="about">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1><span>About</span> Us</h1>
                <h4>Be part of growth for businesses.</h4>
            </div>
            <!-- Main Heading Ends -->
            <!-- Divider Starts -->
            <div class="divider text-center">
                <span class="outer-line"></span>
                <span class="fa fa-user" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <!-- About Content Starts -->
            <div class="row about-content">
                <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                    <h3 class="title-about">WE ARE <strong>Skyline PR</strong></h3>
                    <hr>
                    <p>
                        Skyline Public Relations and Corporate Communications Agency is a trailblazing leader in the industry, recognized for our unparalleled expertise in shaping compelling narratives that leave an indelible mark.
                        Our core mission revolves around strategically positioning organizations, individuals, brands, and businesses within the ever-evolving corporate landscape.
                        {{-- We excel in helping our clients connect authentically with their stakeholders, cultivating lasting relationships that yield mutual benefits. Our unwavering commitment lies in harnessing the profound power of strategic communication and public relations to facilitate success.
                        We are steadfast in our commitment to nurturing enduring relationships built on mutual benefit, underscoring our dedication to harnessing the power of strategic communication and public relations. --}}
                    </p>
                    <!-- Tabs Heading Starts -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#mission" >Our Mission</a></li>
                        <li><a data-toggle="tab" href="#vision">Vision</a></li>
                        <li><a data-toggle="tab" href="#visionT">Long term vision</a></li>
                    </ul>
                    <!-- Tabs Heading Ends -->
                    <!-- Tabs Content Starts -->
                    <div class="tab-content">
                        <div id="mission" class="tab-pane fade in active">
                            <p>
                                To create a lasting and positive global impact on organizations in Africa by enhancing their corporate branding strategies and capabilities, thereby contributing to their growth and success on the global stage.
                            </p>
                        </div>
                        <div id="vision" class="tab-pane fade">
                            <p>
                                To be a global leader in strategic communications, helping clients build strong reputations and achieve their business goals through innovative communication and PR strategies.
                            </p>
                        </div>
                        <div id="visionT" class="tab-pane fade">
                            <p>
                                To significantly impact the economic success of businesses and organizations in Africa through corporate branding and strategic positioning, thereby enhancing brand visibility, publicity, and overall market presence.

                            </p>
                        </div>
                    </div>
                    <!-- Tabs Content Ends -->
                    <a style="color:#23527c" class="custom-button" href="{{url('/')}}/about-us">Learn more about us</a>
                </div>
                <div class="col-md-6 col-lg-6 about-right-side">
                    <div class="full-image-container hovered">
                        <img class="img-responsive hidden-xs" src="{{asset('theme/img/ICI-Career-in-Public-Relations-and-Media.jpg')}}" alt="">
                        <div class="full-image-overlay">
                            <h3>Core  <strong>Values</strong></h3>
                            <ul class="list-why-choose-us">
                                <li>Relationships</li>
                                <li>Integrity</li>
                                <li>Excellence</li>
                                <li>Service</li>
                                <li>Commitment</li>
                                <li>Advocacy</li>

                                <li>& Much More ...</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Content Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- About Section Ends -->
    <!-- Video Section Starts -->
    <section class="videopromotion">
        <div class="section-overlay">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Why</span> Choose US</h1>
                </div>
                <!-- Main Heading Ends -->
                <div class="video-content">
                    <p class="text-center" style="max-width:650px; margin:0px auto;">At Skyline Public Relations we are passionate and dedicated to creating and
                        managing corporate relationships for organizations with all their stakeholders. We
                        are constantly changing and advancing in order to fit in into the ever changing
                        market space so as to serve our clients in the best possible way.
                        Skyline Public Relations has the most qualified public relations practitioners with
                        immense skills and expertise that come in handy in the corporate field. We work to
                        understand organizations’ goals and craft the best possible plans to be enacted so
                        as to enable organizations achieve their goals and objectives.</p>

                </div>
            </div>
            <!-- Container Ends -->
        </div>
    </section>
    <!-- Video Section Ends -->
    <!-- Services Section Starts -->
    <section class="services">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1>Center of <span>Excellence</span></h1>
                <h4>A center of Excellence for Public relations</h4>
            </div>
            <!-- Main Heading Starts -->
            <!-- Divider Starts -->
            <div class="divider text-center">
                <span class="outer-line"></span>
                <span class="fa fa-cogs" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <!-- Services Starts -->
            <div class="row services-box">
                <?php $Services = DB::table('services')->limit('6')->get(); ?>
                @foreach ($Services as $item)
                <!-- Service Item Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12 text-center" style="border:3px solid #daa520; padding:10px; border-radius:10px;">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a class="img-thumb" href="{{url('/')}}/center-of-excellence/{{$item->slung}}"><img style="min-height: 245px;" class="img-responsive" src="{{url('/')}}/uploads/services/{{$item->image}}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title" style="min-height:40px;">
                                <a href="{{url('/')}}/center-of-excellence/{{$item->slung}}">{{$item->title}}</a>
                            </h4>
                            <div class="post-text">
                                <p style="min-height:102px;">
                                    {{$item->meta}}
                                </p>
                            </div>
                        </div>

                        <a style="color:#23527c" class="custom-button" href="{{url('/')}}/center-of-excellence/{{$item->slung}}">Learn More</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Service Item Ends -->
                @endforeach

            </div>
            <!-- Services Ends -->

            <center>
               <a style="color:#23527c; font-weight:700" class="custom-button text-center" href="{{url('/')}}/center-of-excellence">Explore</a>
            </center>
        </div>
    </section>
    <!-- Services Section Ends -->

    <!-- Newsletter Section Starts -->
    <section class="newsletter">
        <div class="section-overlay">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>our</span> newsletter</h1>
                    <h4>Keep in touch</h4>
                </div>
                <!-- Main Heading Ends -->
                <div class="newsletter-content">
                    <p class="text-center">Sign up to our newsletter subscription and be the first to know about<br> Important news <span> & </span> Related to our services</p>
                    <!-- Newsletter Form Starts -->
                    <form class="form-inputs">
                        <!-- Newsletter Form Input Field Starts -->
                        <div class="col-md-12 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="Enter Your Email" class="input-field custom-input-field" type="text" />
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-envelope-open-o icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <!-- Newsletter Form Input Field Ends -->
                        <!-- Newsletter Form Submit Button Starts -->
                        <button style="color:#23527c" id="submit" name="submit" type="submit" class="custom-button" title="Send">Subscribe Now</button>
                        <!-- Newsletter Form Submit Button Ends -->
                    </form>
                    <!-- Newsletter Form Ends -->
                </div>
            </div>
            <!-- Container Ends -->
        </div>
    </section>
    <!-- Newsletter Section Ends -->

    <!-- Logos Section Starts -->
    <section class="logos">
        <div class="container">
            <ul class="bxslider" id="bxslider">
                <!-- Logos Items Starts -->
                <li><img style="border: 2px solid #fce878" id="3docean" src="{{asset('theme/img/LRI-Secondary-Horz-Color-Mobile.png')}}" alt="Living Room Hospital"></li>
                <li><img style="border: 2px solid #fce878" id="3docean" src="{{asset('theme/img/IMG-20220816-WA0003-removebg-preview.png')}}" alt="Living Room Hospital"></li>
                <li><img style="border: 2px solid #fce878" id="3docean" src="{{asset('theme/img/IMG-20220816-WA0004-removebg-preview.png')}}" alt="Living Room Hospital"></li>
                <li><img style="border: 2px solid #fce878;min-height:170px" id="3docean"  src="{{asset('theme/img/image-removebg-preview-5.png')}}" alt="Living Room Hospital"></li>
                <!-- Logos Items Ends -->
            </ul>
        </div>
    </section>
    <!-- Logos Section Ends -->
    <hr>
    <!-- Blog Section Starts -->
    <section class="blog">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1><span>Blog</span> Posts</h1>
                <h4>Latest Articles</h4>
            </div>
            <!-- Main Heading Starts -->
            <!-- Divider Starts -->
            <div class="divider text-center">
                <span class="outer-line"></span>
                <span class="fa fa-comments" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <div class="row latest-posts-content">
                <?php
                     $Blog = DB::table('blogs')->get();
                ?>
                @foreach ($Blog as $blog)
                    <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a class="img-thumb" href="{{url('/')}}/articles/{{$blog->slung}}">
                            <img style="border: 2px solid #fce878" class="img-responsive" src="{{url('/')}}/uploads/blog/{{$blog->image}}" alt="img">
                        </a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="{{url('/')}}/articles/{{$blog->slung}}">{{$blog->title}}</a>
                            </h4>
                            <div class="post-text">
                                <p>{{$blog->meta}}</p>
                            </div>
                        </div>
                        <!-- Post Date Starts -->
                        <div class="post-date" >
                            <span style="color:#23527c"><?php echo  date("d", strtotime($blog->created_at)); ?></span>
                            <span style="color:#23527c"><?php echo  date("M", strtotime($blog->created_at)); ?></span>
                        </div>
                        <!-- Post Date Ends -->
                        <a class="custom-button" style="color:#23527c" href="{{url('/')}}/articles/{{$blog->slung}}">Read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->
                @endforeach
            </div>
            <!-- Latest Blog Posts Ends -->
        </div>
    </section>
    <!-- Blog Section Ends -->
@endsection
