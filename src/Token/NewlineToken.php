<?php

namespace HighlightLib\Token;

class NewlineToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "Newline";
    }

    public function getText(): string
    {
        return PHP_EOL;
    }
}