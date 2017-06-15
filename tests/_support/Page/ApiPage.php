<?php

namespace Page;

/**
 * Class TasksPage
 * @package Page
 */
class ApiPage
{
    const URL = 'http://localhost:8080/task';
    /**
     *
     * @param \AcceptanceTester $I Codeception variable
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    /**
     * Function used to create new task
     *
     * @param string $task task description
     * @return array
     */
    public function newTask($task)
    {

        $I=$this->tester;
        $I->sendPOST(static::URL, ['name' => $task]);
    }
}
