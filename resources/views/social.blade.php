@include('header')
@include('instagram_basic_display_api')
<?php
    $accessToken = 'EAAGOhTHSqtgBOx7Yo97DcL8kcMyj4HfYzMaKMx2yKhhwOmnB2eZBcDpflhZBdAuhCQXWFZCBV8JhTWF9Khe4EG9niwpoJoKJHPyCv1bq0hvf21kmv3zH9gMvOR91bEBZBKUi0DLP1MCKImBhZAl6absZByujFacZBqZCqZCqWHC3M9ZBHdear5vJVj27JfbwZDZD';
    $params = array(
        'get_code' => isset($_GET['code']) ? $_GET['code'] : '',
        'access_token' => $accessToken,
        'user_id' => '6379344305469646',
    );
    $ig = new instagram_basic_display_api($params);
?>
<meta charset="utf-8">
<?php
    $user = $ig->getUser();
    $usersMedia = $ig->getUsersMedia();
?>

<section id="gallery" class="service-grid pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cspt-ele-header-area">
                <div class="cspt-heading-subheading">
                    <h1 class="text-center">We're Social</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @if (!empty($usersMedia['data']))
                @foreach ($usersMedia['data'] as $d)
                    <div class="col-lg-4 col-md-6 text-center mb-3 p-5" style="padding:3px !important;">
                        @if (!empty($d['media_type']) && ($d['media_type'] == 'IMAGE' || $d['media_type'] == 'CAROUSEL_ALBUM'))
                            <a href="{{ $d['media_url'] ?? asset('public/Solar_Sates_Images/state_main.png') }}" 
                               data-fancybox="gallery" 
                               class="imgcontainer" 
                               data-caption="{{ $d['caption'] ?? 'No caption' }}">
                                <img src="{{ $d['media_url'] ?? asset('public/Solar_Sates_Images/state_main.png') }}" 
                                     class="image" 
                                     height="350" 
                                     width="350" 
                                     alt="Image-Gallery" 
                                     style="border:1px solid darkgray;padding: 15px;">
                            </a>
                        @elseif (!empty($d['media_type']) && $d['media_type'] == 'VIDEO')
                            <a href="{{ $d['media_url'] ?? asset('public/Solar_Sates_Images/state_main.png') }}" 
                               data-fancybox="gallery" 
                               class="imgcontainer" 
                               data-caption="{{ $d['caption'] ?? 'No caption' }}">
                                <video height="350" 
                                       width="350" 
                                       controls 
                                       style="border:1px solid darkgray;padding: 15px;">
                                    <source src="{{ $d['media_url'] ?? asset('public/Solar_Sates_Images/state_main.png') }}">
                                </video>
                            </a>
                        @else
                            <a href="{{ asset('public/Solar_Sates_Images/state_main.png') }}" 
                               data-fancybox="gallery" 
                               class="imgcontainer" 
                               data-caption="No content available">
                                <img src="{{ asset('public/Solar_Sates_Images/state_main.png') }}" 
                                     class="image" 
                                     height="350" 
                                     width="350" 
                                     alt="Fallback Image" 
                                     style="border:1px solid darkgray;padding: 15px;">
                            </a>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center">
                    <img src="{{ asset('public/Solar_Sates_Images/state_main.png') }}" 
                         class="img-fluid"
                         alt="Fallback Image" 
                         style="border:1px solid darkgray;padding: 15px;">
                    <h3 class="text-center">Comming Soon</h3>
                </div>
            @endif
        </div>
    </div>
</section>

<script>
// Ensure the script runs after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Fancybox Configuration
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });
});
</script>

@include('footer')
