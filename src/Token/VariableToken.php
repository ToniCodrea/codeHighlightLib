<?php

namespace HighlightLib\Token;
/**
 * Class VariableToken
 * @package HighlightLib\Token
 * @inheritDoc
 */

class VariableToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "variable";
    }
}