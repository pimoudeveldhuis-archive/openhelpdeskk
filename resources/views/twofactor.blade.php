<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title>openHelpdesk | Two-factor</title>
	
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
			<p class="login-box-msg">Welcome {{ $_account->name }}<br/>
			Please enter your two-factor code</p>
			
			<form action="{{ route('do-twofactor') }}" method="post">
				{{ csrf_field() }}
				
				@if ($errors->any())
					<div class="alert alert-danger">The two-factor code you entered is incorrect</div>
				@endif
				
				<div class="form-group has-feedback">
					<input name="twofactor" type="text" class="form-control" placeholder="Two-Factor Code" />
					<span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-info btn-block">Authenticate</button>
					</div>
				</div>
			</form>
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
