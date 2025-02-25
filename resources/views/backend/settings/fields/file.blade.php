@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group mb-3 {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}" class='form-label'>
        <strong>{{ __($field['label']) }}</strong> {!! $required_mark !!}
    </label>

    <input type="file"
           name="{{ $field['name'] }}"
           class="form-control {{ Arr::get($field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
           id="{{ $field['name'] }}"
           {{ $required }}>

    @if ($errors->has($field['name']))
        <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small>
    @endif
</div>
