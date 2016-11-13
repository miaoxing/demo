<?php

namespace Miaoxing\Demo\Controller;

use miaoxing\plugin\BaseController;

class DemoRecords extends BaseController
{
    public function indexAction()
    {
        return get_defined_vars();
    }
}
