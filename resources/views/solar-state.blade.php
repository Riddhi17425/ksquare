@include('header')
<style>
    .tab_head {
    cursor: pointer;
    padding: 10px;
    border-radius:20px;
    text-align: center;
    transition: background 0.3s ease;
    text-align:left;
    text-wrap: nowrap;
}
.tab_head.active {
    background: #888888;
    color: #fff;
    font-weight: bold;
    border-radius:20px;
}


</style>
             <section class="solar_head cspt-heading-subheading mt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-5">
                            <!--<h1 class="mt-3">Solar Installations for Homes and Businesses in Maharashtra</h1>-->
                            <h1 class="mt-3">{{$statessolar ->header_title}}</h1>
                            <p class="mb-4">{!!$statessolar ->header_description!!}</p>
                            <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <img src="{{ asset('public/Solar_Sates_Images/' .$statessolar->image) }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <section class="about_state cspt-heading-subheading">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('public/Solar_Sates_MapImages/'.$statessolar->map_image) }}" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <h2>{{$statessolar ->map_title}}</h2>
                            <p>{!!$statessolar ->map_description!!}</p>
                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="states_tab">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2>{{$statessolar ->trusted_title}}</h2>
                        
                        <p class="text-center">{!!$statessolar ->trusted_disc!!}</p>
                     
                    </div>
                    <div class="state_tab_wrapper">
                        <div class="row">
                            <div class="col-lg-2 right_border">
                                <div class="state_tab_head_wrapper">
                                 
                                    <p class="tab_head">Solar Inverter</p>
                                    <p class="tab_head">LT Panels</p>
                                    <p class="tab_head">Cables & Wires</p>
                                    <p class="tab_head">DCDB</p>
                                    <p class="tab_head">ACDB</p>
                                    <p class="tab_head">Earthing Kit</p>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="row" id="tab_content">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h2 class="mb-3">{{$statessolar ->inverter_title}}</h2>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <p class="pb-4">{!!$statessolar ->inverter_disc!!}</p>
                                        <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <img src="{{ asset('public/Solar_Images/Solar Inverters.jpg') }}" class="img-fluid mb-4">
                                        <!--<a href="{{ route('contact') }}" class="cc_btn">View More</a>-->
                                    </div>
                                </div>
                                <div class="row" id="tab_content">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h2 class="mb-3">{{$statessolar ->lt_title}}</em></h2>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <p class="pb-4">{!!$statessolar ->lt_disc!!}</p>
                                        
                                        <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <img src="{{ asset('public/Solar_Images/LT Panels.jpg') }}" class="img-fluid mb-4">
                                        <!--<a href="{{ route('contact') }}" class="cc_btn">View More</a>-->
                                    </div>
                                </div>
                                <div class="row" id="tab_content">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h2 class="mb-3">{{$statessolar ->cable_title}}</em></h2>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <p class="pb-4">{!!$statessolar ->cable_disc!!}</p>
                                        <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <img src="{{ asset('public/Solar_Images/Solar Cable Wire Manufacturer.jpg') }}" class="img-fluid mb-4">
                                        <!--<a href="{{ route('contact') }}" class="cc_btn">View More</a>-->
                                    </div>
                                </div>
                                <div class="row" id="tab_content">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h2 class="mb-3">{{$statessolar ->dcdb_title}}</em></h2>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <p class="pb-4">{!!$statessolar ->dcdb_disc!!}</p>
                                        
                                        <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <img src="{{ asset('public/Solar_Images/DCDB.jpg') }}" class="img-fluid mb-4">
                                        <!--<a href="{{ route('contact') }}" class="cc_btn">View More</a>-->
                                    </div>
                                </div>
                                <div class="row" id="tab_content">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h2 class="mb-3">{{$statessolar ->acdb_title}}</h2>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <p class="pb-4">{!!$statessolar ->acdb_disc!!}</p>
                                       
                                        <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <img src="{{ asset('public/Solar_Images/ACDB.jpg') }}" class="img-fluid mb-4">
                                        <!--<a href="{{ route('contact') }}" class="cc_btn">View More</a>-->
                                    </div>
                                </div>
                                <div class="row" id="tab_content">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h2 class="mb-3">{{$statessolar ->kit_title}}</h2>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <p class="pb-4">{!!$statessolar ->kit_disc!!}</p>
                                        
                                        <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <img src="{{ asset('public/Solar_Images/Earthing Kit.jpg') }}" class="img-fluid mb-4">
                                        <!--<a href="{{ route('contact') }}" class="cc_btn">View More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="state_counter cspt-heading-subheading">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12 text-start mb-5">
                            <h2>Our Success in Numbers</h2>
                            <h3 style="color:#404040;">Powering <em style="color:#22285f;">India’s</em> Solar Revolution</h3>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="650" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
									650</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">Happy Clients in B2B Solar industry</p>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="2000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
									2000</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">Residential and Commercial Solar Projects Completed</p>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="7000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
									7000</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">Happy Clients in B2C Solar industry</p>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <h4 class="cspt-fid-inner">
								<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="500000" data-interval="20000" data-before="" data-before-style="" data-after="" data-after-style="">
									5,00,000</span><span class="cspt-fid-sub">+</span>
							</h4>
							<p style="font-size:14px;padding:10px 0;border-top:1px solid #CECECE;text-align:left;">We have supplied products to our customers across India.</p>
                        </div>
                    </div>
                    <h2 class="pb-3">Why Choose Ksquare for B2B Solar Products? </h2>
                    <div class="table-responsive">
                         <table>
                      <tbody><tr>
                        <td><b>Quality Solar Products </b> <br>Reliable and high-performance solar products.</td>
                        <td><b>No need of warehouse</b> <br>We manage stock, reducing your storage needs</td>
                      </tr>
                      <tr>
                        <td><b>Dedicated sales team</b> <br>A committed team ready to assist your business.</td>
                        <td><b>Customized Solutions</b> <br>Customised products to meet your specific requirements.</td>
                      </tr>
                      <tr>
                        <td><b>Expert Support</b> <br> Access to knowledgeable support at every step.</td>
                        <td><b>7 years of industry experience</b> <br>Proven expertise in delivering solar solutions.</td>
                      </tr>
                    </tbody></table>
                    </div>
                </div>
            </section>
            <!--<section class="states_acc cspt-heading-subheading">-->
            <!--    <div class="faqs_bg">-->
            <!--        <div class="container">-->
            <!--            <div class="row">-->
            <!--                    <div class="col-lg-12 p-0 mb-5">-->
            <!--                        <h2 class="mb-5">Frequently Asked Questions</h2>-->
            <!--                        <div class="accordion">-->
            <!--                            <div class="row">-->
            <!--                                <div class="col-lg-6">-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">1. What are the different types of solar products available?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Ksquare Energy provides a comprehensive selection of solar products such as solar inverters, LT panels, solar cables, DCDB, ACDB, earthing kits, and others.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">2. What are the different models available for solar inverters?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Ksquare Energy has 3 distinct models available in solar inverters, each designed to meet the different energy needs:</p>-->
            <!--                                    <p><b>4-25 kw (3 phase):</b> This model is designed for larger installations, such as commercial or industrial setups, offering robust power output in a 3-phase configuration. It's ideal for businesses and facilities that require higher energy efficiency and reliable performance.</p>-->
            <!--                                    <p><b>3.6 - 6 KW (Single MPPT - 20A):</b> This mid-range option features a Single MPPT (Maximum Power Point Tracking) with a 20A capacity, making it suitable for residential or small commercial installations. It provides optimized energy output, especially in situations with partial shading or varied sunlight conditions.</p>-->
            <!--                                    <p><b>1.3 - 3 KW (Single M):</b> This compact model is perfect for smaller households or individual solar applications. With a lower power range, it is ideal for homes with moderate energy needs, offering an affordable and efficient solution for sustainable energy generation. </p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">3. How do I choose the right solar inverter for my system?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>What do you think is the first factor that determines the right solar inverter for any system? I believe the first factor would be the system size so that the capacity of the inverter properly corresponds to that of the solar panels set up. High efficiency ratings should be sought as well, to help in increasing the output of energy generated. Also, the inverter should fit the specifications of the local grid so that there are no problems when in use. Other features such as the ability to monitor the inverters and warranty offered can also be a deciding factor, because they increase convenience and reduce uncertainty. Lastly, look out for how easy it will be to install the inverter and any requirements for installing it to avoid difficulties later on.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">4. Do solar inverters come with a warranty?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Ksquare solar inverters are designed to last for years, with a robust 10-year warranty that covers them fully. This gives great long-term reliability in the peace of mind of your solar energy system. You're investing in quality and reliable performance for the future with Ksquare.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">5. How do I find a reliable solar inverter provider?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>To find a reliable solar inverter provider, look for a company with a strong reputation, high-quality products, and solid customer support. Ksquare stands out as a trusted provider, offering efficient solar solutions backed by long warranties. With Ksquare, you can count on reliability and long-term performance.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">6. What are LT panels?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>LT panels (Low Tension panels) are electrical distribution boards that operate at low voltage, typically below 1kV. They distribute electricity from the main supply to different parts of a building or system. LT panels are used in industries and large buildings for safe and efficient power distribution.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">7. What are the applications of LT panels?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>LT panels are used for distributing electricity at low voltage in homes, offices, and industries. They power lighting, appliances, and equipment safely and efficiently.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">8. How do I choose the right LT panel for my needs?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>To choose the right LT panel for your needs, consider the total load you plan to connect and the space available for installation. Also, look for panels with good quality and safety certifications.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">9. Are LT panels suitable for both indoor and outdoor use?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>LT panels can be used in both inside and outside applications. They are built to tolerate a wide range of environmental conditions while still maintaining safety and reliability.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">10. How do solar cables differ from regular electrical cables?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Solar cables are designed to withstand higher temperatures and UV exposure, making them more durable for outdoor use. They also have better insulation to handle the specific needs of solar energy systems.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                                </div>-->
            <!--                                <div class="col-lg-6">-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">11. What are the different types of solar cables available?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Ksquare Energy offers four types of solar cables under the brand name Solsquare. These cables include solar PV cables, DC cables, AC cables, and extension cables.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">12. How long can solar cables last?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Solar cables can last 25 years or more with proper care. Regular maintenance helps ensure their longevity and performance.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">13. Are solar cables waterproof?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Yes, solar cables are waterproof. They are designed to withstand outdoor and weather conditions and prevent water damage.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">14. What is the role of a solar DCDB and ACDB?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>A solar DCDB (Direct Current Distribution Box) collects and distributes the DC power from solar panels. An ACDB (Alternating Current Distribution Box) manages and distributes the AC power from the inverter to the electrical system.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">15. Are ACDB and DCDBs weatherproof for outdoor installations?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Yes, ACDBs (AC Distribution Boards) and DCDBs (DC Distribution Boards) are available in weatherproof variants for outdoor installations. These are typically designed to withstand harsh environmental conditions such as rain, dust, and UV exposure.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">16. Why is earthing important in electrical systems?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Earthing is important to prevent electric shocks by directing excess electricity safely into the ground. It also helps protect electrical devices from damage.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">17. What components are included in an earthing kit?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>An earthing kit by Ksquare typically includes a copper earthing rod, clamps, conductors, and a testing device. It may also come with installation accessories like connectors and a user manual for setup.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">18. Are government subsidies available for solar installations?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Yes, the Government of India provides subsidies for solar installations under the PM Surya Ghar Muft Bijli Yojana.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">19. How do I choose the right earthing kit for my installation?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>To select the correct earthing kit for your installation, you'll be required to assess the soil resistivity and grounding requirements unique to your site while considering all other influencing factors related to the size of installations, environmental conditions, and local electrical codes among others.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="accordion-item">-->
            <!--                                <button class="accordion-header">20. What warranties are typically offered for solar products?</button>-->
            <!--                                <div class="accordion-content" style="display: none;">-->
            <!--                                    <p>Solar power equipment generally carries with it a performance guarantee that can guarantee a certain level of energy output for as long as twenty-five years. In addition, product-related warranties are provided regarding defection and workmanship that last for 10 to 25 years. These guarantees assure durability over time and cover the loss.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
                                <!--<div class="col-lg-6 p-0 faq_right">-->
                                <!--    <img src="{{ asset('public/Solar_Sates_Images/state_acc_bg.png') }}" class="img-fluid" />-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--</section>-->
            <section class="states_testi">
                <div class="container">
                    <h2 class="text-center mb-5">What Our Clients Say Trusted Solar Solutions</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_1">
                                <div class="testi_head">
                                    <img src="{{ asset('public/images/vipul.jpg') }}">
                                    <div>
                                        <p class="testi_name">Vipul Trivedi</p>
                                        <p class="testi_company">Lohana Tours & Travels Pvt Ltd</p>
                                    </div>
                                </div>
                                <div class="testi_msg">
                                    <p style=" text-align: left; ">I had installed 10 KW Rooftop System at my home and i am getting generation of 6.2 Units/KW and staff of Ksquare is just a call away</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_2">
                                <div class="testi_head">
                                    <img src="{{ asset('public/images/nirav-dhanani.jpg') }}">
                                    <div>
                                        <p class="testi_name">Nirav Dhanani</p>
                                        <p class="testi_company">Heaven Solar Pvt Ltd</p>
                                    </div>
                                </div>
                                <div class="testi_msg">
                                    <p style=" text-align: left; ">Ksquare Is like one stop solution for us all kind of BOS Like DCDB-ACDB, Earthing Kit, MC-4Connector, J-Hook & All other accesories i recommended Ksquare For Good Quality Products At Good Pricing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_1">
                                <div class="testi_head">
                                    <img src="{{ asset('public/images/no-image.jpg') }}">
                                    <div>
                                        <p class="testi_name">Saraljivandasji Swami</p>
                                        <p class="testi_company">Swaminarayan Gurukul Hyderabad</p>
                                    </div>
                                </div>
                                <div class="testi_msg">
                                    <p style=" text-align: left; ">We had installed the project of 80 KW at Shree Swaminarayan Gurukul, Hyderabad & Mumbai. We are very satisfied with the service of Ksquare Energy Pvt. Ltd. and the product quality as well.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-0 mb-3">
                            <div class="testi_box_2">
                                <div class="testi_head">
                                    <img src="{{ asset('public/images/hiren.jpg') }}">
                                    <div>
                                        <p class="testi_name">Hiren Dhameliya</p>
                                        <p class="testi_company">Flame Solren Pvt Ltd</p>
                                    </div>
                                </div>
                                <div class="testi_msg">
                                    <p style=" text-align: left; ">We are Using Thermoplastic Enclosure of Kenclozer Brand For DCDB-ACDB Manufacturing and we are impressed with their delivery commitment and after sales Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="states_cta">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 mb-4">
                            <h2 style="color: #B4BDFE;">Get in touch with <em class="text-white">{{$statessolar ->solar_state_name}}’s top solar</em> company for a free consultation</h2>
                        </div>
                        <div class="col-lg-4">
                            <div style="margin:0 auto;">
                                <a href="{{ route('contact') }}" class="cc_btn">Inquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





    @include('footer')
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabHeads = document.querySelectorAll('.tab_head');
        const tabContents = document.querySelectorAll('.tab_content');
    
        tabHeads.forEach(head => {
            head.addEventListener('click', function () {
                const targetTab = this.getAttribute('data-tab');
    
                // Remove active class from all tab heads and tab contents
                tabHeads.forEach(h => h.classList.remove('active'));
                tabContents.forEach(c => c.classList.add('d-none'));
    
                // Add active class to the clicked tab and its corresponding content
                this.classList.add('active');
                document.getElementById(targetTab).classList.remove('d-none');
            });
        });
    });
    </script>
    <script>
           document.addEventListener("DOMContentLoaded", function () {
        const tabHeaders = document.querySelectorAll('.state_tab_wrapper .tab_head');
        const tabContents = document.querySelectorAll('.state_tab_wrapper #tab_content');
    
        // Hide all tab contents except the first one
        tabContents.forEach((content, index) => {
            content.style.display = index === 0 ? 'block' : 'none';
        });
    
        // Add 'active' class to the first tab header by default
        tabHeaders[0].classList.add('active');
    
        // Add click event listeners to each tab header
        tabHeaders.forEach((header, index) => {
            header.addEventListener('click', function () {
                // Remove active state from all tab headers
                tabHeaders.forEach(tab => tab.classList.remove('active'));
    
                // Add active state to the clicked tab header
                header.classList.add('active');
    
                // Hide all tab contents
                tabContents.forEach(content => content.style.display = 'none');
    
                // Show the corresponding tab content
                tabContents[index].style.display = 'block';
            });
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