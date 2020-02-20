<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface ClasifierInterface {
    public function clasify(string $stringToken): TokenInterface;
}
