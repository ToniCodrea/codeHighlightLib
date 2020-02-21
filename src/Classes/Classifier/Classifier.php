<?php

declare(strict_types=1);

namespace HighlightLib\Classes\Classifier;

use HighlightLib\Classes\Token\PlainToken;
use HighlightLib\Contracts\Classifier\ClassifierInterface;
use HighlightLib\Contracts\Token\TokenInterface;



class Classifier implements ClassifierInterface {
    private $config;

    public function __construct($path) {
        $this->config = $path;
    }

    public function classify(string $stringToken): TokenInterface {
        foreach ($this->config as $reg => $value) {
            if (preg_match($reg, $stringToken) ) return new $value;
        }
        return new PlainToken();
    }

}