<?php

namespace Modules\TutorHiring\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class TutorHiringsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'TutorHirings';

        // module name
        $this->module_name = 'tutorhirings';

        // directory path of the module
        $this->module_path = 'tutorhiring::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\TutorHiring\Models\TutorHiring";
    }

}
