<html>
<head>
    <title>LoginPage</title>
    <style>
        .form-group{
            padding: 10px;
        }
    </style>
</head>
<body>
@section('sidebar')
    <b>Login</b>
@show

<div class="container">
    @yield('content')
    {!! Form::open(array('url' => '/loginUser', 'method' => 'post')) !!}
    <div class="form-group">
        {!! Form::label('Email : ') !!}
        {!! Form::text('user_email', null, null ) !!}
        {{ $errors->first('user_email') }}
    </div>
    <div class="form-group">
        {!! Form::label('Password : ') !!}
        {!! Form::text('user_pwd', null,null) !!}
        {{ $errors->first('user_pwd') }}
    </div>
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
</div>
</body>
</html>