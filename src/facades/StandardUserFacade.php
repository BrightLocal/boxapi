<?php

namespace Brightlocal\Box\Facades;

use Illuminate\Support\Facades\Facade;

class StandardUserFacade extends Facade {
    protected static function getFacadeAccessor() { return 'boxstandarduser'; }
}