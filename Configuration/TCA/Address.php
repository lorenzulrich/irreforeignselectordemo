<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_irreforeignselectordemo_domain_model_address'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_irreforeignselectordemo_domain_model_address']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, city',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, city, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_irreforeignselectordemo_domain_model_address',
				'foreign_table_where' => 'AND tx_irreforeignselectordemo_domain_model_address.pid=###CURRENT_PID### AND tx_irreforeignselectordemo_domain_model_address.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:irreforeignselectordemo/Resources/Private/Language/locallang_db.xlf:tx_irreforeignselectordemo_domain_model_address.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:irreforeignselectordemo/Resources/Private/Language/locallang_db.xlf:tx_irreforeignselectordemo_domain_model_address.city',
			'config' => array(
				'appearance'       => array(
					'collapseAll'     => TRUE,
					'expandSingle'    => TRUE,
					'useCombination'  => 1,
					'useSortable'     => TRUE,
					'enabledControls' => array(
						'info',
						'new',
						'dragdrop',
						'sort',
						'hide',
						'delete',
						'localize'
					),
				),
				'type' => 'inline',
				'foreign_table' => 'tx_irreforeignselectordemo_address_city_mm',
				'foreign_table_field' => 'tablenames',
				'foreign_field' => 'uid_foreign',
				'foreign_label' => 'uid_local',
				'foreign_selector' => 'uid_local',
				'foreign_sortby' => 'sorting_foreign',
				'foreign_match_fields' => array(
					'fieldname' => 'city',
					'tablenames' => 'tx_irreforeignselectordemo_domain_model_address',
					'table_local' => 'tx_irreforeignselectordemo_domain_model_city'
				)
			),
		),
		
	),
);
