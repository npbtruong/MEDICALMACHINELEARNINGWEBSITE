<!DOCTYPE html>
<html lang="en" class="no-js one-page-layout" data-mobile-classic-layout="false" data-classic-layout="false" data-prev-animation="16" data-next-animation="15" data-random-animation="false">
<head>
    <meta charset="utf-8">
    <title>AI APP - Diagnosis of lung disease on X-ray images</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="npbtruong" name="keywords">
    <meta content="npbtruong" name="description">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="public/welcome-assets/img/icons-xray.png" href="{{ asset('assets\img\icons-xray.png') }}" />



 
<!-- FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
<!-- STYLES -->

<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/css/fonts/fontawesome-pro-6.1.1-web/css/all.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/js/nprogress/nprogress.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/css/animations.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/css/768.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('asset_db/css/dragndrop.css') }}">

<!-- INITIAL SCRIPTS -->
<script src="{{ asset('asset_db/js/jquery-1.12.1.min.js') }}"></script>
<script src="{{ asset('asset_db/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('asset_db/js/modernizr.min.js') }}"></script>


</head>
<body>

        <!-- CÁI NÀY Ở TYPE14 cái img--container này ẩn đi để chứa hình vẽ nó vẫn tồn tại chỉ là ko ai được thấy !-->
        <div id="img--container" style="position: fixed;z-index = 0; width:2000px; visibility: hidden;"></div>
        <!-- cái img--container này ẩn đi để chứa hình vẽ nó vẫn tồn tại chỉ là ko ai được thấy !-->
    <div id="coverr" class="" onclick="popout()" style="display: none"> 
        
            <img id="imageResult4" src="#" class="img-coverr" style="position: relative"> 
        
    </div>

	<!-- PAGE -->
	<div id="page" class="hfeed site">
			
            
            
        <!-- HEADER -->
        <header id="masthead" class="header" role="banner">
            
            <a class="menu-toggle toggle-link"></a>
            
            <h1 class="site-title mobile-title">ADMIN</h1>
            
            <!-- header-wrap -->
            <div class="header-wrap">
                
                <img src="{{ asset('asset_db/imagex/AVT.jpg') }}" alt="avatar">
            
                <h1 class="site-title">ADMIN</h1>
                
                <!-- NAV MENU -->
                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <div class="nav-menu">
                        <ul>
                            <li>
                                <a href="#/home">
                                    <i class="fa-light fa-hospital"></i>HOME</a>
                            </li>
                            

                            <li>
                                <a href="#/portfolio">
                                    <i class="fa-light fa-book-bookmark"></i>Library</a>
                            </li>

                            <li>
                                <a href="#/feedbackclassification">
                                    <i class="fa-light fa-image"></i>Feed Back Classification</a>
                            </li>

                            <li>
                                <a href="#/feedbackdetection">
                                    <i class="fa-sharp fa-light fa-image"></i>Feed Back Deetection</a>
                            </li>

                            <li>
                                <a href="#/blog">
                                    <i class="fa-light fa-user"></i>User</a>
                            </li>

                            
                            

                        </ul>
                    </div>
                </nav>
                <!-- NAV MENU -->
                
                
                
                
                
                <!-- header-bottom -->
                <div class="header-bottom">
                
                    <!-- SOCIAL -->
                    <ul class="social">
                        <i class="fa-light fa-copyright"></i> UTE.T
                       
                    </ul>
                    <!-- SOCIAL -->
                    
                    <!-- copy-text -->
                    <div class="copy-text">
                        <a href="{{ route('logout') }}"><p> <b> LOG OUT </b> <b class="pe-7s-close-circle"></b> </p></a>
                        
                    </div>
                    <!-- copy-text -->
                    
                </div>
                <!-- header-bottom -->
                
                
            </div>
            <!-- header-wrap -->
            
        </header>
        <!-- HEADER -->
        
        
        
        
        
        <!-- .site-main -->
      <div id="main" class="site-main"> 


        <!-- PAGE : HOME -->
          <section id="home" class="pt-page page-layout light-text home-section has-bg-img" 
          style="background-image: url('/asset_db/imagex/home-ai.jpg') !important;"
          >
                 <!-- .content -->
              <div class="content">

              <!-- page-title -->
              <h1 class="page-title">
                <i class="fa-light fa-brain-circuit" style="font-size: 80px;"></i>
             </h1>
             <!-- page-title -->

                     <!-- .layout-medium -->
                  <div class="layout-medium">
                    <!-- page-title -->
                    <h3 class="page-title">
                        <i class="fa-light fa-hospital"></i>
            
                        ADMIN PAGE
                    </h3>
                    <!-- page-title -->
                    <div class="home-css">
                    
                    <a href="#/portfolio" class="color-green"><i class="fa-light fa-book-bookmark fa-flip"></i>  Library</a> <br>
                    <a href="#/feedbackclassification" class="color-green"><i class="fa-light fa-image fa-flip"></i>  Feed Back Classification</a> <br>
                    <a href="#/feedbackdetection" class="color-green"><i class="fa-sharp fa-light fa-image fa-flip"></i> Feed Back detection</a> <br>
                    <a href="#/blog" class="color-green"> <i class="fa-light fa-user fa-flip"></i> User</a>
                    </div>
                    
                    <h4>I am an application <strong id="typist-element" data-typist="help Quick diagnosis of pneumonia., help diagnosing 14 types of lung diseases., Never stop learning from mistakes.">artificial intelligence.</strong></h4>          

                      
                     </div>
                  <!-- .layout-medium -->
              </div>
              <!-- .content -->
          </section>
        <!-- PAGE : HOME -->
          
          

           

          

          <!-- PAGE : PORTFOLIO Library -->
          <section id="portfolio" class="pt-page page-layout portfolio">
                 <!-- .content -->
              <div class="content">
                     <!-- .layout-medium -->
                    <div class="layout-medium">

                    
                        <!-- page-title -->
                        <h1 class="page-title">
                            <i class="fa-light fa-book-bookmark"></i>Library
                        </h1>
                        <!-- page-title -->


                        <!-- Library-item -->

                        <div style="display:flex; flex-wrap: wrap;" class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                            {{-- @foreach(File::glob(public_path('images').'/*') as $img)
                                
                                    <div class="media-cell illustration hentry">
                                        <div class="media-box">
                                            <img src="{{ str_replace(public_path(), '', $img) }}">
                                            <div class="mask"></div>
                                            <a href="{{ str_replace(public_path(), '', $img) }}" download></a>
                                        </div>
                                        
                                            
                                        
                                        <div class="media-cell-desc">
                                            <p>Email__D-M-Y_H-M-S</p>
                                            <p class="category">
                                                <p class="category">
                                                    @php
                                                        $img = ' ' . $img;
                                                        $ini = strpos($img, 'z_');
                                                        
                                                        $ini += strlen('z_');
                                                        $len = strpos($img, '_y', $ini) - $ini;
                                                       
                                                        $parsed = substr($img, $ini, $len);
                                                        echo $parsed;
                                                    @endphp
                                                </p>
                                            </p>
                                        </div>
                                    </div>
                                
                                
                            @endforeach --}}

                            @foreach (DB::table('feedback')->get() as $feedback)
                            @if($feedback->feedbacktext == '' && $feedback->bounding == '')
                        
                                <div class="media-cell illustration hentry">
                                    <div class="media-box">
                                        <img src="{{ $feedback->feedbackimg }}">
                                        <div class="mask"></div>
                                        <a href="{{$feedback->feedbackimg}}" download></a>
                                    </div>                     
                                    
                                    <div class="media-cell-desc">
                                        
                                            <p class="category">
                                            User email: {{$feedback->email}}
                                            </p>
                                            <p style="color: rgb(54, 159, 110)">Created: {{$feedback->created_at}}</p>

                                            <div>
                                                <a style="color:rgb(206, 114, 16);" onclick="return confirm('Are you sure you want to delete this FeedBack?')" 
            
                                                href="{{ url('deletefb/'.$feedback->id)}}">
            
                                                Delete? <i class="fa-light fa-trash-xmark"></i> </a>
                                            </div>
                                    </div>
                                </div>
                                
                             @endif
                        @endforeach

                        </div>
                        
                        <!-- Library-item -->


                    </div>
                    

				

                

                    
                </div>
              <!-- .content -->
          </section>
          <!-- PAGE : PORTFOLIO -->



        <!-- PAGE : FEED BACK CLASSIFICATION -->
            <section id="feedbackclassification" class="pt-page page-layout ">
                <!-- .content -->
            <div class="content">
                    <!-- .layout-medium -->
                <div class="layout-medium">

                
                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="fa-light fa-image"></i>Feed Back Classification</a>
                    </h1>
                    <!-- page-title -->


                    <!-- Feed Back Classification-item -->

                    <div style="display:flex; flex-wrap: wrap;" class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                        @foreach (DB::table('feedback')->get() as $feedback)
                            @if($feedback->feedbacktext != '')
                        
                                <div class="media-cell illustration hentry">
                                    <div class="media-box">
                                        <img src="{{ $feedback->feedbackimg }}">
                                        <div class="mask"></div>
                                        <a href="{{$feedback->feedbackimg}}" download></a>
                                    </div>                     
                                    
                                    <div class="media-cell-desc">
                                        
                                            <p class="category">
                                            User email: {{$feedback->email}}
                                            </p>
                                            <p style="color: rgb(54, 159, 110)">User Feedback: {{$feedback->feedbacktext}}</p>

                                            <div>
                                                <a style="color:rgb(206, 114, 16);" onclick="return confirm('Are you sure you want to delete this FeedBack?')" 
            
                                                href="{{ url('deletefb/'.$feedback->id)}}">
            
                                                Delete? <i class="fa-light fa-trash-xmark"></i> </a>
                                            </div>
                                    </div>
                                </div>
                                
                             @endif
                        @endforeach
                    </div>
                    
                    <!-- portfolio-item -->


                </div>
                

            

            

                
            </div>
            <!-- .content -->
            </section>
        <!-- PAGE : FEEBACK -->


        <!-- PAGE : FEED BACK detection -->
        <section id="feedbackdetection" class="pt-page page-layout ">
            <!-- .content -->
        <div class="content">
                <!-- .layout-medium -->
            <div class="layout-medium">

            
                <!-- page-title -->
                <h1 class="page-title">
                    <i class="fa-sharp fa-light fa-image"></i>Feed Back Detection </a>
                </h1>
                <!-- page-title -->


                <!-- Feed Back Detection-item -->

                <div style="display:flex; flex-wrap: wrap;" class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                    @foreach (DB::table('feedback')->get() as $feedback)
                    @if($feedback->bounding != '')

                    
                            <div class="media-cell illustration hentry">
                                <div class="media-box">
                                    <img src="{{ $feedback->feedbackimg }}">
                                    <div class="mask"></div>
                                    
                                    <a onclick="triggerNextLink(this)" href="{{$feedback->feedbackimg}}" download="feedback-img.png"></a>
                                    
                                </div>                     
                                
                                <div class="media-cell-desc">
                                    
                                        <p class="category">
                                        User email: {{$feedback->email}}
                                        </p>

                                        <a href="data:text/plain;charset=UTF-8,{{$feedback->bounding}}{{$feedback->size}}" download="feedback-label.txt">
                                          
                                            DownLoad Label <i class="fa-light fa-cloud-arrow-down"></i>
                                        </a>

                                        <div>
                                            <a style="color:rgb(206, 114, 16);" onclick="return confirm('Are you sure you want to delete this FeedBack?')" 
        
                                            href="{{ url('deletefb/'.$feedback->id)}}">
        
                                            Delete? <i class="fa-light fa-trash-xmark"></i> </a>
                                        </div>
                                        
                                        
                                </div>

                                
                            </div>
                            

                     @endif
                        
                    @endforeach
                </div>
                
                <!-- portfolio-item -->


            </div>
            





            
        </div>
        <!-- .content -->
        </section>
        <!-- PAGE : FEEBACK -->


          <!-- PAGE : BLOG -->
          <section id="blog" class="pt-page page-layout">
                 <!-- .content -->
              
                 <div class="content">
                    <!-- .layout-medium -->
                   <div class="layout-medium">

                   
                       <!-- page-title -->
                       <h1 class="page-title">
                        <i class="fa-light fa-user"></i>User
                       </h1>
                       <!-- page-title -->


                       <table border="3" align="center" >
                        
                        @if($message = Session::get('success'))
                        
                        <div align="center">
                            <i class="fa-light fa-user"></i>
                            {{ $message }}
                        </div>
                        
                        @endif

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Hospital</th>
                            <th>User Create At</th>
                            <th>Delete User </th>
                        </tr>
                        
                        @foreach (DB::table('users')->get() as $user)
                        @if($user->id != 1 && $user->id != 18)
                            <tr>
                                <td align="center">{{ $loop->index }}</td>
                                <td align="center">{{$user->name}}</td>
                                <td align="center">{{$user->email}}</td>
                                <td align="center">{{$user->positions}}</td>
                                <td align="center">{{$user->created_at}}</td>
                                
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete this user?')" 

                                    href="{{ url('delete/'.$user->id)}}">

                                    <i class="fa-light fa-trash-xmark"></i> </a></td>
                                </td>
                            </tr>
                        @endif
                       @endforeach
                    </table>

                    
                    
                       
                   </div>
                   
                   
               </div>
             
              <!-- .content -->
          </section>
          <!-- PAGE : BLOG -->
          





        </div>
        <!-- .site-main -->
        
        
        
        
    </div>
    <!-- PAGE -->
    
    
    
<!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
<div class="p-overlay"></div>
<div class="p-overlay"></div>


<!-- ALERT : used for contact form mail delivery alert -->
<div class="site-alert animated"></div>



    
    


<!-- SCRIPTS -->
<script src="{{ asset('asset_db/js/jquery.address-1.5.min.js') }}"></script>
<script src="{{ asset('asset_db/js/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('asset_db/js/fastclick.js') }}"></script>
<script src="{{ asset('asset_db/js/typist.js') }}"></script>

<script src="{{ asset('asset_db/js/main.js') }}"></script>
<script src="{{ asset('asset_db/js/uploadfetch.js') }}"></script>
<script src="{{ asset('asset_db/js/type14.js') }}"></script>

<script src="{{ asset('asset_db/js/triggeranddelete.js') }}"></script>


</body>
</html>