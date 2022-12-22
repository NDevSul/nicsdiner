<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Nic's Diner Menu</h6>
                    <h2>The Quality of Indonesian Cuisine</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $fooddata)
                    @csrf
                    <div class="item">
                        <div style="background-image: url('{{ asset("foodimage/{$fooddata->image}") }}');"
                            class='card'>
                            <div class="price">
                                <h6>Rp{{ $fooddata->price }}K</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $fooddata->title }}</h1>
                                <p class='description'>{{ $fooddata->description }}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="menu">Order Now<i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-warning"><a href="/menu">See All</a></button>
        </div>
    </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
