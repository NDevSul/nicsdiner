<section class="section" id="galleryz">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Food Gallery</h6>
                    <h2>The Best Taste</h2>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($datagallery as $data)
                <div class="col-lg-3">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img height="200" width="200" src="galleryimage/{{ $data->image }}" alt="Makanan">
                        </div>
                        <div class="down-content">
                            <h4>{{ $data->name }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
