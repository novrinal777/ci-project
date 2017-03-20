<html>
<head>
    <title>Master Page Title</title>
    <style>
        .form-group{
            padding: 10px;
        }
    </style>
</head>
<body>
@section('sidebar')
    <b>Add gift to your wish list</b>


<!--    @if ($errors->any())-->
<!--        <ul>{!! implode('', $errors->all('<li style="color:red">:message</li>')) !!}</ul>-->
<!--    @endif-->
@show

<div class="container">
    @yield('content')
{!! Form::open(array('url' => '/insertData', 'method' => 'post')) !!}

    <div class="form-group">
        {!! Form::label('Gift ID : ') !!}
        {!! Form::text('gift_id', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'')) !!}
        {{ $errors->first('gift_id') }}
    </div>
    <div class="form-group">
        {!! Form::label('User ID : ') !!}
        {!! Form::text('user_id', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'')) !!}
        {{ $errors->first('user_id') }}
    </div>
    <div class="form-group">
        {!! Form::label('Target ID : ') !!}
        {!! Form::text('target_id', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'')) !!}
        {{ $errors->first('target_id') }}
    </div>
    <div class="form-group">
        {!! Form::label('Description : ') !!}
        {!! Form::text('description', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'')) !!}
        {{ $errors->first('description') }}
    </div>
    <div class="form-group">
        {!! Form::label('User Name : ') !!}
        {!! Form::text('user_name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'')) !!}
        {{ $errors->first('user_name') }}
    </div>
    {!! Form::submit('Submit') !!}
{!! Form::close() !!}
</div>
</body>
</html>