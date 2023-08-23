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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
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
            
            <h1 class="site-title mobile-title">{{ Auth::user()->name  }}</h1>
            
            <!-- header-wrap -->
            <div class="header-wrap">
                
                <img src="{{ asset('asset_db/imagex/AVT.jpg') }}" alt="avatar">
            
                <h1 class="site-title">{{ Auth::user()->name  }}</h1>
                
                <!-- NAV MENU -->
                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <div class="nav-menu">
                        <ul>
                            <li>
                                <a href="#/homepage">
                                    <i class="fa-light fa-hospital"></i>HOME</a>
                            </li>
                            
                            <li>
                                <a href="#/viemphoi">
                                    <i class="fa-light fa-lungs-virus"></i>PNEUMONIA</a>
                            </li>

                            <li>
                                <a href="#/benhphoi">
                                    <i class="fa-light fa-lungs"></i>Types of lung diseases</a>
                            </li>

                            <li>
                                <a href="#/ctscan">
                                    <i class="fa-light fa-person-circle-xmark"></i>lung cancer</a>
                            </li>

                            <li>
                                <a href="#/portfolio">
                                    <i class="fa-light fa-book-bookmark"></i>Library</a>
                            </li>


                            <li>
                                <a href="#/blog">
                                    <i class="fa-light fa-message-exclamation"></i>Feed Back Library</a>
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
          <section id="homepage" class="pt-page page-layout light-text home-section has-bg-img" 
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
            
                        HOME PAGE
                    </h3>
                    <!-- page-title -->
                    <div class="home-css">
                    <a href="#/viemphoi" class="color-green"><i class="fa-light fa-lungs-virus fa-flip"></i>  Quick diagnosis of pneumonia</a> <br>
                    <a href="#/benhphoi" class="color-green"><i class="fa-light fa-lungs fa-flip"></i> Diagnosing 14 types of lung diseases  </a> <br>
                    <a href="#/ctscan" class="color-green"><i class="fa-light fa-person-circle-xmark fa-flip"></i>  Quick diagnosis of lung cancer by CT-SCAN</a> <br>
                    <a href="#/portfolio" class="color-green"><i class="fa-light fa-book-bookmark fa-flip"></i>  Library</a> <br>
                    <a href="#/blog" class="color-green"><i class="fa-light fa-message-exclamation fa-flip"></i>  Feed Back Library</a>
                    </div>
                    
                    <h4>I am an application <strong id="typist-element" data-typist="help Quick diagnosis of pneumonia., help diagnosing 14 types of lung diseases., Never stop learning from mistakes.">artificial intelligence.</strong></h4>          

                      
                     </div>
                  <!-- .layout-medium -->
              </div>
              <!-- .content -->
          </section>
        <!-- PAGE : HOME -->
          
          





        <!-- PAGE : viemphoi -->

           <section id="viemphoi" class="pt-page page-layout">


            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
             <div class="layout-medium">
               
               
                 <!-- page-title -->
                 <h1 class="page-title">
                    <i class="fa-light fa-lungs-virus"></i>

                    Clinical Diagnosis <br> 
                    of Pneumonia
                 </h1>
                 <!-- page-title -->
                       
               <div class="center">    
                   
                   
                    <div class="row " style="margin-top: 28.8px;">
                                

                        <div class="col-sm-6 border">
                            
                            <!-- Upload image input-->
                            <form action="/" method="POST" enctype="multipart/form-data" id='formID'>
                                <input id="upload" type="file" name="file" onchange="readURL(this);" accept="image/png, image/jpg, image/jpeg">
                            </form>
                               
                            <button id="uploadbtn">START PREDICT</button> 
                            <p style="margin-top: 5px;">"Please use unblurred X-ray images in Jpeg,Png... up to 2mb in size."
                            </p>

                            <!-- Uploaded image area-->
                            
                            <div class="image-area">
                                <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                            </div>

                        </div>




                        <div class="col-sm-6">    
                                                     
                            <div style="font-weight: 700; font-size:25px;"> <i class="fa-light fa-chart-simple"></i> Diagnostic Result: </div>
                            
                            <div>Are you satisfied with the diagnostic results?</div>
                            <div>
                                
                                <button id="popup_fb">NO - HELP US</button>
            
                            </div>

                            <div id="fb_form" style="display:none;">
                                <form action="{{ route('sample.feedback_table') }}" method="POST" style="display: flex;justify-content:center;" >
                                    @csrf
                                    <div style="margin: 2px">
                                        <input type="text" name="feedbacktext"  placeholder="Your Prediction?" required/>

                                        
                                    </div>
                                    <div style="max-width:1px; visibility: hidden;">
                                        <input id="fb_img" type="text" name="feedbackimg"  required/>
                                    </div>

                                    <div style="max-width:1px; visibility: hidden;">
                                        <input  type="text" name="email" value="{{ Auth::user()->email }}" required/>
                                    </div>
                                    
                                    <div style="margin: 2px ; padding: 2px;">
                                        <button type="submit">Send</button>
                                    </div>
                                </form>
                                
                            </div>

                             {{-- Loading --}}
                           <div id="loaddpneu">
                            {{-- <img src='https://media.giphy.com/media/W8AYJPPzRiP6w/giphy.gif' alt='loading...' /> --}}
                           </div>

                            <div class="progress_container">
                                <div style="min-width: 80px;">Normal</div>    
                                <div class="light-grey">
                                    <div id="myBar1" class="linear-orange" style="height:24px;width:0"></div>
                                </div>
                                <div id="normal">%</div>
                            </div>

                            <div class="progress_container">
                                <div style="min-width: 80px;">Pneumonia</div>    
                                <div class="light-grey">
                                    <div id="myBar2" class="linear-green" style="height:24px;width:0"></div>
                                </div>
                                <div id="pneumonia">%</div>
                            </div>

                            
                            
                            <div class="img-test">
                                   
                                
                                <div class="mt-4">
                                    <img onclick="testFunction(this);" src="{{ asset('assets\img\normalx.jpeg') }}" alt="" class="img-test-item" id="test-normal">
                                </div>
                                <div class="mt-4">
                                    <img onclick="testFunction(this);" src="{{ asset('assets\img\pneuf.jpg') }}" alt="" class="img-test-item" id="test-pneu">
                                </div>
                            </div>
                            <div>"Try These Examples!!"</div>

                        </div>

                        
                          
                    </div>
                    

               </div>
                   
                   
                 
                   
               
                   
                </div>
             <!-- .layout-medium -->
            </div>
         <!-- .content -->
          </section>
        <!-- PAGE : viemphoi -->    




        <!-- PAGE : benhphoi -->

          <section id="benhphoi" class="pt-page page-layout">

            
            


            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
             <div class="layout-medium">
               
               
                 <!-- page-title -->
                 <h1 class="page-title">
                    <i class="fa-light fa-lungs"></i>
                    Diagnosing 14 types <br>
                    of lung diseases
                    
                 </h1>
                 <!-- page-title -->
                       
               <div class="center">    
                   
                   
                    <div class="row " style="margin-top: 28.8px;">

                        <div class="col-sm-6 border">
                            
                            <!-- Upload image input-->
                            <form action="" method="POST" enctype="multipart/form-data" id='formID2'>
                                @csrf
                                <input id="img" type="file" name="image[]" onchange="imagesPreview(this);" accept="image/*" multiple>
                            </form>
                               
                            <input type="submit" onclick="predsubmit()" value="Predict"> 

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    }); 
                                });
                            </script>

                            
                            <h5 style="margin-top: 5px;">" Please use X-ray images maximum 4 files. Diagnostic results for the following 14 diseases: - Aortic enlargement - Atelectasis - Calcification - Cardiomegaly - Consolidation - ILD - Infiltration - Lung Opacity - Nodule/Mass - Other lesion - Pleural effusion - Pleural thickening - Pneumothorax - Pulmonary fibr. "</h5>
                           
                            <!-- Uploaded image area-->
                            
                            <div class="image-area type14">
                                
                                <div id="img--containerx"></div>
                            </div>

                        </div>

                        


                        
                        <div class="col-sm-6" >                              
                            
                            <div style="font-weight: 700; font-size:25px;"> <i class="fa-light fa-chart-simple"></i> Diagnostic Result: </div>
                            
                            <div>Are you satisfied with the diagnostic results?</div>
                            <div>
                                
                                {{-- <a href="enterfeedback2#/blog"> --}}
                                    <a href="#feedbackaws">
                                <button>
                                    NO - HELP US IMPROVE BY ENTER DRAW BOX APP!
                                </button>
                            </a>
                            </div>

                            {{-- Loading --}}
                           <div id="loadd"></div>



                            <!-- Uploaded image area-->
                            

                            <div class="image-area2" id="image-area-result">
                                {{-- <img id="imageResult3" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" onclick="popup();"> --}}
                            </div>
                            


                            <div class="img-test">
                                   
                                
                                <div class="mt-4">
                                    <img onclick="testFunctiontype14(this);" src="{{ asset('assets\img\alpha.jpg') }}" alt="" class="img-test-item" id="test-normal14">
                                </div>
                                <div class="mt-4">
                                    <img onclick="testFunctiontype14(this);" src="{{ asset('assets\img\beta.jpg') }}" alt="" class="img-test-item" id="test-pneu14">
                                </div>
                            </div>
                            <div>"Try These Examples!!"</div>
                        </div>

                        
                          
                    </div>
                    

               </div>
                   
                   
                 
                   
               
                   
                </div>
             <!-- .layout-medium -->
            </div>
         <!-- .content -->
          </section>
        <!-- PAGE : benhphoi -->  
            

          
        <!-- PAGE : ctscan -->

           <section id="ctscan" class="pt-page page-layout">


            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
             <div class="layout-medium">
               
               
                 <!-- page-title -->
                 <h1 class="page-title">
                    <i class="fa-light fa-person-circle-xmark"></i>
                    Quick diagnosis of <br>
                    lung cancer by CT-SCAN
                 </h1>
                 <!-- page-title -->
                       
               <div class="center">    
                   
                   
                    <div class="row " style="margin-top: 28.8px;">
                                

                        <div class="col-sm-6 border">
                            
                            <!-- Upload image input-->
                            <form action="/" method="POST" enctype="multipart/form-data" id='formIDct'>
                                <input id="uploadct" type="file" name="file" onchange="readURLct(this);" accept="image/*">
                            </form>
                               
                            <button id="predict-btn-ctscan">START PREDICT</button> 
                            <p style="margin-top: 5px;">"Please use unblurred CT-SCAN images in Jpeg,Png... up to 2mb in size."</p>

                            <!-- Uploaded image area-->
                            
                            <div class="image-area">
                                <img id="imageResultct" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                            </div>

                        </div>




                        <div class="col-sm-6">                              
                            <div style="font-weight: 700; font-size:25px;"> <i class="fa-light fa-chart-simple"></i> Diagnostic Result: </div>
                            
                            <div>Are you satisfied with the diagnostic results?</div>
                            <div>
                                
                                <button id="popup_fbct">NO - HELP US</button>
                            </div>
                            
                            <div id="fb_formct" style="display:none;">
                                <form action="{{ route('sample.feedback_table') }}" method="POST" style="display: flex;justify-content:center;" >
                                    @csrf
                                    <div style="margin: 2px">
                                        <input type="text" name="feedbacktext"  placeholder="Your Prediction?" required/>

                                        
                                    </div>
                                    <div style="max-width:1px; visibility: hidden;">
                                        <input id="fb_imgct" type="text" name="feedbackimg"  required/>
                                    </div>

                                    <div style="max-width:1px; visibility: hidden;">
                                        <input  type="text" name="email" value="{{ Auth::user()->email }}" required/>
                                    </div>
                                    
                                    <div style="margin: 2px ; padding: 2px;">
                                        <button type="submit">Send</button>
                                    </div>
                                </form>
                                
                            </div>

                            <div id="loaddct">
                                {{-- <img src='https://media.giphy.com/media/W8AYJPPzRiP6w/giphy.gif' alt='loading...' /> --}}
                            </div>




                            <div class="progress_container">
                                <div style="min-width: 110px;">Begin cases</div>    
                                <div class="light-grey">
                                    <div id="myBar1ct" class="linear-orange" style="height:24px;width:0"></div>
                                </div>
                                <div id="beginct">%</div>
                            </div>

                            <div class="progress_container">
                                <div style="min-width: 110px;">Malignant cases</div>    
                                <div class="light-grey">
                                    <div id="myBar2ct" class="linear-green" style="height:24px;width:0"></div>
                                </div>
                                <div id="pneumoniact">%</div>
                            </div>

                            <div class="progress_container">
                                <div style="min-width: 110px;">Normal</div>    
                                <div class="light-grey">
                                    <div id="myBar3ct" class="linear-green" style="height:24px;width:0"></div>
                                </div>
                                <div id="normalct">%</div>
                            </div>

                            <div class="img-test">                               
                                
                                <div class="mt-4">
                                    <img onclick="testFunctionct(this);" src="{{ asset('assets\img\nor.jpg') }}" alt="" class="img-test-item" id="test-normalct">
                                </div>
                                <div class="mt-4">
                                    <img onclick="testFunctionct(this);" src="{{ asset('assets\img\maligant.jpg') }}" alt="" class="img-test-item" id="test-pneuct">
                                </div>
                            </div>
                            <div>"Try These Examples!!"</div>

                        </div>

                        
                          
                    </div>
                    

               </div>
                   
                   
                 
                   
               
                   
                </div>
             <!-- .layout-medium -->
            </div>
         <!-- .content -->
          </section>

        <!-- PAGE : ctscan -->



           

          

          <!-- PAGE : DETECTION LIBRARY -->
          <section id="portfolio" class="pt-page page-layout portfolio">
                 <!-- .content -->
              <div class="content">
                     <!-- .layout-medium -->
                    <div class="layout-medium">

                    
                        <!-- page-title -->
                        <h1 class="page-title">
                            <i class="fa-light fa-book-bookmark"></i>Library
                        </h1>
                        <h4 align="center">Your Detection Image Will Be Show Here!  </h4> 

                        <span class="refresh" style="cursor: pointer;color:#2ba163;font-size: 20px;"><i class="fa-light fa-arrows-retweet"></i></span> 

                        <!-- page-title -->


                        <!-- portfolio-item -->

                        <div style="display:flex; flex-wrap: wrap;" class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                            {{-- @foreach(File::glob(public_path('images').'/*') as $path)
                                @if(strpos($path, Auth::user()->email) !== false)
                                
                                    <div class="media-cell illustration hentry">
                                        <div class="media-box">
                                            <img src="{{ str_replace(public_path(), '', $path) }}">
                                            <div class="mask"></div>
                                            <a href="{{ str_replace(public_path(), '', $path) }}" download></a>
                                        </div>
                                        
                                            
                                        
                                        <div class="media-cell-desc">
                                            <p>D-M-Y_H-M-S</p>
                                            <p class="category">
                                            @php
                                                    $path = ' ' . $path;
                                                    $ini = strpos($path, '__');
                                                    
                                                    $ini += strlen('__');
                                                    $len = strpos($path, '_y', $ini) - $ini;
                                               
                                                $parsed = substr($path, $ini, $len);
                                                echo $parsed;
                                            @endphp
                                            </p>
                                        </div>
                                    </div>
                                
                                @endif
                            @endforeach --}}

                            @foreach (DB::table('feedback')->get() as $feedback)
                            @if($feedback->feedbacktext == '' && $feedback->bounding == '' && $feedback->email == Auth::user()->email)
                        
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
                        
                        <!-- portfolio-item -->
                        


                    </div>
                     <!-- .end-layout-medium -->                    
                    
                </div>
              <!-- .content -->
          </section>
          <!-- PAGE : END DETECTION LIBRARY -->







          <!-- PAGE : BLOG -->
          <section id="blog" class="pt-page page-layout">
                 <!-- .content -->
              
                <div class="content">
                     <!-- .layout-medium -->
                    <div class="layout-medium">

                    
                        <!-- page-title -->
                        <h1 class="page-title">
                            <i class="fa-light fa-message-exclamation"></i>Feed Back Library </a>
                        </h1>
                        
                        <!--FILTERS I GUESS SO-->
                        <ul class="filters" style="cursor: pointer">
                            <li onclick="detection(this)" id="mn" class="boldd">
                                Detection FeedBack  
                            </li>
                            <li onclick="classification(this)" id="xy">
                                Classification Feedback 
                            </li>
                            
                        </ul>

                        <span class="refresh" style="cursor: pointer;color:#2ba163;font-size: 20px;"><i class="fa-light fa-arrows-retweet"></i></span> 

                        <!--FILTERS-->
                        
                        
                        
                        <!-- page-title-end -->

                        

                        <!-- Detection-item -->
                        <div id="activate_detect">
                        <div style="display:flex; flex-wrap: wrap;" class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                            

                            @foreach (DB::table('feedback')->get() as $feedback)
                            @if($feedback->bounding != '' && $feedback->email == Auth::user()->email)
        
                            
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
                        </div>
                        
                        <!-- Detection-item -->
                    
                    <!-- Feed Back Classification-item -->

                    <div id="activate_classificate" style="display: none">
                    <div style="display:flex; flex-wrap: wrap;" class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                        @foreach (DB::table('feedback')->get() as $feedback)
                            @if($feedback->feedbacktext != '' && $feedback->email == Auth::user()->email)
                        
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
                    </div>
                    
                    <!-- portfolio-item -->


                    </div>
                   

                   

                   
                </div>
             
              <!-- .content -->
          </section>
          <!-- PAGE : BLOG -->


          
 <!-- PAGE : FEEDBAKC AWS -->
 <section id="feedbackaws" class="pt-page page-layout">
    <!-- .content -->
 
   <div class="content">
       <!-- .layout-full -->
       <div class="layout-full">

      
          <!-- page-title -->
          <h1 class="page-title">
            <i class="fa-sharp fa-light fa-image"></i>Feed Back
           
          </h1>
          <!-- page-title -->

          <div class="center">
           <h3 style="margin: 0">Get Started !<strong id="typist-element" data-typist=" Read instructions Below., any question? contact npbtruong@gmail.com.,Remember this app don't support mobile!.">Choose file you want to feedback .</strong></h3>          
            <input id="uploadaws" class="txt" type="file" name="file" onchange="readURLX(this);" accept="image/*">
           
          </div>
          

          <!--FEEDBACK AWS ZONE-->
          
         
          <script src="https://assets.crowd.aws/crowd-html-elements.js"></script>
          

          <crowd-form>
            <crowd-bounding-box id="boundingzone"
              name="annotatedResult"
              src="{{ asset('assets\img\icons-xray.png') }}"
              header="← PLEASE CLICK 'instructions' button on the left to read full instructions!! if this is the first time you here!"
              labels="['Aortic enlargement', 'Atelectasis', 'Calcification', 'Cardiomegaly', 'Consolidation', 'ILD', 'Infiltration', 'Lung Opacity', 'Nodule/Mass', 'Other lesion', 'Pleural effusion', 'Pleural thickening', 'Pneumothorax', 'Pulmonary fibrosis']"
            >
              <full-instructions header="Bounding Box Instructions" >
                <p>Use the bounding box tool to draw boxes around the requested target of interest:</p>
                <ol>
                   <li>Upload File You Want To Draw Bouding Box To Get Start!</li>
                   <li>Remember Do Not Use Large File!</li>
                   <li>Remember Undo Everthing before upload new file!</li>
                   <li>Choose the Labels on rightbar</li>
                  <li>Draw a rectangle using your mouse over each instance of the target.</li>
                  <li>Make sure the box does not cut into the target, leave a 2 - 3 pixel margin</li>
                  <li>
                    When targets are overlapping, draw a box around each object,
                    include all contiguous parts of the target in the box.
                    Do not include parts that are completely overlapped by another object.
                  </li>
                  <li>
                    Do not include parts of the target that cannot be seen,
                    even though you think you can interpolate the whole shape of the target.
                  </li>
                  <li>Avoid shadows, they're not considered as a part of the target.</li>
                  <li>If the target goes off the screen, label up to the edge of the image.</li>
                  <li>SUMBIT ITS AUTOMATICAL SAVE TO YOUR LIBRARY</li>
                </ol>
              </full-instructions>
          
              <short-instructions>
                Draw boxes around the requested target of interest.
              </short-instructions>
            </crowd-bounding-box>
          </crowd-form>  
       
          {{-- <form action="{{ route('sample.validate_feedback') }}" method="POST"> --}}
           <form id="createFrom" style="visibility: hidden;">
           @csrf
           <div style="max-height:1px !important;" >
             <input value="{{ Auth::user()->email }}" type="text" name="email" required />
           </div>

           <div style="max-height:1px !important;" >
             <input id="filex" type="text" name="file" required />  
           </div>
   
           <div style="max-height:1px !important;" >
             <input id="boundingx" type="text" name="bounding" required />                         
           </div>
   
           <div style="max-height:1px !important;" >
             <input id="sizex" type="password" name="size" required/>
           </div>
           <div style="max-height:1px !important;" >
             <button id="saveData" type="submit" >x</button>
           </div>
         </form>
          
       </div>
       <script type="text/javascript">
         $(document).ready(function () {
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             }); 
         });
     </script>
     <!--FEEDBACK AWS ZONE-->

      
   </div>
      
  

 <!-- .content -->
</section>
<!-- PAGE : END FEEDBACK AWS -->





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
<script src="{{ asset('asset_db/js/feedback.js') }}"></script>

<script src="{{ asset('asset_db/js/feedbackxaws.js') }}"></script>
<script src="{{ asset('asset_db/js/triggeranddelete.js') }}"></script>


</body>
</html>