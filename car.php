<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>TheQuest - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="index.php" class="site-logo">
			<img src="img/logo.png" alt="logo">
		</a>
		<ul class="main-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="game.php">Games</a></li>
			<li><a href="news.php">News</a></li>
		</ul>
		<!-- --------------------- -->
		<ul class="main-menu">
		</ul>
		<ul class="main-menu">
		</ul>
		<ul class="main-menu">
		</ul>
		<ul class="main-menu">
		</ul>
		<!-- ----------------- -->
		<ul class="main-menu">
			<li><a href="profile.php" target=_blank>Profile</a></li>
			<li><a href="Collect.html">Collect</a></li>
			<li><a href="Logout1.php">Logout</a></li>
		</ul>
		<div class="header-add">
			<img src="img/add.png" alt="">
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/1.jpg">
		<div class="container">
			<h2>News</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
						<img src="img/blog/car.jpg" alt="">
						<div class="post-date">May 22, 2020</div>
						<h3>《跑車浪漫旅 競速》新增次世代轉子引擎賽車 Mazda RX-Vision GT3 Concept</h3>
						<div class="post-metas">
							<div class="post-meta">By Admin</div>
							<div class="post-meta">in <a href="#">Games</a></div>
							<div class="post-meta">3 Comments</div>
						</div>
                        <p>Polyphony Digital 製作，索尼互動娛樂（SIE）販售中的 PS4 駕駛模擬遊戲《跑車浪漫旅 競速（Gran Turismo Sport）》，於今（22）日釋出 5 月份更新檔案（1.59 版），新增與 Mazda 合作的 “Vision GT” 虛擬概念車款「Mazda RX-Vision GT3 Concept」、「GT League」新賽事以及問題修正與平衡性調整等項目。</p>

                        <div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden"><iframe allowfullscreen frameborder="0" height="360" src="https://www.youtube.com/embed/ozw2O_Lcwjw" style="position:absolute;top:0;left:0;width:100%;height:100%" width="640" loading="lazy"></iframe></div>
                        <style type="text/css">
                        h2{
                            color: white;
                        }
                        </style>
                        <h2>Mazda 夢幻轉子引擎賽車</h2>
                        <p>　Mazda RX-Vision 是在 2015 年東京車展發表的概念車。以設計理念「魂動」為基礎，Mazda 意圖打造出最美麗的前置後驅跑車。此車款採用的次世代轉子引擎「Skyactiv-R」，是 Mazda 希望在未來實現的夢想。
                        1967 年，在克服多項技術難題後，Mazda 成功藉由 Cosmo Sport 車款推出商業用轉子引擎。身為唯一有能力量產轉子引擎的車廠，Mazda 致力改善輸出、耗油量和耐用度，甚至在 1991 年利曼 24 小時耐力賽中以 787B 一舉奪得總冠軍。Mazda RX-Vision GT3 Concept 以更具侵略性的賽車外型傳達原型車的設計美學。為符合 Gr.3 級別性能要求，設計時納入 787B 引擎概念，利用 Skyactiv 科技讓四轉子引擎重獲新生。新的轉子引擎搭配輕量車身，使得 RX-Vision GT3 Concept 得以展現前所未有的優秀性能。</p>
                        <h2>Mazda 100 週年紀念特別活動</h2>
                        <p>1920 年 1 月 20 日創立的 Mazda，在今年迎來了百年誕辰紀念。5 月 22 日起將舉辦兩場特別比賽，慶祝 Mazda 一百週年慶和 RX-Vision GT3 Concept 推出。這兩場比賽分別是「RX-Vision GT3 Concept 計時爭奪賽挑戰」以及「RX-Vision GT3 Concept 塗裝設計大賽」。</p>
                        <img src="img/blog/car1.jpg" alt="">
                        
                        <?php 
							include("conn_comment.php");
							$sql = "SELECT * FROM `comment` WHERE `Class`='car' ORDER BY `Time` DESC ";
							$data = mysqli_query($link,$sql);
						?>

						<div class="comments">
							<h5>Comments (5)</h5>
							<ul class="comments-list">
								<?php
									for($i=0;$i<mysqli_num_rows($data);$i++){
										$rs = mysqli_fetch_assoc($data);
								?>
								<li>
									<div class="comment-text">
										<h6><?php echo $rs['Name'] ; ?></h6>
										<div class="comment-date"><?php echo $rs['Time'] ; ?></div>
										<p><?php echo $rs['Comment'] ; ?></p>
									</div>
								</li>
								<?php
									}
								?>
							</ul>
							<h5>Leave a comment</h5>
							<form class="comment-form" action="leave_comment.php" method="post">
								<div class="row">
									<div class="col-md-8">
										<input name="name" type="text" placeholder="Your name">
                                        <input name="gametitle" type="hidden" value="car">
									</div>
									<div class="col-md-12">
										<textarea name="comment" placeholder="Your message"></textarea>
										<button name="postbtn"class="site-btn">post Comment</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar">
					<div class="sb-widget">
						<form class="sb-search">
							<input type="text" placeholder="Search">
						</form>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Categories</h2>
						<ul class="sb-cata-list">
							<li><a href="">Games<span>20</span></a></li>
							<li><a href="">Gaming Tips & Tricks<span>23</span></a></li>
							<li><a href="">Online Games<span>25</span></a></li>
							<li><a href="">Team Games<span>17</span></a></li>
							<li><a href="">Community<span>15</span></a></li>
							<li><a href="">Uncategorized<span>22</span></a></li>
						</ul>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Latest News</h2>
						<div class="latest-news-widget">
							<div class="ln-item">
								<img src="img/blog-thumbs/11.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<img src="img/blog-thumbs/22.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<img src="img/blog-thumbs/33.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<img src="img/blog-thumbs/44.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sb-widget">
						<a href="#" class="add">
							<img src="img/add-2.jpg" alt="">
						</a>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Latest Comments</h2>
						<div class="latest-comments-widget">
							<div class="lc-item">
								<img src="img/author-thumbs/1.jpg" alt="">
								<div class="lc-text">
									<h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/2.jpg" alt="">
								<div class="lc-text">
									<h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/3.jpg" alt="">
								<div class="lc-text">
									<h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/4.jpg" alt="">
								<div class="lc-text">
									<h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/1.jpg" alt="">
								<div class="lc-text">
									<h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Footer section -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="about-widget">
							<img src="img/logo.png" alt="">
							<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Usfull Links</h2>
						<ul>
							<li><a href="">Games</a></li>
							<li><a href="">testimonials</a></li>
							<li><a href="">Reviews</a></li>
							<li><a href="">Characters</a></li>
							<li><a href="">Latest news</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Services</h2>
						<ul>
							<li><a href="">About us</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Become a writer</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">FAQ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Careeres</h2>
						<ul>
							<li><a href="">Donate</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Subscriptions</a></li>
							<li><a href="">Careers</a></li>
							<li><a href="">Our team</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget fw-latest-post">
						<h2 class="fw-title">Usfull Links</h2>
						<div class="latest-news-widget">
							<div class="ln-item">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="#"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="#"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="#"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="#"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
