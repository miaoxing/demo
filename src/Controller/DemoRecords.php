<?php

namespace Miaoxing\Demo\Controller;

use Miaoxing\Plugin\BaseController;

class DemoRecords extends BaseController
{
    public function indexAction()
    {
        return get_defined_vars();
    }
}
