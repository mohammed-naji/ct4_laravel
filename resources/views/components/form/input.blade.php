{{-- @props(['name', 'label', 'type' => 'text']) --}}
<div class="mb-3 {{ isset($type) && $type == 'password' ? 'pass-wrapper' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input class="form-control @error($name) is-invalid @enderror" type="{{ $type ?? 'text' }}" name="{{ $name }}"
        value="{{ $value ?? old($name) }}" id="{{ $name }}" />
    @if (isset($type) && $type == 'password')
        <i class="far fa-eye"></i>
    @endif

    @if (isset($type) && $type == 'file' && isset($value) && $value)
        <img width="100" src="{{ asset($value) }}" alt="">
    @endif

    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
