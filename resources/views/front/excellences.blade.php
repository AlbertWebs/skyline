@extends('front.master')

@section('content')

@foreach ($Service as $Ser)


    <!-- Banner Starts -->
    <section class="banner">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>{{$Ser->title}}</h1>
                </div>
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}"> home</a></li>
                    <li><a href="{{url('/')}}/center-of-excellence"> Center of Excellence</a></li>
                    <li>{{$Ser->title}}</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    {{-- Content Start --}}

	<!-- Project Starts -->
    {{-- <section class="project" style="padding: 100px;">
        <div class="container">
            <div class="row">
             
                <div class="col-md-12">
                    <div class="project-details">

                        <hr>
                        <p>
                            {!! html_entity_decode($Ser->content, ENT_QUOTES, 'UTF-8') !!}
                        </p>

                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}

    <section class="project" style="padding: 100px;">
        <div class="row services-box" style="margin:0 auto !important">

            <!-- Service Item Starts -->
            <div class="col-sm-12 col-md-8 col-xs-12 text-center" style="border:3px solid #daa520; padding:10px; border-radius:10px; margin:0 auto;">
                <div class="latest-post" style="margin:0 auto !important">
                    <!-- Featured Image Starts -->
                    <a class="img-thumb" href="{{url('/')}}/center-of-excellence/{{$Ser->slung}}"><img class="img-responsive" src="{{url('/')}}/uploads/services/{{$Ser->image}}" alt="img"></a>
                    <!-- Featured Image Ends -->
                    <!-- Article Content Starts -->
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="{{url('/')}}/center-of-excellence/{{$Ser->slung}}">{{$Ser->title}}</a>
                        </h4>
                        <div class="post-text">
                            <p>
                                {!! html_entity_decode($Ser->content, ENT_QUOTES, 'UTF-8') !!}
                            </p>
                        </div>
                    </div>

                    {{-- <a style="color:#23527c" class="custom-button" href="{{url('/')}}/center-of-excellence/{{$Ser->slung}}">Learn More</a> --}}
                    <!-- Article Content Ends -->
                </div>
            </div>


        </div>
    </section>
    <!-- Services Ends -->



    <!-- Project Ends -->

    {{-- Content Ends --}}
    @endforeach
@endsection
