<?php
session_start();
if(isset($_SESSION["account"])){
?>
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
			<h2>英雄聯盟</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
						<img src="img/blog/tpa.jpg" alt="">
						<div class="post-date">October 27, 2009</div>
						<h3>英雄聯盟</h3>
						<div class="post-metas">
							<div class="post-meta">By Admin</div>
							<div class="post-meta">in <a href="#">Games</a></div>
							<div class="post-meta">3 Comments</div>
						</div>
						<p>是由Riot Games開發及發行的一款多人線上戰術擂台（MOBA）遊戲，遊戲為免費模式進行並提供付費道具服務。該遊戲是受到《魔獸爭霸III：寒冰霸權》中一個名為DotA第三方自定義地圖啟發而誕生，且至今仍不斷定期更新。

                            在《英雄聯盟》裡，玩家扮演一個不可見的召喚師，並操控具有獨特能力的「英雄」與電腦AI或真人玩家控制的英雄對戰，遊戲通常的勝利目標是要摧毀對方的主要基地「主堡」，英雄在每場遊戲開始時都比較弱，他們會隨著遊戲進展而升級，但這些數值會在下一場遊戲重新開始時重置。
                            
                            《英雄聯盟》受到普遍的讚譽，並在一般玩家間享有高人氣。至2015年7月為止，超過1億名玩家每個月至少玩一次《英雄聯盟》，而每天都玩的玩家超過2700萬，高峰時段有超過750萬人同時在線上。2015年7月，該公司估計全世界每個月有超過1億5千萬名的活躍玩家。
                            
                            《英雄聯盟》在電子競技的領域裡有著傑出的表現，自2011年起，在北美和歐洲，Riot Games分別在洛杉磯和柏林組織了英雄聯盟世界大賽，來自各地的十數個專業隊伍在賽場上一決高下，而香港、澳門、臺灣、韓國、南美洲等地也舉辦過區域賽。在2019年的世界大賽總決賽中，同時有4400萬線上觀看的觀眾，以16種語言在20個平台直播。 </p>
						
							<?php 
								include("conn_comment.php");
								$sql = "SELECT * FROM `Comment` WHERE `Class`='英雄聯盟' ORDER BY `Time` DESC ";
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
										<input name="gametitle" type="hidden" value="英雄聯盟">
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
<?php
}else{
    echo"<h1>You have no permission to access this page,please login ! </h1>";
    echo '<meta http-equiv="refresh" content="3;url=\'Login.html\'" />';
}