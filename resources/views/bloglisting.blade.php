@include('header')
<div class="blogs-banner  cspt-bg-color-transparent cspt-bg-image-yes">
    <div class="container">
        <div class="cspt-title-bar-content">
            <div class="cspt-title-bar-content-inner">
                <div class="cspt-tbar">
                    <div class="cspt-tbar-inner container">
                        <!-- <h1 class="cspt-tbar-title"> Kenclozer</h1> -->
                    </div>
                </div>
                <div class="cspt-breadcrumb">
                </div>
            </div>
        </div><!-- .cspt-title-bar-content -->
    </div><!-- .container -->
</div><!-- .cspt-title-bar-wrapper -->
</header>
        <div class="site-content-contain">
            <div id="content" class="site-content container">
                <div class="row mt-5">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main row">
                            <div class="col-md-12">
                                <h1 class="text-center mb-5">Blogs</h1>
                            </div>
                            <div class="alloverBlogs" id="alloverBlogs">
                                @include('blogdata')
                            </div>
                        </main>
                    </div>
                </div>

            </div>
            <div class="text-center" style="display:none;color: #000;">
                <img src="{{asset('public/images/ajax-loader.gif')}}">
            </div>
        </div>


        @include('footer')
<script>
    function loadMoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: 'get',
                beforeSend: function() {
                    $(".ajax-load").show();
                }
            })
            .done(function(data) {
                if (data.html == "") {
                  // $('.ajax-load').html("No more Blogs Found!");
                  $('.ajax-load').hide();
                    return;
                }
                $('.ajax-load').hide();
                $("#alloverBlogs").append(data.html);
            })
            // Call back function
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert("Server not responding.....");
            });

    }
    //function for Scroll Event
    var page = 1;
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });
</script>