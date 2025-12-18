@extends('forms.master')

@section('content')
    <h2>Form Upload File</h2>
    <form action="{{ route('forms.form5') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-form.input name="name" label="Your Name" />
        <x-form.input name="image" label="Your Image" type="file" />

        <button class="btn btn-primary">Upload</button>
        <button class="btn btn-success">Upload</button>
        <button class="btn btn-danger">Upload</button>
        <button class="btn btn-info">Upload</button>
        <button class="btn btn-warning">Upload</button>
        <button class="btn btn-dark">Upload</button>
        <button class="btn btn-secondary">Upload</button>
    </form>
@endsection
