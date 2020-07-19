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
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="logo">
		</a>
		<ul class="main-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="game.php">Games</a></li>
			<li><a href="news.php">News</a></li>
		</ul>
		<ul class="main-menu">
		</ul>
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
		<li><a href="profile.php">Profile</a></li>
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
			<h2>文明帝國VI</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
						<img src="img/blog/11.jpg" alt="">
						<div class="post-date">October 21, 2016</div> 
								<h3 name="gametitle">文明帝國VI</h3>
						<div class="post-metas">
							<div class="post-meta">By Admin</div>
							<div class="post-meta">in <a href="#">Games</a></div>
							<div class="post-meta">3 Comments</div>
						</div>
						<p>與以往作品一樣，《文明帝國VI》讓玩家在單人或多人模式中建立並發展自己的文明，甚至控制地球的命運。遊戲的勝利條件基於數個基礎，包括探索、擴大、利用和消滅。玩家建立城市、改善及擴張城市，並建立軍事單位以探索和攻擊敵對勢力，同時管理文明的技術發展及對外關係。

							本作的玩法基本上與《文明帝國V》相同，地圖仍然使用著六角地圖，但亦增加了部份新系統及功能。在本作中，玩家需要規劃在城市控制範圍內的各種地塊上的「城區」，不同地塊會為城區會提供不同的加成，但有一定的局限性。例如，山地地形有助於觀察星空，因此能為校園型城區提供特殊的加成，但同時森林或叢林地形又能供大學和研究室在生物群落內研究物種多樣性以反映科學的進步，因此玩家需要仔細選擇。此外，玩家可以選擇攻擊一個特定城區而非城市中心，從而影響城市的運作。但是，玩家能於城區中新增新戰略以增加城市的防衛。例如在城區設置軍事營地，當敵方隊伍接近城市，他們除了遭受來自城市的攻擊外，亦會被軍事營地攻擊，令他們可能需要轉為攻擊軍事營地，再奪取城市。首席設計師Ed Beach將這些變化視為一種有益的手段，將城市的建築分散在不同地塊上，就好像Jon Shafer（文明帝國V的首席設計師）在《文明帝國V》時分散單元格一樣[6]。這些功能增添了模擬城市類遊戲的城市管理要素，有助使玩家認為經營及管理城市是基於城市的地理位置，而非根據一個特定城市的改進路線基礎。
							
							為了減少在地圖上出現擁擠，玩家將能夠進行單元堆疊，但只能堆放類似單位或共生單位。例如，戰士支援拓荒者。類似的單位也可以結合在一起形成強大的「軍團」單位。
							
							本作的科技樹亦有作修改以加快技術的研究，從而協助玩家獲得相應的資源或改良，例如，玩家想要研究石工術，其文明興建採石場後可以加快科技的研究。首席設計師Ed Beach指出這一變化是為了令玩家脫離自動地跟隨科技樹所提供的路線來研發科技。
							
							文明帝國VI和它的數個前作一樣，有「奇觀誤國」的討論。 </p>
						
							<?php 
								include("conn_Comment.php");
								$sql = "SELECT * FROM `Comment` WHERE `Class`='文明帝國VI' ORDER BY `Time` DESC ";
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
										<input name="gametitle" type="hidden" value="文明帝國VI">
									</div>
									<div class="col-md-12">
										<textarea name="comment" placeholder="Your message"></textarea>
										<button name="postbtn"class="site-btn" onclick="alert('Post success!!')">post Comment</button>
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

