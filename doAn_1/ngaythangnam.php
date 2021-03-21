<!DOCTYPE html>
<html>
<head>
	<title>ngay thang nam</title>
</head>
<body>
   <!-- <h1>Ngay thang nam</h1> -->
         <select id="select_days" name="day" value="ngày">
         </select>
         <select id="select_month" onchange="thay_doi_ngay()" name="month" value="tháng">
         </select>
         <select id="select_year" onchange="thay_doi_ngay()" name="year" value="năm">  
         </select>

   <script type="text/javascript">
   	var chuoi_ngay= '';
   		for(var i=1; i<=31;i++){
   			chuoi_ngay += "<option>" + i +"</option>"
   		}document.getElementById('select_days').innerHTML=chuoi_ngay;

   		var chuoi_thang= '';
   		for(var i=1; i<=12;i++){
   			chuoi_thang += "<option>" + i +"</option>"
   		}document.getElementById('select_month').innerHTML=chuoi_thang;

   		var chuoi_nam= '';
   		var d = new Date();
   		var nam_hien_tai = d.getFullYear();
   		for(var i=nam_hien_tai; i >= 1900; i--){
   			chuoi_nam += "<option>" + i +"</option>"
   		}document.getElementById('select_year').innerHTML=chuoi_nam;

   		function thay_doi_ngay() {
   			var thang = parseInt(document.getElementById('select_month').value);
   			var ngay=31;
   			switch(thang){
   				case 4:
   				case 6:
   				case 9:
   				case 11:
   					ngay =30;
   					break;
   				case 2:
   				var nam = document.getElementById('select_year').value;
   				if((nam % 400 == 0)||(nam %4 == 0)&&(nam %100 != 0)){
   					ngay = 29;
   				}else{
   					ngay = 28;
   				}
   			}
   			var chuoi_ngay= '';
   		for(var i=1; i <= ngay ; i++){
   			chuoi_ngay += "<option>" + i +"</option>"
   		}document.getElementById('select_days').innerHTML=chuoi_ngay;

   		}
   		
   </script>
</body>
</html>