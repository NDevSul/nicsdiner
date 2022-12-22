<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="assets/images/nicsdinerlogo.ico" type="image/x-icon">

    <title>Nic's Diner</title>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>


<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo -->
                        <a href="#top" class="logo">
                            <img src="assets/images/nicsdiner.png" width="160px" height="80px">
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- EndLogo -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/redirects">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <li class="scroll-to-section"><a href="#menu" class="active">Menu</a></li>
                            <li class="scroll-to-section"><a href="#galleryz">Gallery</a></li>
                            <li class="scroll-to-section">
                                <a href="#testimony">Testimony</a>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>


                            <li class="scroll-to-section">
                                @auth
                                    <a href="{{ url('/showcart', Auth::user()->id) }}">
                                        Cart [{{ $count }}]
                                    </a>
                                @endauth

                            </li>

                            <li class="hide">
                                @if (Route::has('login'))
                                    <div>
                                        @auth </div>
                                @else
                                <li class="submenu">
                                    <a href="javascript:;">Profile</a>
                                    <ul>
                                        <li> <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></li>

                                        @if (Route::has('register'))
                                            <li> <a href="{{ route('register') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </li>
                                    </ul>
                                </li>
                                @endif
                            @endauth
                            </li>
                        </ul>
                </div>
                @endif
                </li>
            </ul>
                </nav>
            </div>
        </div>
        </div>
    </header>
    
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Nic's Diner Menu</h6>
                        <h2>Menu</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-16 md:w-32 lg:w-48 col-lg-3" style="overflow-x:auto">
            @foreach ($data as $fooddata)
                <form action="{{ url('/addcart', $fooddata->id) }}" method="POST" class="m-10">
                    @csrf
                    <div class="item">
                        <div style="background-image: url('{{ asset("foodimage/{$fooddata->image}") }}');"
                            class='card'>
                            <div class="price">
                                <h6>Rp {{ $fooddata->price }}K</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $fooddata->title }}</h1>
                                <p class='description'>{{ $fooddata->description }}</p>
                            </div>
                        </div>
                    </div>
                    <input type="number" name="quantity" min="0" value="1" width="80px">
                    <input type="submit" value="Add To Cart">
                </form>
            @endforeach
        </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->


    @include('footer')

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
