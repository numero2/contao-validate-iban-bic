<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2021 Leo Feyer
 *
 * @package   ValidateIbanBic
 * @author    Benny Born <benny.born@numero2.de>
 * @author    Michael Bösherz <michael.boesherz@numero2.de>
 * @license   LGPL
 * @copyright 2021 numero2 - Agentur für digitales Marketing GbR
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = ['numero2\ValidateIbanBic\Util\Widget', 'validateRgxp'];
