<?php

namespace Page;

/**
 * Class TasksPage
 * @package Page
 */
class TasksPage
{
    const TASK_EDITABLE = ['id' => 'task-name'];
    const ADD_TASK_BUTTON = ['xpath' => "//button[@type='submit']"];
    const ERROR_MESSAGE_TITLE = 'Whoops! Something went wrong!';
    const ERROR_MESSAGE = 'The name field is required.';
    const TASKS_TABLE_LABEL = 'Current Tasks';

    /**
     *
     * @param \AcceptanceTester $I Codeception variable
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    /**
     * Task element
     *
     * @param string $name task name
     * @return array
     */
    public function taskElement($name)
    {
        return ['xpath' => '//tbody/./tr/td/div[.="'.$name.'"]'];
    }

    /**
     * Delete element button
     *
     * @param string $name task name
     * @return array
     */
    public function deleteItem($name)
    {
        return ['xpath' => '//tbody/./tr/td/div[.="'.$name.'"]/../..//button'];
    }
}
