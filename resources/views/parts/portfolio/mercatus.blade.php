<div class="col-md-6 col-lg-3">
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
                    <h2 class="text-secondary text-uppercase mb-0">Mercatus</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/{{ $portfolioImageName }}.png" alt="">
                    <p class="mb-5">Mercatus provides an inclusive solution powering e-commerce for second-tier American grocery chains. Second-tier chains are those geographically concentrated to one or a few American states, as opposed to national chains.<br/>I took a break from full-stack development during my time here, focusing on development of the API that underpins the web and mobile frontend applications.
                    </p>
                    <h3>Highlights</h3>
                    <ul class="mb-5">
                        <li>Interacted with a multitude of APIs from many third providers, from payment to loyalty to in-house services</li>
                        <li>Led the charge to redo internal API endpoints to use the Doctrine ORM to speed up heavily-trafficked endpoints (though I still am very partial to ActiveRecord ORMs like Laravel's Eloquent</li>
                        <li>Participated in many cross-functional teams to get initiatives out to retailers</li>
                        <li>Mostly brownfield development. Parts of the code dated to at least a decade in some cases</li>
                        <li>In-person memories were fun while they lasted</li>
                    </ul>
                    <h3>+EXP Acquired Here</h3>
                    <ul class="mb-5">
                        <li>Opening JIRA-9000 tickets and working with the Atlassian stack</li>
                        <li>Monitoring via Splunk and NewRelic</li>
                        <li>Spinning up Docker applications</li>
                        <li>Brushing up on Postman skills</li>
                        <li>The transition from office-first to remote-first</li>
                    </ul>
                    <p class="mb-5"></p>
                    <a target='_blank' class="btn btn-danger btn-lg rounded-pill" href="https://mercatus.com">
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
