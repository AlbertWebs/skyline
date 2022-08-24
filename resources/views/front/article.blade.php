@extends('front.master-contact')

@section('content')
@foreach ($Blog as $blog)
         <!-- Banner Starts -->
         <section class="banner banner-blog-post">
            <div class="content text-center">
                <div class="text-center top-text">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1>{{$title}}</h1>
                    </div> 
                    <!-- Main Heading Ends -->
                    <hr>
                    <!-- Meta Starts -->
                    <div class="meta">
                        <span><i class="fa fa-user"></i> <a href="#">Ebby Bright</a></span> &nbsp;
                        <span><i class="fa fa-calendar"></i> <?php echo  date("d", strtotime($blog->created_at)); ?> <?php echo  date("M", strtotime($blog->created_at)); ?> <?php echo  date("Y", strtotime($blog->created_at)); ?></span> &nbsp;
                        <span><i class="fa fa-tags"></i> Public Relations, Corporate Branding</span> &nbsp;
                        <span><i class="fa fa-link"></i> <a href="{{url('/')}}/articles/{{$blog->slung}}">permalink</a></span> &nbsp;
                    </div>
                    <!-- Meta Ends -->
                </div>
            </div>
        </section>
        <!-- Banner Ends -->
        <!-- Section Content Starts -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="content col-xs-12 col-md-12">
                        <!-- Article Starts -->
                        <article>
                            <!-- Figure Starts -->
                            <figure>
                                <a href="blog-post.html">
                                    <img class="img-responsive" src="img/blog/blog-post-1.jpg" alt="">
                                </a>
                            </figure>
                            <!-- Figure Ends -->
                            <!-- Content Starts -->
                            <p class="content-article">
                                {!!html_entity_decode($blog->content)!!}    
                            </p>
                            <!-- Content Ends -->
                            <!-- Meta Starts -->
                            <div class="meta">
                                <span><i class="fa fa-user"></i> <a href="#">Ebby Bright</a></span> &nbsp;
                                <span><i class="fa fa-calendar"></i> <?php echo  date("d", strtotime($blog->created_at)); ?> <?php echo  date("M", strtotime($blog->created_at)); ?> <?php echo  date("Y", strtotime($blog->created_at)); ?></span> &nbsp;
                                <span><i class="fa fa-tags"></i> Public Relations, Corporate Branding</span> &nbsp;
                                <span><i class="fa fa-link"></i> <a href="{{url('/')}}/articles/{{$blog->slung}}">permalink</a></span> &nbsp;
                            </div>
                            <!-- Meta Ends -->
                     
                        </article>
                        <!-- Article Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Content Ends -->
@endforeach

@endsection
