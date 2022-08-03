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


    {{-- Content Ends --}}
    @endforeach
@endsection
