<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
<body>
	<div class="text-center">
<p>Click on Delete Button</p>
<button type="button" class="btn btn-danger">
  <i class="glyphicon glyphicon-trash"></i> Delete
</button>
</div>
<script type="text/javascript">
$('button').click(function(){
  
  swal({
  title: 'Are you sure?',
  text: "It will permanently deleted !",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
  swal(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  );
})
  
})
</script>
</body>
</html>