<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;
/**
 * Interface ClassifierInterface
 * @package HighlightLib\Contracts
 */
interface ClassifierInterface {
    /**
     * @param array $stringToken
     * @return TokenInterface
     */
    public function classify(array $stringToken): TokenInterface;
}
