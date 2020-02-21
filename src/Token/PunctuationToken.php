<?php

namespace HighlightLib\Token;
/**
 * Class PunctuationToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class PunctuationToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "punctuation";
    }
}