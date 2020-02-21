<?php

namespace HighlightLib\Token;

class AtomToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "atom";
    }
}