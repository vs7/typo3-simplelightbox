<?php

$EM_CONF['simpleLightbox'] = [
	'title' => 'VS7 simpleLightbox',
	'description' => 'Lightbox extension based on simpleLightbox() without dependencies.',
	'category' => 'plugin',
	'version' => '0.0.1',
	'state' => 'stable',
	'uploadfolder' => false,
	'clearcacheonload' => true,
	'author' => 'Vladislav Gevlich',
	'author_email' => 'vs7develop@gmail.com',
	'author_company' => 'VS7',
	'constraints' =>
	[
		'depends' =>
		[
			'typo3' => '13.0.0-13.4.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
