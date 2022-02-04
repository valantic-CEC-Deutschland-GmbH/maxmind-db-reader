<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb;

use Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer;
use Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \ValanticSpryker\Client\MaxmindDb\MaxmindDbFactory getFactory()
 */
class MaxmindDbClient extends AbstractClient implements MaxmindDbClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer
     *
     * @return \Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer
     */
    public function country(MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer): MaxmindDbCountryResponseTransfer
    {
        return $this->getFactory()
            ->createMaxmindDb()
            ->country($maxmindDbCountryRequestTransfer);
    }
}
