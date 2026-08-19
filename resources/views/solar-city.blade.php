@include('header')
  <section class="city-header">
     <div class="container">
         <div class="row">
             <div class="header-text">
                 <h1 class="header-title">Best Solar Company in {{$citysolar ->city_name}}</h1>
                <p>Looking for the best solar solutions in {{$citysolar ->city_name}} for your home, business, or industry? Switch to solar energy today and enjoy lower electricity costs with government-backed subsidies. At Ksquare Energy, we take pride in being a trusted solar company in {{$citysolar ->city_name}}, serving over 8,000+ satisfied customers since 2016. As a leading solar manufacturing company in {{$citysolar ->city_name}}, we provide world-class solar installation in {{$citysolar ->city_name}}, delivering efficient, high-performance solar systems designed for long-term savings. Choose Ksquare Energy, your expert solar system installers in {{$citysolar ->city_name}}, for a greener and more cost-effective future.

</p>
                    <div class="header-feature">
                        <p><i class="fa-solid fa-check"></i> Reduce Electricity Bill by 90%</p>
                        <p><i class="fa-solid fa-check"></i> Get a High ROI of 40-50%</p>
                        <p><i class="fa-solid fa-check"></i> Avail Solar Subsidy of up to ₹78,000</p>
                        <p><i class="fa-solid fa-check"></i> Zero Maintenance & 25-Year Lifespan</p>
                    </div>
             </div>
            <div class="header-form">
               <form action="{{ route('citiesstore') }}" method="post">
                    @csrf
                    <input type="hidden" name="city_name" id="city_name" value="{{ $citysolar->city_name }}">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="name" id="name" placeholder="Enter your Full Name" required>
                            <div class="underline"></div>
                            <label>Full Name*:</label>
                        </div>
                        <div class="input-data">
                            <input type="text" name="email" id="email" placeholder="Enter your Email ID" required>
                            <div class="underline"></div>
                            <label>Email ID *:</label>
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" required>
                            <div class="underline"></div>
                            <label>Phone Number*:</label>
                        </div>
                        <div class="input-data">
                            <input type="text" name="pincode" id="pincode" placeholder="Enter your Pin code" required>
                            <div class="underline"></div>
                            <label>Pin code*:</label>
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="input-data">
                            <select name="customer_type" required>
                                <option value="Business">Business</option>
                                <option value="Home">Home</option>
                            </select>
                            <div class="underline"></div>
                            <label>Solar For Home/Business?*:</label>
                        </div>
                        <div class="input-data">
                            <select name="electricity_bill" required>
                                <option value="Less than ₹1500">Less than ₹1500</option>
                                <option value="₹1500 - ₹2500">₹1500 - ₹2500</option>
                                <option value="₹2500 - ₹4000">₹2500 - ₹4000</option>
                                <option value="₹4000 - ₹8000">₹4000 - ₹8000</option>
                                <option value="More than ₹8000">More than ₹8000</option>
                            </select>
                            <div class="underline"></div>
                            <label>Select Monthly Average Electricity Bill*:</label>
                        </div>
                    </div>
                
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" value="Contact Us">
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
     <h2>{{$citysolar ->city_name}} No.1 Solar Rooftop Solutions: Solar Panels for Home & Businesses</h2>
     <p>We at Ksquare Energy boast ourselves as the best solar rooftop solutions provider in {{$citysolar ->city_name}}, {{$citysolar ->state_name}}, providing home and business people with high-end, international-level solar solutions at competitive prices. We aim at supplying efficient, cost-saving solar energy systems to our clients at an affordable cost to save their electricity bills, thereby making their planet greener. With the rapid growth of the solar industry in {{$citysolar ->city_name}}, choosing the right solar provider can feel overwhelming. That’s where Ksquare Energy stands out. Recognized as a top Solar Panel Installation Company in {{$citysolar ->city_name}}, we’ve earned the trust of thousands of satisfied customers through verified reviews, strong market credibility, and exceptional service. We are not only a solar panel factory—we're your end-to-end solar solution company. From the best Solar Rooftop Solutions Provider in {{$citysolar ->city_name}} to turnkey EPC solutions, we work with on-grid & off-grid solar systems, inverters, DCDB, ACDB, earthing kits, and solar wires & cables. Whether you are a home customer or a business organization, we make a hassle-free switch to solar power in {{$citysolar ->city_name}} at affordable prices. By choosing Ksquare Energy, you’re investing in a trusted solar installation expert in {{$citysolar ->city_name}}—a company committed to delivering long-term savings, sustainability, and superior performance.</p>
     
     </div>
     </div>
 </section>
 <section class="city-subcidy-wrapper">
     <div class="container">
         <div class="row">
             <div class="col-xl-6">
                 <img src="{{ asset('public/images/subsidy-in-surat.png') }}" alt="subsidy-in-surat">
             </div>
             <div class="col-xl-6">
                 <div class="city-subcidy">
                 <h3>Solar Panel subsidy in {{$citysolar ->city_name}}</h3>
                 <p>To encourage the widespread adoption of solar energy in {{$citysolar ->city_name}}, the government has introduced a solar power subsidy, making solar panel installation in {{$citysolar ->city_name}} more affordable for homeowners. By lowering the initial investment, these subsidies help residents switch to clean and renewable energy, significantly cutting down on electricity bills. Choosing the right solar company in {{$citysolar ->city_name}} ensures maximum savings and efficiency.</p>
                 <ul>
                     <li><span><i class="fa-solid fa-check"></i> 1 kW Solar System:</span> Rs. 30,000.</li>
                     <li><span><i class="fa-solid fa-check"></i> 2 kW Solar System:</span> Rs. 60,000.</li>
                     <li><span><i class="fa-solid fa-check"></i> 3 kW Solar System and above:</span> Rs. 78,000.</li>
                 </ul>
                 
                 <p>Enjoy these incredible subsidies with Ksquare Energy’s affordable and hassle-free home solar panel installation in {{$citysolar ->city_name}}. Switch to solar today and start saving! Contact us to know more. </p>
                 <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Contact us to know more.</a>
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
                            <h2 style="color: #B4BDFE;">Get in touch with <em class="text-white">{{$citysolar ->city_name}}’s top solar</em> company for a free consultation</h2>
                        </div>
                        <div class="col-lg-4">
                            <div style="margin:0 auto;">
                                <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-choose-wrapper">
                <div class="container">
                <h2>Why Choose Ksquare Energy for Solar in {{$citysolar ->city_name}}?
</h2>
               <p>Ksquare Energy is a top solar company in {{$citysolar ->city_name}} and a reputable EPC company in {{$citysolar ->city_name}}, providing solar installation in {{$citysolar ->city_name}} for household, commercial, and industrial users. We are expert providers of best solar solutions in {{$citysolar ->city_name}}, providing high-quality, cost-effective, and eco-friendly solar rooftop solutions. We are a best solar EPC company in {{$citysolar ->city_name}}, with expert professionals ensuring hassle-free solar panel installation as per your energy demand and budget.</p>
                </div>
            </section>

        <section class="solar-process-steps">
            <div class="container">
                 <h2>Choose Solar in 4 Easy Steps </h2>
                <p>Make the switch to solar in just four easy steps! From consultation to installation, we ensure a smooth transition to clean energy, helping you save more and power your future sustainably.</p>
        <div class="steps-grid">
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Book a Free Consultation</h3>
                </div>
                <div class="step-solar-disc">
                <p>Talk to our team for solar panel installation in {{$citysolar ->city_name}} to understand your solar system requirement, including size, solar panel price in {{$citysolar ->city_name}}, subsidy eligibility, and financing options. Choose the best solar solutions in {{$citysolar ->city_name}} with Ksquare Energy.</p>
                 <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Contact us</a>
                </div>
               
            </div>
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Custom Proposal</h3>
                </div>
                <div class="step-solar-disc">
                <p>Based on your requirements, our team will create a tailored proposal for you. A Delight Manager will be assigned to address your queries and keep you updated on your solar installation in {{$citysolar ->city_name}} project.</p>
                 <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Contact us</a>
                </div>
               
            </div>
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Professional & Safe installation</h3>
                </div>
                <div class="step-solar-disc">
                <p>Once you approve the proposal and make the advance payment, our expert solar system installers in {{$citysolar ->city_name}} will ensure a seamless, clean, and professional Panel Installation within the scheduled timeframe.</p>
                 <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Contact us</a>
                </div>
               
            </div>
            <div class="step-solar">
                <div class="step-solar-title">
                    <h3>Subsidy & After Service</h3>
                </div>
                <div class="step-solar-disc">
                <p>After installation, we take care of all Subsidy and approvals to get your system up and running. Once commissioned, we regularly monitor the system’s performance.</p>
                 <a href="https://www.ksquareenergy.com/contact-us" class="cc_btn">Contact us</a>
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
                                    <p class="text-center">We specialize in designing and installing solar systems customized to meet each homeowner’s unique needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_2">
                                        <h6>Commercial & Industrial Rooftop</h6>
                                <div class="testi_msg">
                                    <p class="text-center">With our solar solutions, businesses can manage energy efficiently while promoting a cleaner, sustainable future.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_1">
                                        <h6>Ground Mounted Captive Projects</h6>
                                <div class="testi_msg ">
                                    <p class="text-center">Our experts deliver high-quality solar installations for ground-mounted captive projects, ensuring efficiency and reliability.</p>
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

@include('footer')
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

 

