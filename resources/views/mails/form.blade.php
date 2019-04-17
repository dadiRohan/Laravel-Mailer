<!DOCTYPE html>
<html>
<head>
	<title>Mail Test Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="{{ url('mail/send')}}" method="post">
		<div class="container-fluid">
			<h1>Mail Testing</h1>
			<div class="col-sm-3 form-group">
				<input type="email" name="MailId" class="form-control" placeholder="Enter Email" required="required">
			</div>
			<div class="col-sm-3 form-group">
				<input type="name" name="Username" class="form-control" placeholder="Enter Username" required="required">
			</div>
			<div class="col-sm-6 form-group">
				<input type="submit" value="Send!!!" class="btn btn-md btn-danger">
			</div>
			<input name="_method" type="hidden" value="POST">
			<input name="_token" type="hidden" value="{{ csrf_token() }}">
		</div>
	</form>
</body>
</html>