<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class PlainToken implements TokenInterface {

    public function getCSSType(): string {
        return "plain";
    }
}