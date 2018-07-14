<section class="featured-three-column">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Column-->
            @foreach($services as $service)
            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <article class="inner-box">
                    <figure class="image">
                        <a href="#"><img src="{{ asset($service->image) }}" alt=""></a>
                        <div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="#" class="overlay-link"></a></div>
                    </figure>
                    <div class="content">
                        <h3>{{ $service->title }}</h3>
                        <div class="text">
                            <p>{!! substr($service->excerpt, 0, 180) !!} ...</p>
                        </div>
                        <div class="link"><a href="#" class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> MORE INFO</a></div>
                    </div>
                </article>
            </div>
            @endforeach


        </div>
    </div>
</section>