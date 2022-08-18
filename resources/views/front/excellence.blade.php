@extends('front.master')

@section('content')
    <!-- Banner Starts -->
    <section class="banner">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>Center of Excellence</h1>
                </div>
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}"> home</a></li>
                    <li>Center of Excellence</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    <!-- Services Section Starts -->
    <section class="services">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                {{-- <h1>Center of <span>Excellence</span></h1> --}}
                <h4>Changing businesses conversations through PR</h4>
            </div>
            <!-- Main Heading Starts -->

            <!-- Divider Starts -->
            <div class="divider text-center">
                <span class="outer-line"></span>
                <span class="fa fa-cogs" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <p>
                <br>
            </p>
            <!-- Divider Ends -->
            <!-- Services Starts -->
            <div class="row services-box" style="margin:0 auto !important">
                <?php $Services = DB::table('services')->get(); ?>
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


        </div>
    </section>
    <!-- Services Section Ends -->
       <!-- Call To Action Section Starts -->
       <section class="call-to-action" id="strategy">
        <div class="section-overlay">
            <!-- Container Starts -->
            <div class="container">
                <div class="col-sm-12 col-md-6 col-lg-6">
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
                      
                    </div>
                    <!-- Call To Action Ends -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Key </span> to success</h1>
                        {{-- <h4>get started absolutely free</h4> --}}
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Call To Action Starts -->
                    <div class="call-to-action-content">
                        <ul>
                            <li>Research and innovation</li>
                            <li>Creativity</li>
                            <li>Professionalism</li>
                            <li>Results</li>
                        
                        </ul>
                        
                    </div>
                    <!-- Call To Action Ends -->
                </div>
                
            </div>
            <!-- Container Ends -->
            <center>
               <a style="color:#23527c" class="custom-button" href="tel:+254710760015">Call Us Today</a>
            </center>
        </div>
    </section>
    <!-- facts Section Ends -->
@endsection
