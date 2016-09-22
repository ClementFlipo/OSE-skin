<?php

$wgResourceModules['ext.OSEStyleModule.css'] = array(
		'scripts' => array(),
		'styles' => array('style.css'),
		'messages' => array(
		),
		'dependencies' => array(
		),
		'position' => 'bottom',
		'localBasePath' => __DIR__ . '/ressources',
		'remoteExtPath' => 'OSEStyleModule/ressources',
);

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "/extensions/OSEStyleModule/ressources/images/wiki.png";

$wgFavicon = "/extensions/OSEStyleModule/ressources/images/favicon.ico";


$egChameleonExternalStyleModules[__DIR__ . '/ressources/style.css' ] = $wgScriptPath . '/skins/ose-skin';

$wgHooks['BeforePageDisplay'][] = "oseStyleModuleOnBeforePageDisplay";

function oseStyleModuleOnBeforePageDisplay( $out ) {
	$out->addModules( 'ext.OSEStyleModule.css' );
}

$wfexploreCategories = array (
        'Type' => array (
                'Recherches théoriques' => 'Recherches théoriques',
                'Prototype' => 'Prototype',
				'En test' => 'En test',
				'Low-tech validée' => 'Low-tech validée'
        ),
        'area' => array (
                'Énergie' => 'Énergie',
                'Alimentation' => 'Alimentation',
                'Hygiène' => 'Hygiène',
                'Soleil' => 'Soleil',
                'Marin' => 'Marin',
                'Biomasse' => 'Biomasse',
                'Eau' => 'Eau',
                'Outils' => 'Outils',
                'Vent' => 'Vent',
                'Hydrolique' => 'Hydrolique',
                'Humain' => 'Humain',
        ),
        'Difficulty' => array (
                'Très facile' => 'Très facile',
                'Facile' => 'Facile',
                'Moyen' => 'Moyen',
                'Difficile' => 'Difficile',
                'Très difficile' => 'Très difficile'
        )
);