<?php

namespace HighlightLib\Token;

class VariableToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "variable";
    }
}