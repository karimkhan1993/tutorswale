<div class="row">
    <!-- Full Name -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'full_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Phone Number -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'phone_number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Email -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'email';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->email($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required",'autocomplete' => 'new-email']) }}
        </div>
    </div>
</div>

<div class="row">
    <!-- Password -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'password';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = isset($data) ? "" : "required"; // ✅ Password required only when creating
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required",'autocomplete' => 'new-password']) }}
        </div>
    </div>

    <!-- Date of Birth -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'date_of_birth';
            $field_lable = label_case($field_name);
            $field_placeholder = "YYYY-MM-DD";
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Age -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'age';
            $field_lable = label_case($field_name);
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control')->attributes(["$required", "min" => 0]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'profile_image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            @if ($data && !empty($data->profile_image))
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->class('form-control') }}
            @else
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control')->attributes(["$required"]) }}
            @endif
        </div>
    </div>
    <!-- Gender -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'gender';
            $field_lable = label_case($field_name);
            $required = "required";
            $select_options = ['Female' => 'Female', 'Male' => 'Male', 'Other' => 'Other'];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
    
    <!-- Qualification -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'qualification';
            $field_lable = label_case($field_name);
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control') }}
        </div>
    </div>
    <!-- Subject -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'subject';
            $field_lable = label_case($field_name);
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Experience -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'experience';
            $field_lable = label_case($field_name);
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control')->attributes(["min" => 0]) }}
        </div>
    </div>

    <!-- Street Address -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'street_address';
            $field_lable = label_case($field_name);
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Area -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'area';
            $field_lable = label_case($field_name);
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- City -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'city';
            $field_lable = label_case($field_name);
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Pincode -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pincode';
            $field_lable = label_case($field_name);
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Verification Status (is_verified) -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'is_verified';
            $field_lable = label_case($field_name);
            $required = "required";
            $select_options = ['Yes' => 'Yes', 'No' => 'No'];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Availability -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'availability';
            $field_lable = label_case($field_name);
            $required = "required";
            $select_options = ['Online' => 'Online', 'Offline' => 'Offline'];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>

    <!-- Status -->
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $required = "required";
            $select_options = ['Active' => 'Active', 'Inactive' => 'Inactive'];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <!-- Description -->
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control') }}
        </div>
    </div>
</div>

<x-library.select2 />
