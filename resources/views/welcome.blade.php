@extends('layouts.app')

@section('content')

    <!--Featured Three Column-->
   @include('includes.featured')

    <!--Why Us Section-->
    <section class="why-us-section">

        <div class="bg-grey"></div>
        <div class="bg-image" style="background-image:url(images/advanced-skin-clinic-mirror-faces.jpeg);"></div>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12 content-column">
                    <article class="inner-box">
                        <div class="sec-title style-two style-three">
                            <h3 class="text-left">Why choose us?</h3>
                            <h2 class="text-left">The reasons that you should contact us</h2>
                            <div class="line"></div>
                        </div>

                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">1</div>
                            <h4>Over 20 years of experience.</h4>
                            <p>We have been here too long for you, there is nothing we cannot do to help you reach your dream look. - Advanced Skin Clinic</p>
                        </div>

                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms">2</div>
                            <h4>We have experienced Doctor's.</h4>
                            <p>We have the most experienced doctors in the field of dermatology not only in Uganda but also East Africa and International level at large.</p>
                        </div>

                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">3</div>
                            <h4>We are improving everyday.</h4>
                            <p>We make sure everyday we push a new button forward, because your skin is our priority and we care for you to look more than just good.</p>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>


    <!--Start Our Department Areas-->
    <section class="sec-paddingt6 bg-f1">
        <div class="auto-container clear-space">
            <div class="sec-title">
                <h3>WE CARE OUR DEPARTMENT SUPPORT</h3>
                <h2>OUR OUTSTANDING DEPARTMENT</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="website/images/resource/featured-image-1.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon icon-blood8"></i>
                                <h4 class="title">Lab Test Department.</h4>
                                <p class="details sec-padding5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                <a href="#donation-form" class="thm-btn btn-xs img-inner"><i class="fa fa-angle-double-right"></i> Read More</a>
                                <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="website/images/resource/featured-image-5.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon icon-heart36"></i>
                                <h4 class="title">Cardiology Department.</h4>
                                <p class="details sec-padding5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                <a href="#donation-form" class="thm-btn btn-xs img-inner"><i class="fa fa-angle-double-right"></i> Read More</a>
                                <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="website/images/resource/featured-image-6.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon icon-brain9"></i>
                                <h4 class="title">Neurology Department.</h4>
                                <p class="details sec-padding5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                <a href="#donation-form" class="thm-btn btn-xs img-inner"><i class="fa fa-angle-double-right"></i> Read More</a>
                                <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--Parallax Section-->
    <section class="parallax-section" style="background-image:url(images/dermatology.jpeg);">
        <div class="auto-container">
            <div class="text-center wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                <h2>YOU ARE <strong>IN LOVE</strong> WITH ADVANCED SKIN CLINIC &amp; WANT TO <strong>STAND OUT</strong></h2>
                <div class="line"></div>
                <a class="theme-btn default-btn" href="{{ url('contact-us') }}">REACH OUT TO US</a>
                <a class="theme-btn normal-btn" href="{{ url('services') }}">CHECK OUT SERVICES</a>

            </div>
        </div>
    </section>


@endsection