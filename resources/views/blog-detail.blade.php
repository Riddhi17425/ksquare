@include('header')
@if($blogfaq->isNotEmpty())
    @php
        $faqSchemaEntities = [];

        foreach ($blogfaq as $faq) {
            foreach (($faq->title_description ?? []) as $item) {
                $question = trim($item['title'] ?? '');
                $answer = trim(strip_tags($item['description'] ?? ''));

                if ($question !== '' && $answer !== '') {
                    $faqSchemaEntities[] = [
                        '@type' => 'Question',
                        'name' => $question,
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $answer,
                        ],
                    ];
                }
            }
        }
    @endphp

    @if(!empty($faqSchemaEntities))
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => $faqSchemaEntities,
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
        </script>
    @endif
@endif
<style>
    .bottom-whatsapp {
    position: fixed;
    bottom: 20px;
    width: 55px;
    left: 22px;
    height: 55px;
    z-index: 999;
}
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  margin: 20px 0;
}

/* Header */
table thead {
  background-color: #22285f;
  color: #fff;
}

table th,
table td {
  padding: 12px 15px;
  text-align: center;
  border: 1px solid #e0e0e0;
}

/* Zebra rows */
table tbody tr:nth-child(even) {
  background-color: #f8f9fc;
}

/* Hover effect */
table tbody tr:hover {
  background-color: #eef1ff;
  transition: 0.3s;
}
.accordion-header h3{
    font-size: 20px;
    color:#fff;
}
/* Responsive wrapper trick */


/* Mobile adjustments */
@media (max-width: 600px) {
    table {
  display: block;
  overflow-x: auto;
  white-space: nowrap;
}
  table th,
  table td {
    padding: 10px;
    font-size: 14px;
  }
}
</style>

            <div class="blogs-banner  cspt-bg-color-transparent cspt-bg-image-yes">
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
            <div id="content" class="site-content container blogContent">
                <div class="row multi-columns-row mt-5">

                    <div id="primary" class="content-area col-md-12 col-lg-12">
                        <main id="main" class="site-main">
                            
                            <article id="post-278"
                                class="post-278 post type-post status-publish format-standard has-post-thumbnail hentry category-electricity tag-energy">
                                <div class="cspt-featured-wrapper pt-5 text-center"><img width="600" height="600"
                                            src="{{ asset('public/images/'.$data->image) }}"
                                            class="attachment-full size-full wp-post-image" alt="{{ $data->title ?? ''}}"
                                            /></div>
                                <h1 class="cspt-post-title mt-5">{{ $data->title ?? '' }} </h1>
                            <div class="cspt-blog-meta cspt-blog-meta-top">
                                <span class="cspt-meta cspt-meta-date">
                                    <a href="#" rel="bookmark"><span class="entry-date published">{{ $data->publish_date }}</span></a>
                                </span>
                            </div>
                                
                                            
                                <div class="cspt-blog-classic">
                                    
                                    <div class="cspt-blog-classic-inner">
                               
                                        <div class="cspt-entry-content">
                                           {!! $data->description ?? '' !!}
                                        </div><!-- .entry-content -->
                                        
                                         @if (!empty($data->cta_image))
                                            <div class="cspt-entry-content">
                                                @if(isset($data->cta_link) && $data->cta_link != null)
                                                <a href="{{$data->cta_link}}" target="_blank"> 
                                                @else
                                              <a href="https://www.ksquareenergy.com/contact-us" target="_blank">  
                                              @endif
                                                  <img src="{{ asset('public/Blog_CTA_Images/' . $data->cta_image) }}" class="img-fluid" alt="{{ $data->title }} CTA image">
                                              </a>
                                            </div>
                                        @endif
                                        @if (!empty($data->conclusion))
                                            <div class="cspt-entry-content">
                                                {!! $data->conclusion  !!}
                                            </div>
                                        @endif
                                        
                                        
                                    </div>
                                </div>
                            </article><!-- #post-## -->
                            
                        </main><!-- #main -->
                    </div><!-- #primary -->

                   
                </div><!-- .row -->

            </div>
            @if($blogfaq->isNotEmpty())
            <div class="container">
                @foreach ($blogfaq as $faq)
                <h2>Frequently Asked Questions</h2>
                @endforeach
                <div class="accordion">
                    @foreach ($blogfaq as $faq)
                        @foreach (($faq->title_description ?? []) as $index => $item)
                            <div class="accordion-item">
                              <button class="accordion-header {{ $index === 0 ? 'active' : '' }}">
                                     <h3> {{ $item['title'] ?? '' }}</h3>
                                </button>
                                <div class="accordion-content" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                                    <p>{!! $item['description'] ?? '' !!}</p>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            @endif

              <script>
      $(document).ready(function () {
        $(".acc-container .acc:nth-child(1) .acc-head").addClass("active");
        $(".acc-container .acc:nth-child(1) .acc-content").slideDown();
        $(".acc-head").on("click", function () {
          if ($(this).hasClass("active")) {
            $(this).siblings(".acc-content").slideUp();
            $(this).removeClass("active");
          } else {
            $(".acc-content").slideUp();
            $(".acc-head").removeClass("active");
            $(this).siblings(".acc-content").slideToggle();
            $(this).toggleClass("active");
          }
        });
      });
    </script>
      <script>
        document.querySelectorAll('.accordion-header').forEach(button => {
            button.addEventListener('click', () => {
                const accordionContent = button.nextElementSibling;
                const isActive = accordionContent.style.display === 'block';
        
                // Close all open accordion items
                document.querySelectorAll('.accordion-content').forEach(content => {
                    content.style.display = 'none';
                });
        
                document.querySelectorAll('.accordion-header').forEach(header => {
                    header.classList.remove('active');
                });
        
                // If the clicked item was not already active, open it
                if (!isActive) {
                    accordionContent.style.display = 'block';
                    button.classList.add('active');
                }
            });
        });
    </script>
@include('footer')