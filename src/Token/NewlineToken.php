<?php

namespace HighlightLib\Token;
/**
 * Class NewlineToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class NewlineToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "Newline";
    }

    /**
     * If the token is a newline character the newline is added to the output string
     * @return string
     */
    public function getText(): string
    {
        return PHP_EOL;
    }
}