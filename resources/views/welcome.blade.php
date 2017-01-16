@extends('layout.master')

@section('title')
    Welcome!
@endsection

@section('content')
    @include('includes.message-block')

    <style>
        body{
            background-color:  #3385ff;

        }
        
        .row{
            background-image: url("header.jpg");
            margin-bottom: 40px;
        }
        h1 {
            font-weight: 800;
            font: italic bold 80px/80px Georgia, serif;
        }   
        </style>

   <head>
        <div class="header-content">
            <div class="header-content-inner">
                <CENTER><h1 id="homeHeading">S N A P & T E L L</h1></CENTER>
                <hr>
                <center><h3>Capture your life moments and share them with your friends! </h3></center>
               
            </div>
        </div>
    </header>


<body>
    <div class = "row" style="padding-top: 50px;" >
        <div class = "col-md-6" >
            <h3>Sign Up</h3>
            <form action = "{{ route('signup') }}" method = "post">  
                <div class = "form-group {{$errors->has('email') ? 'has-error': '' }}">
                    <label for = "email">Your E-mail</label>
                    <input class = "form-control" type = "text" name = "email" id = "email" value = "{{Request::old('email')}}">
                </div>
                <div class = "form-group {{$errors->has('first_name') ? 'has-error': ''}}">
                    <label for = "first_name">Your First Name</label>
                    <input class = "form-control" type = "text" name = "first_name" id = "first_name" value = "{{Request::old('first_name')}}">
                </div>
                <div class = "form-group {{$errors->has('password') ? 'has-error': ''}}">
                    <label for = "password">Your Password</label>
                    <input class = "form-control" type = "password" name = "password" id = "password" value = "{{Request::old('password')}}">
                </div>
                <button type = "submit" class = "btn btn-primary">Submit</button>
                <input type = "hidden" name = "_token" value = "{{ Session::token() }}">
            </form>
        </div>
        <div class = "col-md-6" >
            <h3>Sign In</h3>
            <form action = "{{ route('signin')}}" method = "post">
                <div class = "form-group {{$errors->has('email') ? 'has-error': ''}}">
                    <label for = "email">Your E-mail</label>
                    <input class = "form-control" type = "text" name = "email" id = "email" value = "{{Request::old('email')}}">
                </div>
                <div class = "form-group {{$errors->has('password') ? 'has-error': ''}}">
                    <label for = "password">Your Password</label>
                    <input class = "form-control" type = "password" name = "password" id = "password" value = "{{Request::old('password')}}">
                </div>
                <button type = "submit" class = "btn btn-primary">Submit</button>
                <input type = "hidden" name = "_token" value = "{{ Session::token() }}">
            </form>
        </div>
    </div>
    </body>
@endsection