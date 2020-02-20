<?php

declare(strict_types=1);

namespace HighlightLib\Contracts\Tokenizer;

interface TokenizerInterface {
    public function tokenize(string $in): array;
}


