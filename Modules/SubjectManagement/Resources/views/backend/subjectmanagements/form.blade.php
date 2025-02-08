<?php
$field_name = 'class_id';
$field_label = label_case($field_name);
$field_placeholder = "-- Select a Class --";
$required = "required";

// Ensure $classes is defined
$classes = $classes ?? [];
?>

<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            {{ html()->label($field_label, $field_name)->class('form-label') }} 
            {!! fielf_required($required) !!}

            {{ html()->select($field_name, $classes)
                ->placeholder($field_placeholder)
                ->class('form-control select2')
                ->value(old($field_name, $data->class_id ?? null)) // Pre-select class in edit mode
                ->attributes(["$required"]) 
            }}
        </div>
    </div>
</div>


<div class="row">
    <!-- Subjects (Repeater Input) -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'subjects'; // Use an array to store multiple subjects
            $field_label = label_case($field_name);
            $field_placeholder = "Enter subject";
            $required = "required";
            ?>

            {{ html()->label($field_label, $field_name)->class('form-label') }} 
            {!! fielf_required($required) !!}

            <input type="text" name="subjects" 
                   value="{{ old($field_name, $data->subjects ?? '') }}" 
                   placeholder="{{ $field_placeholder }}" 
                   class="form-control mr-2">
        </div>
    </div>
</div>

<x-library.select2 />
