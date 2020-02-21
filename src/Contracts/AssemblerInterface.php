<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;
/**
 * Interface AssemblerInterface
 * @package HighlightLib\Contracts
 */
interface AssemblerInterface {
    /**
     * @param array $tokens
     * @return string
     */
    public function assemble(array $tokens): string;
}
