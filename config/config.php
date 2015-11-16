<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 Heimrich & Hannot GmbH
 *
 * @package listgrid
 * @author  Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

/**
 * Back end modules
 */
array_insert(
	$GLOBALS['BE_MOD']['system'],
	2,
	array
	(
		'listgrid' => array(
			'tables' => array('tl_listgrid', 'tl_content'),
			'icon'   => 'system/modules/listgrid/assets/img/listgrid-icon.png',
		),
	)
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_listgrid'] = 'HeimrichHannot\\ListGrid\\ListGridModel';

/**
 * Content Elements
 */
array_insert($GLOBALS['TL_CTE'], 0, array('listgrid' => array('listgrid_news' => 'HeimrichHannot\\ListGrid\\ContentListGridNews')));

/**
 * Listegrid Configurations
 */
$GLOBALS['LISTGRID_TYPES'] = array
(
	'news' => array
	(
		'types' => array('listgrid_news'),
	),
);

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['parseArticles'][]    = array('HeimrichHannot\ListGrid\Hooks\NewsHooks', 'parseArticlesHook');
$GLOBALS['TL_HOOKS']['parseAllArticles'][] = array('HeimrichHannot\ListGrid\Hooks\NewsHooks', 'parseAllArticlesHook');