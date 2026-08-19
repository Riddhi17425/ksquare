@include('header')
            <div class="profile-banner  cspt-bg-color-transparent cspt-bg-image-yes">
                <div class="container">
                    <div class="cspt-title-bar-content">

                        <div class="cspt-title-bar-content-inner">
                            <div class="cspt-tbar">
                                <div class="cspt-tbar-inner container">
                                    <!-- <h1 class="cspt-tbar-title"> Profile</h1> -->
                                </div>
                            </div>
                            <div class="cspt-breadcrumb">
                                <!-- <div class="cspt-breadcrumb-inner"><span><a title=""
                                            href=""
                                            class="home"><span>About Us</span></a></span><i
                                        class="cspt-base-icon-angle-right"></i><span
                                        class="post post-page current-item">Profile</span></div> -->
                            </div>
                        </div>
                    </div><!-- .cspt-title-bar-content -->
                </div><!-- .container -->
            </div><!-- .cspt-title-bar-wrapper -->
        </header><!-- #masthead -->
        
        
        
        <section class="mb-5">
          <div class="container-fluid">
              <div class="row justify-content-center mb-5">
                  <div class="col-lg-10">
                          <h1 class="text-center">Ksquar Solar PR: Shaping the Future with Breakthroughs</h1>
                          <p class="text-center">Discover the latest from Ksquare Solar — News, Success Stories, and Advancements that are reshaping the future of clean energy.</p>
                  </div>
              </div>
              <div class="row">
                  @foreach($pr as $val)
                <div class="col-lg-4 mb-5">
                    <div class="rp_card">
                    <img class="img-fluid" src="{{ asset('public/images/frontimage_Pr/'.$val->front_image) }}">
                    <div class="rp_card_bt">
                        <h5>{{ $val->name }}</h5>
                        <p class="mb-4">{!! $val->description !!}</p>
                        <a href="{{ $val->url }}" target="_blank">Read More</a>
                    </div>
                    </div>
                </div>
                @endforeach
                <!--<div class="col-lg-4 mb-5">-->
                <!--    <div class="rp_card">-->
                <!--    <img src="https://www.ksquareenergy.com/public/images/vision.jpg">-->
                <!--    <div class="rp_card_bt">-->
                <!--        <h5>Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</h5>-->
                <!--        <p class="mb-4">Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</p>-->
                <!--        <a href="#">Read More</a>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-lg-4 mb-5">-->
                <!--    <div class="rp_card">-->
                <!--    <img src="https://www.ksquareenergy.com/public/images/vision.jpg">-->
                <!--    <div class="rp_card_bt">-->
                <!--        <h5>Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</h5>-->
                <!--        <p class="mb-4">Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</p>-->
                <!--        <a href="#">Read More</a>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-lg-4 mb-5">-->
                <!--    <div class="rp_card">-->
                <!--    <img src="https://www.ksquareenergy.com/public/images/vision.jpg">-->
                <!--    <div class="rp_card_bt">-->
                <!--        <h5>Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</h5>-->
                <!--        <p class="mb-4">Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</p>-->
                <!--        <a href="#">Read More</a>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-lg-4 mb-5">-->
                <!--    <div class="rp_card">-->
                <!--    <img src="https://www.ksquareenergy.com/public/images/vision.jpg">-->
                <!--    <div class="rp_card_bt">-->
                <!--        <h5>Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</h5>-->
                <!--        <p class="mb-4">Rayzon Solar Secures 280 MW ToPcon Panel Supply for Mahindra Susten’s Solar Project</p>-->
                <!--        <a href="#">Read More</a>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
          </div>
        </section>
        
        <style>
            
            .rp_card
            {
                box-shadow: 0 0 10px #00000029;
                border-radius: 10px;
                overflow: hidden;
            }
            
            .rp_card img
            {
              height: 300px;
              width:100%;
            }
            
            .rp_card_bt
            {
                padding:20px;
            }
            
            .rp_card_bt h5,
            .rp_card_bt p {
              display: -webkit-box;
              -webkit-line-clamp: 2; 
              -webkit-box-orient: vertical;
              overflow: hidden;
              text-overflow: ellipsis;
            }
            
        </style>
@include('footer')