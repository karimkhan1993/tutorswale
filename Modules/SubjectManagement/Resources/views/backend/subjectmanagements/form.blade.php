<div class="row">
    <!-- Class ID (Dropdown) -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'class_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select a Class --";
            $required = "required";
            $classes = [
                '1' => 'Class 1',
                '2' => 'Class 2',
                '3' => 'Class 3' // Fetch from DB dynamically
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $classes)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>

</div>

<div class="row">
    <!-- Subjects (Repeater Input) -->
    <div class="col-12  col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'subjects'; // Use an array to store multiple subjects
            $field_lable = label_case($field_name);
            $field_placeholder = "Enter subject";
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            
            <div id="subjectFields">
                <!-- Initial subject input field -->
                <div class="subject-field mb-2 d-flex align-items-center">
                    <input type="text" name="subjects[]" placeholder="{{ $field_placeholder }}" class="form-control mr-2" style="max-width: calc(100% - 70px);">
                    <!-- Remove button for the field -->
                    <button type="button" class="btn btn-danger btn-sm  removeSubject" style="margin-left:10px;">Remove</button>
                </div>
            </div>
            
            <!-- Button to add more subject fields -->
            <button type="button" id="addSubject" class="btn btn-secondary mt-2">Add More Subject</button>
        </div>
    </div>
</div>

<x-library.select2 />

<!-- Add JavaScript to handle the repeater functionality -->
<script>
    // Add new subject field on button click
    document.getElementById('addSubject').addEventListener('click', function() {
        const subjectContainer = document.getElementById('subjectFields');
        const newSubjectField = document.createElement('div');
        newSubjectField.classList.add('subject-field', 'mb-2', 'd-flex', 'align-items-center');
        newSubjectField.innerHTML = `
            <input type="text" name="subjects[]" placeholder="Enter subject" class="form-control mr-2" style="max-width: calc(100% - 70px);">
            <button type="button" class="btn btn-danger btn-sm removeSubject" style="margin-left:10px;">Remove</button>
        `;
        subjectContainer.appendChild(newSubjectField);
    });

    // Remove subject field when the remove button is clicked
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('removeSubject')) {
            event.target.closest('.subject-field').remove();
        }
    });
</script>
