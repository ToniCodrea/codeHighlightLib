<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class BracketToken implements TokenInterface {

    public function getCSSType(): string {
        return "bracket";
    }
}