<?php

namespace App\InterfaceSegregation\Violated;

class ProjectManager
{
    /**
     * @param WorkableInterface $member
     * @return void
     */
    public function processWork(WorkableInterface $member): void
    {
        if ($member->canCode())
            $member->work();
    }

    /**
     * @param WorkableInterface $member
     * @return void
     */
    public function processTest(WorkableInterface $member): void
    {
        if (!$member->canCode())
            $member->test();
    }
}