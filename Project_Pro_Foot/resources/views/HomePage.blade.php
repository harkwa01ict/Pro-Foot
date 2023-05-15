<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/favicone.jpg')}}" type="image/x-icon">
    <title>Pro-Foot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  
    <header class="d-flex container-fluid justify-content-between p-3">
        <div class="logo">
            <img src="{{asset('images/favicone.jpg')}}" alt="" width="100" height="100">
            <div>
            <p>PRO-FOOT</p>
            <span>Be Close To The Ball.</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <div class="collapse navbar-collapse gap-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Log In</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Sign Up</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn bg-dark-subtle btn-outline-primary" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          
    </header>
    
    <main class="d-flex bgmain">
        <nav class="bg-success-subtle p-3">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item">
                  <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Ticket</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Club Activities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Careers</a>
                </li>
    
              </ul>
        </nav>
        <div class="angi">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{asset('images/coupe.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('images/footchest.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('images/footgirl.jpeg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('images/footkid.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('images/stadium.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('images/sunsetfoot.jpg')}}" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>



    <footer>
        <div class="d-flex justify-content-around p-4 bg-success-subtle">
            <div>
                <h3>Privacy Policy</h3>
                <p>Lorem ipsum dolor sit, amet consectetur<br> adipisicing elit. Reiciendis, maiores?</p>
            </div>
            <nav>
                <h3>Links</h3>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Log In</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Sign Up</a>
                    </li>
                  </ul>
            </nav>
            <nav>
                <h3>Sponsors</h3>
            </nav>
            <nav>
                <h3>Contact Us</h3>
            </nav>
        </div>
        <div class="text-center bg-secondary">
            <p> © Copyright 2023 Pro-Foot. All right reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>