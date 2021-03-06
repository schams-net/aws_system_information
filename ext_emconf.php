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

$EM_CONF[$_EXTKEY] = [
    'title' => 'AWS System Information',
    'description' => 'Extend System Information panel to show Amazon EC2 instance type, e.g. t2.large',
    'category' => 'backend',
    'author' => 'Michael Schams',
    'author_email' => '',
    'author_company' => 'schams.net',
    'version' => '1.0.0',
    'state' => 'beta',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];
