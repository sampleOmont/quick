<?php

namespace Tests;
use Page\TasksPage;

/**
 * Class AddTaskCest
 * @group Smoke_2
 * @package Tests
 */
class AddTaskCest
{
    const TEST_TASK = 'Add new task message';

    /**
     * Function for Adding new task
     *
     * @param \AcceptanceTester $I    used as variable of automation framework
     * @param TasksPage         $page used as page object model for tasks
     * @return void
     */
    public function addNewTask(\AcceptanceTester $I, TasksPage $page)
    {
        $I->wantTo('Add new Task');
        $I->amOnPage('');
        $I->waitForElementVisible(['xpath'=>'//input[@type="text"]'], 10);
        $I->fillField(TasksPage::TASK_EDITABLE, static::TEST_TASK);
        $I->click(TasksPage::ADD_TASK_BUTTON);
        $I->waitForText(TasksPage::TASKS_TABLE_LABEL);
        $I->see(TasksPage::TASKS_TABLE_LABEL);
        $I->waitForElementVisible($page->taskElement(static::TEST_TASK));
        $I->seeElement($page->taskElement(static::TEST_TASK));
    }
}
