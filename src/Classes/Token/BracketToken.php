<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class BracketToken implements TokenInterface {

    public function getCSSType(): string {
        return "bracket";
    }
}