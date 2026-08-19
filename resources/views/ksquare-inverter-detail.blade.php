<!-- resources/views/ksquare-inverter-detail.blade.php -->
@include('header')
<style>
    ul{padding:0;}
    .slick-slider .slick-slide img {
    width: auto !important;height: auto !important;}
</style>
<div class="ksquare-inverter-banner cspt-bg-color-transparent cspt-bg-image-yes">
    <div class="container">
        <div class="cspt-title-bar-content">
            <div class="cspt-title-bar-content-inner">
                <div class="cspt-tbar">
                    <div class="cspt-tbar-inner container">
                        <!-- <h1 class="cspt-tbar-title"> Solsquare</h1> -->
                    </div>
                </div>
                <div class="cspt-breadcrumb">
                    <!-- <div class="cspt-breadcrumb-inner"><span><a title="" href="" class="home"><span>Our Brands</span></a></span><i class="cspt-base-icon-angle-right"></i><span class="post post-page current-item">Solsquare</span></div> -->
                </div>
            </div>
        </div><!-- .cspt-title-bar-content -->
    </div><!-- .container -->
</div><!-- .cspt-title-bar-wrapper -->

<section class="elementor-element elementor-element-082c2df cspt-col-stretched-none cspt-bg-color-over-image elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="082c2df" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
    <div class="container">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row ksquare-inverter-row">
                <div class="elementor-element elementor-element-1e1901a cspt-bg-color-over-image elementor-column elementor-col-20 elementor-top-column" data-id="1e1901a" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <img src="{{ asset('public/images/Isolation_Mode.png') }}" class="header-img" alt="solsquare">
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1e1901a cspt-bg-color-over-image elementor-column elementor-col-80 elementor-top-column" data-id="1e1901a" data-element_type="column">
                    <div class="elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <h1>{{ $product->name }}</h1>
                            <p>{!! $product->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="custom-tab-wrapper">
    <div class="tabs">
        @foreach($tabData as $index => $tab)
            <input type="radio" name="tab-btn" id="tab-btn-{{ $index + 1 }}" value="" {{ $index == 0 ? 'checked' : '' }}>
            <label for="tab-btn-{{ $index + 1 }}">{{ $tab->name }}</label>
        @endforeach

        @foreach($tabData as $index => $tab)
            <div id="content-{{ $index + 1 }}">
                <div class="inverter-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <img src="{{ asset($tab->image) }}" alt="{{ $tab->name }}" class="tab-image" />
                            <!--<div class="inverter_box_slider">-->
                            <!--    <img src="{{ asset('public/images/products_tabing/1727957621.png') }}" class="tab-image" />-->
                            <!--    <img src="{{ asset('public/images/products_tabing/4-25-kW-three-phase-side-view.png') }}" class="tab-image"/>-->
                            <!--</div>-->
                        </div>
                        <div class="col-xl-6">
                            {!! $tab->description !!} 
                            <a href="https://api.whatsapp.com/send?phone=917227931916&amp;text=Hello, I am interested in buying 1-5 kW 1 In 1 Out ACDB" target="_blank">
                                <button class="btn btn-primary mt-3">Inquiry Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--<div class="text-center">-->
    <!--    <a href="javascript:void(0)" target="_blank"><button class="btn btn-primary">Download Brochure <i class="fa fa-arrow-circle-down"></i></button></a>-->
    <!--</div>-->
</div>

@include('footer')
	<script>
$(document).ready(function(){
  $('.inverter_box_slider').slick({
    dots: false,
    arrows:false,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: false,
  });
});
	</script>
