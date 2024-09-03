{{--Portfolio section and its blocks.--}}

<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            @include('parts.portfolio.clausehound', ['portfolioBlockId' => 'portfolio-ch', 'portfolioImageName' => 'clausehound'])
            @include('parts.portfolio.strength', ['portfolioBlockId' => 'portfolio-str', 'portfolioImageName' => 'strength'])
            @include('parts.portfolio.blockmaintain', ['portfolioBlockId' => 'portfolio-bm', 'portfolioImageName' => 'blockmaintain'])
            {{--@include('parts.portfolio-block', ['portfolioBlockId' => 'portfolio-third'])--}}
        </div>
    </div>
</section>
