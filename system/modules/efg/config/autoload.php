<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package Efg
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Efg',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Efg\Formdata'                => 'system/modules/efg/classes/Formdata.php',
	'Efg\FormdataComments'        => 'system/modules/efg/classes/FormdataComments.php',
	'Efg\FormdataProcessor'       => 'system/modules/efg/classes/FormdataProcessor.php',

	// Drivers
	'Efg\DC_Formdata'             => 'system/modules/efg/drivers/DC_Formdata.php',

	// Forms
	'Efg\EfgFormGallery'          => 'system/modules/efg/forms/EfgFormGallery.php',
	'Efg\EfgFormImageSelect'      => 'system/modules/efg/forms/EfgFormImageSelect.php',
	'Efg\EfgFormLookupCheckbox'   => 'system/modules/efg/forms/EfgFormLookupCheckbox.php',
	'Efg\EfgFormLookupRadio'      => 'system/modules/efg/forms/EfgFormLookupRadio.php',
	'Efg\EfgFormLookupSelectMenu' => 'system/modules/efg/forms/EfgFormLookupSelectMenu.php',
	'Efg\EfgFormPaginator'        => 'system/modules/efg/forms/EfgFormPaginator.php',
	'Efg\ExtendedForm'            => 'system/modules/efg/forms/ExtendedForm.php',

	// Modules
	'Efg\FormdataBackend'         => 'system/modules/efg/modules/FormdataBackend.php',
	'Efg\ModuleFormdataListing'   => 'system/modules/efg/modules/ModuleFormdataListing.php',

	// Widgets
	'Efg\EfgLookupOptionWizard'   => 'system/modules/efg/widgets/EfgLookupOptionWizard.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'edit_fd_default'           => 'system/modules/efg/templates',
	'efg_internal_config'       => 'system/modules/efg/templates',
	'efg_internal_dca_formdata' => 'system/modules/efg/templates',
	'efg_internal_modules'      => 'system/modules/efg/templates',
	'form_efg_imageselect'      => 'system/modules/efg/templates',
	'form_paginator'            => 'system/modules/efg/templates',
	'info_fd_simple_default'    => 'system/modules/efg/templates',
	'info_fd_table_default'     => 'system/modules/efg/templates',
	'list_fd_simple_default'    => 'system/modules/efg/templates',
	'list_fd_table_default'     => 'system/modules/efg/templates',
));
