@foreach($data as $key=>$val)
    <div class="bloglist">
        <article id="post-8174"
            class="post-8174 post type-post status-publish format-standard has-post-thumbnail hentry category-wind-mill tag-energy">
            <div class="cspt-blog-classic">
                <div class="cspt-featured-wrapper"><a
                        href="{{ url('blogs/'.$val->url)}}"><img
                            width="1280" height="800"
                            src="{{ asset('public/images/'.$val->image)}}"
                            class="attachment-full size-full wp-post-image" alt="impact-of-weather-conditions-on-solar-panels-and-their-efficiency"/></a>
                </div>
                <div class="cspt-blog-classic-inner">
                    <div class="cspt-blog-meta-wrapper ">

                        <h2 class="cspt-post-title">
                            <a
                                href="{{ url('blogs/'.$val->url)}}">
                                {{$val->title}} </a>
                        </h2>
                        <div class="cspt-blog-meta cspt-blog-meta-top">
                            <span class="cspt-meta cspt-meta-date"
                                <a href="{{ url('blogs/'.$val->url)}}"
                                    rel="bookmark"><span class="entry-date published">{{ date('F jS, Y', strtotime($val->publish_date)) }}</span></a>
                            </span>

                        </div>
                    </div>

                    <div class="cspt-entry-content"> 
                        <p>{{ Str::limit($val->short_description ?? '', 100) }}</p>
                        <div class="cspt-read-more-link"><a
                                href="{{ url('blogs/'.$val->url)}}">Read
                                More</a></div>
                    </div><!-- .entry-content -->
                </div>
            </div>
        </article><!-- #post-## -->
    </div>
@endforeach