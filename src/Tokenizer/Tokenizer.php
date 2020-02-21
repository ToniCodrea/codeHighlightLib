<?php

declare(strict_types=1);

namespace HighlightLib\Tokenizer;
use HighlightLib\Contracts\TokenizerInterface;

/**
 * Separates input string by whitespace and returns an array of arrays that holds a tokenized string and its offset
 * Class Tokenizer
 * @package HighlightLib\Tokenizer
 */
class Tokenizer implements TokenizerInterface {
    public function tokenize(string $in): array {
        return preg_split('/\s+/', $in, 0, PREG_SPLIT_OFFSET_CAPTURE);
    }
}