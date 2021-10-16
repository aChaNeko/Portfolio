<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Shippori+Mincho&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- WOW -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/libs/animate.css">
	<script src="<?php bloginfo('template_directory'); ?>/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>

	<!-- slick -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
	<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

	<?php wp_head(); ?>
</head>
<div class="background-photo">
	<div class="nav-group" id="nav">
		<div class="nav ff_cursive"><a href="<?php bloginfo('url'); ?>#home">Home</a></div>
		<div class="nav ff_cursive"><a href="<?php bloginfo('url'); ?>#about">About</a></div>
		<div class="nav ff_cursive"><a href="<?php bloginfo('url'); ?>#service">Service</a></div>
		<div class="nav ff_cursive"><a href="<?php bloginfo('url'); ?>#works">Works</a></div>
		<div class="nav ff_cursive"><a href="<?php bloginfo('url'); ?>#contact">Contact</a></div>
	</div>
	<!-- ハンバーガーメニューボタン -->
	<div id="hamburger_btn" class="hamburger_btn"><i class="fas fa-bars"></i></div>
	<!-- モーダル -->
	<div id="modal" class="modal"></div>
	<div class="my-photo">
		<img class="wow bounceIn" data-wow-delay="1s" data-wow-duration="2s" src="<?php bloginfo('template_url'); ?>/img/IMG_1150.JPG" alt="">
		<p class="ff_cursive">@achaneko_914</p>
		<a href=""><i class="fab fa-instagram"></i></a>
	</div>
</div>

<body>
	<header>
		<script>
			var lastInnerWidth = window.innerWidth; //現在の画面幅を取得
			var nav = document.getElementById('nav');
			if (lastInnerWidth <= 480) {
				nav.classList.add('hamburger'); //クラス「hamburger」を追加
			}

			//横幅が変わった時実行される関数
			window.addEventListener("resize", function() {
				//現在と前回の横幅が違う場合だけ実行
				if (lastInnerWidth != window.innerWidth) {
					//横幅を記録しておく
					lastInnerWidth = window.innerWidth;
					if (lastInnerWidth <= 480) { //画面幅480px以下の場合
						if (!(nav.classList.contains('hamburger'))) { //クラス「hamburger」がない場合
							nav.classList.add('hamburger'); //クラス「hamburger」を追加
						}
					} else { //画面幅481px以上の場合
						nav.classList.remove('hamburger'); //クラス「hamburger」を削除
					}
				}
			});

			//ハンバーガーメニューボタンをクリックした時に実行される関数
			document.getElementById('hamburger_btn').addEventListener('click', function() {
				//ナビ一覧とモーダルを表示
				nav.style.display = "block";
				document.getElementById('modal').style.display = "block";
			});

			//ハンバーガーメニューが表示されている時に、モーダルがクリックされると実行される関数
			document.getElementById('modal').addEventListener('click', function() {
				//ナビ一覧とモーダルを非表示
				nav.style.display = "none";
				document.getElementById('modal').style.display = "none";
			});
		</script>
	</header>
	<div class="main">