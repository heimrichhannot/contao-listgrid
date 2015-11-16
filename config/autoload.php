<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'HeimrichHannot\ListGrid\ListGridModel'        => 'system/modules/listgrid/models/ListGridModel.php',
	'HeimrichHannot\ListGrid\ListGridContentModel' => 'system/modules/listgrid/models/ListGridContentModel.php',

	// Elements
	'HeimrichHannot\ListGrid\ContentListGridNews'  => 'system/modules/listgrid/elements/ContentListGridNews.php',

	// Classes
	'HeimrichHannot\ListGrid\Backend\DcaManager'   => 'system/modules/listgrid/classes/Backend/DcaManager.php',
	'HeimrichHannot\ListGrid\Hooks\NewsHooks'      => 'system/modules/listgrid/classes/Hooks/NewsHooks.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_listgrid_news' => 'system/modules/listgrid/templates/backend',
));
