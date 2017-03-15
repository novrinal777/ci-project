@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>You will start new lesson "{{ $subject_name }}" with teachure name "{{ $teacher }}"</p>
    <p>Here is your leaning schedule</p>
    @foreach($learning_schedule as $learning_schedule)
        {{ $learning_schedule }}
    @endforeach
@endsection