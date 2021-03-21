<div id="so_trang">
		<h3>
	 	Tổng số trang
	 	<br>
	 	<?php for($i=1; $i <= $tong_trang;$i++){ ?>
	 		<?php if($trang_hien_tai==$i){ ?>
		 		<a style='color:red; text-decoration: underline; ' href="?trang=<?php echo $i ?>&ma_danh_muc=<?php echo $_GET['ma_danh_muc'] ?>&tim_kiem=<?php echo $tim_kiem ?>">
		 			<?php echo $i; ?>
		 		</a>
	 		<?php }else{ ?>
	 			<a href="?trang=<?php echo $i ?>&ma_danh_muc=<?php echo $_GET['ma_danh_muc'] ?>&tim_kiem=<?php echo $tim_kiem ?>">
		 			<?php echo $i; ?>
		 		</a>
	 		<?php } ?>
	 	<?php } ?>
	 </h3>
	</div>