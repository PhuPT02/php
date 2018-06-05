<?php 
include_once('admin/system/database.php');
include_once('admin/system/autoload.php');
load();
?>
<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset=UTF-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name=Description content="visa, visa châu á, visa châu âu, visa châu mỹ, visa châu phi, visa châu úc, du anh, du hoc canada,du học mỹ, du học newzealand, du học phần lan, du học úc">
	<meta name=keywords content="visa, visa châu á, visa châu âu, visa châu mỹ, visa châu phi, visa châu úc, du anh, du hoc canada,du học mỹ, du học newzealand, du học phần lan, du học úc">
	<title>Stan Stanart !!</title>
	<link rel="shortcut icon" href=public/teamplate/trangchu/assets/images/favicons/favicon.ico>
	<link rel=apple-touch-icon sizes=57x57 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-57x57.png>
	<link rel=apple-touch-icon sizes=60x60 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-60x60.png>
	<link rel=apple-touch-icon sizes=72x72 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-72x72.png>
	<link rel=apple-touch-icon sizes=76x76 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-76x76.png>
	<link rel=apple-touch-icon sizes=114x114 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-114x114.png>
	<link rel=apple-touch-icon sizes=120x120 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-120x120.png>
	<link rel=apple-touch-icon sizes=144x144 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-144x144.png>
	<link rel=apple-touch-icon sizes=152x152 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-152x152.png>
	<link rel=apple-touch-icon sizes=180x180 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-180x180.png>
	<link rel=icon type=image/png sizes=192x192 href=public/teamplate/trangchu/assets/images/favicons/android-icon-192x192.png>
	<link rel=icon type=image/png sizes=32x32 href=public/teamplate/trangchu/assets/images/favicons/favicon-32x32.png>
	<link rel=icon type=image/png sizes=96x96 href=public/teamplate/trangchu/assets/images/favicons/favicon-96x96.png>
	<link rel=icon type=image/png sizes=16x16 href=public/teamplate/trangchu/assets/images/favicons/favicon-16x16.png>
	<link rel=manifest href=public/teamplate/trangchu/assets/images/favicons/manifest.html>
	<meta name=msapplication-TileColor content=#000000>
	<meta name=msapplication-TileImage content=public/teamplate/trangchu/assets/images/favicons/ms-icon-144x144.png>
	<meta name=theme-color content=#000000>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/bootstrap/dist/css/bootstrap.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/fontawesome/css/font-awesome.min.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/ionicons/css/ionicons.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/owlcarousel/owl-carousel/owl.carousel.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/owlcarousel/owl-carousel/owl.theme.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/FlexSlider/flexslider.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/lib/magnific-popup/dist/magnific-popup.css>
	<link rel=stylesheet href="http://fonts.googleapis.com/css?family=Raleway:100,300,400">
	<link rel=stylesheet href="http://fonts.googleapis.com/css?family=Roboto:100,300,400">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel=stylesheet href=public/teamplate/trangchu/assets/css/main.css>
	<link rel=stylesheet href=public/teamplate/trangchu/assets/css/ie_fix.css>
	<script src=public/teamplate/trangchu/assets/lib/components-modernizr/modernizr.js></script>
	<script src=public/teamplate/trangchu/assets/lib/jquery/dist/jquery.js></script>
	<script src=public/teamplate/trangchu/assets/lib/bootstrap/dist/js/bootstrap.js></script>
	<link rel="stylesheet" href="public/teamplate/trangchu/assets/css/style.css">
</head>

<body data-spy=scroll data-target=#main-nav-collapse data-offset=100>
	<div class=page-loader>
		<div class=loader>Loading...</div>
	</div>
	<?php
    $danhmuc = new c_danhmuc();
    $danhmuc->get_danhmuc();
    ?>



		<header id=header class="header-wrapper home-parallax home-fade dark-bg">
			<div class="header-wrapper-inner flexslider">
				<ul class=slides>
					<li style="background-image: url(public/Images/STAN_STANART_1.jpg)">
						<div class=color-overlay></div>
						<div class=intro-wrapper>
							<div class=intro>
								<h1>Stan Stanart Dịch Vụ Tốt nhất</h1>
								<p>Cơ hội sở hữu ở Mỹ với giá cực thấp. Giảm đến 50 %</p>
								<a href=#about-us class="btn btn-default-o onPageNav">Thông tin</a>
							</div>
						</div>
					</li>
					<li style="background-image: url(public/Images/STAN_STANART_2.jpg)">
						<div class=intro-wrapper>
							<div class=color-overlay></div>
							<div class=intro>
								<h1>Stan Stanart Nhiệt huyết</h1>
								<p>Với đội ngũ nhân viên trẻ, năng động, đầy sáng tạo.</p>
								<a href=#about-us class="btn btn-default-o onPageNav">Thông tin</a>
							</div>
						</div>
					</li>
					<li style="background-image: url(public/Images/STAN_STANART_3.jpg)">
						<div class=intro-wrapper>
							<div class=color-overlay></div>
							<div class=intro>
								<h1>Stan Stanart Uy tính</h1>
								<p>Chúng tôi luôn lấy uy tin là mục tiêu cốt lỗi để phát triển công ty</p>
								<a href=#about-us class="btn btn-default-o onPageNav">Thông tin</a>
							</div>
						</div>
					</li>
				</ul>
				<div class=arrow-down>
					<a href=#about-us class=onPageNav>
						<i class=ion-ios-arrow-down></i>
					</a>
				</div>
			</div>
		</header>
		<section id=about-us class="section about-us">
			<div class=container>
				<header class=section-heading>
					<h2>
						<i class="fa far fa-users"> DỊCH VỤ </i>
					</h2>
					<span>Chúng tôi luôn tự hào mang lại những dịch vụ tốt nhất cho các bạn !!!</span>
				</header>
				<div class=section-content>
					<div class=row>
						<div class=col-sm-4>
							<div class="about-content ">
								<h2 class='font-dich-vu'>
									<i class="fa fa-cc-visa "></i>
								</h2>
								<h4>Visa EB-5</h4>
								<p>EB5 là chương trình xin thẻ xanh mỹ dành cho người nước ngoài đến Mỹ theo hình thức đầu tư được chính phủ Mỹ thông qua năm 1990 nhằm cải thiện những địa phương có tỷ lệ thất nghiệp cao hoặc kinh thế chậm phát triển. Năm 2003, chính phủ Mỹ cho phép các dự án nằm trong khu vực khuyến khích đầu tư (Regional Centers)  thu hút vốn đầu tư từ nhiều quốc gia trên thế giới.</p>
							</div>
						</div>
						<div class=col-sm-4>
							<div class="about-content ">
								<h2 class='font-dich-vu'>
									<i class="fa fa-graduation-cap "></i>
								</h2>
								<h4>DU HỌC</h4>
								<p>Đi du học là cách tối ưu để học một ngôn ngữ: Không còn phương pháp nào tốt và hiệu quả hơn để học ngoại ngữ là đắm mình vào trong môi trường ngôn ngữ mà bạn đang học. Hàng ngày bạn được tiếp xúc với ngôn ngữ giao tiếp cơ bản và được nghe, được thấy ngữ âm chuẩn từ người bản xứ. Ngôn ngữ được tiếp thu nhanh nhất chính là trong những hoàn cảnh này.</p>
							</div>
						</div>
						<div class=col-sm-4>
							<div class="about-content ">
								<h2 class='font-dich-vu'>
									<i class="fa fa-child "></i>
								</h2>
								<h4>Visa L-1A</h4>
								<p>Visa L-1A  là  hình thức visa dưới dạng không định cư (Non-Immigrant Visa), nằm trong nhóm visa L (visa làm việc) nhằm mục đích thu hút nhân tài là các doanh nhân và giám đốc, quản lý giỏi đến Mỹ để góp phần phát triển tiềm lực kinh tế Mỹ.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id=expertise class="section dark-bg expertise progressbars">
			<div class=container>
				<header class=section-heading>
					<h2>Về chúng tôi</h2>
					<span>Công ty dịch vụ Stan Stanart </span>
				</header>
				<div class=section-content>
					<div class=row>
						<div class=col-sm-12>
							<div id=expertise-tab role=tabpanel class=expertise-description>

								<div class=tab-content>
									<div role=tabpanel class="tab-pane active" id=html>
										<div class=tab-left>
											<h2>
												<i class="fa fa-globe"></i>
											</h2>
										</div>
										<div class=tab-right>
											<p>Công ty dịch vụ Stan Stanart được thành lập vào tháng 17/10/2017 bởi những người tiên phong trong lĩnh vực cung cấp
												Visa tại Mỹ. Chúng tôi mong muốn trở thành một công ty cung cấp các dịch vụ Visa mang tính tiện lợi nhất
												nhằm mang lại hiệu quả cao nhất cho khách hàng. Công ty dịch vụ Stan Stanart định hướng kinh doanh chuyên sâu trong
												lĩnh vực Visa, du học,đào tạo... ở nhiều nước như Anh, Canada, Mỹ, New Zealand, Úc,.. Công ty dịch vụ Stan Stanart
												có trụ sở đầu tiên ngay tại 6173 Wilcrest Dr Houston TX 77072, Mỹ. Tuy mới được thành lập, nhưng với nhân sự của Stan Stanart là những người có dày dăn kinh nghiệm, đã làm việc ở các văn phòng lớn tại Mỹ trong lĩnh vực cung cấp Visa du dịch
												các nước. Chúng tôi hiểu rõ về các yêu cầu khắc khe của khách hàng, rằng dịch vụ phải được giải quyết một cách logic nhanh và tiện lợi nhất cho khách hàng, giảm thiểu tối đa chi phí và thời gian cho người sử dụng dịch vụ, nhân viên phải thật sự tôn trọng khách hàng . Đó cũng là phong cách làm việc của công ty chúng tôi. Stan Stanart đã
												tạo được thế mạnh, hình ảnh và thương hiệu của mình. Chúng tôi mong muốn mọi người sẽ được phục vụ tốt nhất và hài lòng bởi các dịch vụ của chúng tôi. Đặc biệt Stan Stanart luôn có những chương trình khuyến mãi hấp dẫn, hãy nhanh chống liên hệ với chúng tôi để nhận được dịch vụ tốt nhất.!!!   </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class=row>
						<div class=col-sm-12>
							<div id=expertise-tab role=tabpanel class=expertise-description>

								<div class=tab-content>
									<div role=tabpanel class="tab-pane active">
										<div class=tab-right>
											<p> CHÚNG TÔI TẠO NÊN SỰ KHÁC BIỆT </p>
											<p>Công ty dịch vụ Stan Stanart  luôn nỗ lực không ngừng cải tiến, nâng cao chất lượng dịch vụ và hỗ trợ khách hàng. Hệ
												thống dịch vụ của chúng tôi vận hành bởi đội ngũ nhiều kinh nghiệm, bộ phận hỗ trợ luôn nhiệt tình giải đáp các
												thắc mắc cho khách hàng. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id=funfacts class="section  funfacts">

			<div class=container>
				<header class=section-heading>
					<h2>Thống kê</h2>
				</header>
				<div class=section-content>
					<div class=row>
						<div class=col-sm-4>
							<div class=counter-box>
								<div class=counter-icon>
									<span class=ion-ios-partlysunny-outline></span>
								</div>
								<div class="count number">5 </div>
								<div class=count-description>Năm tư vấn định cư</div>
							</div>
						</div>
						<div class=col-sm-4>
							<div class=counter-box>
								<div class=counter-icon>
									<span class=ion-ios-clock-outline></span>
								</div>
								<div class="count number">5200</div>
								<div class=count-description>Tư vấn cho khách hàng</div>
							</div>
						</div>
						<div class=col-sm-4>
							<div class="counter-box last">
								<div class=counter-icon>
									<span class=ion-ios-infinite-outline></span>
								</div>
								<div class="count number">350</div>
								<div class=count-description>Trung bình truy cập web/tháng</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id=testimonial class="section overlay-1 testimonial bg-image dark-bg">
			<div class=color-overlay></div>
			<div class=container>
				<header class=section-heading>
					<h2> Khách Hàng </h2>
					<span>Nhận xét về chúng tôi</span>
				</header>
				<div class=section-content>
					<div class=row>
						<div class="col-md-8 col-md-offset-2">
							<div class=carosel-wrapper>
								<div class=client-face-holder>
									<div id=clientFace></div>
								</div>
								<div class="quote left">&ldquo;</div>
								<div class="quote right">&rdquo;</div>
								<div id=testimonials-carousel class=owl-carousel>
									<div class=item>
										<div class=review data-client-image=public/teamplate/trangchu/assets/images/team/team-1.jpg>
											<blockquote>Tôi lần đâu đi xin Visa du lịch Mỹ, tìm trên mạng thấy có công ty  Stan Stanart nên tôi đến nhờ nhân viên tư vấn
												coi xem sao. Khi đến, quả không phụ lòng nhân viên ở đây tư vấn cho tôi rất nhiệt tình và chu đáo, quan trọng
												hơn nữa là tôi đã đăng kí thành công! Cảm ơn công ty rất nhiều </blockquote>
											<h4 class=reviewer>Bhond James</h4>
											<p class=designation>Founder</p>
										</div>
									</div>
									<div class=item>
										<div class=review data-client-image=public/teamplate/trangchu/assets/images/team/team-2.jpg>
											<blockquote>Tôi chỉ có thể nhận xét là: nhiệt tình,uy tín, chất lượng. Tôi sẽ đến tiếp tục tin dùng dịch vụ Word Trade!!!
												</blockquote>
											<h4 class=reviewer>Bhond James</h4>
											<p class=designation>Founder</p>
										</div>
									</div>
									<div class=item>
										<div class=review data-client-image=public/teamplate/trangchu/assets/images/team/team-3.jpg>
											<blockquote>Cảm ơn  Stan Stanart đã giúp 2 đứa con gái tôi du học Úc thành công! Dịch vụ tốt. Chúc quý công ty thành công hơn
												nữa .</blockquote>
											<h4 class=reviewer>Bhond James</h4>
											<p class=designation>Founder</p>
										</div>
									</div>
								</div>
								<div class=owl-controls>
									<a class=prev role=button>
										<i class=ion-ios-arrow-left></i>
										<span class=sr-only>Previous</span>
									</a>
									<a class=next role=button data-slide=next>
										<i class=ion-ios-arrow-right></i>
										<span class=sr-only>Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="229276427836757"
  theme_color="#fa3c4c"
  logged_in_greeting="Hi! How can we help you?"
  logged_out_greeting="Hi! How can we help you?">
</div>
		
		<section id=contact class="section contact">
			<div class=container>
				<header class=section-heading>
					<h2>Liên hệ</h2>
					<span>Đăng kí tư vấn miễn phí hoặc đóng góp ý kiến xin liên hệ với chúng tôi qua form này</span>
				</header>
				<div class=section-content>
					<div class=row>
						<div class="col-md-7 col-sm-5 ">
							<h5>Nhập thông tin liên hệ !</h5>
							<form class=contact-form id=contactForm method=post name=contactform action="dangki.php">
								<div class=form-group>
									<input class=form-control id=name name=name placeholder="Tên " type=text required>
								</div>
								<div class=form-group>
									<input class=form-control id=email name=email placeholder="Địa chỉ Email" type=email required>
								</div>
								<div class=form-group>
									<textarea class=form-control id=message name=massage placeholder="Nội dung đăng kí tư vấn hoặc góp ý !!!" rows=5 required></textarea>
								</div>
								<div id=contactFormResponse></div>
								<div class="g-recaptcha" data-sitekey="6Lem2FkUAAAAACYMyosy8dFggVR6gsMbqJuv6lSY"></div>
								<button id=cfsubmit type=submit class="btn btn-dark btn-block contact-submit">Gửi</button>
							</form>
						</div>
						<div class="col-md-5 col-sm-5 " style="padding-top:59px">
							<img src="public/Images/visa.jpg" alt="visa_uy_tin_o_world_trade">
						</div>
					</div>
					<!-- map -->
					<div class="row" style="margin-top:40px">
						<div class="col-md-6 col-sm-7">
							<h5 class='text-center'>Texas,Mỹ </h5>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.253448965772!2d-95.57309148502348!3d29.712416841136122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640dd2f4c281b7b%3A0xd24186f61a8f80d6!2s6173+Wilcrest+Dr%2C+Houston%2C+TX+77072!5e0!3m2!1svi!2s!4v1525660259287" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							<!-- adr -->
							<div class="row contact-info-wrap">
								<div class=col-sm-6>
									<div>
										<h5>Địa chỉ</h5>
										<address class=contact-info>
										6173 Wilcrest Dr Houston TX 77072, Mỹ
										</address>
									</div>
								</div>
								<!-- <div class=col-sm-6>
                                    <div>
                                        <h5>Contact Information</h5>
                                        <div class=contact-info>Local: ( 33 1) 42 68 53 00
                                            <br>Mobile: ( 33 1) 42 68 53 01
                                            <br>info@themewagon.com</div>
                                    </div>
                                </div> -->
							</div>
							<!-- adr -->
						</div>
					</div>
	

				</div>
			</div>
        </section>
        

        
		<?php 
            $danhmuc->footer();
        ?>
		<a id=totop href=#totop>
			<i class="fa fa-angle-double-up"></i>
		</a>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
		<script src=public/teamplate/trangchu/assets/lib/imagesloaded/imagesloaded.pkgd.min.js></script>
		<script src=public/teamplate/trangchu/assets/lib/isotope/dist/isotope.pkgd.min.js></script>
		<script src=public/teamplate/trangchu/assets/lib/owlcarousel/owl-carousel/owl.carousel.js></script>
		<script type=text/javascript src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src=public/teamplate/trangchu/assets/lib/waypoints/lib/jquery.waypoints.min.js></script>
		<script src=public/teamplate/trangchu/assets/lib/waypoints/lib/shortcuts/inview.min.js></script>
		<script src=public/teamplate/trangchu/assets/lib/FlexSlider/jquery.flexslider.js></script>
		<script src=public/teamplate/trangchu/assets/lib/simple-text-rotator/jquery.simple-text-rotator.js></script>
		<script src=public/teamplate/trangchu/assets/lib/jquery.mb.YTPlayer/dist/jquery.mb.YTPlayer.min.js></script>
		<script src=public/teamplate/trangchu/assets/lib/magnific-popup/dist/jquery.magnific-popup.js></script>
		<script src=public/teamplate/trangchu/assets/js/main.js></script>
</body>

</html>