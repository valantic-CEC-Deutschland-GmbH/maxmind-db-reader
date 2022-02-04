<?php

declare(strict_types=1);

namespace ValanticSpryker\Client\MaxmindDb\MaxmindDb;

use Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer;
use Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer;

interface MaxmindDbInterface
{
    /**
     * @param \Generated\Shared\Transfer\MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer
     *
     * @return \Generated\Shared\Transfer\MaxmindDbCountryResponseTransfer
     */
    public function country(MaxmindDbCountryRequestTransfer $maxmindDbCountryRequestTransfer): MaxmindDbCountryResponseTransfer;
}
