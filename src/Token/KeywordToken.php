<?php

namespace HighlightLib\Token;
/**
 * Class KeywordToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class KeywordToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "keyword";
    }
}