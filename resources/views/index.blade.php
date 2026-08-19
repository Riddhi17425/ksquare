@include('header')

<div class="cspt-slider-area">
	<!-- START homeslider1 REVOLUTION SLIDER 6.2.10 -->
	<p class="rs-p-wp-fix"></p>
	<rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery" class="module-wrap" >
		<rs-module id="rev_slider_2_1" data-version="6.2.10">
			<rs-slides>
				<rs-slide data-key="rs-3" data-title="Slide" data-thumb="{{asset('/public/images/new_banner.jpg')}}" data-duration="10020" data-anim="ei:d;eo:d;s:400;r:0;t:fade;sl:d;">
					<img src="{{asset('/public/images/new_banner.jpg')}}" title="Homepage 1" data-bg="p:center bottom;" class="rev-slidebg" alt="Homepage 1" loading="lazy" data-no-retina>
				</rs-slide>
				<rs-slide data-key="rs-2" data-title="Slide" data-thumb="{{asset('/public/images/banner1.jpg')}}" data-duration="10000" data-anim="ei:d;eo:d;s:400;r:0;t:fade;sl:d;">
					<img src="{{asset('/public/images/banner1.jpg')}}" title="Homepage 1" data-bg="p:center bottom;" class="rev-slidebg" alt="Homepage 1" loading="lazy" data-no-retina>


				</rs-slide>
			</rs-slides>
		</rs-module>
		<script>
			setREVStartSize({
				c: 'rev_slider_2_1',
				rl: [1240, 1024, 1024, 480],
				el: [750, 700, 700, 350],
				gw: [1170, 1024, 1024, 480],
				gh: [750, 700, 700, 350],
				type: 'standard',
				justify: '',
				layout: 'fullwidth',
				mh: "0"
			});
			var revapi2,
				tpj;
			jQuery(function() {
				tpj = jQuery;
				revapi2 = tpj("#rev_slider_2_1")
				if (revapi2 == undefined || revapi2.revolution == undefined) {
					revslider_showDoubleJqueryError("rev_slider_2_1");
				} else {
					revapi2.revolution({
						sliderLayout: "fullwidth",
						duration: 6000,
						visibilityLevels: "1240,1024,1024,480",
						gridwidth: "1920,1199,1024,480",
						gridheight: "750,700,700,350",
						spinner: "spinner0",
						perspectiveType: "local",
						editorheight: "750,700,960,350",
						responsiveLevels: "1240,1024,1024,480",
						progressBar: {
							disableProgressBar: true
						},
						// navigation: {
						//     mouseScrollNavigation: true,
						//     // bullets: {
						//     //     enable: true,
						//     //     tmp: "<span class=\"tp-bullet-image\"></span>",
						//     //     style: "hebe"
						//     // },

						// },
						navigation: {
							arrows: {
								enable: true,
								style: 'hesperiden',
							}
						},
						fallbacks: {
							allowHTML5AutoPlayOnAndroid: true
						},
					});
				}

			});
		</script>
		<script>
			var htmlDivCss = unescape(
				".rs-layer%20span%7B%0A%20%20%20%20font-weight%3A%20700%3B%20%20%20%20%20%0A%20%20%20%20line-height%3A%2050px%3B%0A%20%20%20%20font-size%3A%2048px%20%0A%20%7D%0A%40media%20%28max-width%3A%20480px%29%20%7B%0A.rs-layer%20span%7B%20%20%0A%20%20%20%20line-height%3A%2030px%3B%0A%20%20%20%20font-size%3A%2026px%20%0A%20%7D%0A%7D"
			);
			var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
			if (htmlDiv) {
				htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
			} else {
				var htmlDiv = document.createElement('div');
				htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
				document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
			}
		</script>
		<script>
			var htmlDivCss = unescape(
				"%0A%23rev_slider_2_1_wrapper%20.hebe.tp-bullets%3Abefore%20%7B%0A%20%20content%3A%27%20%27%3B%0A%20%20position%3Aabsolute%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20background%3Atransparent%3B%0A%20%20padding%3A10px%3B%0A%20%20margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%20%20box-sizing%3Acontent-box%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.hebe%20.tp-bullet%20%7B%0A%20%20width%3A3px%3B%0A%20%20height%3A3px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20background%3A%23ffffff%3B%20%20%0A%20%20cursor%3A%20pointer%3B%0A%20%20border%3A5px%20solid%20%23000000%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20box-sizing%3Acontent-box%3B%0A%20%20-webkit-perspective%3A400%3B%0A%20%20perspective%3A400%3B%0A%20%20-webkit-transform%3Atranslatez%280.01px%29%3B%0A%20%20transform%3Atranslatez%280.01px%29%3B%0A%20%20%20transition%3Aall%200.3s%3B%0A%7D%0A%23rev_slider_2_1_wrapper%20.hebe%20.tp-bullet%3Ahover%2C%0A%23rev_slider_2_1_wrapper%20.hebe%20.tp-bullet.selected%20%7B%0A%20%20background%3A%23000000%3B%0A%20%20border-color%3A%23ffffff%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.hebe%20.tp-bullet-image%20%7B%0A%20%20position%3Aabsolute%3B%0A%20%20width%3A70px%3B%0A%20%20height%3A70px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20visibility%3Ahidden%3B%0A%20%20opacity%3A0%3B%0A%20%20bottom%3A3px%3B%0A%20%20transition%3Aall%200.3s%3B%0A%20%20-webkit-transform-style%3Aflat%3B%0A%20%20transform-style%3Aflat%3B%0A%20%20perspective%3A600%3B%0A%20%20-webkit-perspective%3A600%3B%0A%20%20transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20transform-origin%3A0%25%20100%25%3B%0A%20%20-webkit-transform-origin%3A0%25%20100%25%3B%0A%20%20margin-bottom%3A15px%3B%0A%20border-radius%3A6px%3B%0A%7D%0A%23rev_slider_2_1_wrapper%20.hebe%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20display%3Ablock%3B%0A%20%20opacity%3A1%3B%0A%20%20transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20visibility%3Avisible%3B%0A%7D%0A%0A%0A%2F%2A%20VERTICAL%20%2A%2F%0A%0A%23rev_slider_2_1_wrapper%20.hebe.nav-dir-vertical%20.tp-bullet-image%20%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-right%3A15px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20right%3A3px%3B%0A%20%20transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20transform-origin%3A100%25%200%25%3B%0A%20%20-webkit-transform-origin%3A100%25%200%25%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.hebe.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%2F%2A%20VERTICAL%20LEFT%20%2A%2F%0A%0A%23rev_slider_2_1_wrapper%20.hebe.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-image%20%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-left%3A15px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A3px%3B%0A%20%20transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20transform-origin%3A0%25%200%25%3B%0A%20%20-webkit-transform-origin%3A0%25%200%25%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.hebe.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%23rev_slider_2_1_wrapper%20.hebe.nav-pos-ver-top.nav-dir-horizontal%20.tp-bullet-image%20%7B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A3px%3B%0A%20%20transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20transform-origin%3A0%25%200%25%3B%0A%20%20-webkit-transform-origin%3A0%25%200%25%3B%0A%20%20margin-top%3A15px%3B%0A%20%20margin-bottom%3A0px%3B%20%20%0A%7D%0A%23rev_slider_2_1_wrapper%20.hebe.nav-pos-ver-top.nav-dir-horizontal%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%7D%0A"
			);
			var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
			if (htmlDiv) {
				htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
			} else {
				var htmlDiv = document.createElement('div');
				htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
				document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
			}
		</script>
		<script>
			var htmlDivCss = unescape("%0A%0A");
			var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
			if (htmlDiv) {
				htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
			} else {
				var htmlDiv = document.createElement('div');
				htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
				document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
			}
		</script>
	</rs-module-wrap>
	<!-- END REVOLUTION SLIDER -->
</div>
</header><!-- #masthead -->
<div class="site-content-contain">
	<div id="content" class="site-content header-content">

		<div id="primary" class="content-area ">
			<main id="main" class="site-main cspt-page-content-wrapper">

				<article id="post-17071" class="post-17071 page type-page status-publish hentry">
					<div class="entry-content">
						<div data-elementor-type="wp-page" data-elementor-id="17071" class="elementor elementor-17071" data-elementor-settings="[]">
							<div class="elementor-inner">
								<div class="elementor-section-wrap">
									<section class="elementor-element elementor-element-34085e2 cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="34085e2" data-element_type="section" style="margin-top: -100px;">
								
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row feature-row" style="background-color: #FFFFFF;
													border-bottom-color: #263b7f;border-style: solid;border-width: 0px 0px 3px 0px;
													box-shadow: 0px 0px 40px 0px rgb(183 196 226 / 15%);transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
													padding: 20px 20px 20px 20px;z-index: 1;">
												<div class="elementor-element elementor-element-39ca2f8 cspt-bg-color-over-image elementor-column elementor-col-100 elementor-top-column" data-id="39ca2f8" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<section class="elementor-element elementor-element-851d3d1 cspt-brdr-btm-effect cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="851d3d1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row text-center">
																		<div class="elementor-element elementor-element-a3362a3 cspt-bg-color-over-image elementor-column elementor-col-33 elementor-inner-column" data-id="a3362a3" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-b523e92 elementor-widget elementor-widget-cspt_icon_heading" data-id="b523e92" data-element_type="widget" data-widget_type="cspt_icon_heading.default">
																						<div class="elementor-widget-container">
																							<div class="cspt-ihbox cspt-ihbox-style-2 ">
																								<div class="cspt-ihbox-box">
																									<div class="cspt-ihbox-headingicon d-flex ">
																										<div class="cspt-ihbox-icon">
																											<div class="cspt-ihbox-icon-wrapper mx-auto">
																												<i class="cspt-greenly-icon cspt-greenly-icon-save-water"></i>
																											</div>
																										</div>
																										<div class="cspt-ihbox-contents">
																											<h2 class="cspt-element-title">
																												Trusted
																												Services
																											</h2>
																										</div>
																										<!-- .cspt-ihbox-contents -->
																									</div>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-a3362a3 cspt-bg-color-over-image elementor-column elementor-col-33 elementor-inner-column" data-id="a3362a3" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-b523e92 elementor-widget elementor-widget-cspt_icon_heading" data-id="b523e92" data-element_type="widget" data-widget_type="cspt_icon_heading.default">
																						<div class="elementor-widget-container">
																							<div class="cspt-ihbox cspt-ihbox-style-2 ">
																								<div class="cspt-ihbox-box">
																									<div class="cspt-ihbox-headingicon d-flex ">
																										<div class="cspt-ihbox-icon">
																											<div class="cspt-ihbox-icon-wrapper mx-auto header">
																												<img src="public/images/high-quality.png" alt="high-quality" loading="lazy" class="header-img">
																											</div>
																										</div>
																										<div class="cspt-ihbox-contents">
																											<h2 class="cspt-element-title">
																												Quality
																												Products
																											</h2>
																										</div>
																										<!-- .cspt-ihbox-contents -->
																									</div>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="elementor-element elementor-element-7ee77f8 cspt-bg-color-over-image elementor-column elementor-col-33 elementor-inner-column" data-id="7ee77f8" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-1e01bcc elementor-widget elementor-widget-cspt_icon_heading" data-id="1e01bcc" data-element_type="widget" data-widget_type="cspt_icon_heading.default">
																						<div class="elementor-widget-container">
																							<div class="cspt-ihbox cspt-ihbox-style-2 ">
																								<div class="cspt-ihbox-box">
																									<div class="cspt-ihbox-headingicon d-flex ">
																										<div class="cspt-ihbox-icon">
																											<div class="cspt-ihbox-icon-wrapper mx-auto">
																												<img src="public/images/competitive.png" alt="competitive-prices" loading="lazy" class="header-img">
																											</div>
																										</div>
																										<div class="cspt-ihbox-contents">
																											<h2 class="cspt-element-title">
																												Competitive
																												Prices
																											</h2>
																										</div>
																										<!-- .cspt-ihbox-contents -->
																									</div>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="elementor-element elementor-element-f61c66e cspt-bg-color-yes cspt-elementor-bg-color-white cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f61c66e" data-element_type="section" style="padding-top: 70px;">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-73b1710 cspt-bg-color-over-image elementor-column elementor-col-50 elementor-top-column" data-id="73b1710" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-8c8a398 cspt-align-left elementor-widget elementor-widget-cspt_heading mb-0" data-id="8c8a398" data-element_type="widget" data-widget_type="cspt_heading.default">
																<div class="elementor-widget-container">
																	<div class="mb-3 cspt-heading-subheading left-align cspt-reverse-heading-yes">
                                                                        <h1 class="cspt-element-title" style="font-size:35px;">
																			Best Solar Energy Company in Ahmedabad, Gujarat
																		</h1>
																		<div class="cspt-heading-desc">Ksquare is leading solar company from Ahmedabad, engaged in Manufacturing & Supplying all type of solar products.
																		</div>
																		<h2 class="cspt-element-title pt-3" style="font-size:30px;">
																			Why Us?
																		</h2>
																		<div class="cspt-heading-desc">Ksquare
																			has established itself across the
																			country in a short span of 8 years
																			due to commitment towards quality
																			products and timely service.
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-aa51a03 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="aa51a03" data-element_type="widget" data-widget_type="icon-list.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-icon-list-items">
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i>
																			</span>
																			<span class="elementor-icon-list-text">
																				We are manufacturing Solar ACDB,
																				DCDB, AJB, SCB, Combiner Boxes,
																				Solar structures and diverse
																				range distribution box for
																				utility-scale projects.</span>
																		</li>
																		<li class="elementor-icon-list-item">
																			<span class="elementor-icon-list-icon">
																				<i aria-hidden="true" class="fas fa-check"></i>
																			</span>
																			<span class="elementor-icon-list-text">
																				We are also supplying all sets
																				of materials such as Solar
																				Panels, Inverters, cables and
																				all type of accessories related
																				to solar PV Systems.</span>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-3ce7e50 cspt-btn-color-light cspt-btn-style-outline cspt-btn-shape-round elementor-widget elementor-widget-button" data-id="3ce7e50" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">
																		<a href="{{route('profile')}}" class="elementor-button-link elementor-button elementor-size-md" role="button">
																			<span class="elementor-button-content-wrapper">
																				<span class="elementor-button-text">KNOW
																					MORE</span>
																			</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-3a00586 cspt-bg-color-over-image elementor-column elementor-col-50 elementor-top-column" data-id="3a00586" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-f946659 elementor-widget elementor-widget-image" data-id="f946659" data-element_type="widget" data-widget_type="image.default">
																<div class="elementor-widget-container">
																	<div class="elementor-image">
																		<img width="584" height="590" src="public/images/story.jpg" class="attachment-full size-full" alt="story" sizes="(max-width: 584px) 100vw, 584px" data-id="9441" loading="lazy" />
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-6ab8139 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-cspt_fid_element" data-id="6ab8139" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="cspt_fid_element.default">
																<div class="elementor-widget-container">
																	<div class="creativesplanet-ele creativesplanet-ele-fid creativesplanet-ele-fid-style-2 ">
																		<div class="cspt-fld-contents">
																			<div class="cspt-sbox-icon-wrapper">
																				<i class="cspt-greenly-icon cspt-greenly-icon-solar-panel"></i>
																			</div>
																			<h4 class="cspt-fid-inner">
																				<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="8" data-interval="1" data-before="" data-before-style="" data-after="" data-after-style="">
																					8</span><span class="cspt-fid-sub">+
																					Years</span>
																			</h4>
																			<h3 class="cspt-fid-title">
																				<span>of Experience</span>
																			</h3>
																		</div><!-- .cspt-fld-contents -->

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="elementor-element elementor-element-84f9433 cspt-bg-color-yes cspt-elementor-bg-color-light elementor-section-stretched cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="84f9433" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-container elementor-column-gap-extended">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-2761088 cspt-bg-color-over-image elementor-column elementor-col-100 elementor-top-column" data-id="2761088" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-5b325bf cspt-align-center elementor-widget elementor-widget-cspt_multiple_icon_heading" data-id="5b325bf" data-element_type="widget" data-widget_type="cspt_multiple_icon_heading.default">
																<div class="elementor-widget-container">
																	<div class="creativesplanet-element creativesplanet-element-blog cspt-element-blog-style-1 creativesplanet-element-viewtype-row-column" data-show="3" data-columns="4" data-loop="false" data-autoplay="false" data-center="false" data-nav="false" data-dots="false" data-autoplayspeed="1000" data-margin="">
																		<div class="creativesplanet-element-inner">
																			<div class="cspt-ele-header-area">
																				<div class="cspt-heading-subheading center-align cspt-reverse-heading-yes">

																					<h2 class="cspt-element-title">
																						Produce your own
																						electricity and <br>help
																						save Environment
																					</h2>
																				</div>
																			</div>

																			<div class="cspt-element-posts-wrapper row multi-columns-row">
																				<div class="cspt-ele cspt-blog-ele col-md-6 col-lg-3 mt-3">
																					<div class="cspt-ihbox cspt-ihbox-style-1 h-100">
																						<div class="cspt-ihbox-icon">
																							<div class="cspt-ihbox-icon-wrapper">
																								<i class="cspt-greenly-icon cspt-greenly-icon-greenhouse"></i>
																							</div>
																						</div>
																						<div class="cspt-ihbox-contents">
																							<h2 class="cspt-element-title text-dark">
																								<a href="{{route('residential')}}">Residential
																								Solar Plants</a>
																							</h2>
																							<div class="cspt-heading-desc">
																								A home solar
																								system must
																								provide enough
																								electric energy
																								to fulfil all
																								the power
																								requirements of
																								home. Here, you
																								can save and
																								earn from your
																								idle rooftop
																								space.
																							</div>
																							<div class="cspt-ihbox-btn">
																								<!-- <a href="#"><span>Read
																												More</span></a> -->
																							</div>
																						</div>
																						<!-- .cspt-ihbox-contents -->
																					</div>
																				</div>
																				<div class="cspt-ele cspt-blog-ele col-md-6 col-lg-3 mt-3">
																					<div class="cspt-ihbox cspt-ihbox-style-1 h-100">
																						<div class="cspt-ihbox-icon">
																							<div class="cspt-ihbox-icon-wrapper">
																								<i class="cspt-greenly-icon cspt-greenly-icon-windmill"></i>
																							</div>
																						</div>
																						<div class="cspt-ihbox-contents">
																							<h2 class="cspt-element-title text-dark">
																								<a href="{{route('commercial')}}">Industrial Solar
																								Plants</a>
																							</h2>
																							<div class="cspt-heading-desc">
																								Since there will
																								be huge space
																								available in
																								such an
																								environment, our
																								erection
																								engineers would
																								study your
																								layout and come
																								with a suitable
																								solution for
																								Solar Panel
																								deployment.
																							</div>
																							<div class="cspt-ihbox-btn">

																							</div>
																						</div>
																						<!-- .cspt-ihbox-contents -->
																					</div>
																				</div>
																				<div class="cspt-ele cspt-blog-ele col-md-6 col-lg-3 mt-3">
																					<div class="cspt-ihbox cspt-ihbox-style-1 h-100">
																						<div class="cspt-ihbox-icon">
																							<div class="cspt-ihbox-icon-wrapper">
																								<i class="cspt-greenly-icon cspt-greenly-icon-flask"></i>
																							</div>
																						</div>
																						<div class="cspt-ihbox-contents">
																							<h2 class="cspt-element-title text-dark">
																								Trust/Institutional
																								Solar Plants
																							</h2>
																							<div class="cspt-heading-desc">
																								Take benefit of
																								our
																								special pricing
																								for educational
																								institutions as
																								their
																								requirements are
																								differ from that
																								of others. Check
																								our pricing for
																								educational
																								institutions.
																							</div>
																							<div class="cspt-ihbox-btn">

																							</div>
																						</div>
																						<!-- .cspt-ihbox-contents -->
																					</div>
																				</div>
																				<div class="cspt-ele cspt-blog-ele col-md-6 col-lg-3 mt-3">
																					<div class="cspt-ihbox cspt-ihbox-style-1 h-100">
																						<div class="cspt-ihbox-icon">
																							<div class="cspt-ihbox-icon-wrapper">
																								<i class="cspt-greenly-icon cspt-greenly-icon-solar-panel"></i>
																							</div>
																						</div>
																						<div class="cspt-ihbox-contents">
																							<h2 class="cspt-element-title text-dark">
																								<a href="{{route('commercial')}}">Commercial Solar
																								Plants</a>
																							</h2>
																							<div class="cspt-heading-desc">
																								Our
																								sophisticated
																								design and
																								execution is
																								well-known. We
																								strive hard to
																								complete the
																								project on time
																								and ensure a
																								smooth flow of
																								energy from the
																								augmented grid.
																							</div>
																							<div class="cspt-ihbox-btn">

																							</div>
																						</div>
																						<!-- .cspt-ihbox-contents -->
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- .creativesplanet-element-inner -->
																	</div><!-- .creativesplanet-element -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>

									<!-- our products -->
                                    <section class="our-product-wrapper">
									<div class="row">
										<div class="col-md-12 text-center mt-5">
											<h2 class="cspt-element-title">
												Our Products
											</h2>
										</div>
										<div class="col-md-12">
											<div class="bg-light margin-top15 pb-5">
												<div class="row">
													<div class="container px-5">
														<div class="margin-top17 creativesplanet-element creativesplanet-element-team cspt-element-team-style-2 creativesplanet-element-viewtype-carousel creativesplanet-gap-30px" data-show="4" data-columns="3" data-loop="false" data-autoplay="true" data-center="false" data-nav="true" data-dots="true" data-autoplayspeed="1000" data-margin="">
															<div class="creativesplanet-element-inner">

																<div class="cspt-element-posts-wrapper row multi-columns-row">
																	@foreach($category as $category)
																	<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 text-center">

																		<img src="{{asset($category->image)}}" alt="example-image" alt="Category image" loading="lazy" class="img-border bg-white">

																		<h3 class="mt-3">{{$category->name}}</h3>
																		<p><?php echo preg_replace('~^"?(.*?)"?$~', '$1', $category->description); ?></p>
																		<a href="{{asset('/products/'.$category->seourl)}}" class="text-primary">Read
																			More <i class="fas fa-angle-right"></i></a>
																	</div>
																	@endforeach
																</div>
															</div>
															<!-- .creativesplanet-element-inner -->
														</div><!-- .creativesplanet-element -->
													</div>
												</div>

											</div>
										</div>

									</div>
									</section>
									<!-- ./our products -->



									<section class="elementor-element elementor-element-e1b076a cspt-bg-color-yes cspt-elementor-bg-color-globalcolor cspt-text-color-white elementor-section-stretched elementor-section-content-middle cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e1b076a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-1f1c1c4 cspt-bg-color-over-image elementor-column elementor-col-66 elementor-top-column" data-id="1f1c1c4" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-d324c66 elementor-widget elementor-widget-heading " data-id="d324c66" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default" style="color:white">
																		Switch to Solar Energy!
																	</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-066b8a2 elementor-widget elementor-widget-text-editor" data-id="066b8a2" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<div class="elementor-text-editor elementor-clearfix">
																		Contact us for more details.
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-c6aecff cspt-bg-color-over-image elementor-column elementor-col-33 elementor-top-column" data-id="c6aecff" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-7e1d345 cspt-btn-color-white cspt-btn-style-outline cspt-btn-shape-round elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="7e1d345" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">
																		<a href="{{route('contact')}}" class="elementor-button-link elementor-button elementor-size-md" role="button">
																			<span class="elementor-button-content-wrapper">
																				<span class="elementor-button-text">GET
																					IN TOUCH</span>
																			</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="elementor-element elementor-element-95df770 cspt-bg-color-yes cspt-elementor-bg-color-white elementor-section-stretched cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="95df770" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-ccf8750 cspt-bg-color-over-image elementor-column elementor-col-50 elementor-top-column" data-id="ccf8750" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<section class="elementor-element elementor-element-c487378 cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c487378" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-f4eaee5 cspt-bg-color-over-image elementor-column elementor-col-100 elementor-inner-column" data-id="f4eaee5" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-ffa95ca elementor-widget elementor-widget-image" data-id="ffa95ca" data-element_type="widget" data-widget_type="image.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-image">
																								<img src="public/images/customer.jpg" title="greely-test-image" loading="lazy" alt="greely-test-image" />
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
															<div class="elementor-element elementor-element-99a2773 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-cspt_fid_element" data-id="99a2773" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="cspt_fid_element.default">
																<div class="elementor-widget-container">
																	<div class="creativesplanet-ele creativesplanet-ele-fid creativesplanet-ele-fid-style-3 ">
																		<div class="cspt-fld-contents">
																			<div class="cspt-sbox-icon-wrapper">
																				<i class="cspt-greenly-icon cspt-greenly-icon-users"></i>
																			</div>
																			<h4 class="cspt-fid-inner">
																				<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="1000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
																					1000 </span>
																				<span class="cspt-fid-sub"><sup>+</sup></span>
																			</h4>
																			<h3 class="cspt-fid-title">
																				<span>Happy Clients in B2B Solar
																					industry<br></span>
																			</h3>
																			<h4 class="cspt-fid-inner mt-3">
																				<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="9000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
																					9000 </span>
																				<span class="cspt-fid-sub"><sup>+</sup></span>
																			</h4>
																			<h3 class="cspt-fid-title">
																				<span>Happy Clients in B2C Solar
																					industry<br></span>
																			</h3>
																		</div><!-- .cspt-fld-contents -->

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-468336a cspt-bg-color-over-image elementor-column elementor-col-50 elementor-top-column" data-id="468336a" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-67d2f81 elementor-widget elementor-widget-cspt_testimonial_element" data-id="67d2f81" data-element_type="widget" data-widget_type="cspt_testimonial_element.default">
																<div class="elementor-widget-container">

																	<div class="creativesplanet-element creativesplanet-element-testimonial cspt-element-testimonial-style-3 creativesplanet-element-viewtype-carousel creativesplanet-gap-0px" data-show="3" data-columns="1" data-loop="false" data-autoplay="true" data-center="false" data-nav="false" data-dots="true" data-autoplayspeed="1000" data-margin="0px">
																		<div class="creativesplanet-element-inner">
																			<div class="cspt-ele-header-area">
																				<div class="cspt-heading-subheading left-align cspt-reverse-heading-yes">
																					<h2 class="cspt-element-title">
																						Customers Speak
																					</h2>
																				</div>
																			</div>
																			<div class="cspt-element-posts-wrapper row multi-columns-row">

																				<div class="cspt-ele cspt-testimonial-ele col-md-12 ">
																					<article class="creativesplanet-ele creativesplanet-ele-testimonial cspt-testimonial-style-3 cspt-testimonial-active">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-desc">
																									<blockquote class="creativesplanet-testimonial-text">
																										<p>We
																											had
																											installed
																											th
																											Project
																											of
																											80
																											KW
																											AT
																											Shree
																											Swaminarayan
																											Gurukul
																											Hyderabad
																											&amp;
																											Mumbai
																											We
																											are
																											Very
																											Setisfied
																											With
																											The
																											Service
																											Of
																											Ksquare
																											Energy
																											Pvt
																											Ltd
																											and
																											the
																											product
																											quality
																											also
																										</p>
																									</blockquote>
																								</div>
																								<div class="creativesplanet-box-author">
																									<div class="creativesplanet-box-img">
																										<div class="cspt-featured-wrapper">
																											<img width="150" height="150" alt="No Image" src="public/images/no-image.jpg" loading="lazy" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" data-id="8791" />
																										</div>
																									</div>
																									<h3 class="creativesplanet-box-title">
																										Saraljivandasji
																										Swami
																									</h3>
																									<span class="cspt-designation">Swaminarayan
																										Gurukul
																										Hyderabad</span>
																								</div>
																							</div>
																						</div>
																					</article>
																				</div>
																				<div class="cspt-ele cspt-testimonial-ele col-md-12 ">
																					<article class="creativesplanet-ele creativesplanet-ele-testimonial cspt-testimonial-style-3">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-desc">
																									<blockquote class="creativesplanet-testimonial-text">
																										<p>We
																											are
																											Using
																											Thermoplastic
																											Enclosure
																											of
																											Kenclozer
																											Brand
																											For
																											DCDB-ACDB
																											Manufacturing
																											and
																											we
																											are
																											impressed
																											with
																											their
																											delivery
																											commitment
																											and
																											after
																											sales
																											Service
																										</p>
																									</blockquote>
																								</div>
																								<div class="creativesplanet-box-author">
																									<div class="creativesplanet-box-img">
																										<div class="cspt-featured-wrapper">
																											<img width="150" height="150" src="public/images/hiren.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="hiren" data-id="8790" loading="lazy"/>
																										</div>
																									</div>
																									<h3 class="creativesplanet-box-title">
																										Hiren
																										Dhameliya
																									</h3>
																									<span class="cspt-designation">Flame
																										Solren
																										Pvt
																										Ltd</span>
																								</div>
																							</div>
																						</div>
																					</article>
																				</div>
																				<div class="cspt-ele cspt-testimonial-ele col-md-12 ">
																					<article class="creativesplanet-ele creativesplanet-ele-testimonial cspt-testimonial-style-3">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-desc">
																									<blockquote class="creativesplanet-testimonial-text">
																										<p>Ksquare
																											Is
																											like
																											one
																											stop
																											solution
																											for
																											us
																											all
																											kind
																											of
																											BOS
																											Like
																											DCDB-ACDB,Earthing
																											Kit,MC-4
																											Connector,J-Hook
																											&amp;
																											All
																											other
																											accesories
																											i
																											recommeanded
																											Ksquare
																											For
																											Good
																											Quality
																											Products
																											At
																											Good
																											Pricing
																										</p>
																									</blockquote>
																								</div>
																								<div class="creativesplanet-box-author">
																									<div class="creativesplanet-box-img">
																										<div class="cspt-featured-wrapper">
																											<img width="150" height="150" src="public/images/nirav-dhanani.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="nirav-dhanani" loading="lazy" data-id="8792" />
																										</div>
																									</div>
																									<h3 class="creativesplanet-box-title">
																										Nirav
																										Dhanani
																									</h3>
																									<span class="cspt-designation">Heaven
																										Solar
																										Pvt
																										Ltd</span>
																								</div>
																							</div>
																						</div>
																					</article>
																				</div>
																				<div class="cspt-ele cspt-testimonial-ele col-md-12 ">
																					<article class="creativesplanet-ele creativesplanet-ele-testimonial cspt-testimonial-style-3">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-desc">
																									<blockquote class="creativesplanet-testimonial-text">
																										<p>I had
																											installed
																											10
																											KW
																											Rooftop
																											System
																											at
																											my
																											home
																											and
																											i am
																											geting
																											generation
																											of
																											6.2
																											Units/KW
																											and
																											staff
																											of
																											Ksquare
																											is
																											just
																											a
																											call
																											away
																										</p>
																									</blockquote>
																								</div>
																								<div class="creativesplanet-box-author">
																									<div class="creativesplanet-box-img">
																										<div class="cspt-featured-wrapper">
																											<img width="150" height="150" src="public/images/vipul.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" loading="lazy" alt="vipul" data-id="8792" />
																										</div>
																									</div>
																									<h3 class="creativesplanet-box-title">
																										Vipul
																										Trivedi
																									</h3>
																									<span class="cspt-designation">Lohana
																										Tours
																										&amp;Travels
																										Pvt
																										Ltd</span>
																								</div>
																							</div>
																						</div>
																					</article>
																				</div>
																			</div>
																		</div>
																		<!-- .creativesplanet-element-inner -->
																	</div><!-- .creativesplanet-element -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									
									<section class="clients-slider-wrapper">
									    <div class="container">
									        <h2 class="cspt-element-title text-center mb-3">
																						B2B Clientele
																					</h2>
									<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                        <img src="public/images/logo_1.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="public/images/logo_2.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_3.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img src="public/images/logo_4.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_5.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="public/images/logo_6.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_7.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img src="public/images/logo_8.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img src="public/images/logo_9.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                      <img src="public/images/logo_10.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                           <img src="public/images/logo_11.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="public/images/logo_12.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                      <img src="public/images/logo_13.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                      <img src="public/images/logo_14.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_15.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_16.png" loading="lazy" alt="Logo img">
                    </div>
                    </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_17.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_18.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_19.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_20.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_21.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_22.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="public/images/logo_23.png" loading="lazy" alt="Logo img">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
        
	</div>
	
									    </div>
									</section>

									<section class="elementor-element elementor-element-e5b8c20 cspt-bg-color-yes cspt-elementor-bg-color-light elementor-section-stretched cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e5b8c20" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-261e5b3 cspt-bg-color-over-image elementor-column elementor-col-100 elementor-top-column" data-id="261e5b3" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-ccb3b82 elementor-widget elementor-widget-cspt_team_element" data-id="ccb3b82" data-element_type="widget" data-widget_type="cspt_team_element.default">
																<div class="elementor-widget-container">
																	<div class="creativesplanet-element creativesplanet-element-team cspt-element-team-style-2 creativesplanet-element-viewtype-carousel creativesplanet-gap-30px" data-show="4" data-columns="4" data-loop="false" data-autoplay="false" data-center="false" data-nav="false" data-dots="false" data-autoplayspeed="1000" data-margin="30px">
																		<div class="creativesplanet-element-inner">
																			<div class="cspt-ele-header-area">
																				<div class="cspt-heading-subheading center-align cspt-reverse-heading-yes">

																					<h2 class="cspt-element-title">
																						Our Leadership Team
																					</h2>
																				</div>
																			</div>
																			<div class="cspt-element-posts-wrapper row multi-columns-row">
																				<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">
																					<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-team-image-box">
																								<div class="cspt-featured-wrapper">
																									<img width="500" height="580" src="public/images/kuldip.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="kuldip" data-id="9537" />
																								</div>
																							</div>
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-content-inner">

																									<h3 class="cspt-team-title">
																										Kuldip
																											Sorathiya
																									</h3>
																									<div class="creativesplanet-box-team-position">
																										<div class="creativesplanet-box-team-position text-secondary">
																											Founder
																											&
																											Director
																											<div>
																											    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-b37381b" target="_blank" href="https://www.kuldipsorathiya.com/ ">
                                                                                                            
                                                                                                                <i class="fa-solid fa-globe"></i>
                                                                                                            </a>
																											<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-b37381b" target="_blank" href="https://www.linkedin.com/in/kvsorathiya/">
                                                                                                                
                                                                                                                <i class="fab fa-linkedin"></i>
                                                                                                            </a>
																											</div>
																										</div>
																									</div>
																								</div>

																							</div>
																						</div>
																					</article>
																				</div>
																				
																				<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">
																					<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-team-image-box">
																								<div class="cspt-featured-wrapper">
																									<img width="500" height="580" src="public/images/Kalpesh.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="kalpesh" data-id="9537" />
																								</div>
																							</div>
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-content-inner">

																									<h3 class="cspt-team-title">
																										Kalpesh
																											Sorathiya
																									</h3>
																									<div class="creativesplanet-box-team-position">
																										<div class="creativesplanet-box-team-position text-secondary">
																											Co-Founder
																											<div>
																											    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-b37381b" target="_blank" href="https://www.linkedin.com/in/kalpesh-sorathiya/">
                                                                                                                
                                                                                                                <i class="fab fa-linkedin"></i>
                                                                                                            </a>
																											</div>
																										</div>
																									</div>
																								</div>

																							</div>
																						</div>
																					</article>
																				</div>

																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/vibhuti.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="vibhuti" data-id="9537" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Savaliya-->
																				<!--							Vibhuti-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							Head-->
																				<!--							Finance-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->

																				<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">
																					<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">
																						<div class="creativesplanet-post-item">
																							<div class="creativesplanet-team-image-box">
																								<div class="cspt-featured-wrapper">
																									<img width="500" height="580" src="public/images/Prakash.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="no-image" data-id="9542" />
																								</div>
																							</div>
																							<div class="creativesplanet-box-content">
																								<div class="creativesplanet-box-content-inner">

																									<h3 class="cspt-team-title">
																										Prakash
																											Dobariya
																									</h3>
																									<div class="creativesplanet-box-team-position">
																										<div class="creativesplanet-box-team-position text-secondary">
																											Factory
																											Head
																										</div>
																									</div>
																								</div>

																							</div>
																						</div>
																					</article>
																				</div>
																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/dakshesh.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="dakshesh" data-id="9540" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Patel-->
																				<!--							Dakshesh-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							Sales-->
																				<!--							Head-->
																				<!--							Solar-->
																				<!--							Products-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->

																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/shwetal.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="shwetal" data-id="9541" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Swetal-->
																				<!--							Suthar-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							Sr.-->
																				<!--							Sales-->
																				<!--							Engineer-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/nirav.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="nirav" data-id="9541" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Darji-->
																				<!--							Nirav-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							Res.-->
																				<!--							Project-->
																				<!--							Incharge-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/abbas.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="abbas" data-id="9541" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Abbas-->
																				<!--							Jamali-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							Design-->
																				<!--							&-->
																				<!--							Sales-->
																				<!--							Executive-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/srusti.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="srusti" data-id="9541" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Srusti-->
																				<!--							Gurjar-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							HR-->
																				<!--							Executive-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-team-ele col-md-6 col-lg-3 ">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-2">-->
																				<!--		<div class="creativesplanet-post-item">-->
																				<!--			<div class="creativesplanet-team-image-box">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="500" height="580" src="public/images/preksha.jpg" class="attachment-cspt-img-500x580 size-cspt-img-500x580 wp-post-image" alt="preksha" data-id="9541" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->
																				<!--				<div class="creativesplanet-box-content-inner">-->

																				<!--					<h3 class="cspt-team-title">-->
																				<!--						Preksha-->
																				<!--							Patel-->
																				<!--					</h3>-->
																				<!--					<div class="creativesplanet-box-team-position">-->
																				<!--						<div class="creativesplanet-box-team-position text-secondary">-->
																				<!--							Accountant-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				
																			</div>
																		</div>
																		<!-- .creativesplanet-element-inner -->
																	</div><!-- .creativesplanet-element -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>

									<section class="p-0 elementor-element elementor-element-a2f3d07 elementor-section-stretched cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="a2f3d07" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-background-overlay" style="background-image: url(public/wp-content/uploads/sites/2/2019/01/bg-pattern.jpg);"></div>
										<div class="elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-be16c97 cspt-bg-color-over-image elementor-column elementor-col-33 elementor-top-column" data-id="be16c97" data-element_type="column">
													<div class="pl-5 pt-5 pb-5 elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-babe79f cspt-align-left elementor-widget elementor-widget-cspt_heading" data-id="babe79f" data-element_type="widget" data-widget_type="cspt_heading.default">
																<div class="elementor-widget-container">
																	<div class="cspt-heading-subheading left-align cspt-reverse-heading-yes">

																		<h2 class="cspt-element-title">

																			We are always ready for a challenge.

																		</h2>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-6c2bd36 cspt-btn-shape-round cspt-btn-color-globalcolor cspt-btn-style-flat elementor-widget elementor-widget-button" data-id="6c2bd36" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">
																		<a href="{{route('profile')}}" class="elementor-button-link elementor-button elementor-size-md" role="button">
																			<span class="elementor-button-content-wrapper">
																				<span class="elementor-button-text">Learn
																					More</span>
																			</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-primary elementor-element elementor-element-aecc534 cspt-bg-color-over-image elementor-column elementor-col-66 elementor-top-column" data-id="aecc534" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<section class="elementor-element elementor-element-60f0dfc cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="60f0dfc" data-element_type="section">
																<div class="elementor-column-gap-default"  style="margin-bottom: 100px !important; margin-top: 5% !important;">
																	<div class="row pt-5">
																		<div class="col-md-3 text-right">
																			<div class="elementor-element elementor-element-5262dc1 cspt-bg-color-over-image elementor-column elementor-inner-column" data-id="5262dc1" data-element_type="column">
																				<div class="elementor-column-wrap  elementor-element-populated">
																					<div class="elementor-widget-wrap">
																						<div class="elementor-element elementor-element-1efc745 cspt-fid-big elementor-widget elementor-widget-cspt_fid_element" data-id="1efc745" data-element_type="widget" data-widget_type="cspt_fid_element.default">
																							<div class="elementor-widget-container">
																								<div class="creativesplanet-ele creativesplanet-ele-fid creativesplanet-ele-fid-style-1 ">
																									<div class="cspt-fld-contents">
																										<div class="cspt-sbox-icon-wrapper">
																											<i class="fas fa-star"></i>
																										</div>
																										<h4 class="cspt-fid-inner text-light">
																											<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="9000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
																											9000
																											</span>+
																											<span class="cspt-fid-sub"></span>
																										</h4>
																									</div>
																									<!-- .cspt-fld-contents -->

																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-9">
																			<div class="elementor-element elementor-element-f89e036 cspt-bg-color-over-image elementor-column elementor-inner-column" data-id="f89e036" data-element_type="column">
																				<div class="elementor-column-wrap  elementor-element-populated">
																					<div class="elementor-widget-wrap">
																						<div class="elementor-element elementor-element-e9bb681 elementor-widget elementor-widget-heading" data-id="e9bb681" data-element_type="widget" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<h4 class="elementor-heading-title elementor-size-default text-light text-sm-center">
																									Successful
																									projects
																								</h4>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-342d984 elementor-widget elementor-widget-text-editor" data-id="342d984" data-element_type="widget" data-widget_type="text-editor.default">
																							<div class="elementor-widget-container">
																								<div class="elementor-text-editor elementor-clearfix text-light text-sm-center">
																									Ksquare has
																									completed
																									projects
																									into
																									residential,
																									industrial
																									and
																									commercial
																									solar
																									segment. We
																									have
																									also done
																									projects in
																									Solar Power
																									Plant.
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
															<section class="elementor-element elementor-element-726dda3 cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="726dda3" data-element_type="section">
																<div class="elementor-column-gap-default">
																	<div class="row pb-5">
																		<div class="col-md-3 text-right">
																			<div class="elementor-element elementor-element-f383e2b cspt-bg-color-over-image elementor-column elementor-inner-column" data-id="f383e2b" data-element_type="column">
																				<div class="elementor-column-wrap  elementor-element-populated">
																					<div class="elementor-widget-wrap">
																						<div class="elementor-element elementor-element-5ada93b cspt-fid-big elementor-widget elementor-widget-cspt_fid_element" data-id="5ada93b" data-element_type="widget" data-widget_type="cspt_fid_element.default">
																							<div class="elementor-widget-container">
																								<div class="creativesplanet-ele creativesplanet-ele-fid creativesplanet-ele-fid-style-1 ">
																									<div class="cspt-fld-contents">
																										<div class="cspt-sbox-icon-wrapper">
																											<i class="fas fa-star"></i>
																										</div>
																										<h4 class="cspt-fid-inner text-light">
																											<span class="cspt-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="500000" data-interval="20000" data-before="" data-before-style="" data-after="" data-after-style="">
																												5,00,000
																											</span>+
																											<span class="cspt-fid-sub"></span>
																										</h4>
																									</div>
																									<!-- .cspt-fld-contents -->

																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-9">
																			<div class="elementor-element elementor-element-e34f2a9 cspt-bg-color-over-image elementor-column elementor-inner-column" data-id="e34f2a9" data-element_type="column">
																				<div class="elementor-column-wrap  elementor-element-populated">
																					<div class="elementor-widget-wrap">
																						<div class="elementor-element elementor-element-9a67d04 elementor-widget elementor-widget-heading" data-id="9a67d04" data-element_type="widget" data-widget_type="heading.default">
																							<div class="elementor-widget-container">
																								<h4 class="elementor-heading-title elementor-size-default text-light text-sm-center">
																									Products
																									Supplied
																								</h4>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-34681e9 elementor-widget elementor-widget-text-editor" data-id="34681e9" data-element_type="widget" data-widget_type="text-editor.default">
																							<div class="elementor-widget-container">
																								<div class="elementor-text-editor elementor-clearfix text-light text-sm-center">
																									We have
																									supplied
																									products to
																									our
																									customers
																									and
																									well as
																									other
																									solar
																									companies
																									across
																									India.
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>

									<section class="elementor-element elementor-element-609d4fd cspt-bg-color-yes cspt-elementor-bg-color-light elementor-section-stretched cspt-col-stretched-none cspt-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="609d4fd" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-element elementor-element-fb9f0fc cspt-bg-color-over-image elementor-column elementor-col-100 elementor-top-column" data-id="fb9f0fc" data-element_type="column">
													<div class="elementor-column-wrap  elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-5eb4c78 elementor-widget elementor-widget-cspt_blog_element" data-id="5eb4c78" data-element_type="widget" data-widget_type="cspt_blog_element.default">
																<div class="elementor-widget-container">

																	<div class="creativesplanet-element creativesplanet-element-blog cspt-element-blog-style-1 creativesplanet-element-viewtype-row-column creativesplanet-gap-30px" data-show="3" data-columns="3" data-loop="false" data-autoplay="false" data-center="false" data-nav="false" data-dots="false" data-autoplayspeed="1000" data-margin="30px">
																		<div class="creativesplanet-element-inner">
																			<div class="cspt-ele-header-area">
																				<div class="cspt-heading-subheading center-align cspt-reverse-heading-yes">
																					<h2 class="cspt-element-title">
																						Blogs
																					</h2>
																				</div>
																			</div>
																			<div class="cspt-element-posts-wrapper row multi-columns-row">
																			    @foreach($data as $key=>$val)
																			    <div class="cspt-ele cspt-blog-ele col-md-4 electricity">
																					<article class="creativesplanet-ele creativesplanet-ele-blog cspt-blogbox-style-1 post-8699 post type-post status-publish format-standard has-post-thumbnail hentry category-electricity tag-energy">
																						<div class="post-item">
																							<div class="cspt-featured-container">
																								<div class="cspt-featured-wrapper">
																									<!--<img width="770" height="500" src="public/images/blog1.jpg" class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image" alt="top-reasons-why-solar-energy-is-a-cost-saving-investment-in-2021" data-id="9445" />-->
																								<a   href="{{ url('blogs/'.$val->url)}}"><img
                                    width="770" height="500"
                                    src="{{ asset('public/images/'.$val->image)}}"
                                    class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image" alt="{{$val->title}}"/></a>
																								</div>
																							</div>
																							<div class="creativesplanet-box-content">

																								<h3 class="cspt-post-title">
																									<a href="{{ url('blogs/'.$val->url)}}"> {{$val->title}}</a>
																								</h3>
																								<div class="creativesplanet-box-desc">
																									<div class="creativesplanet-box-desc-footer">
																										<div class="cspt-read-more-link">
																											<a href="{{ url('blogs/'.$val->url)}}">Read
																												More</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</article>
																				</div>
																				@endforeach
																				<!--<div class="cspt-ele cspt-blog-ele col-md-4 electricity">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-blog cspt-blogbox-style-1 post-8699 post type-post status-publish format-standard has-post-thumbnail hentry category-electricity tag-energy">-->
																				<!--		<div class="post-item">-->
																				<!--			<div class="cspt-featured-container">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="770" height="500" src="public/images/blog1.jpg" class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image" alt="top-reasons-why-solar-energy-is-a-cost-saving-investment-in-2021" data-id="9445" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->

																				<!--				<h3 class="cspt-post-title">-->
																				<!--					<a href="{{route('blog-details1')}}">Top-->
																				<!--						reasons why-->
																				<!--						solar energy is-->
																				<!--						a cost-saving-->
																				<!--						investment in-->
																				<!--						2021</a>-->
																				<!--				</h3>-->
																				<!--				<div class="creativesplanet-box-desc">-->
																				<!--					<div class="creativesplanet-box-desc-footer">-->
																				<!--						<div class="cspt-read-more-link">-->
																				<!--							<a href="{{route('blog-details1')}}">Read-->
																				<!--								More</a>-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-blog-ele col-md-4 wind-mill">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-blog cspt-blogbox-style-1 post-8174 post type-post status-publish format-standard has-post-thumbnail hentry category-wind-mill tag-energy">-->
																				<!--		<div class="post-item">-->
																				<!--			<div class="cspt-featured-container">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="770" height="500" src="public/images/blog2.jpg" class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image" alt="impact-of-weather-conditions-on-solar-panels-and-their-efficiency" data-id="8764" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->

																				<!--				<h3 class="cspt-post-title">-->
																				<!--					<a href="{{route('blog-details2')}}">Impact-->
																				<!--						of weather-->
																				<!--						conditions on-->
																				<!--						Solar Panels and-->
																				<!--						their-->
																				<!--						efficiency</a>-->
																				<!--				</h3>-->
																				<!--				<div class="creativesplanet-box-desc">-->
																				<!--					<div class="creativesplanet-box-desc-footer">-->
																				<!--						<div class="cspt-read-more-link">-->
																				<!--							<a href="{{route('blog-details2')}}">Read-->
																				<!--								More</a>-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->
																				<!--<div class="cspt-ele cspt-blog-ele col-md-4 electricity">-->
																				<!--	<article class="creativesplanet-ele creativesplanet-ele-blog cspt-blogbox-style-1 post-52 post type-post status-publish format-standard has-post-thumbnail hentry category-electricity tag-energy">-->
																				<!--		<div class="post-item">-->
																				<!--			<div class="cspt-featured-container">-->
																				<!--				<div class="cspt-featured-wrapper">-->
																				<!--					<img width="770" height="500" src="public/images/blog3.jpg" class="attachment-cspt-img-770x500 size-cspt-img-770x500 wp-post-image" alt="know-the-benefits-of-installing-solar-power-system-for-the-industrial-sector" data-id="8765" />-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--			<div class="creativesplanet-box-content">-->

																				<!--				<h3 class="cspt-post-title">-->
																				<!--					<a href="{{route('blog-details3')}}">Know-->
																				<!--						the Benefits of-->
																				<!--						Installing Solar-->
																				<!--						Power System for-->
																				<!--						the Industrial-->
																				<!--						Sector</a>-->
																				<!--				</h3>-->
																				<!--				<div class="creativesplanet-box-desc">-->
																				<!--					<div class="creativesplanet-box-desc-footer">-->
																				<!--						<div class="cspt-read-more-link">-->
																				<!--							<a href="{{route('blog-details3')}}">Read-->
																				<!--								More</a>-->
																				<!--						</div>-->
																				<!--					</div>-->
																				<!--				</div>-->
																				<!--			</div>-->
																				<!--		</div>-->
																				<!--	</article>-->
																				<!--</div>-->

																			</div>
																		</div>
																		<!-- .creativesplanet-element-inner -->
																	</div><!-- .creativesplanet-element -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
			</main><!-- #main -->
		</div><!-- #primary -->


	</div><!-- #content -->
	 
	@include('footer')
