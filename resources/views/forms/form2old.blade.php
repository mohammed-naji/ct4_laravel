@extends('forms.master')

@section('title', 'Form 2 - Login Form')

@section('content')
    <h1>Login Form</h1>
    <form action="{{ route('forms.form2') }}" method="POST">
        @csrf
        <x-form.input name="email" label="Email" />
        <x-form.input name="password" label="Password" type="password" />
        <button class="btn btn-primary">Login</button>
    </form>
@endsection
