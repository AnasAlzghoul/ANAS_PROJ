<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Snacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="row bg-img">
            <div class="row">
                <nav class="navbar navbar-expanded-g" dir="ltr">
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#OurNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="navbar-toggler-icon" aria-controls="OurNavBar"></span>
                        </button>
                        <a href="" class="navbar-brand mx-2">Billy's</a>
                    </div>
                    <div class="collapse navbar-collapse" id="OurNavBar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mx-5"><a href="#" class="nav-link text-warning">Home</a></li>
                            <li class="nav-item mx-5"><a href="#" class="nav-link text-warning">Category</a></li>
                            <li class="nav-item mx-5"><a href="#" class="nav-link text-warning">Meals</a></li>
                            <li class="nav-item mx-5"><a href="#" class="nav-link text-warning">Orders Us</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{url('/Home')}}" class="nav-link">Home</a>
                                @else
                                    <a href="{{route('login')}}" class="nav-link mx-3">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{route('register')}}" class="nav-link mx-3">Register</a>
                                    @endif
                                @endauth
                            @else

                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row my-3 justify-content-around mx-1 p-2">
        <div class="card py-2" style="width: 18rem;">
            <img src="{{asset('img/burger-card.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mx-5">Billy Burger</h5>
              <p class="card-text">Savor the mouthwatering delight of our signature Billy Burger, crafted with love and bursting with flavor.</p>
              <div class="row justify-content-center">
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
          <div class="card py-2" style="width: 18rem;">
            <img src="{{asset('img/pizza-card.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mx-5">Billy Pizza</h5>
              <p class="card-text">Indulge in a slice of perfection with our delectable pizzas, made with the finest ingredients and baked to crispy, cheesy goodness.</p>
              <div class="row justify-content-center">
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
          <div class="card py-2" style="width: 18rem;">
            <img src="{{asset('img/shawerma-card.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mx-4 ">Billy Shawerma</h5>
              <p class="card-text">Experience a taste of the Mediterranean with our mouthwatering Shawarma, packed with savory spices and tender, succulent meat.</p>
              <div class="row justify-content-center">
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
          <div class="card py-2" style="width: 18rem;">
            <img src="{{asset('img/steak-card.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mx-5">Billy Steak</h5>
              <p class="card-text">Indulge in the ultimate steak experience with our perfectly grilled cuts, offering a tantalizing blend of tenderness, juiciness, and rich, smoky flavors.</p>
              <div class="row justify-content-center">
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
    </div>
</div>
</body>
</html>
