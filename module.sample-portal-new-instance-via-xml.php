<?php

//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sample-portal-new-instance-via-xml/2.4.0', array(
	// Identification
	//
		'label' => 'Sample Portal (New instance via XML)',
		'category' => 'portal',
	// Setup
	//
		'dependencies' => array(
		'itop-portal-base/2.4.0'
	),
	'mandatory' => false,
	'visible' => true,
	// Components
	//
	'datamodel' => array(
	),
	'webservice' => array(
	),
	'data.struct' => array(
	// add your 'structure' definition XML files here,
	),
	'data.sample' => array(
	// add your sample data XML files here,
	),
	// Documentation
	//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any
	// Default settings
	//
		'settings' => array(
	// Module specific settings go here, if any
	),
	)
);
