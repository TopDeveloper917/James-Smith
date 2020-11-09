<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Crypto;

use JsonSerializable;

class ParamsOfHash implements JsonSerializable
{
    /** Input data for hash calculation. Encoded with `base64`. */
    private string $_data;

    public function __construct(?array $dto = null)
    {
        if (!$dto) return;
        $this->_data = $dto['data'];
    }

    /**
     * Input data for hash calculation. Encoded with `base64`.
     */
    public function getData(): string
    {
        return $this->_data;
    }

    /**
     * Input data for hash calculation. Encoded with `base64`.
     */
    public function setData(string $data): self
    {
        $this->_data = $data;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = [];
        if ($this->_data !== null) $result['data'] = $this->_data;
        return $result;
    }
}
