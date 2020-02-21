<?php

namespace HighlightLib\Token;
/**
 * Class BuiltinToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class BuiltinToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "builtin";
    }
}