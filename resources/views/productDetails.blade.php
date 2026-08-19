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
</style>
            <div class="dcdb-sub-banner  cspt-bg-color-transparent cspt-bg-image-yes" style="background-image: url(../../public/images/Ksqure-Banner.jpg);">
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
                    </div>
                </div>
            </div>
        </header>
        
        <div class="site-content-contain">
            <div id="content" class="site-content container">

                <div id="primary" class="content-area ">
                    <main id="main" class="site-main">

                        <article id="post-6895"
                            class="cspt-portfolio-single-style-1 post-6895 cspt-portfolio type-cspt-portfolio status-publish has-post-thumbnail hentry cspt-portfolio-category-energy cspt-portfolio-category-solar cspt-portfolio-category-sun">
                            <div class="cspt-portfolio-single">
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <h1> {{$list->name}}</h1>
                                        <hr size="10">
                                        <div class="row">
                                            <div class="col-md-12 mb-3 p-0">
                                                <?php echo preg_replace('~^"?(.*?)"?$~', '$1', $list->description); ?>
                                            </div>

                                        </div>
                                            @if (session()->has('error'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                            @if (session()->has('success'))
                                                <div class="alert alert-alert"
                                                    style="color:green;font-size:24px;">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                        <!--<a href="https://api.whatsapp.com/send?phone=917227931916&text=Hello, I am intrested in buying {{$list->name}}"-->
                                        <!--    target="_blank"><button class="btn btn-primary mt-3">Inquiry-->
                                        <!--        Now</button></a>-->
                                        <a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn btn-primary mt-3">Inquiry
                                                Now</a>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="cspt-short-description">
                                            <img src="<?php echo URL::to('/'); ?>/{{$list->image}}" alt="{{$list->name}}">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->

            </div><!-- #content -->
            
            <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5>Inquiry</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('inquirySubmit') }}" method="post" id="product_inq">
                        @honeypot
                        @csrf
                        <div class="cspt-main-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name"
                                                id="iname" required size="40" class="wpcf7-form-control wpcf7-text"
                                                placeholder="Your Name" required /></span>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="wpcf7-form-control-wrap product-name">
                                            <input type="text" name="product_name" value="{{ $list->name }}" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Product Name" readonly />
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" required
                                                name="email" id="email" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Your Email" /></span>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group input-button">
                                        <span class="wpcf7-form-control-wrap website-url"><input type="text" required
                                                name="phone" id="iphone" maxlength="15" minlength="10" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                placeholder="Contact Number" /></span>
                                    </div>
                                    </p>
                                </div>
                                <!--<div class="col-sm-12">-->
                                <!--    <div class="input-group input-button">-->
                                <!--        <span class="wpcf7-form-control-wrap website-url" required>-->
                                <!--            <select required class="wpcf7-form-control wpcf7-select" name="city"-->
                                <!--                id="city">-->
                                <!--                <option value="" selected disabled>-->
                                <!--                    City-->
                                <!--                </option>-->
                                <!--                <option>-->
                                <!--                    Ahmedabad-->
                                <!--                </option>-->
                                <!--                <option>-->
                                <!--                    Surat-->
                                <!--                </option>-->
                                <!--            </select>-->
                                <!--        </span>-->
                                <!--    </div>-->
                                <!--    </p>-->
                                <!--</div>-->
                                <div class="col-sm-12">
                                    <div class="input-group input-button">
                                        <span class="wpcf7-form-control-wrap website-url" required>
                                           <input type="text" required
                                                name="city" id="city" maxlength="10" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                placeholder="City" />
                                        </span>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group input-button">
                                        <span class="wpcf7-form-control-wrap message" required>
                                            <textarea name="message" id="message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                placeholder="Message"></textarea>
                                        </span>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group input-button">
                                        <button type="submit" id="submit" value="Send Message"
                                            class="wpcf7-form-control wpcf7-submit">Send Message</button>
                                    </div>
                                    </p>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="wpcf7-response-output" role="alert" aria-hidden="true">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('footer')

{{-- form submiting code start --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const form = document.getElementById("product_inq");
        const submitBtn = document.getElementById("submit");

        form.addEventListener("submit", function () {

            // Disable button
            submitBtn.disabled = true;

            // Change button text
            submitBtn.innerHTML = 'Submitting... <i class="fa fa-spinner fa-spin"></i>';

        });

    });
</script>

{{-- form submiting code end --}}