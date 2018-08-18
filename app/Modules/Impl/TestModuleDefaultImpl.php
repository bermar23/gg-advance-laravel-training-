<?php

namespace App\Modules\Impl;

use App\Modules\TestModule;
use App\User;

class TestModuleDefaultImpl implements TestModule
{

    public function __construct(User $user)
    {

    }

    public function displayText()
    {
        return 'Bermar';
    }

}
