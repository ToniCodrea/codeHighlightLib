<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface ClassifierInterface {
    public function classify(string $stringToken): TokenInterface;
}
