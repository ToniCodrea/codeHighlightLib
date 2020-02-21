<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class PlainToken implements TokenInterface {

    public function getCSSType(): string {
        return "plain";
    }
}