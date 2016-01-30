<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/');
$I->makeScreenshot('front_page');
$I->see('Home');
