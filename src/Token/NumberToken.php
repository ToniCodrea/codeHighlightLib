<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class NumberToken implements TokenInterface {

    public function getCSSType(): string {
        return "number";
    }
}