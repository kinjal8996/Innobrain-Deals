<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($banners as $key => $banner)
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner bg-light">
        @foreach($banners as $key => $banner)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('BannerImage/' . $banner->image) }}"
                            alt="{{ $banner->title }}"  style=" width: 100%; height: 350px; ">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center" >
                                <h3 style="font-family: Arial, Helvetica, sans-serif" class="h2 text-black"><b>{{ $banner->title }}</b></h3>
                                {{-- <h3 class="h2">{{ $banner->title }}</h3> --}}
                                <p style="text-align: justify;">{{ $banner->description }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
