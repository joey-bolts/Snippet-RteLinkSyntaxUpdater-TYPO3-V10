# RteLinkSyntaxUpdater.php
With this code you should be able to execute the RteLinkSyntaxUpdater in TYPO3 V10

**Useful links**
- https://github.com/TYPO3/typo3/blob/TYPO3_8-7/typo3/sysext/install/Classes/Updates/RowUpdater/RteLinkSyntaxUpdater.php
- https://forge.typo3.org/issues/80903



# How to make it work
`site_template` is your extension name/key, please adjust it to make it fit your extension. 

- Copy the following files into your project.
1. site_template/Classes/Update/LinkRowsUpgradeWizard.php
2. site_template/Classes/Update/RteLinkSyntaxUpdater.php


- Adjust the namespace
- Add the following code to ext_localconf.php of your extension.
- Validate that the namespace is correct.
```
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['linkRowsUpgradeWizard']
        = \Organisation\SiteTemplate\Update\LinkRowsUpgradeWizard::class;
```

- run cli command or execute it in the backend ./typo3cms upgrade:run linkRowsUpgradeWizard
