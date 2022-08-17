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
@endsection
