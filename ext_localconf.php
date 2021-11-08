<?php
defined('TYPO3_MODE') || die();

$boot = function ($packageKey) {

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['linkRowsUpgradeWizard']
        = \Organisation\SiteTemplate\Update\LinkRowsUpgradeWizard::class;

};
$boot('site_template');
unset($boot);
