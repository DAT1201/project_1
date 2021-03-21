<style type="text/css">
	#div_banner{
		height:14%;
		width:100%;
		background-image: url('../banner_and_slide/banner2.jpg');
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		/*background:cover;*/
		z-index: 99;
	}
	#div_banner > #div_logo{
		width: 15%;
		position: absolute;
		top:40px;
		left: 30px;
		z-index: 99;
		/*float :left;*/
	}
	#div_banner > #div_menu {
		width: 60%;
		margin: auto;
		/*max-height:80px;*/
		margin-top: 5px;
		opacity: 0.9;
		z-index: 100;
		left: 280px;
		/*position: absolute;*/
		/*top: 30px;*/
		/*float:left;*/
	}
	#div_banner{
		/*position: fixed;*/
		display: block;

	}
</style>
<div id='div_banner'>
	<div id="div_logo">
		<img src="../banner_and_slide/logo24h.png" style="height: 30px;">
	</div>
	<div id='div_menu'>
		<?php include '../common/menu.php' ?>
	</div>
</div>