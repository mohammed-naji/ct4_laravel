<x-form-layout instructor="Mohammed Naji">
    {{-- <x-slot:title>New Title</x-slot:title> --}}
    @slot('title')
        ddddd
    @endslot

    <h1>Login Form</h1>
    <form action="{{ route('forms.form2') }}" method="POST">
        @csrf
        <x-form.input name="email" label="Email" />
        <x-form.input name="password" label="Password" type="password" />
        <button class="btn btn-primary">Login</button>
    </form>
</x-form-layout>
