<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;

// remove PasswordValidator for SilverStripe 5.0
$validator = new PasswordValidator();
$validator->setMinLength(8);
$validator->setHistoricCount(6);
Member::set_password_validator($validator);
