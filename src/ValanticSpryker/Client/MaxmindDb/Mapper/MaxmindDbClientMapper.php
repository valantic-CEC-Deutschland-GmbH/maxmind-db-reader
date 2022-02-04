<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb\Mapper;

use Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer;
use GeoIp2\Model\Country;

class MaxmindDbClientMapper implements MaxmindDbClientMapperInterface
{
    /**
     * @param \GeoIp2\Model\Country $country
     *
     * @return \Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer
     */
    public function mapMaxmindDbRecordToMaxmindDbResponseTransfer(Country $country): MaxmindDbCountryResponseTransfer
    {
        return (new MaxmindDbCountryResponseTransfer())
            ->setIsoCode($country->country->isoCode)
            ->setConfidence($country->country->confidence)
            ->setGeonameId($country->country->geonameId)
            ->setName($country->country->name)
            ->setIsInEuropeanUnion($country->country->isInEuropeanUnion);
    }
}
