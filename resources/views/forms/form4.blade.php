@extends('forms.master')

@section('content')
    <h2>Form Validation</h2>
    {{-- @dump($errors)
    @dump($errors->any())
    @dump($errors->all()) --}}
    {{-- @include('forms._errors') --}}
    <form action="{{ route('forms.form4') }}" method="POST">
        @csrf
        <x-form.input name="name" label="Name" />
        <x-form.input name="email" label="Email" />
        <x-form.input name="age" label="Age" />
        <x-form.textarea name="bio" label="Bio" />
        <x-form.textarea name="content" label="Content" />
        <button class="btn btn-success">Login</button>
    </form>
@endsection
