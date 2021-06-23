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


namespace numero2\ValidateIbanBicBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use numero2\ValidateIbanBicBundle\ValidateIbanBicBundle;


class Plugin implements BundlePluginInterface {


    /**
     * {@inheritdoc}
     */
    public function getBundles( ParserInterface $parser ): array {

        return [
            BundleConfig::create(ValidateIbanBicBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class
                ])
        ];
    }
}
