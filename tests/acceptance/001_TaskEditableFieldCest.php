<?php

namespace Tests;

/**
 * Class TaskEditableFieldCest
 * @package Tests
 */
class TaskEditableFieldCest
{

    /**
     * Function for Editable text field shown correct
     *
     * @param \AcceptanceTester $I used as variable of automation framework
     * @return void
     */
    public function editableShown(\AcceptanceTester $I)
    {
        $I->wantTo('Editable text field shown correct');
        $I->amOnPage('');
        $I->waitForText('Task st', 10);
        $I->waitForElementVisible(['xpath'=>'//input[@type="text"]'], 10);

    }
}
