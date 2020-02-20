<?php

declare(strict_types=1);

namespace HighlightLib\Classes\Tokenizer;

use HighlightLib\Contracts\Tokenizer\TokenizerInterface;

class TokenizerClass implements TokenizerInterface {
    public function tokenize(string $in): array {
        return preg_split('/\s+/', $in);
    }
}