<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that frontpage works');
$I->makeScreenshot('front_page');
$I->amOnPage('/');
$I->see('Home');
