<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/country-flag-icons@1.5.6/css/flag-icons.min.css">

<style>
    .bottom-whatsapp {
    position: fixed;
    bottom: 20px;
    width: 55px;
    left: 22px;
    height: 55px;
    z-index: 999;
    animation: 1s infinite alternate button-updown;
    cursor:pointer;
}
@keyframes button-updown {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-15px);
    }
    
}
/*ym*/
.wa-modal{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,.6);
  z-index:9999;
  align-items:center;
  justify-content:center;
    opacity:0;
  visibility:hidden;
  transition:opacity .15s linear, visibility .15s linear;
}
.wa-box{
  width:380px;
  background:#fff;
  border-radius:12px;
   transform:translateY(-50px);
  transition:transform .3s ease-out;
}
.wa-modal.display{
  opacity:1;
  visibility:visible;
}

.wa-modal.display .wa-box{
  transform:translateY(0);
}
.wa-modal:not(.display) .wa-box{
  transform: translateY(-50px);
}
.wa-header{
  background:#111c46;
  color:#fff;
  padding:14px;
  font-size:18px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.wa-body{ padding:16px; }
 
/* ===== FIELDS ===== */
.wa-body textarea{
  width:100%;
  height:80px;
  padding:10px;
  border:1px solid #ccc;
  border-radius:6px;
  margin-bottom:14px;
}
 
.phone-box{
  position:relative;
}
.phone-box input{
  width:100%;
  padding:12px 10px 12px 90px;
  border-radius:6px;
  border:1px solid #ccc;
  font-size:15px;
}
 
/* ===== COUNTRY SELECT ===== */
.country-selected{
  position:absolute;
  top:50%;
  left:10px;
  transform:translateY(-50%);
  display:flex;
  align-items:center;
  gap:6px;
  cursor:pointer;
}
.country-selected img{
  width:24px;
  height:16px;
}
 
.country-dropdown{
  display:none;
  position:absolute;
  top:110%;
  left:0;
  width:100%;
  background:#fff;
  border:1px solid #ccc;
  border-radius:6px;
  max-height:240px;
  overflow-y:auto;
  z-index:10;
}
 
.country-dropdown input{
  width:95%;
  margin:8px;
  padding:6px;
  border:1px solid #ccc;
  height:35px;
}
 
.country-item{
  display:flex;
  align-items:center;
  gap:8px;
  padding:6px 10px;
  cursor:pointer;
}
.country-item:hover{
  background:#f1f1f1;
}
.country-item img{
  width:22px;
  height:14px;
}
 
/* ===== BUTTON ===== */
.wa-btn{
  margin-top:16px;
  width:100%;
  padding:12px;
  background:#111c46;
  color:#fff;
  border:none;
  border-radius:8px;
  font-size:16px;
  cursor:pointer;
}
/*ym*/
</style>


			<footer id="colophon" class="site-footer  cspt-color-white cspt-bg-color-blackish cspt-footer-menu-no" >
			   <!--<a href="https://api.whatsapp.com/send?phone=+917969697979&text=Hello,%20I知%20interested%20in%20solar%20from%20your%20website.%20Please%20share%20details." target="_blank">-->
			   <!--     <img src="https://www.ksquareenergy.com/public/images/whatsapp.png" class="bottom-whatsapp"></a>-->
			      <meta name="csrf-token" content="{{ csrf_token() }}">

                    <!-- WhatsApp Button -->
                    <a onclick="openWA()" class="bottom-whatsapp">
                        <img src="https://www.ksquareenergy.com/public/images/whatsapp.png">
                    </a>
                    
                    <!-- WhatsApp Modal -->
                    <!-- WhatsApp Modal -->
<div id="waModal" class="wa-modal">
    <div class="wa-box">
        <div class="wa-header">
            Chat with us on WhatsApp
            <span style="cursor:pointer" onclick="closeWA()">✕</span>
        </div>

        <div class="wa-body">
            <textarea id="waMsg" placeholder="Message"></textarea>

            <div class="phone-box">
                <div class="country-selected" onclick="event.stopPropagation(); toggleDropdown();">
                    <img id="selFlag">
                    <span id="selCode"></span>
                </div>

                <input type="tel" id="phone" placeholder="Enter Your Mobile Number">

                <div class="country-dropdown" id="countryDropdown" onclick="event.stopPropagation()">
                    <input type="text" placeholder="Search"
                           onclick="event.stopPropagation()"
                           onkeyup="filterCountry(this.value)">
                    <div id="countryList"></div>
                </div>
            </div>

            <div id="waError" style="color:red;font-size:13px;margin-top:6px;display:none;"></div>

            <button class="wa-btn" onclick="startChat()">Start Chat with Us</button>
        </div>
    </div>
</div>
            <!--ym-->
				<div class="footer-wrap cspt-footer-widget-area  cspt-bg-color-transparent" >
					<div class="container">
						<div class="row">
							<div class="cspt-footer-widget col-md-6 col-lg-4 mt-5">
								<aside id="text-3" class="widget widget_text">
									<div class="textwidget">
										<p><img class="cspt-footerlogo" src='<?php echo URL::to('/'); ?>/public/images/logo1.png' alt="" /></p>
										<!--<p class="pr-3 pt-3">Ksquare has established itself across the country in a short span of 7 years-->
          <!--                                  due to commitment towards quality products and timely service.</p>-->
									</div>
								</aside>
                                <aside id="greenly_contact_widget-2" class="widget widget_text">
									<!--<h2 class="widget-title">Contact Info</h2>-->
									<h6 class="p-1 mt-3">Ksquare Energy Pvt. Ltd.</h6>
									<p class="mt-5">Ksquare has established itself across the country in a short span of 8 years due to commitment towards quality products and timely service.</p>

									<!--<div class="cspt-contact-widget-line cspt-contact-widget-address">B-403/404-->
										<!--Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.-->
									<!--</div>-->
									
									<div class="cspt-contact-widget-line cspt-contact-widget-email pt-3">
									    <!--<h6 class="p-1 mt-3">Email</h6>-->
									<!--<a href="mailto:info@ksquareenergy.com">info@ksquareenergy.com</a></div>-->
									<!--<h6 class="p-1 mt-3">Phone Number</h6>-->
									<!--<div class="cspt-contact-widget-line cspt-contact-widget-email pt-3"><a href="tel:+917969697979">079 6969 7979</a></div>-->
									<!--<div class="cspt-contact-widget-line cspt-contact-widget-email pt-3"><a href="tel:+917227931916">+91 7227931919</a></div>-->
								</aside>
							</div>
                            <div class="cspt-footer-widget col-md-6 col-lg-6 mt-5">
                                <div class="row">
                                    <div class="col-md-4 p-0">
                                        <aside id="nav_menu-2" class="widget widget_nav_menu">
									<h2 class="widget-title">Company</h2>
									<div class="menu-company-container">
										<ul id="menu-company" class="menu">
											<li id="menu-item-8660"
												class="pt-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('index')}}">Home</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('downloads')}}">Downloads</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('blogs')}}">Blogs</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="https://ksquareenergy.keka.com/careers">Careers</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('contact')}}">Contact Us</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('privacy')}}">Privacy Policy</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('channel-partner')}}">Channel Partner</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('pm-surya-ghar')}}">Pm Surya Ghar</a>
											</li>
										</ul>
									</div>
								</aside>
                                    </div>
                                    <div class="col-md-4 p-0">
                                        <aside id="nav_menu-2" class="widget widget_nav_menu">
									<h2 class="widget-title">About</h2>
									<div class="menu-company-container">
										<ul id="menu-company" class="menu">
											<li id="menu-item-8660"
												class="pt-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('profile')}}">Profile</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('our-team')}}">Team</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('infrastructure')}}">Infrastructure</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('certificates')}}">Certificates</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('awards')}}">Awards & Accolades</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('grievance')}}">Grievance</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{url('pr')}}">PR</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('ourpresence')}}">Our Presence</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="{{route('payment-detail')}}">Payment Detail</a>
											</li>
										</ul>
									</div>
								</aside>
                                    </div>
                                    <div class="col-md-4 p-0">
                                        <aside id="nav_menu-2" class="widget widget_nav_menu">
									<h2 class="widget-title">Our Brands</h2>
									<div class="menu-company-container">
										<ul id="menu-company" class="menu">
											<li id="menu-item-8660"
												class="pt-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="<?php echo URL::to('/'); ?>/products/solar-inverter">Ksquare Inverter</a>

											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="<?php echo URL::to('/'); ?>/solsquare">Solsquare</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="<?php echo URL::to('/'); ?>/kenclozer">Kenclozer</a>
											</li>
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="<?php echo URL::to('/'); ?>/solplast">Solplast</a>
											</li>
											<!--<li id="menu-item-8660"-->
											<!--	class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">-->
											<!--	<a href="<?php echo URL::to('/'); ?>/blitz">Blitz</a>-->
											<!--</li>-->
										</ul>
									</div>
								</aside>
                                    </div>
                                </div>
                            </div>
                            
							<div class="cspt-footer-widget col-md-6 col-lg-2 mt-5 p-0">
							    <div class="elementor-widget-container row">
                                        <div class="col-md-12 pr-0">Follow Us On:</div>
                                        <div class="col-md-12 mt-3">
                                            <div class="elementor-social-icons-wrapper">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-repeater-item-ac0f598"
                                                    target="_blank" href="https://www.facebook.com/ksquareenergy/">
                                                    <span class="elementor-screen-only">Facebook-square</span>
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-c15a72c"
                                                    target="_blank" href="https://www.instagram.com/ksquare_energy/">
                                                    <span class="elementor-screen-only">Instagram</span>
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-b37381b"
                                                    target="_blank" href="https://www.linkedin.com/company/ksquare-energy-pvt-ltd">
                                                    <span class="elementor-screen-only">Linkedin</span>
                                                    <i class="fab fa-linkedin"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
								<aside id="nav_menu-2" class="widget widget_nav_menu">
									<aside id="greenly_contact_widget-2" class="widget widget_text">
									<!--<h2 class="widget-title">Contact Info</h2>-->
									<!--<h6 class="p-1 mt-3">Ksquare Energy Pvt. Ltd.</h6>-->
									<!--<p class="mt-5">Ksquare has established itself across the country in a short span of 7 years due to commitment towards quality products and timely service.</p>-->

									<div class="cspt-contact-widget-line cspt-contact-widget-address">B-403/404
										Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.
									</div>
									
									<div class="cspt-contact-widget-line cspt-contact-widget-email pt-3">
									    <h6 class="p-1 mt-3">Email</h6>
									<a href="mailto:info@ksquareenergy.com">info@ksquareenergy.com</a></div>
									<h6 class="p-1 mt-3">Phone Number</h6>
									<div class="cspt-contact-widget-line cspt-contact-widget-email "><a href="tel:+917969697979">+91 79 6969 7979</a></div>
							<!--		<div class="cspt-contact-widget-line cspt-contact-widget-email "><a href="tel:+917227931919">+91 7227931919</a></div>-->
								</aside>
								</aside>
							</div>
							<!--show link-->
				            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
								<aside id="nav_menu-2" class="widget widget_nav_menu">
									<div id="toggleLink" class="text-center position-relative" style="cursor: pointer; color: gray;">
                                        <span id="linkText">- Footprints across India -</span>
                                    </div>
								</aside>
                            </div>
                            <!-- .cspt-footer-widget -->
						</div><!-- .row -->
						<!--show more links-->
						
				
						
						@php
                            $solarStates = DB::table('statessolar')->orderBy('seq_id', 'asc')->where('is_delete', 0)->get();
                        @endphp
                        
                        <div class="row" id="contentToToggle" style="display: none;">
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In India</h2>
                                </aside>
                            </div>
                        
                            @foreach($solarStates as $state)
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{url('solarstate/'.$state->url) }}"> Solar Products in {{ $state->solar_state_name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            @endforeach
                       
                        
                         
                        	@php
                            $solarCity = DB::table('citysolar')->where('is_delete', 0)->get();
                        @endphp
                        
                       
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Gujarat</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Gujarat')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In West Bengal</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'West Bengal')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Uttarakhand</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Uttarakhand')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Uttar Pradesh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Uttar Pradesh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Andaman and Nicobar Islands</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Andaman and Nicobar Islands')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Andhra Pradesh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Andhra Pradesh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Assam</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Assam')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Bihar</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Bihar')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                          
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Chandigarh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Chandigarh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Chhattisgarh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Chhattisgarh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Goa</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Goa')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Haryana</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Haryana')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Himachal Pradesh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Himachal Pradesh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Jharkhand</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Jharkhand')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Jammu and Kashmir</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Jammu and Kashmir')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                           
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Karnataka</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Karnataka')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                           
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Kerala</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Kerala')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Ladakh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Ladakh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Lakshadweep</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Lakshadweep')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Madhya Pradesh</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Madhya Pradesh')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Maharashtra</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Maharashtra')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Manipur</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Manipur')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Mizoram</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Mizoram')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Meghalaya</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Meghalaya')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Nagaland</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Nagaland')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In  Nct Of Delhi</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'NCT of Delhi')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In  Odisha</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Odisha')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In  Puducherry</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Puducherry')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In  Punjab</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Punjab')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Rajasthan</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Rajasthan')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Sikkim</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Sikkim')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Tamil Nadu</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Tamil Nadu')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Telangana</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Telangana')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In The Dadra and Nagar Haveli and Daman and Diu</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'The Dadra and Nagar Haveli and Daman and Diu')
                            <div class="cspt-footer-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                            <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h2 class="widget-title ">Ksquare In Tripura</h2>
                                </aside>
                            </div>
                            
                    @foreach($solarCity as $city)
                        @if ($city->state_name && $city->state_name == 'Tripura')
                            <div class="cspt-footer-widget custom-widget custom-widget col-md-6 col-lg-3 mt-4">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="{{ url($city->url) }}">
                                                    Solar for {{ $city->city_name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endforeach
                        </div>

					</div>
				</div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
				<div class="cspt-footer-text-area cspt-bg-color-transparent">
					<div class="container">
						<div class="row">
							<div class="cspt-footer-copyright col-md-6">
								<div class="cspt-footer-copyright-text-area">
									Copyright ｩ <?php echo date("Y"); ?> All Rights Reserved.</div>
							</div>
						</div>
					</div>
				</div>
				
							<section id="sidebar-form">
			<div class="row">
				<div class="col-md-12">
				    @if(trim(Request::path()) != 'calculator')
					<div class="side-icons">
						<a onclick="InquiryForm()" id="show">
							<button class="btn">Inquiry</button>
						</a>
					</div>
					@endif
				</div>
			</div>

			<!--<div class="myform" id="inquiryForm">-->
			<!--		<div class="inquiry_form_header">-->
			<!--			<h2>Inquiry Form</h2>-->
			<!--			<p onclick="InquiryForm()" id="hide">X</p>-->
			<!--		</div>-->
			<!--		<form action="{{route('contactSubmit')}}" method="POST" class="inquiry_contact">-->
			<!--		@honeypot-->
			<!--		@csrf-->
			<!--			<div class="form-group">-->
			<!--			<label style="color:#666666;">Name : </label>-->
			<!--				<input class="form-control" required="required" id="name" name="name" placeholder="Name" type="text">-->
			<!--				<span class="alert-error"></span>-->
			<!--				@if ($errors->has('name'))-->
   <!--                             <span class="text-danger">{{ $errors->first('name') }}</span>-->
   <!--                         @endif-->
			<!--			</div>-->
			<!--			<div class="form-group">-->
			<!--				<label style="color:#666666;">Inquiry For : </label>-->
			<!--				<select class="form-control" required="required" name="subject" id="subject">-->
			<!--					<option value="Solar Rooftop Project" style="color:#666666;">Solar Rooftop Project</option>-->
			<!--					<option value="Solar Product Inquiry"style=" color:#666666;">Solar Product Inquiry</option>-->
			<!--				</select>-->
			<!--				@if ($errors->has('subject'))-->
   <!--                             <span class="text-danger">{{ $errors->first('subject') }}</span>-->
   <!--                         @endif-->
			<!--				<span class="alert-error"></span>-->
			<!--			</div>-->
			<!--			<div class="form-group">-->
			<!--			<label style="color:#666666;">Email: </label>-->
			<!--				<input class="form-control" required="required" id="email" name="email" placeholder="Email *" type="email">-->
			<!--				@if ($errors->has('email'))-->
   <!--                             <span class="text-danger">{{ $errors->first('email') }}</span>-->
   <!--                         @endif-->
			<!--				<span class="alert-error"></span>-->
			<!--			</div>-->
			<!--			<div class="form-group">-->
			<!--				<label style="color:#666666;">Phone : </label>-->
			<!--				<input class="form-control" required="required" id="phone" name="phone" maxlength="10" type="tel" placeholder="Phone">-->
			<!--				@if ($errors->has('phone'))-->
   <!--                             <span class="text-danger">{{ $errors->first('phone') }}</span>-->
   <!--                         @endif-->
			<!--				<span class="alert-error"></span>-->
			<!--			</div>-->
			<!--			<div class="form-group">-->
			<!--			    <label style="color:#666666;">Message : </label>-->
			<!--				<textarea class="form-control" required="required" id="message" name="message"></textarea>-->
			<!--				@if ($errors->has('message'))-->
   <!--                             <span class="text-danger">{{ $errors->first('message') }}</span>-->
   <!--                         @endif-->
			<!--			</div>-->
			<!--			<div class="form-group">-->
			<!--				<button type="button" id="submit" class="form_inquiry_btn">-->
			<!--					Send Inquiry <i class="fa fa-paper-plane"></i>-->
			<!--				</button>-->
			<!--			</div>-->
			<!--		</form>-->
			<!--	</div>-->
			            @php 
                            $states = \App\Models\State::select('name')->where('country_id', 101)->distinct()->get();
                        @endphp
			
					 <div class="myform" id="inquiryForm">
                            <div class="inquiry_form_header">
                                <h2>Inquiry Form</h2>
                                <p id="hide" style="cursor: pointer;">X</p>
                            </div>
                            <form class="inquiry_contact" action="{{ route('contactSubmit') }}" method="post" >
                                <input type="hidden" name="source" value="Modal Form Inquiry">
                                @csrf
                                <div class="form-group">
                                    <label style="color:#666666;">Name : </label>
                                    <input class="form-control" required="required" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Inquiry For : </label>
                                    <select class="form-control" required="required" name="subject" id="subject"  style="font-size:16px; height: auto;color:#848484;">
                                        <option value="Solar Rooftop Project">Solar Rooftop Project</option>
                                        <option value="Solar Product Inquiry">Solar Product Inquiry</option>
                                        <option value="Dealership Inquiry"> Dealership Inquiry</option>
                                    </select>
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Email: </label>
                                    <input class="form-control" required="required" id="email" name="email" placeholder="Email *" type="email">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Phone : </label>
                                    <input class="form-control" required="required" id="phone" name="phone" maxlength="15" minlength="10" type="tel" placeholder="Phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);">
                                    <span class="alert-error"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="state" style="color:#666666;">State :</label>
                                    <select class="form-control" name="state" id="state"  style="font-size:16px; height: auto; color:#848484;">
                                        <option value="">Select State</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                                        @endforeach
        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label style="color:#666666;">City : </label>
                                    <input class="form-control" required="required" id="city" name="city" type="text" placeholder="City">
                                    <span class="alert-error"></span>
                                </div>
                                
                                <div class="form-group">
                                <label style="color:#666666;">Pincode : </label>
                                   <input class="form-control"
                                          required="required"
                                          id="pincode"
                                          name="pincode"
                                          maxlength="6"
                                          type="text"
                                          placeholder="Pincode"
                                          value="{{ old('pincode') }}"
                                          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);">
                                   <span class="alert-error"></span>
                                </div>
                                    
                                
                                <div class="form-group">
                                    
                                    <label style="color:#666666;">Message : </label>
                                    <textarea class="form-control" id="message" name="message" style="font-size:16px;  color:#848484;"></textarea>
                                    
                                    <!--<span class="alert-error"></span>-->
                                </div> <br>
                                <div class="form-group">
                                   <button type="submit" id="submit" class="form_inquiry_btn">
                                        Send Inquiry <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    
                   <script>
                    var isCalculatorPage = {{ Request::is('calculator') ? 'true' : 'false' }};
        $(document).ready(function () {
            $("#inquiryForm").hide(); // Initially hide the form
            if(!isCalculatorPage){
                if(window.location.pathname !== '/contact-us' && window.location.pathname !== '/solar-calculator'){
                    // Show the form after 20 seconds
                    setTimeout(function () {
                        $("#inquiryForm").show();
                    }, 2000);
                }
    
                // Toggle form visibility on button click
                $("#show").click(function () {
                    $("#inquiryForm").toggle(); 
                });
    
                // Hide form on button click
                $("#hide").click(function () {
                    $("#inquiryForm").hide();
                });
            }
        });
    </script>
    
			</section>
			</footer><!-- #colophon -->

		</div><!-- .site-content-contain -->
	</div><!-- #page -->
	<a href="#" class="scroll-to-top"><i class="cspt-base-icon-up-open-big"></i></a>
	<script>(function () {
			function maybePrefixUrlField() {
				if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
					this.value = "http://" + this.value;
				}
			}

			var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
			if (urlFields) {
				for (var j = 0; j < urlFields.length; j++) {
					urlFields[j].addEventListener('blur', maybePrefixUrlField);
				}
			}
		})();</script>
	<div id="yith-quick-view-modal">

		<div class="yith-quick-view-overlay"></div>

		<div class="yith-wcqv-wrapper">

			<div class="yith-wcqv-main">

				<div class="yith-wcqv-head">
					<a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
				</div>

				<div id="yith-quick-view-content" class="woocommerce single-product"></div>

			</div>

		</div>

	</div>
	<link href="https://fonts.googleapis.com/css?family=Roboto:700%2C500%2C400%7CAsap:700%2C600" rel="stylesheet"
		property="stylesheet" media="all" type="text/css">

	<script>
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script>
		if (typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
				err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
	</script>
	<!--show more links-->
	<script>
    document.getElementById('toggleLink').addEventListener('click', function () {
        var content = document.getElementById('contentToToggle');
        var linkText = document.getElementById('linkText');
        content.style.display = content.style.display === 'none' ? 'block' : 'none';
        linkText.textContent = content.style.display === 'none' ? '- Footprints across India -' : '- Hide Tab -';

    });
</script>
	

	<!--<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">-->
	<!--	<div class="pswp__bg"></div>-->
	<!--	<div class="pswp__scroll-wrap">-->
	<!--		<div class="pswp__container">-->
	<!--			<div class="pswp__item"></div>-->
	<!--			<div class="pswp__item"></div>-->
	<!--			<div class="pswp__item"></div>-->
	<!--		</div>-->
	<!--		<div class="pswp__ui pswp__ui--hidden">-->
	<!--			<div class="pswp__top-bar">-->
	<!--				<div class="pswp__counter"></div>-->
	<!--				<button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>-->
	<!--				<button class="pswp__button pswp__button--share" aria-label="Share"></button>-->
	<!--				<button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>-->
	<!--				<button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>-->
	<!--				<div class="pswp__preloader">-->
	<!--					<div class="pswp__preloader__icn">-->
	<!--						<div class="pswp__preloader__cut">-->
	<!--							<div class="pswp__preloader__donut"></div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">-->
	<!--				<div class="pswp__share-tooltip"></div>-->
	<!--			</div>-->
	<!--			<button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>-->
	<!--			<button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>-->
	<!--			<div class="pswp__caption">-->
	<!--				<div class="pswp__caption__center"></div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	
	<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
	<link rel='stylesheet' id='cspt_greenly_icon-css'
		href='<?php echo URL::to('/'); ?>/public/wp-content/plugins/greenly-addons/libraries/cspt-greenly-icon/flaticon03e2.css?ver=5.4.6' type='text/css'
		media='all' />
	<link rel='stylesheet' id='photoswipe-css'
		href='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe3088.css?ver=3.7.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='photoswipe-default-skin-css'
		href='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin3088.css?ver=3.7.0'
		type='text/css' media='all' />

	<!-- sidebar form -->
	


<!-- end sidebar form -->





	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min676b.js?ver=1.3.13'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-includes/js/wp-embed.min03e2.js?ver=5.4.6'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
		<script src='<?php echo URL::to('/'); ?>/public/wp-includes/js/wp-util.min03e2.js?ver=5.4.6'></script>

	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min3088.js?ver=3.7.0'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min0235.js?ver=4.1.1'></script>
	<script
		src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min0235.js?ver=4.1.1'></script>

	</script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min3088.js?ver=3.7.0'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/elementor/assets/js/frontend-modules.min7c53.js?ver=2.9.14'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/elementor/assets/lib/share-link/share-link.min7c53.js?ver=2.9.14'></script>

	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/elementor/assets/js/frontend.min7c53.js?ver=2.9.14'></script>
	<script src='<?php echo URL::to('/'); ?>/public/wp-content/plugins/greenly-addons/libraries/owl-carousel/assets/owl.carousel.js'></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    function toggleGoogleTranslate() {
        var translateElement = document.getElementById("google_translate_element");
        if (translateElement.style.display === "none") {
            translateElement.style.display = "block";
        } else {
            translateElement.style.display = "none";
        }
    }
</script>
<!--homepage slider js b2b client-->
<script>
  window.HomeCarousel = {
    autoSlideInterval: null,
    start: function(){},
    stop: function(){}
  };
</script>
	<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";
    HomeCarousel.autoSlideInterval = null;

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition) {
            click(0, this);
        } else {
            click(1, this);
        }
        resetAutoSlide(); // Reset auto-slide on manual navigation
    });

    ResCarouselSize();
    startAutoSlide(); // Start auto-slide initially

    $(window).resize(function () {
        ResCarouselSize();
    });

    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);

            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");
        });
    }

    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        
        if (e == 0) { // Move left
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        } else if (e == 1) { // Move right
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

    // Auto-slide function
    function startAutoSlide() {
  HomeCarousel.autoSlideInterval = setInterval(function () {
    $('.rightLst').click();
  }, 3000);
}
    function resetAutoSlide() {
  clearInterval(HomeCarousel.autoSlideInterval);
  startAutoSlide();
}

    // Stop auto-slide on hover and resume when mouse leaves
    $(itemsMainDiv).hover(
  function () {
    clearInterval(HomeCarousel.autoSlideInterval);
  }, 
  function () {
    startAutoSlide();
  }
);
HomeCarousel.start = startAutoSlide;
HomeCarousel.stop = function () {
  clearInterval(HomeCarousel.autoSlideInterval);
};
});

    </script>
<!--homepage slider js-->
<!--ym-->

{{-- form submiting code start --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const form = document.querySelector(".inquiry_contact");
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



<script>
/* ================== CONFIG ================== */
const BUSINESS_WA_NUMBER = "917969697979"; // + ke bina

let countries = [];
let selectedDial = "";

/* ================== DEFAULT ================== */
function setDefaultCountry() {
    const india = countries.find(c => c.code === "in");
    if (india) selectCountry(india);
}

/* ================== LOAD COUNTRIES ================== */
async function loadCountries() {
    try {
        const res = await fetch("public/js/countrydata.json");
        const data = await res.json();

        countries = data
            .filter(c => c.idd && c.idd.root)
            .map(c => ({
                name: c.name.common,
                dial: c.idd.root + (c.idd.suffixes ? c.idd.suffixes[0] : ""),
                code: c.cca2.toLowerCase()
            }));

        renderCountries();
        setDefaultCountry();
        detectIPCountry();
    } catch (e) {
        console.error("Country load failed", e);
    }
}

/* ================== RENDER LIST ================== */
function renderCountries() {
    const box = document.getElementById("countryList");
    if (!box) return;

    box.innerHTML = "";
    countries.forEach(c => {
        const div = document.createElement("div");
        div.className = "country-item";
        div.innerHTML = `
            <img src="https://flagcdn.com/24x18/${c.code}.png">
            ${c.name} (${c.dial})
        `;
        div.onclick = () => selectCountry(c);
        box.appendChild(div);
    });
}

/* ================== SELECT COUNTRY ================== */
function selectCountry(c) {
    const flag = document.getElementById("selFlag");
    const code = document.getElementById("selCode");
    const dropdown = document.getElementById("countryDropdown");

    if (!flag || !code) return; // 🔥 CRASH PROTECTION

    flag.src = `https://flagcdn.com/24x18/${c.code}.png`;
    code.innerText = c.dial;
    selectedDial = c.dial;

    if (dropdown) dropdown.style.display = "none";
}

/* ================== IP DETECT ================== */
function detectIPCountry() {
    fetch("https://ipapi.co/json/")
        .then(r => r.json())
        .then(ip => {
            const found = countries.find(c => c.code === ip.country?.toLowerCase());
            if (found) selectCountry(found);
        })
        .catch(() => {});
}

/* ================== DROPDOWN ================== */
function toggleDropdown() {
    const d = document.getElementById("countryDropdown");
    if (!d) return;
    d.style.display = d.style.display === "block" ? "none" : "block";
}

function filterCountry(val) {
    document.querySelectorAll(".country-item").forEach(el => {
        el.style.display = el.innerText.toLowerCase().includes(val.toLowerCase())
            ? "flex"
            : "none";
    });
}

/* ================== MODAL ================== */
function openWA() {
    const modal = document.getElementById("waModal");
    if (!modal) return;

    modal.style.display = "flex";
    modal.classList.add("display");

    if (!selectedDial && countries.length) setDefaultCountry();
}

function closeWA() {
    const modal = document.getElementById("waModal");
    if (!modal) return;
    modal.classList.remove("display");
    modal.style.display = "none";
}

/* ================== ERROR ================== */
function showError(msg) {
    const el = document.getElementById("waError");
    if (!el) return;
    el.innerText = msg;
    el.style.display = "block";
}

function clearError() {
    const el = document.getElementById("waError");
    if (el) el.style.display = "none";
}

/* ================== START CHAT ================== */
function startChat() {
    clearError();

    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('waMsg').value.trim();

    const cleanPhone = phone.replace(/\D/g, '');

    if (!cleanPhone) {
        showError('Phone number is required');
        return;
    }

    if (cleanPhone.length < 10 || cleanPhone.length > 20) {
        showError('Phone number must be between 10 and 20 digits');
        return;
    }

    // === USER NUMBER FOR DB ===
    const finalPhone = selectedDial.replace('+','') + cleanPhone;

    // === WhatsApp MESSAGE (INCLUDE USER NUMBER + USER MESSAGE) ===
    const waMessage = `Hello, I am interested in solar from your website. Please share details. My number is ${finalPhone}. Message: ${message} .`;

    // === OPEN WHATSAPP WITH BUSINESS NUMBER & CUSTOM MESSAGE ===
    const waUrl = `https://api.whatsapp.com/send?phone=+917969697979&text=${encodeURIComponent(waMessage)}`;
    window.open(waUrl, '_blank');

    // === DATABASE SAVE LOGIC (UNCHANGED) ===
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/save-whatsapp-lead', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            form_type: 'whatsapp_popup',
            phone: finalPhone,
            message: message
        })
    }).catch(err => console.error(err));

    closeWA();
}



/* ================== INIT ================== */
document.addEventListener("DOMContentLoaded", loadCountries);
</script>


<!--ym-->
</body>

</html>