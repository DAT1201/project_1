function check_mk(){
	var check_error = false;
	var mkht = document.getElementById('mkht').value;
	var check_mkht = document.getElementById('check_mkht').value;

	var mkm = document.getElementById('mkm').value;
	var mkm_regex = /^[\S]{1,10}$/;

	var nlmk = document.getElementById('nlmk').value;

	if(mkht == check_mkht){
		document.getElementById('error_mkht').innerHTML = '';
	}else{
		document.getElementById('error_mkht').innerHTML = 'Mật khẩu hiện tại không chính xác!';
		check_error = true;
	}
	if(mkm_regex.test(mkm)){
		document.getElementById('error_mkm').innerHTML = '';
	}else{
		document.getElementById('error_mkm').innerHTML = 'Nhập từ 1-10 ký tự!';
		check_error = true;
	}
	if(mkm === nlmk){
		document.getElementById('error_nlmk').innerHTML = '';
	}else{
		document.getElementById('error_nlmk').innerHTML = 'Nhập lại mật khẩu không chính xác!';
		check_error = true;
	}
	if(check_error){
		return false;
	}
}