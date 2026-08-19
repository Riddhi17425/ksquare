@include('header')
 <style>
       .tab-warpper{
           padding: 50px 0;
           background-color:#f7f9fa;
       }
        .tabs-2 {
                display: flex;
                cursor: pointer;
                justify-content: center;
                column-gap:100px;
                
                /*border-bottom: 1px solid #DDD;*/
        }
        .tab-2 {
            padding: 10px 20px;
            margin-right: 5px;
            border-radius: 5px 5px 0 0;
            transition: background 0.3s;
        }
        .tab-2.active {
            /*background: #022A4E;*/
            color: #022A4E;
            font-weight:600;
            border-bottom:2px solid #022A4E;
        }
        .tab-content2 {
            display: none;
            padding: 20px;
            border-top: none;
        }
        .tab-content2.active {
            display: block;
        }
        .addr-title{
            font-size:20px;
            color:#000;
        }
        .address-box{
            padding: 30px;
            background-color: #ffff;
            color:#888888;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            margin:20px 0;
        }
    </style>
 <section class="city-header">
     <div class="container">
         <div class="row">
             <div class="header-text">
                 <h1 class="header-title">Best Solar Company in Surat</h1>
                <p>Looking for the best solar panels and solutions in Surat for homes, businesses, and industries. Avail government subsidies and reduce electricity costs with solar energy. Ksquare Energy is one of the leading rooftop solar companies in Surat. With 8000+ satisfied customers, we have been providing world class solar solutions to homes and businesses since 2016.</p>
                    <div class="header-feature">
                        <p><i class="fa-solid fa-check"></i> Reduce Electricity Bill by 90%</p>
                        <p><i class="fa-solid fa-check"></i> Solar Subsidy of Upto Rs. 78,000</p>
                        <p><i class="fa-solid fa-check"></i> Get ROI of 40-50%</p>
                        <p><i class="fa-solid fa-check"></i> No Maintenance Needed with Life of 25 years</p>
                    </div>
             </div>
             <div class="header-form">
               <form action="#">
            <div class="form-row">
                     <div class="input-data">
                        <input type="text" name="full-name" placeholder="Enter your Full Name" required>
                        <div class="underline"></div>
                        <label for="">Full Name*:</label>
                    </div>
                <div class="input-data">
                 <input type="text" placeholder="Enter your Email ID" required>
                 <div class="underline"></div>
                 <label for="">Email ID *:</label>
                </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" placeholder="Enter your Phone Number" required>
               <div class="underline"></div>
               <label for="">Phone Number*:</label>
            </div>
            <div class="input-data">
               <input type="text" placeholder="Enter your Pin code" required>
               <div class="underline" ></div>
               <label for="">Pin code*:</label>
            </div>
         </div>
         
            <div class="form-row">
            <div class="input-data">
                <select required>
                    <!--<option value="" disabled selected>Business</option>-->
                    <option value="option1">Business</option>
                    <option value="option2">Home</option>
                </select>
                <div class="underline"></div>
                <label for="">Solar For Home/Business?*:</label>
            </div>
            <div class="input-data">
                <select required>
                    <!--<option value="" disabled selected>Business</option>-->
                    <option value="option1">₹ 1,000 - ₹ 2,000</option>
                    <option value="option2">₹ 4,000 - ₹ 5,000</option>
                </select>
                <div class="underline"></div>
                <label for="">Select Monthly Average Electricity Bill*:</label>
            </div>
        </div>
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="Conatct Us">
               </div>
            </div>
            
      </form>
      </div>
         </div>
         
     </div>
 </section>
 <section class="suceess-number">
     <div class="container">
     <div class="row">
                        <div class="col-lg-12 text-start mb-5">
                            <h2>Our Success in Numbers</h2>
                            <h3 style="color:#404040;">Powering <em style="color:#22285f;">India’s</em> Solar Revolution</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate numinate completed" data-appear-animation="animateDigits" data-from="0" data-to="650" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">650</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">Happy Clients in B2B Solar industry</p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate numinate completed" data-appear-animation="animateDigits" data-from="0" data-to="2000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">2000</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">Residential and Commercial Solar Projects Completed</p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate numinate completed" data-appear-animation="animateDigits" data-from="0" data-to="7000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">7000</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">Happy Clients in B2C Solar industry</p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate numinate completed" data-appear-animation="animateDigits" data-from="0" data-to="500000" data-interval="20000" data-before="" data-before-style="" data-after="" data-after-style="">500000</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">We have supplied products to our customers across India.</p>
                        </div>
                    </div>
    </div>
 </section>
 <section>
     <div class="container">
         <div class="disc-box">
     <h2>Surat No.1 Solar Rooftop Solutions: Solar Panels for Home & Businesses</h2>
     <p>Searching for the Best Solar Panel Manufacturer Company in Surat? We at Grace Renewable Energy is considered to be the best Solar Panel Manufacturer company in Surat, Gujarat. The panels offered by us are at par with quality standards and we never disappoint our customers for energy generation. We are listed as the top solar panel company after pre-screening and verified by our audience who trust us. Moreover there are hundreds of solar companies developed and selecting the right solar company can be so tough and time-consuming. We are recognized as No.1 and best Solar company in Surat after receive a positive reviews and customer satisfaction, market presence and many more made us to achieve the place. </p>
     <p>We are even well-known in the market as leading top solar panel manufacturer, supplier, producers, rooftop solar installers, solar panel dealers, epc contractors, Solar Power Consultant in Surat, Turnkey EPC Solution Provider. Ksquare Energy is a leading solar panel manufacturing company in Surat, offering reliable solar solutions for both businesses and households. Ksquare offers a range of renewable energy solutions, including on-grid and off-grid solar systems, Inverters, DCDB, ACDB,  Earthing Kit,  solar cables & wires. </p>
     </div>
     </div>
 </section>
 <section class="city-subcidy-wrapper">
     <div class="container">
         <div class="row">
             <div class="col-xl-6">
                 <img src="public/images/subsidy-in-surat.png" alt="subsidy-in-surat">
             </div>
             <div class="col-xl-6">
                 <div class="city-subcidy">
                 <h3>Solar subsidy in Surat</h3>
                 <p>For people to use more solar energy in Surat, the solar power subsidy is introduced. The main idea is to make it more accessible and budget-friendly. Solar subsidies reduce the initial investment and make it reasonable for homeowners. With the advantage of the solar panel installation subsidy in Surat, homeowners can save a lot on electricity bills. This is the next, and prominent step in making the environment cleaner.</p>
                 <ul>
                     <li><span><i class="fa-solid fa-check"></i> 1 kW Solar System:</span> Rs. 30,000.</li>
                     <li><span><i class="fa-solid fa-check"></i> 2 kW Solar System:</span> Rs. 60,000.</li>
                     <li><span><i class="fa-solid fa-check"></i> 3 kW Solar System and above:</span> Rs. 78,000.</li>
                 </ul>
                 <p>Enjoy these subsidies with our affordable home solar panel installation process in Surat. </p>
                 
                 <a href="" class="cc_btn">Contact us to know more.</a>
                 </div>
                 </div>
             </div>
             
         </div>
     </div>
 </section>
 
 <section class="states_cta city-wise-cta">
                <div class="container">
                    <div class="row align-items-center city-wise">
                        <div class="col-lg-8 mb-4">
                            <h2 style="color: #B4BDFE;">Get in touch with <em class="text-white">Maharashtra’s top solar</em> company for a free consultation</h2>
                        </div>
                        <div class="col-lg-4">
                            <div style="margin:0 auto;">
                                <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Inquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-choose-wrapper">
                <div class="container">
                <h2>Why Choose Ksquare Energy for Solar in Surat?</h2>
                <p>Ksquare  Energy is a leading solar energy company and EPC provider in Surat that offers customized solar solutions for residential, commercial, and industrial clients. We pride ourselves on delivering high-quality products and services while remaining affordable and environmentally responsible. At a Top Solar EPC Company in Surat, we have a team of experienced and skilled professionals who work closely with clients to install solar systems that meet their unique needs and budgets.
                </p>
                <p>At Ksquare Energy, we use the latest technology and equipment to install solar systems that are reliable, efficient, and cost-effective. So whether you are looking to reduce your energy bills or positively impact the environment, Ksquare Energy can help you achieve your goals with its innovative solar solutions.
                </p>
                </div>
            </section>

        <section class="solar-process-steps">
            <div class="container">
                 <h2>Choose Solar in 4 Easy Steps </h2>
                <p>Lorem ipsum dolor sit amet consectetur. Neque auctor sit volutpat vel. Malesuada tellus ornare enim arcu. Id aenean eleifend justo id potenti egestas elit orci ut. Nisl consectetur ultrices nunc blandit sit mauris nec velit lacus.</p>
        <div class="steps-grid">
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Book a Free Consultation</h3>
                </div>
                <div class="step-solar-disc">
                <p>Talk to our team solar panel installation to understand your solar system requirement including size, pricing, subsidy eligibility and explore finance options</p>
                 <a href="" class="cc_btn">Contact us</a>
                </div>
               
            </div>
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Custom Proposal</h3>
                </div>
                <div class="step-solar-disc">
                <p>Based on your requirements, our team will create a custom proposal for you. A Delight Manager is also assigned to answer your queries and keep you updated on the project.</p>
                 <a href="" class="cc_btn">Contact us</a>
                </div>
               
            </div>
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Professional & Safe installation</h3>
                </div>
                <div class="step-solar-disc">
                <p>Once you accept the proposal and submit the advance amount, our installation team will conduct installation in a timely, clean and professional manner.</p>
                 <a href="" class="cc_btn">Contact us</a>
                </div>
               
            </div>
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Subsidy & After Service</h3>
                </div>
                <div class="step-solar-disc">
                <p>After installation, we take care of all Subsidy and approvals to get your system up and running. Once commissioned, we regularly monitor the system’s performance.</p>
                 <a href="" class="cc_btn">Contact us</a>
                </div>
               
            </div>
        </div>
    
    </div>
</section>

    <section class="states_testi">
                <div class="container">
                    <h2 class="text-center mb-5">We Install Solar Systems for the following </h2>
                    <div class="city-wise-install">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_1">
                                        <h6>Residential Rooftop</h6>
                                <div class="testi_msg">
                                    <p class="text-center">We specialize in designing and installing custom solar systems that are tailored to meet the unique needs of each homeowner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_2">
                                        <h6>Commercial & Industrial Rooftop</h6>
                                <div class="testi_msg">
                                    <p class="text-center">With our solar systems, businesses can take control of their energy usage and contribute to a cleaner, more sustainable future.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_1">
                                        <h6>Ground Mounted Captive Projects</h6>
                                <div class="testi_msg ">
                                    <p class="text-center">Our team of experts is dedicated to providing high-quality solar system installations for ground-mounted captive projects.</p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    </div>
                </div>
            </section>
 <!--           <section class="gallary-wrapper">-->
 <!--               <div class="container">-->
 <!--            <h2>Gallery</h2>-->
 <!--               <div class="row">-->
	<!--	  <div class="MultiCarousel" data-items="1,3,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">-->
 <!--           <div class="MultiCarousel-inner">-->
 <!--               <div class="item">-->
 <!--                   <div class="pad15">-->
 <!--                       <img src="public/images/gallery_1.png">-->
 <!--                   </div>-->
 <!--               </div>-->
 <!--               <div class="item">-->
 <!--                   <div class="pad15">-->
 <!--                       <img src="public/images/gallery_2.png">-->
 <!--                   </div>-->
 <!--               </div>-->
 <!--               <div class="item">-->
 <!--                   <div class="pad15">-->
 <!--                      <img src="public/images/gallery_3.png">-->
 <!--                   </div>-->
 <!--               </div>-->
 <!--               <div class="item">-->
 <!--                   <div class="pad15">-->
 <!--                        <img src="public/images/gallery_3.png">-->
 <!--                   </div>-->
 <!--               </div>-->
                
 <!--           </div>-->
 <!--           <button class="btn btn-primary leftLst"><</button>-->
 <!--           <button class="btn btn-primary rightLst">></button>-->
 <!--       </div>-->
        
	<!--</div>-->
 <!--           </div>-->
 <!--           </section>-->
<!-- footer -->
<footer id="colophon" class="site-footer  cspt-color-white cspt-bg-color-blackish cspt-footer-menu-no">
			   <a href="https://api.whatsapp.com/send?phone=919428866620&text=Inquiry%20from%20the%20website." target="_blank"> <img src="https://www.ksquareenergy.com/public/images/whatsapp.png" class="bottom-whatsapp"></a>
				<div class="footer-wrap cspt-footer-widget-area  cspt-bg-color-transparent">
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
									<p class="mt-5">Ksquare has established itself across the country in a short span of 7 years due to commitment towards quality products and timely service.</p>

									<!--<div class="cspt-contact-widget-line cspt-contact-widget-address">B-403/404-->
										<!--Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.-->
									<!--</div>-->
									
									<div cl/ass="cspt-contact-widget-line cspt-contact-widget-email pt-3">
									    <!--<h6 class="p-1 mt-3">Email</h6>-->
									<!--<a href="mailto:info@ksquareenergy.com">info@ksquareenergy.com</a></div>-->
									<!--<h6 class="p-1 mt-3">Phone Number</h6>-->
									<!--<div class="cspt-contact-widget-line cspt-contact-widget-email pt-3"><a href="tel:+917969697979">079 6969 7979</a></div>-->
									<!--<div class="cspt-contact-widget-line cspt-contact-widget-email pt-3"><a href="tel:+917227931916">+91 7227931919</a></div>-->
								</aside>
							</div><!-- .cspt-footer-widget -->

							<!--<div class="cspt-footer-widget col-md-6 col-lg-2 mt-5">-->
							<!--	<aside id="nav_menu-2" class="widget widget_nav_menu">-->
							<!--		<h2 class="widget-title">Company</h2>-->
							<!--		<div class="menu-company-container">-->
							<!--			<ul id="menu-company" class="menu">-->
							<!--				<li id="menu-item-8660"-->
							<!--					class="pt-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">-->
							<!--					<a href="{{route('profile')}}">Profile</a>-->
							<!--				</li>-->
							<!--				<li id="menu-item-8661"-->
							<!--					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8661">-->
							<!--					<a href="{{route('downloads')}}">Downloads</a>-->
							<!--				</li>-->
							<!--				<li id="menu-item-8662"-->
							<!--					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8662">-->
							<!--					<a href="{{route('blogs')}}">Blogs</a>-->
							<!--				</li>-->
							<!--				<li id="menu-item-8662"-->
							<!--					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8662">-->
							<!--					<a href="https://ksquare-energy-pvt-ltd.odoo.com/jobs">Careers</a>-->
							<!--				</li>-->
							<!--				<li id="menu-item-8663"-->
							<!--					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8663">-->
							<!--					<a href="{{route('contact')}}">Contact Us</a>-->
							<!--				</li>-->
							<!--				<li id="menu-item-8663"-->
							<!--					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8663">-->
							<!--					<a href="{{route('privacy')}}">Privacy Policy</a>-->
							<!--				</li>-->
							<!--			</ul>-->
							<!--		</div>-->
							<!--	</aside>-->
							<!--</div>-->
							<!--<div class="cspt-footer-widget col-md-6 col-lg-3 mt-5">-->
							<!--	<aside id="nav_menu-2" class="widget widget_nav_menu">-->
							<!--		<h2 class="widget-title">Ksquare In India</h2>-->
							<!--		<div class="menu-company-container">-->
							<!--			<ul id="menu-company" class="menu">-->
							<!--				
							<!--			</ul>-->
							<!--		</div>-->
							<!--	</aside>-->
       <!--                     </div>-->
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
												<a href="https://ksquare-energy-pvt-ltd.odoo.com/jobs">Careers</a>
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
												<a href="<?php echo URL::to('/'); ?>/products/ksquare-inverter">Ksquare Inverter</a>

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
											<li id="menu-item-8660"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8660">
												<a href="<?php echo URL::to('/'); ?>/blitz">Blitz</a>
											</li>
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
									<div class="cspt-contact-widget-line cspt-contact-widget-email "><a href="tel:+917969697979">079 6969 7979</a></div>
								<div class="cspt-contact-widget-line cspt-contact-widget-email "><a href="tel:+917227931919">+91 7227931919</a></div>
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
                       
                        </div>
                         
                        <div class="row">
                       <section class="tab-warpper">
    <div class="container">
                <div class="tabs-2">
        <!--<div class="tab-2 active" onclick="openTab(event, 'tab1')">East Zone</div>-->
        <div class="tab-2 active" onclick="openTab(event, 'tab2')">West Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab3')">North Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab4')">South Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab5')">Central Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab6')">North-Eastern Zone</div>
    <!--</div>-->

    <!--<div id="tab1" class="tab-content2 active">-->
        <!--<div class="row">-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    <div id="tab2" class="tab-content2 active">
      <div class="row">
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
        </div>
    </div>
    <div id="tab3" class="tab-content2">
        <div class="row">
            <div class="col-xl-6">
            <div class="address-box">
                <h2 class="addr-title">Uttar Pradesh</h2>
                <p class="addr-pera">Office No.-20,  4th Floor, BBD Viraj Tower, Vibhuti Khand, Gomti Nagar, Lucknow – 226010</p>
        </div>
        </div>
           
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        </div>
    </div>
    
    <div id="tab4" class="tab-content2">
     <div class="row">
            <div class="col-xl-6">
                <div class="address-box">
         <h2 class="addr-title">Telangana</h2>
            <p class="addr-pera">Office No.- 6,  Fourth floor, MR Prime, BP Raju Marg, White Fields, Kondapur, Hyderabad, Telangana, 500081</p>
            </div>
        </div>
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    </div>
    <div id="tab5" class="tab-content2">
     <div class="row">
            <div class="col-xl-6">
                <div class="address-box">
         <h2 class="addr-title">Indore</h2>
            <p class="addr-pera">Skye Corporate Park, 806, AB Rd, opposite Shalimar township, above Tata Showroom, Sector B, Vijay Nagar, Aranya Nagar, Scheme 78, Vijay Nagar, Indore, Madhya Pradesh 452010</p>
            </div>
        </div>
        <div class="col-xl-6">
                <div class="address-box">
        <h2 class="addr-title">Nagpur</h2>
        <p class="addr-pera">NB Towers, 1st Floor above Bank of Baroda, Mansih Nagar, Nagpur Maharashtra 440015, India</p>
        </div>
        </div>
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    </div>
    </div>
            </section>
                            
                            
                            
                  
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
 <section class="tab-warpper">
    <div class="container">
                <div class="tabs-2">
        <!--<div class="tab-2 active" onclick="openTab(event, 'tab1')">East Zone</div>-->
        <div class="tab-2 active" onclick="openTab(event, 'tab2')">West Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab3')">North Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab4')">South Zone</div>
        <div class="tab-2" onclick="openTab(event, 'tab5')">Central Zone</div>
    <!--</div>-->

    <!--<div id="tab1" class="tab-content2 active">-->
        <!--<div class="row">-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    <div id="tab2" class="tab-content2 active">
      <div class="row">
            <div class="col-xl-6">
                 <div class="address-box">
        <h2 class="addr-title">Ahmedabad</h2>
        <p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>
        </div>
        </div>
            <div class="col-xl-6">
                <div class="address-box">
        <h2 class="addr-title">Surat</h2>
        <p class="addr-pera">233, Marvella Business Hub, Opp, Pal RTO, Adajan, Surat, Gujarat 395009.</p>
        </div>
        </div>
         <div class="col-xl-6">
                 <div class="address-box">
                    <h2 class="addr-title">Jaipur</h2>
                    <p class="addr-pera">34/6, Kiran Path, Mansarovar Sector 3, Mansarovar, Jaipur, Rajasthan 302020</p>
        </div>
        </div>
            
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        </div>
    </div>
    <div id="tab3" class="tab-content2">
        <div class="row">
            <div class="col-xl-6">
            <div class="address-box">
                <h2 class="addr-title">Uttar Pradesh</h2>
                <p class="addr-pera">Office No.-20,  4th Floor, BBD Viraj Tower, Vibhuti Khand, Gomti Nagar, Lucknow – 226010</p>
        </div>
        </div>
           
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        </div>
    </div>
    
    <div id="tab4" class="tab-content2">
     <div class="row">
            <div class="col-xl-6">
                <div class="address-box">
         <h2 class="addr-title">Telangana</h2>
            <p class="addr-pera">Office No.- 6,  Fourth floor, MR Prime, BP Raju Marg, White Fields, Kondapur, Hyderabad, Telangana, 500081</p>
            </div>
        </div>
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    </div>
    <div id="tab5" class="tab-content2">
     <div class="row">
            <div class="col-xl-6">
                <div class="address-box">
         <h2 class="addr-title">Indore</h2>
            <p class="addr-pera">Skye Corporate Park, 806, AB Rd, opposite Shalimar township, above Tata Showroom, Sector B, Vijay Nagar, Aranya Nagar, Scheme 78, Vijay Nagar, Indore, Madhya Pradesh 452010</p>
            </div>
        </div>
        <div class="col-xl-6">
                <div class="address-box">
        <h2 class="addr-title">Nagpur</h2>
        <p class="addr-pera">NB Towers, 1st Floor above Bank of Baroda, Mansih Nagar, Nagpur Maharashtra 440015, India</p>
        </div>
        </div>
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--    <div class="col-xl-4">-->
        <!--<h2 class="addr-title">Ahmedabad</h2>-->
        <!--<p class="addr-pera">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.</p>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    </div>
    </div>
            </section>
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
									Copyright © <?php echo date("Y"); ?> All Rights Reserve.</div>
							</div>
						</div>
					</div>
				</div>
				
							<section id="sidebar-form">
			<div class="row">
				<div class="col-md-12">
					<div class="side-icons">
						<a onclick="InquiryForm()" id="show">
							<button class="btn">Inquiry</button>
						</a>
					</div>
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
			
					 <div class="myform" id="inquiryForm">
                            <div class="inquiry_form_header">
                                <h2>Inquiry Form</h2>
                                <p id="hide" style="cursor: pointer;">X</p>
                            </div>
                            <form class="inquiry_contact" action="{{ route('contactSubmit') }}" method="post" >
                                <input type="hidden" name="source" value="Home Page Sidebar Inquiry">
                                @csrf
                                <div class="form-group">
                                    <label style="color:#666666;">Name : </label>
                                    <input class="form-control" required="required" id="name" name="name" placeholder="Name" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Inquiry For : </label>
                                    <select class="form-control" required="required" name="subject" id="subject">
                                        <option value="Solar Rooftop Project" style="color:#666666;">Solar Rooftop Project</option>
                                        <option value="Solar Product Inquiry" style="color:#666666;">Solar Product Inquiry</option>
                                        <option value="Dealership Inquiry" style="color:#666666;"> Dealership Inquiry</option>
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
                                    <input class="form-control" required="required" id="phone" name="phone" maxlength="10" type="tel" placeholder="Phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Message : </label>
                                    <textarea class="form-control" required="required" id="message" name="message"></textarea>
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                   <button type="submit" id="submit" class="form_inquiry_btn">
                                        Send Inquiry <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    
                   <script>
        $(document).ready(function () {
            $("#inquiryForm").hide(); // Initially hide the form

            // Show the form after 20 seconds
            setTimeout(function () {
                $("#inquiryForm").show();
            }, 2000);

            // Toggle form visibility on button click
            $("#show").click(function () {
                $("#inquiryForm").toggle(); 
            });

            // Hide form on button click
            $("#hide").click(function () {
                $("#inquiryForm").hide();
            });
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
</script>
<script>
  $(document).ready(function () {
    $(".cspt-number-rotate").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-to"),
        interval = $this.attr("data-interval") || 5;
        
      $({ countNum: $this.text() }).animate(
        { countNum: countTo },
        {
          duration: 2000,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          },
        }
      );
    });
  });
</script>
  <script>
        function openTab(event, tabId) {
            let tabs = document.querySelectorAll(".tab-2");
            let tabContents = document.querySelectorAll(".tab-content2");

            tabs.forEach(tab => tab.classList.remove("active"));
            tabContents.forEach(content => content.classList.remove("active"));

            event.currentTarget.classList.add("active");
            document.getElementById(tabId).classList.add("active");
        }
    </script>
</body>

</html>


 

