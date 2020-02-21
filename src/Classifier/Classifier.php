<?php

declare(strict_types=1);

namespace HighlightLib\Classifier;

use HighlightLib\Token\PlainToken;
use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\TokenInterface;

class Classifier implements ClassifierInterface {
    private $config;

    public function __construct($path) {
        $this->config = $path;
    }

    public function classify(string $stringToken): TokenInterface {
        foreach ($this->config as $reg => $value) {
            if (preg_match($reg, $stringToken) ) return new $value($stringToken);
        }
        return new PlainToken($stringToken);
    }

}