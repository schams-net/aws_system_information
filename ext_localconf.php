<?php

/*
 * This file is part of the TYPO3 CMS Extension "AWS System Information"
 * Extension author: Michael Schams - https://schams.net
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code.
 *
 * @package     TYPO3
 * @subpackage  aws_system_information
 * @author      Michael Schams <schams.net>
 * @link        https://schams.net
 */

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Imaging\IconRegistry;
use \TYPO3\CMS\Core\Imaging\IconProvider\FontAwesomeIconProvider;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {

    if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
        $iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
        $iconRegistry->registerIcon(
            'systeminformation-aws',
            FontawesomeIconProvider::class,
            ['name' => 'cube']
        );

        // Connect Signal to Slot
        GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)
            ->connect(
                \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class,
                'getSystemInformation',
                \SchamsNet\AwsSystemInformation\Slots\SystemInformationSlot::class,
                'addEnvironmentInformation'
            );
    }

    // Configure logging
    $logging = array(
        \TYPO3\CMS\Core\Log\LogLevel::INFO => array(
            'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => array(
                'logFile' => 'typo3temp/var/logs/' . date('Ymd') . '.log'
            )
        )
    );

    // Activate logging
    $GLOBALS['TYPO3_CONF_VARS']['LOG']['SchamsNet']['AwsSystemInformation']['Slots']['writerConfiguration'] = $logging;
    unset($logging);
});
