function check_nv() {
	// access_name
	var check_error = false;
	let ten_nhan_vien = document.getElementById('ten_nv').value;
	let ten_nv_regex= /^[A-Z][a-zA-Z][^#&<>\"~;$^%{}?]{1,20}$/;
	let ten_nv = document.getElementById('error_name_nv')
	// password
	let password = document.getElementById("password").value;
	let error_password_nv = document.getElementById('error_password_nv')
	// email
	let email_nv = document.getElementById('email_nv').value;
	let error_email_nv = document.getElementById('error_email_nv')
	// tk_nv
	let tk_nv= document.getElementById('tk_nv').value;
	let tk_nv_regex = /^[A-Za-z0-9]+$/;
	let error_tk_nv = document.getElementById('error_tk_nv')
	// gender
	let arr_gender = document.getElementsByName('gender');
	let error_gender = document.getElementById('error_gender')
	

	if (ten_nv_regex.test(ten_nhan_vien)) {
		ten_nv.innerHTML = '';
	}else{
		ten_nv.innerHTML = 'nhập đúng tên đăng nhập';
			check_error=true;
	}

	if (password != '') {
		error_password_nv.innerHTML = '';
	}else{
		error_password_nv.innerHTML='mời nhập mật khẩu!';
		check_error = true;
	}

	if (email_nv != '') {
		error_email_nv.innerHTML='';
		
	}else{
		error_email_nv.innerHTML='mời bạn nhập email';
		check_error=true;
	}

	if (tk_nv_regex.test(tk_nv)) {
		error_tk_nv.innerHTML='';
	}else{
		error_tk_nv.innerHTML='nhập đúng định dạng tên!';
		check_error=true;
	}

	let gender = false;
	for(var i =0;i < arr_gender.length;i++){
		if(arr_gender[i].checked){
			gender = true;
		}
	}if(gender!=true){
		error_gender.innerHTML='bạn chưa chọn giới tính!';
		check_error=true;
	}else{
		error_gender.innerHTML='';
	}


	if (check_error) {
		return false;
	}
}