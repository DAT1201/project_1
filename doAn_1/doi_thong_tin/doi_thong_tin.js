function check_tt(){
	var check_error = false;
	var ten = document.getElementById('name').value;
	var email = document.getElementById('email').value;

	var ten_regex = /^[a-zA-Z][\s]$/;
	var email_regex =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{3,4})+$/;

	if(ten != ''){
		document.getElementById('error_ten').innerHTML = '';
	}else{
		document.getElementById('error_ten').innerHTML = 'Tên không được để trống';
		check_error = true;
	}
	if(email_regex.test(email)){
		document.getElementById('error_email').innerHTML = '';
	}else{
		document.getElementById('error_email').innerHTML = 'Hãy nhập đúng định dạng email';
		check_error = true;
	}
	if(check_error){
		return false;
	}
}