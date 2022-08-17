@extends('front.master')

@section('content')
<!-- Page Wrapper Starts -->
<div class="wrapper">

    <!-- Banner Starts -->
    <section class="banner">
       <div class="content text-center">
           <div class="text-center top-text">
               <!-- Main Heading Starts -->
               <div class="text-center top-text">
                   <h1>Copyright Statement</h1>
               </div>
               <!-- Main Heading Ends -->
               <hr>
               <!-- Breadcrumb Starts -->
               <ul class="breadcrumb">
                   <li><a href="{{url('/')}}"> home</a></li>
                   <li>About Us</li>
                   <li>Copyright Statement</li>
               </ul>
               <!-- Breadcrumb Ends -->
           </div>
       </div>
   </section>
   <!-- Banner Ends -->
      <!-- Section FAQ Starts -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <!-- Panel Group Starts -->
                    <div class="panel-group" id="accordion">
                        <!-- Panel Starts -->
                        <div class="panel panel-default">
                            <!-- Panel Heading Starts -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        Statement
                                    </a>
                                </h4>
                            </div>
                            <!-- Panel Heading Ends -->
                            <!-- Panel Content Starts -->
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    This website and its content is copyright of www.skylinepublicrelations.com - © www.skylinepublicrelations.com 2022. All rights reserved. Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:<br>

You may print or download to a local hard disk extracts for your personal and non-commercial use only you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material
<br>
You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.
                                </div>
                            </div>
                            <!-- Panel Content Starts -->
                        </div>
                        <!-- Panel Ends -->
                    
                    </div>
                    <!-- Panel Group Ends -->
                </div>
                <!-- Sidebar Starts -->
            </div>
        </div>
    </section>
    <!-- Section FAQ Ends -->

</div>

@endsection


