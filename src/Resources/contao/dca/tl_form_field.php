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
 * Modify fields of tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'iban';
$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'bic';
