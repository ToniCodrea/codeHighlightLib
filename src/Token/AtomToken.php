<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class AtomToken implements TokenInterface {

    public function getCSSType(): string {
        return "atom";
    }
}