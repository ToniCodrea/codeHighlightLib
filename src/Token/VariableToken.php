<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class VariableToken implements TokenInterface {

    public function getCSSType(): string {
        return "variable";
    }
}