<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Client;

use JsonSerializable;

class ResultOfVersion implements JsonSerializable
{
    /** Core Library version */
    private string $_version;

    public function __construct(?array $dto = null)
    {
        if (!$dto) return;
        $this->_version = $dto['version'];
    }

    /**
     * Core Library version
     */
    public function getVersion(): string
    {
        return $this->_version;
    }

    /**
     * Core Library version
     */
    public function setVersion(string $version): self
    {
        $this->_version = $version;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = [];
        if ($this->_version !== null) $result['version'] = $this->_version;
        return $result;
    }
}
