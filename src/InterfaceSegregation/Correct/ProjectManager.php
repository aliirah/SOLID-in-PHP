<?php

namespace App\InterfaceSegregation\Correct;

use App\InterfaceSegregation\Correct\Interfaces\CodeableInterface;
use App\InterfaceSegregation\Correct\Interfaces\TestableInterface;

class ProjectManager
{

//  A client should never be forced to implement an interface that it doesn't use, or clients shouldn’t be forced to depend on methods they do not use.

    /**
     * @param CodeableInterface $member
     * @return void
     */
    public function processCode(CodeableInterface $member): void
    {
        $member->code();
    }

    /**
     * @param TestableInterface $member
     * @return void
     */
    public function processTest(TestableInterface $member): void
    {
        $member->test();
    }
}