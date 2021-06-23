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

use Contao\Validator as CoreValidator;


class Validator extends CoreValidator {


    /**
     * Check if given value is a valid IBAN
     *
     * @param mixed $varValue
     * @param boolean $blnMachineFormatOnly
     *
     * @return bool
     */
    public static function isIban( $varValue, $blnMachineFormatOnly = false ): bool {
        return verify_iban($varValue, $blnMachineFormatOnly);
    }


    /**
     * Check if given value is valid BIC
     *
     * @param  mixed $varValue
     *
     * @return boolean
     */
    public static function isBic( $varValue ): bool {
        return (bool) preg_match('/^[A-Za-z]{4,} ?[A-Za-z]{2,} ?[A-Za-z0-9]{2,} ?([A-Za-z0-9]{3,})?$/', $varValue);
    }
}
