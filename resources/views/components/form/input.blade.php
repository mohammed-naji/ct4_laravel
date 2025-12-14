{{-- @props(['name', 'label', 'type' => 'text']) --}}
<div class="mb-3 {{ isset($type) && $type == 'password' ? 'pass-wrapper' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input class="form-control" type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" />
    @if (isset($type) && $type == 'password')
        <i class="far fa-eye"></i>
    @endif
</div>
