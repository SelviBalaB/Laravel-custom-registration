<!DOCTYPE html>
<html>
    <head>
        <title>Custom Registration</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       
    </head>
    <body>
	
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6">
				@if(count($errors)>0)
					@foreach($errors->all() as $err)
					<p class="alert alert-danger">{{ $err }}</p>
					@endforeach
				@endif
				
					<form action="{{ route('custom.register') }}" method="post">
						{{  csrf_field() }}
					  <fieldset>
						<legend>Register Here</legend>
						
						<div class="form-group">
						  <label for="exampleInputEmail1">First Name</label>
						  <input type="text" class="form-control" name="fname" aria-describedby="emailHelp" value="{{ old('fname') }}" placeholder="Enter First Name">
						  
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Last Name</label>
						  <input type="text" class="form-control" name="lname" aria-describedby="emailHelp" value="{{ old('lname') }}" placeholder="Enter last name">
						  
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Email address</label>
						  <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						  
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Password</label>
						  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Confirm Password</label>
						  <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Reenter Password">
						</div>
						
						
						
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					  </fieldset>
				</form>
				</div>
			</div>
		</div>
	
	
	<script src="http://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
