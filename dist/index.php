<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link  rel="stylesheet" href="css/carousel.css">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
           }
        }
        </style>
    </head>

    <body>
        <?php
            include('includes/menu.php');
        ?>
        <br/>

        <!--Carousel-->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"  focusable="false"><rect width="100%" height="100%" src="assets/slide1.jpg"/></svg>

                <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Introducing Windows 11</h1>
                    <p>See how windows bring you closer to what you love.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Explore Windows now</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" src="assets/slide2v2.jpg"/></svg>

                <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Surface Laptop Go</h1>
                    <p>Make most of the day with our lightest surface laptop.</p>
                    <p><a class="btn btn-lg btn-primary" href="register.php">Sign up today</a></p>
                </div>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- Content Row-->
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">    
                <div class="card" style="width: 18rem;" >
                <img src="assets/laptop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bundle and save up to $360</h5>
                        <p class="card-text">Work and play virtually anywhere when you bundle a Surface Pro 7 with choice of select Type Cover.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="assets/tab.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Surface Go 2</h5>
                        <p class="card-text">Save up to $100 on everyday performance for every task, anywhere. Perfectly portable and designed to keep up.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>    
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="assets/office.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Microsoft 365</h5>
                        <p class="card-text">Premium Office apps, extra cloud storage, advanced security, and more—all in one convenient subscription.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"style="width: 18rem;" >
                <img src="assets/stats.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 18rem;">
                        <h5 class="card-title">Do more with Windows</h5>
                        <p class="card-text">Premium Office apps, extra cloud storage, advanced security, and more—all in one convenient subscription..</p>
                        <a href="#" class="btn btn-primary">Find Your Next PC</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body p-0 d-flex flex-column">
                                <div class="row h-100">
                                    <div class="col-sm-6 d-flex flex-column">
                                        <h5 class="card-title"> </h5>
                                    </div>
                                    <div class="col-sm-6 text-right"><img src="assets/game.jpg" alt="" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </br>
        <!-- Content Row 2-->
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">    
                <div class="card" style="width: 18rem;" >
                <img src="assets/tab2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bundle and save up to $360</h5>
                        <p class="card-text">Work and play virtually anywhere when you bundle a Surface Pro 7 with choice of select Type Cover.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="assets/Team.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Surface Go 2</h5>
                        <p class="card-text">Save up to $100 on everyday performance for every task, anywhere. Perfectly portable and designed to keep up.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>    
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="assets/hybrid.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Microsoft 365</h5>
                        <p class="card-text">Premium Office apps, extra cloud storage, advanced security, and more—all in one convenient subscription.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"style="width: 18rem;" >
                <img src="assets/desk.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 18rem;">
                        <h5 class="card-title">Do more with Windows</h5>
                        <p class="card-text">Premium Office apps, extra cloud storage, advanced security, and more—all in one convenient subscription..</p>
                        <a href="#" class="btn btn-primary">Find Your Next PC</a>
                    </div>
                </div>
            </div>
        </div>
  
    </body>

    <?php
        include('includes/footer.php');
    ?>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
</html>
