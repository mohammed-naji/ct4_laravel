@extends('forms.master')

@section('content')
    <h2>Welcome {{ $name }}</h2>
    <img width="400" src="{{ asset($path) }}" alt="">
@endsection
