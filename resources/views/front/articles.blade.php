@extends('front.master-contact')

@section('content')
 <!-- Banner Starts -->
 <section class="banner">
    <div class="content text-center">
        <div class="text-center top-text">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1>blog posts</h1>
            </div> 
            <!-- Main Heading Ends -->
            <hr>
            <!-- Breadcrumb Starts -->
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"> home</a></li>
                <li>blog</li>
            </ul>
            <!-- Breadcrumb Ends -->
        </div>
    </div>
</section>
<!-- Banner Ends -->
<!-- Section Content Starts -->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="content col-xs-12 col-md-12">
                @foreach ($Blog as $blog)
                <!-- Article Starts -->
                <article class="col-md-6">
                    {{-- <a href="{{url('/')}}/articles/{{$blog->slung}}">{{$blog->title}}</a> --}}
                    <a href="{{url('/')}}/articles/{{$blog->slung}}"><h4>{{$blog->title}}</h4></a>
                    <!-- Figure Starts -->
                    <figure>
                        <a href="{{url('/')}}/articles/{{$blog->slung}}">
                            <img style="border: 2px solid #fce878" class="img-responsive" src="{{url('/')}}/uploads/blog/{{$blog->image}}" alt="img">
                        </a>
                    </figure>
                    <!-- Figure Ends -->
                    <!-- Excerpt Starts -->
                    <p class="excerpt-blog">{{$blog->meta}}</p>
                    <!-- Excerpt Ends -->
                    <a class="custom-button" style="color:#23527c" href="{{url('/')}}/articles/{{$blog->slung}}">Read more</a>
                    <!-- Meta Starts -->
                    <div class="meta">
                        <span><i class="fa fa-user"></i> <a href="#">Ebby Bright</a></span>&nbsp;
                        <span><i class="fa fa-calendar"></i> <?php echo  date("d", strtotime($blog->created_at)); ?> <?php echo  date("M", strtotime($blog->created_at)); ?> <?php echo  date("Y", strtotime($blog->created_at)); ?></span>&nbsp;
                        <span><i class="fa fa-commenting"></i> <a href="{{url('/')}}/articles/{{$blog->slung}}">18 comments</a></span>&nbsp;
                        <span><i class="fa fa-tags"></i> Public Relations, Corporate Branding</span>&nbsp;
                        <span><i class="fa fa-link"></i> <a href="{{url('/')}}/articles/{{$blog->slung}}">permalink</a></span>
                    </div>
                    <!-- Meta Ends -->
                </article>
                <!-- Article Ends -->
               @endforeach
                {{-- <nav class="col-xs-12 text-center" aria-label="Page navigation">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav> --}}
            </div>
        </div>
    </div>
</section>
<!-- Section Content Ends -->
@endsection
