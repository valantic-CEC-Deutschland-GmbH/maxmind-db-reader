<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb;

use GeoIp2\Database\Reader;
use Spryker\Client\Kernel\AbstractFactory;
use ValanticSpryker\Client\MaxmindDb\Mapper\MaxmindDbClientMapper;
use ValanticSpryker\Client\MaxmindDb\Mapper\MaxmindDbClientMapperInterface;
use ValanticSpryker\Client\MaxmindDb\MaxmindDb\MaxmindDb;
use ValanticSpryker\Client\MaxmindDb\MaxmindDb\MaxmindDbInterface;

/**
 * @method \ValanticSpryker\Client\MaxmindDb\MaxmindDbConfig getConfig()
 */
class MaxmindDbFactory extends AbstractFactory
{
    /**
     * @return \ValanticSpryker\Client\MaxmindDb\MaxmindDb\MaxmindDbInterface
     */
    public function createMaxmindDb(): MaxmindDbInterface
    {
        return new MaxmindDb(
            $this->createMaxmindDbReader(),
            $this->createMaxmindDbMapper(),
        );
    }

    /**
     * @return \GeoIp2\Database\Reader
     */
    public function createMaxmindDbReader(): Reader
    {
        return new Reader(
            $this->getConfig()->getDatabaseFileLocation(),
        );
    }

    /**
     * @return \ValanticSpryker\Client\MaxmindDb\Mapper\MaxmindDbClientMapper
     */
    public function createMaxmindDbMapper(): MaxmindDbClientMapperInterface
    {
        return new MaxmindDbClientMapper();
    }
}
