<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>My Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
  
<link href="bsa_dashboard/architectui-html-free/main.css" rel="stylesheet">

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                {{-- <div class="logo-src"></div> --}}
                <a href="{{url('/')}}"><img src="theme/img/logo.png" class="img-fluid" alt="Brand samosa" width="75px" height="23px"></a>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
     
        </div>        
             
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">


                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading"></li>
                                <li>
                                    <a href="{{url('/home')}}" class="mm-active">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Welcome {{Auth::User()->name}}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/refer_friend')}}" class="">
                                        <i class="metismenu-icon pe-7s-paper-plane"></i>
                                        Refer your friend
                                    </a>
                                </li>
                        

                              
                   
                            </ul>
                        </div>
                    </div>
                </div>   
                 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                   
                                  <div>  <b> Welcome to your dashboard </b>
                                       
                                    </div>
                                </div>
                                <div class="page-title-actions">
  
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                
                                            </span>
                                            {{Auth::User()->name}}

                                            
                                        </button>


                                        
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{url('edit_profile-'.Auth::User()->id)}}" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                         <!-- Edit Profile -->
                                                        </span>
                                                    </a>
                                                </li>


                                         <li class="nav-item">
                                                 <a href="{{ route('password_reset') }}" class="nav-link" style="text-decoration:none;">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                        Change password
                                                        </span>
                                                    </a>
                                            </li>
                                           
                                            <li class="nav-item">
                                                <a href="{{ route('password_reset') }}" class="nav-link" style="text-decoration:none;">
                                                       <i class="nav-link-icon lnr-inbox"></i>
                                                       <span>
                                                            Wallet balance - Rs {{Auth::User()->credits}}
                                                       </span>
                                                   </a>
                                           </li>

                                                <li class="nav-item">
                                                 


                                                     <a href="{{ url('custom_logout') }}" class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox"></i>
                                                            <span>
                                                             Logout
                                                            </span>
                                                        </a>
                                                </li>
                                             
                                            </ul>    
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>           


                                                          
                        @if (session('success'))
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                        </div>
                       @endif           

     
   
                       <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card bg-midnight-bloom">
                                    <div class="card-body">
                                        <h4 class="text-right" style="color:yellow;font-weight:bold;">Wallet balance - {{Auth::User()->credits}}</h4><hr>
                                        <h4 style="color:white;font-weight:bold;">Learning is fun with friends</h4><hr>
            
                                        <p style="color:white;font-size:16px;">Watch chapters and <a style="color:yellow;font-size:20px;" href="{{url('my_courses')}}"><u>earn 10 credits</u></a> </p>
                                        <p style="color:white;font-size:16px;"><a style="color:yellow;font-size:20px;" href="{{url('/refer_friend')}}" ><u>Refer</u> </a>your friend to earn 100 credits. </p>
                                        <p class="pull-right" style="color:white;font-size:16px;"><b>Contact support</b> : support@nexelworld.com</p>

            
                                    </div>
                                    </div>
                              
                              
                            </div>
                          
                            
                        </div>
            
            
            
                        <hr>
                        <div class="row justify-content-center" >
                            <div class="col-md-6 col-lg-3">
            
                                <a href="{{url('my_courses')}}">
                                <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                           
                                            <div class="widget-content-left fsize-1">
                                                <div class="opacity-8 text-center"><b><span style="color:blue;">My courses</span></b></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
            
            
                            </div>
                      
                        </div>
            
            
                        <hr>




@if(count($user_course)>0)
            <div class="row" id="scroll_to">

                @foreach($user_course as $val)

                <?php
                    $course_details=\App\course::where('course_id',$val->course_id)
                                   ->first();
                ?>
                    <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper">
                                
                                    <div class="widget-content-left">
                                       <h4 style="color:whitesmoke;">{{$course_details->course_name}} </h4>                                
                                        <div class="widget-heading" style="color:white;">Duration: {{$course_details->course_duration}}</div>
                                        <div class="widget-heading" style="color:white;"><span style="font-size:15px;">Course price</span> : <strike style="color:yellow;">Rs 2999</strike></div>
                                        <div class="widget-heading" style="color:white;"><span style="font-size:15px;">Member price</span> : Free</div>
                                        
                                        <br> 
                                        
                                        <?php
                                        $course_completion_details=\App\chapters_completed_user_details::where('user_id',Auth::User()->id)
                                        ->where('course_id',$val->course_id)
                                        ->first();                                        
                                        ?>

                                        @if($course_completion_details['completion_status']==1)
                                        <button type="submit" onclick="window.location='{{ url("user_watched_courses-$course_details->course_id") }}'" class="mb-2 mr-2 btn btn-warning" value="Buy Course">Watch again</button>
                                       @else 
                                       <button type="submit" onclick="window.location='{{ url("user_watched_courses-$course_details->course_id") }}'" class="mb-2 mr-2 btn btn-warning" value="Buy Course">Watch</button>

                                       @endif
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
@else 

<div class="row justify-content-center">
<div class="col-lg-10 col-xl-10">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-center">
                    <p><b>You have not started any course yet. Choose a course below and click "watch" to start a course.</b></p>
                 
                </div>
              
            </div>
        </div>
    </div>
</div>

@endif



{{-- other courses  --}}


@if(count($course)>0)
<hr>
<h4>Explore other courses</h4>
<br>

        <div class="row">

                @foreach($course as $val)

                <?php
                    $othercourse=\App\course::where('course_id',$val->course_id)
                                ->first();
                ?>
                    <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper">
                                
                                    <div class="widget-content-left">
                                    <h4 style="color:whitesmoke;">{{$othercourse->course_name}} </h4>                                
                                        <div class="widget-heading" style="color:white;">Duration: {{$othercourse->course_duration}}</div>
                                        <div class="widget-heading" style="color:white;"><span style="font-size:15px;">Course price</span> : <strike style="color:yellow;">Rs 2999</strike></div>
                                        <div class="widget-heading" style="color:white;"><span style="font-size:15px;">Member price</span> : Free</div>
                                        <br> 

                                       <?php
                                        $course_completion_details=\App\chapters_completed_user_details::where('user_id',Auth::User()->id)
                                        ->where('course_id',$val->course_id)
                                        ->first();
                                        // echo "<pre>";print_r($course_completion_details->completion_status);
                                        
                                        ?>	

                                            @if($course_completion_details['completion_status']==1)
										
                                        <button type="submit" onclick="window.location='{{ url("user_watched_courses-$othercourse->course_id") }}'" class="mb-2 mr-2 btn btn-warning" value="Buy Course">Watch again</button>
                                   
                                            @elseif($othercourse->active==0)
                                            <button type="submit"  class="mb-2 mr-2 btn btn-warning">Coming soon</button>

                                            
                                            @else 
											<button type="submit" onclick="window.location='{{ url("user_watched_courses-$othercourse->course_id") }}'" class="mb-2 mr-2 btn btn-warning" value="Buy Course">Watch</button>

											
											@endif
								   </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

@endif



{{-- end of other courses  --}}





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(function() { 
 $('html, body').animate({
    scrollTop: $('#scroll_to').offset().top}, 1000);
}); 

</script>



                  
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="bsa_dashboard/architectui-html-free/assets/scripts/main.js"></script></body>
</html>


