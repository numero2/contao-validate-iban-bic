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


namespace numero2\ValidateIbanBic\Util;

use Contao\Widget as CoreWidget;


class Widget {


    /**
     * Validate a custom regular expression
     *
     * @param string $strRgxp
     * @param string $varValue
     * @param Widget $oWidget
     *
     * @return bool
     */
    public function validateRgxp( $strRgxp, $varValue, CoreWidget $oWidget ): bool {

        $elements = explode('::', $strRgxp);

        switch( $elements[0] ) {

            case 'bic':
                if( !Validator::isBic($varValue) ) {
                    $oWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['bic'], $oWidget->label));
                }

                return true;
                break;

            case 'iban':
                if( !Validator::isIban($varValue) ) {
                    $oWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['iban'], $oWidget->label));
                }

                return true;
                break;
        }

        return false;
    }
}
