<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo -->
                        <a href="#top" class="logo">
                            <img src="assets/images/nicsdiner.png" width="160px" height="80px">
                        </a>
                        <!-- EndLogo -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>


                            <li class="scroll-to-section" style="color :#FFC555">
                                @auth
                                    <a href="{{ url('/showcart', Auth::user()->id) }}">
                                        Cart {{ $count }}
                                    </a>
                                @endauth

                                @Guest

                                    Cart[0]

                                @endguest
                                </a>
                            </li>

                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                <li>
                                    <x-app-layout>

                                    </x-app-layout>
                                <li>
                                @else
                                <li> <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                </div>
                @endif
                </li>
                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>

    <div id="top">
        <table align="center" bgcolor="yellow">
            <tr>
                <th style="padding: 30px">Food Name</th>
                <th style="padding: 30px">Food Price</th>
                <th style="padding: 30px">Quantity</th>
                <th style="padding: 30px">Action</th>
            </tr>

            <form action="{{url('orderconfirm')}}" method="POST">
                @csrf

                @foreach ($data as $data)
                    <tr align="center">
                        <td><input type="text" name="foodname[]" value="{{ $data->title }}" hidden="">
                            {{ $data->title }}
                        </td>
                        <td><input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                            {{ $data->price }}
                        </td>
                        <td><input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                            {{ $data->quantity }}
                        </td>
                    </tr>
                @endforeach


                @foreach ($cartdata as $cartdata)
                    <tr style="position: relative; top: -60px; right: -442px;">
                        <td><a href="{{ url('/remove', $cartdata->id) }}" class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
        </table>


        <div align="center" style="padding:10px;">
            <button class="btn btn-primary" type="button" id="order">Order Now</button>

        </div>

        <div id="appear" align="center" style="padding: 10px; display: none;">

            <div style="padding: 10px">
                <label>Name</label>
                <input type="text"name="name" placeholder="Name" required>
            </div>

            <div style="padding: 10px">
                <label>Phone</label>
                <input type="number"name="phone" placeholder="Phone Number" required>
            </div>

            <div style="padding: 10px">
                <label>Address</label>
                <input type="text"name="address" placeholder="Address" required>
            </div>

            <div style="padding: 10px">
                <label>Notes</label>
                <input type="text"name="notes" placeholder="notes" required>
            </div>

            <div style="padding: 10px">
                <input class="btn btn-success" type="submit" value="Order Confirm"></a>

                <button id="close" type="button" class="btn btn-danger">Cancel</button>
            </div>

        </div>

        </form>

    </div>

    <script type="text/javascript">

        $("#order").click(
            function() {
                $("#appear").show();
            }
        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }
        );
    </script>

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
    @include('sweetalert::alert')
</body>

</html>
