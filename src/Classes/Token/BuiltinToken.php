<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class BuiltinToken implements TokenInterface {

    public function getCSSType(): string {
        return "builtin";
    }
}