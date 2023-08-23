<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AI APP - Diagnosis of lung disease on X-ray images</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="npbtruong" name="keywords">
    <meta content="npbtruong" name="description">
    <link rel="icon" type="public/welcome-assets/img/icons-xray.png" href="{{ asset('assets\img\icons-xray.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('assets\css\bootstrap.min.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #461220, #F2A65A, #772F1A);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

    </style>
</head>
<body>


    <section class="vh-100">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;background-color: #ece3e4;" >
                <div class="row g-0" >
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://img.freepik.com/free-photo/portrait-young-doctor-man-with-radiography_144627-21849.jpg?w=2000"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <div class="d-flex align-items-center mb-3 pb-1">
                          <a href="https://deployyourai.cfd/public/">
                            <img class="me-3" src="{{ asset('assets\img\icons-xray.png') }}" alt="">
                          </a>
                            <span class="h1 fw-bold mb-0">   AI APP</span>
                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                            @guest

                            <p style="display: flex">
                                <a class="small text-muted p-1" href="{{ route('login') }}">Login to Start!</a>
                            
                                <a class="small text-muted p-1" href="{{ route('registration') }}">Don't have an account?Register!</a>
                            </p>
        
                            @else
                            <p style="display: flex">
                                <a class="small text-muted p-1" href="{{ route('logout') }}">Logout</a>
                            </p>
                            @endguest
                        </h5>


                    @yield('content')
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    
    
</body>
</html>