<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\MaxmindDb;

use Spryker\Client\Kernel\AbstractBundleConfig;
use ValanticSpryker\Shared\MaxmindDb\MaxmindDbConstants;

class MaxmindDbConfig extends AbstractBundleConfig
{
    /**
     * @return string|null
     */
    public function getDatabaseFileLocation(): ?string
    {
        return $this->get(MaxmindDbConstants::MAXMIND_DB_FILE_LOCATION);
    }
}
