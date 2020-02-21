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

    public function classify(array $stringToken): TokenInterface {
        foreach ($this->config as $reg => $value) {
            if (preg_match($reg, $stringToken[0]) ) return new $value($stringToken[0],$stringToken[1]);
        }
        return new PlainToken($stringToken[0], $stringToken[1]);
    }

}