<?php

namespace App\InterfaceSegregation\Correct;

use App\InterfaceSegregation\Correct\Interfaces\CodeableInterface;
use App\InterfaceSegregation\Correct\Interfaces\TestableInterface;

class ProjectManager
{
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