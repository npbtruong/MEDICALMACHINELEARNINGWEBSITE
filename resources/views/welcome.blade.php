<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI APP - Diagnosis of lung disease on X-ray images</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="npbtruong" name="keywords">
    <meta content="npbtruong" name="description">
    <link rel="icon" type="public/welcome-assets/img/icons-xray.png" href="{{ asset('assets\img\icons-xray.png') }}" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets\lib\animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets\css\bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet">
</head>


<body>


<!-- Topbar Start -->
<div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
<div class="row gx-0">
    <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center">
            <small class="py-2"><i class="far fa-user text-primary me-2"></i>Graduation project </small>
        </div>
    </div>
    <div class="col-md-6 text-center text-lg-end">
        <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
            <div class="me-3 pe-3 border-end py-2">
                <p class="m-0"><i class="fa fa-envelope-open me-2"></i>truong@gmail.com</p>
            </div>
            <div class="py-2">
                <p class="m-0"><i class="fa fa-phone-alt me-2"></i> 558 345</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Topbar End -->

<!-- Carousel Start -->
<div class="container-fluid p-0">
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-h"  src="{{ asset('assets\img\carousel-1.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">AI applications in healthcare</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Diagnosis Of Lung Disease On X-ray Images</h1>

                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">START</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">LOGIN | START</a>
                    @endauth
                    <a href="{{ route('registration') }}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">REGISTER</a>

                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img class="img-h"  src="{{ asset('assets\img\carousel-1.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Graduation thesis</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Preliminary Diagnosis Of Lung Diseases</h1>
                    
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">START</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">LOGIN | START</a>
                    @endauth
                    <a href="{{ route('registration') }}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">REGISTER</a>
                    
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>
</div>
<!-- Carousel End -->



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

const requestOptions = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({ key: 'img' }),
};
fetch('https://typex.greenfield-8e81c33b.southeastasia.azurecontainerapps.io/pneu', requestOptions)
  .then(response => response.json())
  .then(data => {
    // Handle the response data
    console.log('pneu');
  })
  .catch(error => {
    // Handle the error
    console.log('error pneu');
  });
fetch('https://typefour.greenfield-8e81c33b.southeastasia.azurecontainerapps.io', requestOptions)
  .then(response => response.json())
  .then(data => {
    // Handle the response data
    console.log('14type');
  })
  .catch(error => {
    // Handle the error
    console.log('error 14type');
  });
  
  

    
</script>
<!-- Template Javascript -->
</body>
</html>
