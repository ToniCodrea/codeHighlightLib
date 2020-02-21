<?php


namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class NewlineToken implements TokenInterface {
    public function getCSSType(): string {
        return 'newline';
    }
}