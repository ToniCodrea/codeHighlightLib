<?php

namespace HighlightLib\Token;
/**
 * Class AtomToken
 * @package HighlightLib\Token
 * @inheritDoc
 */
class AtomToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "atom";
    }
}