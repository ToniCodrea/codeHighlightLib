<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class VariableToken implements TokenInterface {

    public function getCSSType(): string {
        return "variable";
    }
}