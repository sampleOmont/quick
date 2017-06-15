<?php

namespace Tests;
use Page\TasksPage;

/**
 * Class EmptyErrorMessageShownCest
 * @group Smoke_1
 * @package Tests
 */
class EmptyErrorMessageShownCest
{

    /**
     * Function for Empty Error message shown
     *
     * @param \AcceptanceTester $I used as variable of automation framework
     * @return void
     */
    public function errorMessageShown(\AcceptanceTester $I)
    {
        $I->wantTo('Empty Error message shown');
        $I->amOnPage('');
        $I->waitForElementVisible(['xpath'=>'//input[@type="text"]'], 10);
        $I->click(TasksPage::ADD_TASK_BUTTON);
        $I->waitForElementVisible(['xpath' => '//strong[.="'.TasksPage::ERROR_MESSAGE_TITLE.'"]'], 10);
        $I->see(TasksPage::ERROR_MESSAGE_TITLE);
        $I->waitForText(TasksPage::ERROR_MESSAGE, 5);
        $I->see(TasksPage::ERROR_MESSAGE);
    }
}
