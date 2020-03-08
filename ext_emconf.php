<?php

$EM_CONF['github_actions_test'] = array(
	'title' => 'Github Actions Test',
	'description' => 'Just an empty shell to test github actions',
	'category' => 'plugin',
	'author' => 'Kevin Ditscheid',
	'author_email' => 'kevin@the-coding-owl.de',
	'state' => 'experimental',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.0.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '10.3.0-10.3.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		)
	)
);
