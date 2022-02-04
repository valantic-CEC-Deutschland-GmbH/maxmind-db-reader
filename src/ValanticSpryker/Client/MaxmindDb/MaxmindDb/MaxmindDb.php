<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb\MaxmindDb;

use Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer;
use Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer;
use GeoIp2\Database\Reader;
use ValanticSpryker\Client\MaxmindDb\Mapper\MaxmindDbClientMapperInterface;

class MaxmindDb implements MaxmindDbInterface
{
    /**
     * @var \GeoIp2\Database\Reader
     */
    public $maxmindDbReader;

    /**
     * @var \ValanticSpryker\Client\MaxmindDb\Mapper\MaxmindDbClientMapperInterface
     */
    public $maxmindDbClientMapper;

    /**
     * @param \GeoIp2\Database\Reader $maxmindDbReader
     * @param \ValanticSpryker\Client\MaxmindDb\Mapper\MaxmindDbClientMapperInterface $maxmindDbClientMapper
     */
    public function __construct(Reader $maxmindDbReader, MaxmindDbClientMapperInterface $maxmindDbClientMapper)
    {
        $this->maxmindDbReader = $maxmindDbReader;
        $this->maxmindDbClientMapper = $maxmindDbClientMapper;
    }

    /**
     * @param \Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer
     *
     * @return \Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer
     */
    public function country(MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer): MaxmindDbCountryResponseTransfer
    {
        $country = $this->maxmindDbReader
            ->country($maxmindDbCountryRequestTransfer->getIp());

        return $this->maxmindDbClientMapper
            ->mapMaxmindDbRecordToMaxmindDbResponseTransfer($country);
    }
}
