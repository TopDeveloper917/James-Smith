<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Crypto;

use JsonSerializable;

class ResultOfMnemonicFromEntropy implements JsonSerializable
{
    /** Phrase */
    private string $_phrase;

    public function __construct(?array $dto = null)
    {
        if (!$dto) return;
        $this->_phrase = $dto['phrase'];
    }

    /**
     * Phrase
     */
    public function getPhrase(): string
    {
        return $this->_phrase;
    }

    /**
     * Phrase
     */
    public function setPhrase(string $phrase): self
    {
        $this->_phrase = $phrase;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = [];
        if ($this->_phrase !== null) $result['phrase'] = $this->_phrase;
        return $result;
    }
}
