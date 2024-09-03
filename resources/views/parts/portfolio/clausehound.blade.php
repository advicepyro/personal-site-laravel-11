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
                    <h2 class="text-secondary text-uppercase mb-0">ClauseHound</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/{{ $portfolioImageName }}.png" alt="">
                    <p class="mb-5">My first gig out of school. ClauseHound was an online database of legal clauses to use for drafting contracts. At the time of joining, work was underway to incorporate an interface to drag clauses into pre-filled contract templates.<br/><br/>Back then, WordPress formed the underpinnings of the site, including the contract drafting app. I sincerely hope that has changed by now.
                    </p>
                    <h3>Highlights</h3>
                    <ul class="mb-5">
                        <li>Did the first iteration of incorporating a payment workflow for purchasing filled contracts</li>
                        <li>Further development of the JS-based contract drafting tool</li>
                        <li>Unrelated to the site, but: as a side project, took the payment workflow ideas and worked them into a simple service to request payment for legal services</li>
                    </ul>
                    <h3>+EXP Acquired Here</h3>
                    <ul class="mb-5">
                        <li>PHP (barebones code)</li>
                        <li>WordPress (ugh)</li>
                        <li>jQuery</li>
                        <li>Basic provisioning of instances on Azure</li>
                        <li>Stripe API</li>
                        <li>Bootstrap</li>
                    </ul>
                    <p class="mb-5"></p>
                    <a target='_blank' class="btn btn-danger btn-lg rounded-pill" href="https://clausehound.com">
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
