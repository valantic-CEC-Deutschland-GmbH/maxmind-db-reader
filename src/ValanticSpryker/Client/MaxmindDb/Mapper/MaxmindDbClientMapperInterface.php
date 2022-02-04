<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb\Mapper;

use Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer;
use GeoIp2\Model\Country;

interface MaxmindDbClientMapperInterface
{
    /**
     * @param \GeoIp2\Model\Country $country
     *
     * @return \Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer
     */
    public function mapMaxmindDbRecordToMaxmindDbResponseTransfer(Country $country): MaxmindDbCountryResponseTransfer;
}
