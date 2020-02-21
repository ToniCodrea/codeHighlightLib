<?php

namespace HighlightLib\Token;

class BuiltinToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "builtin";
    }
}