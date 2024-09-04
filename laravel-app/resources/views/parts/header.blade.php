{{--The top honkin' header.--}}

<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        @if(strlen($welcome) > 64)
            <h2 class="mb-0">{!! $welcome !!}</h2>
        @else
            <h1 class="mb-0">{!! $welcome !!}</h1>
        @endif
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">I'm Denis. Wearer of many hats: web, full stack, frontend design, managing systems at scale.<br/>Powered by tea. </h2>
    </div>
</header>
