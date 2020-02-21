<?php

namespace HighlightLib\Token;
/**
 * Class BracketToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class BracketToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "bracket";
    }
}