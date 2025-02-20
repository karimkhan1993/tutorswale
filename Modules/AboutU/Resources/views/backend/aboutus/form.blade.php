<div class="card">
    <div class="card-header">
        <h5 class="card-title">Features</h5>
    </div>
    @php
        // print_r($feature[0]->title);die;
    @endphp
    <div class="card-body">
        <div class="features-container">
            @for ($i = 1; $i <= 3; $i++)
                <div class="feature-item mb-4 p-3 border rounded">
                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                @php
                                    $field_name = "title_$i";
                                    $field_label = __("Title $i");
                                @endphp
                                {{ html()->label($field_label, $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                                {{ html()->text($field_name, $feature[$i]->title ?? '')->placeholder($field_label)->class('form-control')->required() }}
                            </div>
                        </div>

                        <!-- Icon Upload Field -->
                        <div class="col-12 col-sm-4 mb-3">
                            <div class="form-group">
                                @php
                                    $field_name = "icon_$i";
                                    $field_label = __("Icon $i");
                                @endphp
                                {{ html()->label($field_label, $field_name)->class('form-label') }}{!! fielf_required('required') !!}

                                {{ html()->file($field_name)->class('form-control')->required(empty($feature[$i]->icon)) }}
                                
                                @if (!empty($feature[$i]->icon))
                                <div class="mb-2">
                                    <img src="{{  Storage::url( $feature[$i]->icon) }}" alt="Icon Preview" width="50">
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Description Field -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                @php
                                    $field_name = "description_$i";
                                    $field_label = __("Description $i");
                                @endphp
                                {{ html()->label($field_label, $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                                {{ html()->textarea($field_name, $feature[$i]->description ?? '')->placeholder($field_label)->class('form-control')->required() }}
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>


<!-- Statistics Section -->
<div class="card mt-4">
    <div class="card-header">
        <h5 class="card-title">Statistics Rate</h5>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach (['successfully_trained', 'classes_completed', 'satisfaction_rate', 'student_community'] as $field_name)
                <div class="col-12 col-sm-3 mb-3">
                    <div class="form-group">
                        <?php $field_label = label_case($field_name); ?>
                        {{ html()->label($field_label, $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                        {{ html()->number($field_name)->placeholder($field_label)->class('form-control')->required() }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Popular Courses Section -->
@for ($i = 1; $i <= 2; $i++)
    <div class="row mt-4">
        <div class="col-12 col-sm-6 mb-3">
            <div class="form-group">
                <?php $field_name = "popular_course_title$i"; ?>
                {{ html()->label(label_case($field_name), $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                {{ html()->text($field_name)->placeholder(label_case($field_name))->class('form-control')->required() }}
            </div>
        </div>
        <div class="col-12 col-sm-6 mb-3">
            <div class="form-group">
                <?php $field_name = "popular_course_cta_text$i"; ?>
                {{ html()->label(label_case($field_name), $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                {{ html()->text($field_name)->placeholder(label_case($field_name))->class('form-control')->required() }}
            </div>
        </div>
        <div class="col-12 col-sm-6 mb-3">
            <div class="form-group">
                <?php $field_name = "popular_course_cta_link$i"; ?>
                {{ html()->label(label_case($field_name), $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                {{ html()->text($field_name)->placeholder(label_case($field_name))->class('form-control')->required() }}
            </div>
        </div>
        <div class="col-12 col-sm-6 mb-3">
            <div class="form-group">
                <?php $field_name = "popular_course_description$i"; ?>
                {{ html()->label(label_case($field_name), $field_name)->class('form-label') }} {!! fielf_required('required') !!}
                {{ html()->textarea($field_name)->placeholder(label_case($field_name))->class('form-control')->required() }}
            </div>
        </div>
    </div>
@endfor

<!-- Image Uploads -->
<div class="row">
    @foreach (['banner_image', 'student_image_1', 'student_image_2'] as $field_name)
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                {{ html()->label(label_case($field_name), $field_name)->class('form-label') }}
                @if (isset($data) && !empty($data->$field_name))
                    {{ html()->file($field_name)->class('form-control') }}
                @else
                    {!! fielf_required('required') !!}
                    {{ html()->file($field_name)->class('form-control')->required() }}
                @endif
            </div>
        </div>
    @endforeach
</div>

<x-library.select2 />
