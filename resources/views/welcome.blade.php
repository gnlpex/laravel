@extends('layout.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
    	<div class="col-md-6">
    	<h3>Sign Up</h3>
    		<form action="#" method="post">
    			<div class ="form-group">
    				<label for="email">Your E-Mail</label>
    				<input class="form-control" type="text" name="email" id="email">
    			</div>
    			<div class ="form-group">
    				<label for="first_name">Your First Name</label>
    				<input class="form-control" type="text" name="first-name" id="first-name">
    			</div>
    			<div class ="form-group">
    				<label for="password">Your Password</label>
    				<input class="form-control" type="text" name="password" id="password">
    			</div>
    			<button type="submit" class="btn btn-primary">Submit</button>
    		</form>
    	</div>
    	<div class="col-md-6">
    	<h3>Sign In</h3>
    		<form action="#" method="post">
    			<div class ="form-group">
    				<label for="email">Your E-Mail</label>
    				<input class="form-control" type="text" name="email" id="email">
    			</div>
    			
    			<div class ="form-group">
    				<label for="password">Your Password</label>
    				<input class="form-control" type="text" name="password" id="password">
    			</div>
    			<button type="submit" class="btn btn-primary">Submit</button>
    		</form>
    	</div>

    </div>
@endsection