<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface TokenizerInterface {
    public function tokenize(string $in): array;
}


