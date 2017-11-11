<?php

/**
 * The list of modules application.
 * Legends:
 *  - Symbol "!" (exclamation mark) - A module is not for the production mode (APP_ENV_PROD).
 */

return [
    'Zend\Router',
    'Zend\I18n',
    'Zend\Mvc\I18n',
    'Zend\Navigation',
    'Zend\Mvc\Plugin\FlashMessenger',
    'ExValidate',
    'DoctrineModule',
    'DoctrineORMModule',
    'ExDoctrine',
    'AsseticBundle',
    'ExAssetic',
    'ZfcTwig',
    'ExTwig',
    'Bupy7\Form',
    'Bupy7\Mailgun',
    'Mail',
    'ZfcRbac',
    'ExRbac',
    'Cli',
    'Application',
    'User',
    '!ZfSnapPhpDebugBar',
    '!ExDebugBar',
];

