function check_sp() {
	let check_error = false;
	// tai_khoan
	let tai_khoan = document.getElementById('tai_khoan').value;
	let tai_khoan_regex=/^[a-zA-Z0-9]$/;
	let error_tai_khoan= document.getElementById('error_tai_khoan')
	// mat_khau
	let mat_khau = document.getElementById('mat_khau').value;
	let error_mat_khau= document.getElementById('error_mat_khau')
	// giá
		let gia = document.getElementById('gia').value;
	let error_gia= document.getElementById('error_gia')
	// anh
	let anh = document.getElementById('anh').value;
	let error_anh= document.getElementById('error_anh')

	if(tai_khoan_regex.test(tai_khoan)||tai_khoan!=''){
		error_tai_khoan.innerHTML = '';
	}else{
		error_tai_khoan.innerHTML='chỉ được nhập số và chữ và không được để trống';
		check_error = true;
	}

	if(mat_khau!=''){
		error_mat_khau.innerHTML = '';
	}else{
		error_mat_khau.innerHTML='mật khẩu không được để trống';
		check_error = true;
	}

	if(gia!=''){
		error_gia.innerHTML = '';
	}else{
		error_gia.innerHTML='nhập số lượng và không được để trống';
		check_error = true;
	}
	if(anh!=''){
		error_anh.innerHTML = '';
	}else{
		error_anh.innerHTML='bạn chưa chọn ảnh sản phẩm';
		check_error = true;
	}
	if (check_error) {
		return false;
	}
}