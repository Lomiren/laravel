<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>Admin Login</title>

	    <!-- Bootstrap core CSS -->
	    {{ HTML::style(URL::asset('assets/admin/bootstrap/css/bootstrap.min.css')) }}
	    {{ HTML::style('assets/admin/bootstrap/css/bootstrap-theme.min.css') }}
	    
	
	    <!-- Custom styles for this template -->
	    {{ HTML::style('assets/admin/css/login.css') }}


	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		
		
		<div class="wrapper">
	    	{{ Form::open(array('url'=>'admin/signin', 'class'=>'form-signin')) }}
	    		<h2><i>'<u>L</u>' CMS</i>  <span class="glyphicon glyphicon-cog" style="color: #999; font-size: 20px;"></span> </h2>  
	    		<div class="form-group">
				  <div class="col-md-12">
				    <div class="input-group">
				      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				      {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Логин')) }}
				    </div>
				  </div>
				</div>
				
				<div class="form-group">
				  <div class="col-md-12">
				    <div class="input-group">
				      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				      {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Пароль')) }}
				    </div>
				  </div>
				</div>
				@if(Session::has('message'))
					<!-- error messages -->     
					<div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
				@endif
	    		   
				{{ Form::submit('Войти', array('class'=>'btn btn-lg btn-primary btn-block login-button'))}}
				   
			{{ Form::close() }}
			<div class="copy">
				Служба поддержки: <a href="#">info@lomiren.kz</a>
			</div>
		</div>
			

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/admin/js/jquery-2.1.1.min.js"></script>
    <script src="/assets/admin/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

