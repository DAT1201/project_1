function check(){
	// access_name
	var check_error = false;
	let access = document.getElementById('access_name').value;
	let access_name_regex= /^[A-Za-z0-9]+$/;
	let access_name = document.getElementById('error_access_name')
	// password
	let password = document.getElementById('password').value;
	let error_password = document.getElementById('error_password')
	// email
	let email = document.getElementById('email').value;
	let error_email = document.getElementById('error_email')
	// name
	let name= document.getElementById('name').value;
	let name_regex = /^[A-Z][a-zA-Z][^#&<>\"~;$^%{}?]{1,15}$/;
	let error_name = document.getElementById('error_name')
	// gender
	// let arr_gender = document.getElementsByName('gioi_tinh');
	// let error_gender = document.getElementById('error_gender')
	

	if (access_name_regex.test(access)) {
		access_name.innerHTML = '';
	}else{
		access_name.innerHTML = 'nhập đúng tên đăng nhập';
			check_error=true;
	}

	if (password != '') {
		error_password.innerHTML = '';
	}else{
		error_password.innerHTML='mời nhập mật khẩu!';
		check_error = true;
	}

	if (email != '') {
		error_email.innerHTML='';
		
	}else{
		error_email.innerHTML='mời bạn nhập email';
		check_error=true;
	}

	if (name_regex.test(name)) {
		error_name.innerHTML='';
	}else{
		error_name.innerHTML='nhập đúng định dạng tên!từ 0-15 kí tự';
		check_error=true;
	}

	// let gender = false;
	// for(var i =0;i < arr_gender.length;i++){
	// 	if(arr_gender[i].checked){
	// 		gender = true;
	// 	}
	// }if(gender==true){
	// 	error_gender.innerHTML='bạn chưa chọn giới tính!';
		
	// }else{
	// 	error_gender.innerHTML='';
	// 	check_error=true;
	// }
	

	if (check_error) {
		return false;
	}
}