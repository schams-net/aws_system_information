<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'AWS System Information',
  'description' => 'Extend System Information panel to show Amazon EC2 details',
  'category' => 'backend',
  'author' => 'Michael Schams',
  'author_email' => '',
  'author_company' => 'schams.net',
  'version' => '1.0.0',
  'state' => 'stable',
  'constraints' => [
    'depends' => [
      'typo3' => '8.7.0-9.5.99',
      'fluid_styled_content' => '8.7.0-9.5.99'
    ],
    'conflicts' => [
    ],
  ],
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1
];