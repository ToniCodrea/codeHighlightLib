<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;
/**
 * Interface ElementInterface
 * @package HighlightLib\Contracts
 */
interface ElementInterface {
    /**
     * @return string
     */
    function getText() : string;
    /**
     * @param int $previousOffset
     * @return string
     */
    function getSpaces(int $previousOffset) : string;
    /**
     * @return int
     */
    function getOffset() : int;
}