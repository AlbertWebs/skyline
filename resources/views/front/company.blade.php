@extends('front.master')

@section('content')

   <!-- Page Wrapper Starts -->
   <div class="wrapper">

     <!-- Banner Starts -->
     <section class="banner" style="background-image: url('{{url('/')}}/uploads/public-relations-3.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center top; background-attachment: fixed;">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>About Us</h1>
                </div>
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}"> home</a></li>
                    <li>About Us</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    <!-- Banner Ends -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">


                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about">WE ARE <strong>Skyline PR</strong></h3>
                        <hr>
                        <p>
                            Skyline public relations agency is a top leading public relations and corporate branding consultancy firm that focuses on positioning organizations, individuals’ , brands and businesses in the corporate world. We believe in creating compelling stories that are impossible to forget. Relationships that are mutually beneficial to our clients’ through strategic communication and public relations.
<br>
We are guided by our expertise in research and global market analysis. This gives us an overview and deeper understanding on the target market needs that will be used in integrated marketing and communication strategies.
<br>
We work with SMEs, NGOs, Business Companies and corporations to establish a reputable brand and enhance overall organizational success. We also represent individual brands and artists who are looking to create a successful brand.
                        </p>


                        <a style="color:#23527c" class="custom-button" href="{{url('/')}}/about-us#vision">Vision and Mission</a>
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
    <!-- Project Manager Section Starts -->
    <section class="projectmanager">
        <!-- Section Overlay Starts -->
        <div class="section-overlay">
            <!-- Container Starts -->
            <div class="container">
                <div class="row">
                    <!-- Image Starts -->
                    <div class="col-lg-5 col-md-12">
                        <img class="img-responsive projectmanagerpicture" src="{{url('/')}}/uploads/team/team.jpg" alt="Ebby Adai">
                    </div>
                    <!-- Image Ends -->
                    <!-- Details Starts -->
                    <div class="col-md-12 col-lg-6 col-lg-offset-1">
                        <h1>Project Manager</h1>
                        <h3 style="text-transform: capitalize">Ms Ebby Bright Addai</h3>
                        <p>
                            I am a Certified Marketing, Public Relations Specialist and a Corporate Communication Practitioner who is passionate about marketing communications, brand communications and development as well as corporate Branding. I work with organizations and clients to build a brand that will position the organization's corporate image in the public given the rise in competition between organizations. Enhance its publicity and build its corporate brand while maximizing the digital space as well as the traditional media.
                            <br><br>
                            I am very well equipped in public speaking, persuasive communications, digital communications, corporate branding, content creation, building relationships with clients, advocacy communications, corporate social responsibility, management communications, crisis and issues management as well as executive marketing.
                            <br>
                            I like to describe myself as an intelligent, industrious, goal oriented, a risk taker and well equipped for challenging responsibilities.
                        </p>

                        <!-- Social Media Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="https://twitter.com/AddaiEbby" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="https://www.facebook.com/ebby.addai" title="facebook"></a>
                                </li>

                                <li>
                                    <a class="instagram" href="https://www.instagram.com/ebbyaddai/" title="instagram"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="https://www.linkedin.com/in/ebby-bright-605aa1157/" title="linkedin"></a>
                                </li>
                                <li>
                                    <a class="youtube" href="https://www.youtube.com/channel/UCPFPAazrtqZdUa3-QhXRF9Q" title="youtube"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media Ends -->
                    </div>
                </div>
                <!-- Details Ends -->
            </div>
            <!-- Container Ends -->
        </div>
    </section>
    <!-- Project Manager Section Ends -->


    <!-- Services Section Starts -->
    <!-- Services Section Starts -->
    <section class="services">
    <!-- Container Starts -->
    <div class="container">
        <!-- Main Heading Starts -->
        <div class="text-center top-text">
            <h1>Center of <span>Excellence</span></h1>
            <h4>What We Do</h4>
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
                    <a class="img-thumb" href="{{url('/')}}/center-of-excellence/{{$item->slung}}"><img style="min-height:245px;" class="img-responsive" src="{{url('/')}}/uploads/services/{{$item->image}}" alt="img"></a>
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
            <a style="color:#23527c" class="custom-button text-center" href="{{url('/')}}/center-of-excellence">Learn More</a>
        </center>
    </div>
    </section>
    <!-- Services Section Ends -->
    <!-- Services Section Ends -->
    <!-- Call To Action Section Starts -->
    <section class="call-to-action" id="strategy">
        <div class="section-overlay">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>PR</span> Strategies</h1>
                    {{-- <h4>get started absolutely free</h4> --}}
                </div>
                <!-- Main Heading Starts -->
                <!-- Call To Action Starts -->
                <div class="call-to-action-content">
                    <ul>
                        <li>Quality content marketing</li>
                        <li>Influencer/ Affiliate marketing</li>
                        <li>Media marketing and advertising</li>
                        <li>Social Media Marketing</li>
                        <li>digital communication e.g., SEO and websites</li>
                    </ul>
                    <a style="color:#23527c" class="custom-button" href="tel:+254710760015">Call Us Today</a>
                </div>
                <!-- Call To Action Ends -->
            </div>
            <!-- Container Ends -->
        </div>
    </section>
    <!-- facts Section Ends -->
 </div>
<!-- Wrapper Ends -->
@endsection
