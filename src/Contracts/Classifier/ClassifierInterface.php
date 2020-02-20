<?php

declare(strict_types=1);

namespace HighlightLib\Contracts\Classifier;

use HighlightLib\Contracts\Token\TokenInterface;

interface ClassifierInterface {
    public function classify(string $stringToken): TokenInterface;
}
