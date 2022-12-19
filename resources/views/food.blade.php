<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $fooddata)
                <form action="{{url('/addcart',$fooddata->id)}}" method="POST">
                    @csrf
                    <div class="item">
                        <div style="background-image: url('{{ asset("foodimage/{$fooddata->image}") }}');"
                            class='card'>
                            <div class="price">
                                <h6>{{ $fooddata->price }}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $fooddata->title }}</h1>
                                <p class='description'>{{ $fooddata->description }}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Order Now<i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <input type="number" name="quantity" min="0" value="1" width="80px">
                        <input type="submit" value="Add To Cart">
                    </div>
                </form>

                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
