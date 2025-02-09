{{-- = $module_name --}}
<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'class_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select a Class --";
            $required = "required";
            $selected_class = old($field_name, isset($data) && is_object($data) ? $data->class_id : '');
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $classes, $selected_class)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required", "id" => "class_id"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'subject_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select a Subject --";
            $required = "required";
            $selected_subject = old($field_name, isset($data) && is_object($data) ? $data->subject_id : '');
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, [], $selected_subject)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required", "id" => "subject_id"]) }}
        </div>
    </div> 

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "required";
            $select_options = [
                '1' => 'Active',
                '0' => 'Inactive',
            ];
            $selected_status = old($field_name, isset($data) && is_object($data) ? $data->status : '');
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options, $selected_status)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $description_value = old($field_name, isset($data) && is_object($data) ? $data->description : '');
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->value($description_value) }}
        </div>
    </div>
</div>

<x-library.select2 />

<script>
$(document).ready(function() {
    var selectedSubject = "{{ isset($data) && is_object($data) ? $data->subject_id : '' }}";
    
    function loadSubjects(classId, selectedSubject) {
        $('#subject_id').empty().append('<option value="">Loading...</option>');

        if (classId) {
            $.ajax({
                url: '{{ route("backend.$module_name.getSubjectsByClass") }}',
                type: "GET",
                data: { class_id: classId },
                success: function(response) {
                    $('#subject_id').empty().append('<option value="">-- Select a Subject --</option>');
                    $.each(response.subjects, function(key, value) {
                        let isSelected = (key == selectedSubject) ? "selected" : "";
                        $('#subject_id').append('<option value="' + key + '" ' + isSelected + '>' + value + '</option>');
                    });
                }
            });
        } else {
            $('#subject_id').empty().append('<option value="">-- Select a Subject --</option>');
        }
    }

    // Auto-load subjects if editing
    var selectedClass = $('#class_id').val();
    if (selectedClass) {
        loadSubjects(selectedClass, selectedSubject);
    }

    // On class change, load subjects
    $('#class_id').change(function() {
        loadSubjects($(this).val(), "");
    });
});
</script>
