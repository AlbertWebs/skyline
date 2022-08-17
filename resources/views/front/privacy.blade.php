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
                   <h1>Privacy Policy</h1>
               </div>
               <!-- Main Heading Ends -->
               <hr>
               <!-- Breadcrumb Starts -->
               <ul class="breadcrumb">
                   <li><a href="{{url('/')}}"> home</a></li>
                   <li>About Us</li>
                   <li>Privacy Policy</li>
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
                                    General Information
                                </a>
                            </h4>
                        </div>
                        <!-- Panel Heading Ends -->
                        <!-- Panel Content Starts -->
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Skyline Public Relations values the privacy of any person or organization, business in nature or otherwise. We are therefore committed to protecting any personal information collected through the www.skylinepublicrelations.com website Skyline Public Relations may from time to time change this information and will inform all interested parties of the changes.
                            </div>
                        </div>
                        <!-- Panel Content Starts -->
                    </div>
                    <!-- Panel Ends -->
                    <!-- Panel Starts -->
                    <div class="panel panel-default">
                        <!-- Panel Heading Starts -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    Policies
                                </a>
                            </h4>
                        </div>
                        <!-- Panel Heading Ends -->
                        <!-- Panel Content Starts -->
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                {{--  --}}
                                <p style=""><b><i>Personal Information Collected</i></b><br><a href="http://www.skylinepublicrelations.com" target="" rel="">skylinepublicrelations.com</a> will gather information in the background when any person or legal entity visits the <a href="http://www.skylinepublicrelations.com" target="" rel="">www.skylinepublicrelations.com</a>&nbsp; website using cookies. This may include IP address, device type, Internet browser type, operating system, location and other device specific infomation. Data collected is for business intelligence meant for enhancing user experience any time a user visits the <a href="http://www.skylinepublicrelations.com" target="" rel="">skylinepublicrelations</a>.com<br><b><i>&nbsp;Management of personal database</i></b><br>You can choose whether you wish to receive promotional communications from our web site by email using the subscribe form in the footer section of this page. If you receive promotional email or SMS messages from us and would like to opt out, you can request deletion of your email info@skylinepublicrelations.com<br><br><b><i>Contact</i></b><br>&nbsp;You have the right to review the personal data we keep about you. You can request an overview of your personal data that by emailing info@skylinepublicrelations.com with the subject line Request for personal information. To help us prevent fraudulent collection of personal information, please include a scan of your passport or identity card. If you would like us to remove your personal information from our database, please email info@skylinepublicrelations.com with the subject line Request for removal of personal information. Please bear in mind that we may need to retain certain information for legal and/or administrative purposes such as record keeping or to detect fraudulent or criminal activities.<br><br></p>
                                {{--  --}}
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
