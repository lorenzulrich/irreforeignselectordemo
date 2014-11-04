<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
return array(
	'ctrl'      => array(
		'title'     => 'Relation table',
		'hideTable' => TRUE,
		'sortby'    => 'sorting',
	),
	'columns'   => array(
		'uid_address' => Array(
			'label'  => 'Address',
			'config' => Array(
				'type'          => 'select',
				'foreign_table' => 'tx_irreforeignselectordemo_domain_model_address',
				'size'          => 1,
				'minitems'      => 0,
				'maxitems'      => 1,
			),
		),
		'uid_city'   => Array(
			'label'  => 'City',
			'config' => Array(
				'type'                => 'select',
				'foreign_table'       => 'tx_irreforeignselectordemo_domain_model_city',
				'foreign_table_where' => ' AND sys_language_uid IN (0,-1)',
				'size'                => 1,
				'minitems'            => 0,
				'maxitems'            => 1,
			),
		),
	),
	'types'     => array(
		'0' => array('showitem' => 'uid_address,uid_city')
	),
	'palettes'  => array()
);