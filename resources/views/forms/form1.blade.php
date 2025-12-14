@extends('forms.master')

@section('title', 'Form 1 - Basic Form')

@section('content')
    <h1>Basic Form</h1>
    <form action="{{ route('forms.form1') }}" method="POST">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
        {{-- {{ csrf_field() }} --}}
        @csrf

        <x-form.input name="name" label="Name" />

        <x-form.input name="email" label="Email" type="email" />


        {{-- <div class="mb-3">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" />
        </div> --}}

        <button class="btn btn-success px-5">Send</button>
    </form>
@endsection
