<div class="mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}"
        rows="{{ $rows ?? 4 }}">{{ $value ?? old($name) }}</textarea>

    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
