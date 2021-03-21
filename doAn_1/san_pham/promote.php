<style type="text/css">
	#div_promote{
		width: 100%;
		height: 500px;
		/*background-image: url('../banner_and_slide/images_nen.jpg');*/
		
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
			 <?php include'auto_slide.php' ?> 
		</div>
		<div id="promote_trai">
			<div class="anh_promote_1">
				<img src="../banner_and_slide/b9f30a9b75616e49e57af113c94f44bb.gif" style="height: 165px;width: 100%; ">
			</div>
			<br>
			<div class="anh_promote_2">
				<img src="../banner_and_slide/4a0a60423d59ca3ecf9e2e9213f671a0a1a78cf0r1-500-570_hq.gif" style="height: 165px;width: 100%;image-rendering: pixelated; ">
			</div>
		</div>
	</div>