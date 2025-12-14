<x-form-layout>
    @push('css')
        <style>
            .pass-wrapper {
                position: relative;
            }

            .pass-wrapper i {
                cursor: pointer;
                position: absolute;
                right: 10px;
                top: 35px;
            }
        </style>
    @endpush
    <h1>Register Form</h1>
    {{-- <i class="far fa-eye-slash"></i>
    <i class="far fa-heart"></i>
    <i class="fab fa-facebook"></i> --}}
    <form action="{{ route('forms.form3') }}" method="POST">
        @csrf
        <x-form.input name="name" label="Name" />
        <x-form.input name="email" label="Email"type="email" />
        <x-form.input name="age" label="Age" type="number" />
        <x-form.input name="mobile" label="Mobile" />
        <x-form.input name="password" label="Password" type="password" />
        <x-form.input name="confirm_password" label="Confirm Password" type="password" />
        <button class="btn btn-primary">Register</button>
    </form>
    @push('js')
        <script>
            let eyes = document.querySelectorAll('.pass-wrapper i')
            eyes.forEach(el => {
                el.onclick = () => {
                    if (el.previousElementSibling.type == 'password') {
                        el.previousElementSibling.type = 'text'
                        el.classList.remove('fa-eye')
                        el.classList.add('fa-eye-slash')
                    } else {
                        el.previousElementSibling.type = 'password'
                        el.classList.add('fa-eye')
                        el.classList.remove('fa-eye-slash')
                    }
                }
            });
        </script>
    @endpush
</x-form-layout>
