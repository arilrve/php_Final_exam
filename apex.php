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
		<ul class="main-menu">
		</ul>
		<ul class="main-menu">
		</ul>
		<ul class="main-menu">
		</ul>
		<ul class="main-menu">
		</ul>
		<!-- ------------------->
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
			<h2>Apex英雄</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
						<img src="img/blog/apex.jpg" alt="">
						<div class="post-date">February 4, 2019</div>
						<h3>Apex</h3>
						<div class="post-metas">
							<div class="post-meta">By Admin</div>
							<div class="post-meta">in <a href="#">Games</a></div>
							<div class="post-meta">3 Comments</div>
						</div>
						<p>《Apex英雄》適用經典的大逃殺遊戲規則，但加入了英雄系統。遊戲背景設定在《泰坦降臨2》的30年以後。遊戲中並不會出現泰坦，但包含了很多《泰坦》的元素和特徵。

                            遊戲以3人小隊為單位進行遊戲，每局遊戲最多有60人（目前新增了雙排模式）。每位玩家可以從十二位傳奇角色中選擇一位進行遊戲，每位英雄都有其獨特的技能，玩家可以自訂其外觀。隊伍空投落地後需要尋找武器、彈藥及其他裝備，小隊間互相戰鬥至最後存活一隊為勝。遊戲特有復活系統，如有隊友死亡，玩家可以在時限內(90s)取得陣亡隊友的旗幟，並將其攜至重生點即可復活隊友。同時，遊戲也設有較為詳細的標記功能，也可進行隊伍語音。
                            
                            《Apex英雄》遊戲本體免費，遊戲支援微交易，玩家可用遊戲內貨幣購買新的傳奇角色、人物外觀、卡片外觀、Apex組合包及其他限時購買內容。這些可購買內容也可以通過遊戲對戰獎勵獲得，它們不會影響遊戲平衡。 </p>
						
							<?php 
								include("conn_comment.php");
								$sql = "SELECT * FROM `comment` WHERE `Class`='apex' ORDER BY `Time` DESC ";
								$data = mysqli_query($link,$sql);
							?>
						<div class="comments">
							<h5>Comments (5)</h5>
							<ul class="comments-list">
								<?php
									for($i=1;$i<mysqli_num_rows($data);$i++){
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
                                        <input name="gametitle" type="hidden" value="apex">
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
