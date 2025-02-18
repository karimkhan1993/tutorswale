@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group mb-3 {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}" class='form-label'> <strong>{{ __($field['label']) }}</strong> ({{ $field['name'] }})</label> {!! $required_mark !!}
    <textarea type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="form-control {{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}" id="{{ $field['name'] }}" placeholder="{{ $field['label'] }}" rows="6" {{ $required }}>
    @if(isset($field['display']))
    @if($field['display'] == 'raw')
    {!! old($field['name'], setting($field['name'])) !!}
    @else 
    {{ old($field['name'], setting($field['name'])) }}
    @endif
    @else
    {{ old($field['name'], setting($field['name'])) }}
    @endif
    </textarea>

    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
    @if(isset($field['help']))<small id="email-{{ $field['name'] }}" class="form-text text-muted">{{ $field['help'] }}</small> @endif
</div>


@if($field['name'] == 'aboutus_description' || $field['name'] == 'whyChooseUs_description' || $field['name'] == 'whyChooseUs_statistic')
    @push('texteditor_scripts')
        <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                CKEDITOR.replace('{{ $field["name"] }}', {
                    extraAllowedContent: 'div(*)[*]; p(*)[*]; img(*)[*]; h1(*)[*]; h2(*)[*]; h3(*)[*]; a(*)[*]; span(*)[*]',
                    removePlugins: 'elementspath',
                    resize_enabled: false
                });
            });
        </script>
    @endpush
@endif

