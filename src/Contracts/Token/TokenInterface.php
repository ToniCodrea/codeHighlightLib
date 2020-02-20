<?php

declare(strict_types=1);

namespace HighlightLib\Contracts\Token;

interface TokenInterface {
    public function getCSSType() : string;

}