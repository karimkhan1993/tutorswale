<?php

namespace Modules\AboutU\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class AboutUsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'AboutUs';

        // module name
        $this->module_name = 'aboutus';

        // directory path of the module
        $this->module_path = 'aboutu::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\AboutU\Models\AboutU";
    }

}
