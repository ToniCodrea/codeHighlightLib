<?php

declare(strict_types=1);

namespace HighlightLib\Tokenizer;
use HighlightLib\Contracts\TokenizerInterface;

class Tokenizer implements TokenizerInterface {
    public function tokenize(string $in): array {
        return preg_split('/\s+/', $in, 0, PREG_SPLIT_OFFSET_CAPTURE);
    }
}