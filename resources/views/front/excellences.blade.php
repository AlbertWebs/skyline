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
    <section class="project" style="padding: 100px;">
        <div class="container">
            <div class="row">
                <!-- Project Details Starts -->
                <div class="col-md-12">
                    <div class="project-details">

                        <hr>
                        <p>
                            {!! html_entity_decode($Ser->content, ENT_QUOTES, 'UTF-8') !!}
                        </p>

                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
        </div>
    </section>
    <!-- Project Ends -->

    {{-- Content Ends --}}
    @endforeach
@endsection