<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class NumberToken implements TokenInterface {

    public function getCSSType(): string {
        return "number";
    }
}