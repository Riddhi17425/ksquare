@include('header')
<style>
    .bottom-whatsapp {
    position: fixed;
    bottom: 20px;
    width: 55px;
    left: 22px;
    height: 55px;
    z-index: 999;
}
.ksquare-inverter-row{
    align-items:center;
}
.ksquare-inverter-inner img{
    padding:30px 17px;
}
.cspt-portfolio-style-3 .ksquare-inverter-item{
    background:#F3F3F5!important;
    z-index:999;
}
.ksquare-inverter-wrapper{
    height:380px;
}
.ksquare-inverter-wrapper img{
    height:380px!important;
    object-fit:contain!important;
}

</style>
   <div class="ksquare-inverter-banner  cspt-bg-color-transparent cspt-bg-image-yes">
                <div class="container">
                    <div class="cspt-title-bar-content">
                        <div class="cspt-title-bar-content-inner">
                            <div class="cspt-tbar">
                                <div class="cspt-tbar-inner container">
                                   
                                </div>
                            </div>
                            <div class="cspt-breadcrumb">
                               
                            </div>
                        </div>
                    </div><!-- .cspt-title-bar-content -->
                </div><!-- .container -->
            </div><!-- .cspt-title-bar-wrapper -->
        </header><!-- #masthead -->
        <div class="site-content-contain">
            <div id="content" class="site-content container">
                <div id="primary" class="content-area ">
                    <main id="main" class="site-main cspt-page-content-wrapper">
                        <article id="post-17396" class="post-17396 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="17396"
                                    class="elementor elementor-17396" data-elementor-settings="[]">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <section
                                                class="elementor-element elementor-element-082c2df cspt-col-stretched-none cspt-bg-color-over-image elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                                data-id="082c2df" data-element_type="section"
                                                data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row ksquare-inverter-row">
                                                        <div class="elementor-element elementor-element-1e1901a cspt-bg-color-over-image elementor-column elementor-col-20 elementor-top-column"
                                                            data-id="1e1901a" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <img src="{{asset('public/images/Isolation_Mode.png')}}
                                                                        "class="header-img" alt="solsquare">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1e1901a cspt-bg-color-over-image elementor-column elementor-col-80 elementor-top-column"
                                                            data-id="1e1901a" data-element_type="column">
                                                            <div
                                                                class="elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <h1>{{ $name }}</h1>
                                                                    <p><?php echo preg_replace('~^"?(.*?)"?$~','$1',$cats->productDesc); ?></p>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>



                                            <div class="creativesplanet-element creativesplanet-element-portfolio cspt-element-portfolio-style-2 creativesplanet-element-viewtype-row-column creativesplanet-gap-30px"
                                                data-show="12" data-columns="3" data-loop="false" data-autoplay="false"
                                                data-center="false" data-nav="false" data-dots="false"
                                                data-autoplayspeed="1000" data-margin="30px">
                                                <div class="creativesplanet-element-inner ksquare-inverter-inner">

                                                    <div class="cspt-ele-header-area">
                                                        <div class="cspt-heading-subheading left-align ">
                                                        </div>

                                                    </div>

                                                    <div
                                                                                class="cspt-element-posts-wrapper row multi-columns-row">
                                                                                @foreach ($list as $record)
                                                                                    <div
                                                                                        class="cspt-ele cspt-portfolio-ele col-md-4 solar">
                                                                                        <?php
                                                                                    if (strlen($record->description) > 0)
                                                                                    { ?>
                                                                                        <a
                                                                                            href="<?php echo URL::to('/'); ?>/productDetails/{{ $record->seourl }}">
                                                                                            <article
                                                                                                class="creativesplanet-ele creativesplanet-ele-portfolio cspt-portfolio-style-3">
                                                                                                <div
                                                                                                    class="creativesplanet-post-item">
                                                                                                    <div
                                                                                                        class="cspt-image-wrapper ksquare-inverter-wrapper">
                                                                                                        <div
                                                                                                            class="cspt-featured-wrapper ksquare-inverter-item">
                                                                                                            <img width="770"
                                                                                                                height="500"
                                                                                                                src="<?php echo URL::to('/'); ?>/{{ $record->image }}"
                                                                                                                class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image"
                                                                                                                alt="{{$record->name}}"
                                                                                                                data-id="9155" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="cspt-content-wrapper">
                                                                                                        <h3
                                                                                                            class="cspt-portfolio-title text-center">
                                                                                                            {{ $record->name }}
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </article>
                                                                                        </a>
                                                                                        <?php }
                                                                                    else
                                                                                    { ?>
                                                                                        <a href="#myModal"
                                                                                            data-toggle="modal"
                                                                                            data-target="#myModal">
                                                                                            <article
                                                                                                class="creativesplanet-ele creativesplanet-ele-portfolio cspt-portfolio-style-2 ">
                                                                                                <div
                                                                                                    class="creativesplanet-post-item">
                                                                                                    <div
                                                                                                        class="cspt-image-wrapper">
                                                                                                        <div
                                                                                                            class="cspt-featured-wrapper">
                                                                                                            <img width="770"
                                                                                                                height="500"
                                                                                                                src="<?php echo URL::to('/'); ?>/{{ $record->image }}"
                                                                                                                class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image"
                                                                                                                alt="{{$record->name}}"
                                                                                                                data-id="9155" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="cspt-content-wrapper">
                                                                                                        <h3
                                                                                                            class="cspt-portfolio-title text-center">
                                                                                                            {{ $record->name }}
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </article>
                                                                                        </a>
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                  
                                                </div>
                                                <!-- .creativesplanet-element-inner -->
                                            </div><!-- .creativesplanet-element -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- #content -->
            </div>
@include('footer')