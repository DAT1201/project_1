<style type="text/css">
	#div_tong{
			width: 100%;
			height: auto;
			/*position: fixed;*/
			background-image: url('../banner_and_slide/nen_tong.jpg');
			/*background-size: cover;*/
			/*background-position: center center;*/
		}
	#div_promote{
		width: 100%;
		height: 500px;
		/*background-image: url('../banner_and_slide/Kennen-League-of-Legends-Wallpaper-full-HD-Desktop-1.png');*/
		margin-top:-10px;
		
	}
	#div_promote > #carousel{
			width: 70%;
			/*float: left;*/
			left: 25px;
			/*background-color: green;*/
			position: absolute;
			top: 110px;		
		}
	#div_promote > #promote_trai{
		/*background-color: green;*/
		width: 25%;
		position: absolute;
		right: 25px;
		top:110px;
	}
</style>
<div id='div_promote'>
		<div id="carousel">
			 <?php include'../trang_chu/auto_slide.php' ?> 
		</div>
		<div id="promote_trai">
			<div class="anh_promote_1">
				<img src="../banner_and_slide/nljvbf.gif" style="height: 165px;width: 100%; ">
			</div>
			<br>
			<div class="anh_promote_2">
				<img src="../banner_and_slide/e3b3e6546b443a9dce69a195843d244f.gif" style="height: 165px;width: 100%;image-rendering: pixelated; ">
			</div>
		</div>
	</div>