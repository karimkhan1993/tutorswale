<?php

namespace Modules\ClassManagement\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ClassManagementsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ClassManagements';

        // module name
        $this->module_name = 'classmanagements';

        // directory path of the module
        $this->module_path = 'classmanagement::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ClassManagement\Models\ClassManagement";
    }

}
