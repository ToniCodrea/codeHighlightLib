<?php

namespace HighlightLib\Token;
/**
 * Class PlainToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class PlainToken extends AbstractToken {
    /**
     * Returns simple unaltered token in case of an element that isn't part of a CSS class
     * @return string
     */
    function getText(): string
    {
        return " ". $this->stringToken;
    }

    public function getCSSType(): string
    {
        return "plain";
    }
}