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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                var quill = new Quill('#{{ $field["name"] }}', {
                    theme: 'snow'
                });
            });
        </script>
    @endpush
@endif

