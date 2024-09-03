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

@push('bottom')
<div class="portfolio-modal mfp-hide" id="{{ $portfolioBlockId }}">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Strength.com</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/{{ $portfolioImageName }}.png" alt="">
                    <p class="mb-5">The worlds of e-commerce and sports nutition collide. Strength.com sold health supplements for athletes - think protein shakes, pre-workout mixes, fat-cutting pills, and swag for gym junkies and CrossFit faithful. The underpinnings of this site powered Strength.com and related sites, providing for a common foundation to power e-commerce sites.</p>
                    <h3>Highlights</h3>
                    <ul class="mb-5">
                        <li>Did extensive frontend design across Strength and its related sites, by producing views (Laravel blades) and CSS derived from mockups</li>
                        <li>Wrote API integrations with different payment providers, including Stripe, Newegg, and Amazon Pay</li>
                        <li>Integrated with third party logistics providers</li>
                        <li>Did the initial implementation of acceptance testing for our codebase</li>
                        <li>Numerous bells and whistles in the application's backend: coupon functionality, UI for creating deal pages, delivering digital documents, speed optimization via lazy loading, adding store credits</li>
                    </ul>
                    <h3>+EXP Acquired Here</h3>
                    <ul class="mb-5">
                        <li>Laravel (and the concepts of MVC frameworks)</li>
                        <li>The Laravel ecosystem - Forge, Envoyer</li>
                        <li>Amazon Web Services</li>
                        <li>Writing web APIs</li>
                        <li>CSS knowledge, plus SASS3</li>
                        <li>Managing a LEMP (Linux, Nginx, MySQL, PHP) stack</li>
                        <li>Less Sublime Text, more PhpStorm please</li>
                    </ul>
                    <p class="mb-5"></p>
                    <a target='_blank' class="btn btn-danger btn-lg rounded-pill" href="https://strength.com">
                        <i class="fa fa-globe"></i>
                        Visit Site</a>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush
