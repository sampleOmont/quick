<?php

namespace Tests;

use Page\ApiPage;
use Page\TasksPage;

/**
 * Class DeleteTaskCest
 * @group Smoke_2
 * @package Tests
 */
class DeleteTaskCest
{
    const TEST_TASK = 'Add new task message';

    /**
     * Function for creating one task using API
     *
     * @param ApiPage $page used as page object model for api calls
     * @return void
     */
    public function _before(ApiPage $page)
    {
        $page->newTask(static::TEST_TASK);
    }

    /**
     * Function for Deleting task
     *
     * @param \AcceptanceTester $I    used as variable of automation framework
     * @param TasksPage         $page used as page object model for tasks
     * @return void
     */
    public function deleteTask(\AcceptanceTester $I, TasksPage $page)
    {
        $I->wantTo('Delete Task');
        $I->amOnPage('');
        $I->waitForElementVisible(['xpath' => '//input[@type="text"]'], 10);
        $I->waitForElementVisible($page->taskElement(static::TEST_TASK));
        $I->seeElement($page->taskElement(static::TEST_TASK));
        $I->waitForElementVisible($page->deleteItem(static::TEST_TASK));
        $I->click($page->deleteItem(static::TEST_TASK));
        $I->waitForElementNotVisible($page->deleteItem(static::TEST_TASK));
        $I->dontSeeElement($page->taskElement(static::TEST_TASK));
        $I->dontSee(static::TEST_TASK);
    }
}
