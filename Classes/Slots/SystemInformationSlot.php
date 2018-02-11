<?php
namespace SchamsNet\AwsSystemInformation\Slots;

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

use TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Signal Service
 */
class SystemInformationSlot
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        /** @var $logger \TYPO3\CMS\Core\Log\Logger */
        $this->logger = GeneralUtility::makeInstance('TYPO3\CMS\Core\Log\LogManager')->getLogger(__CLASS__);
    }

    /**
     * ...
     *
     * @access public
     * @param SystemInformationToolbarItem $systemInformation
     */
    public function addEnvironmentInformation(SystemInformationToolbarItem $systemInformation)
    {
        // $this->logger->info(__METHOD__);

        // Set system information entry
        $systemInformation->addSystemInformation(
            htmlspecialchars('EC2 Instance Type'),
            htmlspecialchars('t2.medium'),
            'systeminformation-aws'
        );
    }
}
