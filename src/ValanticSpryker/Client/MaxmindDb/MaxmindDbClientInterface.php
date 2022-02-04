<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb;

use Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer;
use Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer;

interface MaxmindDbClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer
     *
     * @return \Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer
     */
    public function country(MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer): MaxmindDbCountryResponseTransfer;
}
