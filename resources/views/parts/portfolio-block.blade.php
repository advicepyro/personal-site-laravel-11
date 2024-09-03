{{--This contains the portfolio image, and its corresponding hidden div.--}}

<div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#{{ $portfolioBlockId }}">
        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fa fa-search-plus fa-3x"></i>
            </div>
        </div>
        <img class="img-fluid" src="img/portfolio/{{ $portfolioImageName }}.png" alt="">
    </a>
</div>
<div class="portfolio-modal mfp-hide" id="{{ $portfolioBlockId }}">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">{{ $companyName }}</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/{{ $portfolioImageName }}.png" alt="">
                    @yield('portfolio-content')
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

