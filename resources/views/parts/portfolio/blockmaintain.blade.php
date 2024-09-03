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
                    <h2 class="text-secondary text-uppercase mb-0">BlockMaintain</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/{{ $portfolioImageName }}.png" alt="">
                    <p class="mb-5">Starting from 2017, there was a spike in the value of cryptocurrencies. This was our foot in the game. BlockMaintain managed large scale mining sites, and provided management and software support. Think of it as owning the full stack, but in mining terms.</p>
                    <h3>Highlights</h3>
                    <ul class="mb-5">
                        <li>Built a responsive dashboard using Vue.js and WebSocket notifications for real-time updates, with history collection</li>
                        <li>Provisioned, managed and tuned the dashboard's Ubuntu instance to handle thousands of updates sent simultaneously every minute by miners</li>
                        <li>Built a customized network booting solution for the miners using IPXE and a Laravel application. Allows for defining custom configurations, seeing realtime data for booting machines, and queueing machines for bandwidth control</li>
                        <li>A bit of tinkering with a Dragino board to enable a custom temperature and humidity monitoring solution using up to six sensors</li>
                        <li>Managed the office's test lab, and the mining sites</li>
                        <li>Additional bells and whistles: development of the miner tools used on our customized Ubuntu image deployed on miners, optimizing GPUs for better hashrates, sending logs from miners to an ElasticSearch instance</li>
                        <li>... and a couple weeks worth of setting up miners at two remote sites. Good times.</li>
                    </ul>
                    <h3>+EXP Acquired Here</h3>
                    <ul class="mb-5">
                        <li>Vue.js, WebSockets, Redis</li>
                        <li>IPXE</li>
                        <li>Various UNIX-y intricacies</li>
                        <li>A little bit of Golang</li>
                        <li>Tuning for heavy workloads</li>
                    </ul>
                    <p class="mb-5"></p>
                    <a target='_blank' class="btn btn-danger btn-lg rounded-pill" href="https://blockmaintain.com">
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
