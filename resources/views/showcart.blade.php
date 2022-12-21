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
                            <li class="scroll-to-section"><a href="/">Home</a></li>


                            <li class="scroll-to-section" style="color :#FFC555">
                                @auth
                                    <a class="active" href="{{ url('/showcart', Auth::user()->id) }}">
                                        Cart [{{ $count }}]
                                    </a>
                                @endauth

                                </a>
                            </li>

                            <li class="hide">
                                @if (Route::has('login'))
                                    <div>
                                        @auth </div>
                                <li class="">
                                    <x-app-layout>
                                    </x-app-layout>
                                </li>
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
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>

    <div id="top">
        <div class="px-auto center">
            <table align="center" bgcolor="#FFF9B0" class="border-collapse border border-black">
                <tr>
                    <th style="padding: 30px" class="border-collapse border border-black">Food Name</th>
                    <th style="padding: 30px" class="border-collapse border border-black">Food Price</th>
                    <th style="padding: 30px" class="border-collapse border border-black">Quantity</th>
                    <th style="padding: 30px" class="border-collapse border border-black">Action</th>
                </tr>

                <form action="{{ url('/orderconfirm') }}" method="POST">
                    @csrf

                    @foreach ($data as $data)
                        @foreach ($cartdata as $cartdata)
                            <tr align="center">
                                <td class="border-collapse border border-black py-2"><input type="text"
                                        name="foodname[]" value="{{ $data->title }}">
                                    {{ $data->title }}
                                </td>
                                <td class="border-collapse border border-black"><input type="text" name="price[]"
                                        value="{{ $data->price }}">
                                    {{ $data->price }}
                                </td>
                                <td class="border-collapse border border-black"><input type="text" name="quantity[]"
                                        value="{{ $data->quantity }}">
                                    {{ $data->quantity }}
                                </td>
                                <td class="border-collapse border border-black"><input type="text">
                                    {{ $cartdata->id }}
                                </td>
                                {{-- <td class=""><a href="{{ url('/remove', $cartdata->id) }}"
                                        class="btn btn-warning">Remove</a></td> --}}
                            </tr>
                        @endforeach
                    @endforeach
                </form>
            </table>

        </div>
        <br><br><br>

        <div class="center text-center py-8" style="background-color:#FFF9B0">
            <div class="center col-lg-6 lg:max-xl:flex">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="font-bold text-center pb-4">Order Now</h4>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <fieldset>
                                    <input name="address" type="text" id="address" placeholder="Your Address*"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="WA Number*"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input name="date" id="date" type="text" class="form-control"
                                            placeholder="Pre-Order Date*" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 pt-3">
                                <fieldset>
                                    <textarea name="notes" rows="6" id="notes" placeholder="Notes"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-sm px-10 mt-5">
                                <button type="submit"class="btn btn-success">Check Out</button>
                            </div>
                            <div class="col-sm px-10 mt-5">
                                <button type="button" class="btn btn-danger"><a href="/"> Cancel</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        </form>

    </div>
    @include('footer')

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
