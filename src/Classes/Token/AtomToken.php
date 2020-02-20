<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class AtomToken implements TokenInterface {

    public function getCSSType(): string {
        return "atom";
    }
}