<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class BuiltinToken implements TokenInterface {

    public function getCSSType(): string {
        return "builtin";
    }
}