@include('header')
<style>
   .event-tabs .tab-nav {
       display: flex;
       gap: 15px;
       list-style: none;
       justify-content: center;
       margin: 0 0 30px 0;
   }
   .event-tabs .tab-btn {
       cursor: pointer;
       background: transparent;
       border: 1px solid #22285f;
       border-radius: 4px;
       font-size: 16px;
       padding: 7px 20px;
       transition: all 0.3s ease;
       color: #22285f;
   }
   .event-tabs .tab-btn.active {
       color: white;
       font-weight: bold;
       background: #22285f;
   }
   .event-tabs .event-content {
       display: none;
       animation: fadeIn 0.4s ease-in;
   }
   .event-tabs .event-content.active {
       display: block;
   }
   @keyframes fadeIn {
       from { opacity: 0; transform: translateY(10px); }
       to   { opacity: 1; transform: translateY(0); }
   }
   @media (max-width: 600px) {
       .event-tabs .tab-btn { padding: 8px 14px; font-size: 14px; }
   }
   .event-card {
       background: white;
       box-shadow: 0 0 10px #a8a1a1;
       padding: 15px;
       border-radius: 5px;
       height:100%;
   }
   .event-card img {
       border-radius: 5px;
       height:350px;
       width:100%;
          object-fit: cover;
   }
   .event-overlay { margin-top:15px; }
   .event-card .no-js .owl-carousel, .owl-carousel.owl-loaded { flex-direction: column; }
</style>

<div class="crm-banner cspt-bg-color-transparent cspt-bg-image-yes">
   <div class="container">
      <div class="cspt-title-bar-content">
         <div class="cspt-title-bar-content-inner">
            <div class="cspt-tbar">
               <div class="cspt-tbar-inner container">
                  <!--<h1 class="cspt-tbar-title"> Certificates</h1>-->
               </div>
            </div>
            <div class="cspt-breadcrumb"></div>
         </div>
      </div>
   </div>
</div>

<section class="crm_container">
   <div class="container">
      <div class="event-tabs">
         <ul class="tab-nav" role="tablist">
            @foreach($events as $activity => $activityEvents)
               <li>
                  <button class="tab-btn {{ $loop->first ? 'active' : '' }}" data-tab="tab{{ $loop->index + 1 }}" role="tab">
                     {{ $activity }}
                  </button>
               </li>
            @endforeach
         </ul>

         {{-- Tab Contents --}}
         @foreach($events as $activity => $activityEvents)
            <div class="event-content {{ $loop->first ? 'active' : '' }}" id="tab{{ $loop->index + 1 }}">
               <div class="row">
                  @foreach($activityEvents as $event)
                     <div class="col-md-4 mb-5">
                        <div class="event-card">
                           @php
                                if (is_array($event->front_image)) {
                                    $images = $event->front_image; 
                                } elseif (is_string($event->front_image)) {
                                    $images = json_decode($event->front_image, true) ?? [];
                                } else {
                                    $images = [];
                                }
                            @endphp

                           
                           @if($activity === 'Past Events')
                              <h5 class="head_event mb-3">{{ $event->name }}</h5>
                              <div class="owl-carousel event-slider">
                                 @foreach($images as $img)
                                    <img src="{{ asset('public/images/events_images/' . $img) }}" alt="{{ $event->name }}">
                                 @endforeach
                              </div>
                           @else
                              <img src="{{ asset('public/images/events_images/' . ($images[0] ?? 'default.jpg')) }}" alt="{{ $event->name }}">
                              <div class="event-overlay">
                                 <h5 class="head_event">{{ $event->name }}</h5>
                                 <p>{{ $event->description }}</p>
                              </div>
                           @endif
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>

<script>
   document.querySelectorAll(".tab-btn").forEach(button => {
       button.addEventListener("click", () => {
           document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
           button.classList.add("active");
           document.querySelectorAll(".event-content").forEach(content => content.classList.remove("active"));
           document.getElementById(button.dataset.tab).classList.add("active");
       });
   });

   $('.event-slider').owlCarousel({
       loop: true,
       items: 1,
       margin: 20,
       dots: true,
       nav: false,
       autoplay: true,
       autoplayTimeout: 3000
   });
</script>

@include('footer')
