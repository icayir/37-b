<?php include "header_head.php"; ?>


	<title>37/b || Galeri</title>
<?php include "header_nav.php"; ?>
		<h1 class="sr-only">Fotoğraf</h1>
		<section>
			<div class="slider-thumbnailed-full height-100vh" data-brk-library="slider__swiper">
				<div class="swiper-container slider-thumbnailed-full-for" data-brk-swiper='{"autoplay": {"delay": 4500}}'>
					<div class="swiper-wrapper">
						
						<div class="swiper-slide swiper-lazy" data-background="s/18.jpg"></div>
						<div class="swiper-slide swiper-lazy" data-background="s/19.jpg"></div>
						<div class="swiper-slide swiper-lazy" data-background="s/09.jpg"></div>
						<div class="swiper-slide swiper-lazy" data-background="s/10.jpg"></div>
						<div class="swiper-slide swiper-lazy" data-background="s/16.jpg"></div>
						<div class="swiper-slide swiper-lazy" data-background="s/17.jpg"></div>
						<div class="swiper-slide swiper-lazy" data-background="s/22.jpg"></div>
					</div>
					<div class="slider-thumbnailed-full-prev">önceki</div>
					<div class="slider-thumbnailed-full-next">sonraki</div>
				</div>
				<div class="slider-thumbnailed-full-nav">
					<div class="swiper-container">
						<div class="swiper-wrapper">
						
							<div class="swiper-slide" style="background-image:url(s/18.jpg)"></div>
							<div class="swiper-slide" style="background-image:url(s/19.jpg)"></div>
							<div class="swiper-slide" style="background-image:url(s/09.jpg)"></div>
							<div class="swiper-slide" style="background-image:url(s/10.jpg)"></div>
							<div class="swiper-slide" style="background-image:url(s/16.jpg)"></div>
							<div class="swiper-slide" style="background-image:url(s/17.jpg)"></div>
							<div class="swiper-slide" style="background-image:url(s/22.jpg)"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio">
			<div class="brk-portfolio-galleries">
				<div class="row brk-gutters-5">
					<div class="col-12 col-md-6">
						<div class="brk-portfolio-galleries__card" data-brk-library="component__portfolio_galleries">
							<img class="brk-abs-img lazyload" alt="alt" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="s/04.jpg">
							<div class="brk-portfolio-galleries__label pt-60 pl-70 pr-60 pb-50">
								<h2 class="font__family-roboto font__size-56 font__weight-thin mb-2">Canavarlar </h2>
								<h3 class="brk-dark-font-color font__family-montserrat font__size-12 font__weight-normal text-uppercase letter-spacing-100 mb-auto">Burada onlar yaşıyorlardı, Canavarlar  </h3>
								<div class="brk-social-links brk-black-font-color font__size-13 brk-social-links_opacity" data-brk-library="component__social_links">
								<a href="https://www.instagram.com/okorokoko/" class="brk-social-links__item wow fadeInUp" data-wow-delay="1.1s" data-wow-duration=".35s">
									<i class="fab fa-instagram"></i>
								</a>
								
								<a href="#" class="brk-social-links__item wow fadeInUp" data-wow-delay="1.3s" data-wow-duration=".35s">
									<i class="fab fa-youtube"></i>
								</a>
								
								</div>
								<a href="#" class="text-uppercase font__family-montserrat font__size-12 font__weight-bold text-underline letter-spacing-100 mt-30"><u>daha fazla</u></a>
							</div>
						</div>
					</div>
	
					
					
				</div>
			</div>
		</section>
		
		<?php include "footer.php"; ?>