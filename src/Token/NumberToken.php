<?php

namespace HighlightLib\Token;
/**
 * Class NumberToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class NumberToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "number";
    }
}