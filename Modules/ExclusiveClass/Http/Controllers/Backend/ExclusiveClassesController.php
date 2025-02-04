<?php

namespace Modules\ExclusiveClass\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ExclusiveClassesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ExclusiveClasses';

        // module name
        $this->module_name = 'exclusiveclasses';

        // directory path of the module
        $this->module_path = 'exclusiveclass::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ExclusiveClass\Models\ExclusiveClass";
    }

}
