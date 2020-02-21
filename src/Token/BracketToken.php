<?php

namespace HighlightLib\Token;

class BracketToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "bracket";
    }
}