<?php

namespace HighlightLib\Token;

class PlainToken extends AbstractToken {

    function getText(): string
    {
        return " ". $this->stringToken;
    }

    public function getCSSType(): string
    {
        return "plain";
    }
}