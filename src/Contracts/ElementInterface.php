<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface ElementInterface {
    function getText() : string;
    function getSpaces(int $previousOffset) : string;
    function getOffset() : int;
}