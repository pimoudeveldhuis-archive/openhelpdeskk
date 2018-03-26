<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title>openHelpdesk | Log in</title>
	
	<link rel="stylesheet" href="/components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="/css/openhelpdesk.css">
	<link rel="stylesheet" href="/components/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,300italic,400italic,600italic">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			open<b>Helpdesk</b>
		</div>
		
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>
			
			<form action="{{ route('do-login') }}" method="post">
				{{ csrf_field() }}
				
				@if ($errors->any())
					<div class="alert alert-danger">The credentials you entered are incorrect</div>
				@endif
				
				<div class="form-group has-feedback">
					<input name="username" type="text" class="form-control" placeholder="Username" value="{{ old('username') }}">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				
				<div class="form-group has-feedback">
					<input name="password" type="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label><input name="remember_me" type="checkbox" value="checked" @if(old('remember_me') == 'checked') checked @endif"> Remember Me</label>
						</div>
					</div>
					
					<div class="col-xs-4">
						<button type="submit" class="btn btn-info btn-block">Sign In</button>
					</div>
				</div>
			</form>
			<a href="#">I forgot my password</a>
		</div>
		<p class="login-box-msg"><small>Powered by NSOSI's openHelpdesk</small></p>
	</div>

	<script src="/components/jquery/dist/jquery.min.js"></script>
	<script src="/components/bootstrap/js/bootstrap.min.js"></script>
	<script src="/components/plugins/iCheck/icheck.min.js"></script>
	
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
</body>
</html>
