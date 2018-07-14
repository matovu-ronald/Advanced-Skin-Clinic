<section class="main-slider">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach($slides as $slide)
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset($slide->image) }}"  data-saveperformance="off"  data-title="Awsome Service">
                    <img src="{{ asset($slide->image) }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption lfl tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>{{ substr($slide->image_text, 0, 50) }}</h2></div>


                    <div class="tp-caption lfr tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-40"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>{{ substr($slide->image_text, 50, 100) }}</h2></div>

                    <div class="tp-caption lfb tp-resizeme"
                         data-x="center" data-hoffset="-100"
                         data-y="center" data-voffset="40"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn theme-btn">{{ $slide->button_text_one }}</a></div></div>

                    <div class="tp-caption lfb tp-resizeme"
                         data-x="center" data-hoffset="100"
                         data-y="center" data-voffset="40"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn style-two theme-btn">{{ $slide->button_text_two }}</a></div></div>

                </li>

                @endforeach


            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>