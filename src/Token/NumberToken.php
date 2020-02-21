<?php

namespace HighlightLib\Token;

class NumberToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "number";
    }
}