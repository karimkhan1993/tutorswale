<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'class_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select a Class --";
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $classes)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required", "id" => "class_id"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'subject_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select a Subject --";
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, [], $selected = null)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required", "id" => "subject_id"]) }}
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
                '1' => 'Published',
                '0' => 'Unpublished',
                '2' => 'Draft'
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
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
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<x-library.select2 />

<script>
$(document).ready(function() {
    $('#class_id').change(function() {
        var classId = $(this).val();
        $('#subject_id').empty().append('<option value="">Loading...</option>'); 

        if (classId) {
            $.ajax({
                url: "{{ route('backend.exclusiveclasses.getSubjectsByClass') }}", // ✅ Ensure correct route
                type: "GET",
                data: { class_id: classId },
                success: function(response) {
                    $('#subject_id').empty().append('<option value="">-- Select a Subject --</option>');
                    $.each(response.subjects, function(key, value) {
                        $('#subject_id').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#subject_id').empty().append('<option value="">-- Select a Subject --</option>');
        }
    });
});

</script>
