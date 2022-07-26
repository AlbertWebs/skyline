@extends('front.master-contact')

@section('content')

   <!-- Page Wrapper Starts -->
   <div class="wrapper">

     <!-- Banner Starts -->
     <section class="banner">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>Why PR</h1>
                </div>
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}"> home</a></li>
                    <li>Why PR</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->

    <!-- About Section Starts -->
    <section class="about">
        <!-- Container Starts -->
        <div class="container">
            <!-- About Content Starts -->
            <div class="row about-content">
                <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                    <h3 class="title-about">Why  <strong>Public relations matters</strong></h3>
                    <hr>
                    <p>
                        Public Relations provide an opportunity for brands to tell their story and establish
                        their niche to stand out in the public. PR is a management communication function aims at establishing a mutually beneficial
                        relationship between the organization and its publics.
                        <br><br>
                        The market of today has shifted from just marketing to a need for organizations to
                        establish a relationship with their target audiences to enhance brand loyalty
                        especially with the rising competitive markets. This is only achieved through
                        continuous strategic communication both internally and externally and delivering
                        value to their target markets.<br><br>
                        The different organizational audiences are constantly changing and are
                        independent. They have a general knowledge about what they want. Their
                        decisions are therefore shaped through strategic communication.<br><br>
                        Public relations play a significant role in communicating with your target
                        audiences and establishing loyalty within the competitive markets.
                    </p>
                    
                    <a style="color:#23527c" class="custom-button" href="{{url('/')}}/center-of-excellence#strategy">PR Strategies & PR Process</a>
                </div>
                <!-- Image About Us Starts -->
                <div class="col-md-6 col-lg-6 about-right-side">
                    <div>
                        <img style="border: 4px solid #fce878" class="img-responsive" src="{{asset('theme/img/ICI-Career-in-Public-Relations-and-Media.jpg')}}" alt="">
                    </div>
                </div>
                <!-- Image About Us Ends -->
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
                    <h1 ><span>Why do you need </span> Public Relations?</h1>
                </div>
                <!-- Main Heading Ends -->
                <div class="video-content">
                    <p class="text-center" style="max-width:650px; margin:0px auto;">
                        PR distinctive value lies directly in the ability to directly influence and impact the
                        overall organizational objectives of a company through the media influence in
                        support of its corporate objectives and marketing communications functions
                        <br><br>
                        Public relation is more than managing the flow of communication. It is a
                        communication discipline that engages and informs the key audiences and
                        cultivates a mutually beneficial relationship. It has a direct impact in strategic
                        organizational goals.
                    </p>

                </div>
            </div>
            <!-- Container Ends -->
        </div>
    </section>
    <!-- Video Section Ends -->

    <!-- About Section Starts -->
    <section class="about">
        <!-- Container Starts -->
        <div class="container">
            <!-- About Content Starts -->
            <div class="row about-content">
                <div class="col-sm-12 col-md-12 col-lg-12 about-left-side">
                    <h3 class="title-about">PR   <strong>Potential</strong></h3>
                    <hr>
                    <p>
                        Public Relations play an important role in managing all relations of an
                        organization. As such the integration of public relations enables an organization to
                        achieve its goals and objectives whilst maintaining mutually beneficial
                        relationships with its stakeholders.
                    </p>
                    
                    <a style="color:#23527c" class="custom-button" href="{{url('/')}}/contact-us">Contact Us</a>
                </div>
                
            </div>
            <!-- About Content Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- About Section Ends -->
     <!-- About Section Starts -->
     <section class="about">
        <!-- Container Starts -->
        <div class="container">
            <!-- About Content Starts -->
            <div class="row about-content">
                <div class="col-sm-12 col-md-12 col-lg-12 about-left-side">
                    <h3 class="title-about">Business <strong>concept/Niche</strong></h3>
                    <hr>
                    <p>
                        We establish reputations of organizations and relationships between the organizations and its stakeholders while helping organizations achieve value as defined by the target audience drawn from research and market analysis.
                        <br><br>
                        Marketing communications helps to analyze the market through identify their needs and how best the organization can work to satisfy their needs. Through strategic communication we work to communicate between organizations and its stakeholders. From time to time the market needs shift from time to time, new needs are established and, in most cases, most organizations are in complete darkness and they experience decline in customers thus most organizations remain stagnant, they fail to grow. We use Strategic communication to undertake intensive research to help organizations or clients understand the changing needs in the market place and how to satisfy the needs and cope with the increasing in competition brought upcoming companies offering the similar needs to the same market.
                        <br><br>
                        We also help companies to expand their horizon through increasing customer base through establishing and maintaining relationships with their stakeholders. 
                        <br><br>
                        The internal stakeholders play a significant role in internal marketing, they shape the perception of stakeholders towards the organization through first-hand experience on whether they should be associated with organization or not. This matters in building customer or client loyalty which is extremely important given the rising competition.
                        <br><br>
                        Organizations today have a responsibility to position themselves in the corporate world to thrive. Through corporate branding we help organizations establish a positive reputation and brand identity.
                        <br><br>
                    </p>
                    
                    <a style="color:#23527c" class="custom-button" href="{{url('/')}}/center-of-excellence">Center of Excellence</a>
                </div>
                
            </div>
            <!-- About Content Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- About Section Ends -->

   </div>

@endsection
