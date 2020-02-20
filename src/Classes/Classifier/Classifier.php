<?php

declare(strict_types=1);

namespace HighlightLib\Classes\Classifier;

use HighlightLib\Contracts\Classifier\ClassifierInterface;
use HighlightLib\Contracts\Token\TokenInterface;
use HighlightLib\Config;


class Classifier implements ClassifierInterface {
    private $config;

    public function __construct() {
        $this->config = require '/var/www/codeHighlightLib/src/Config/config.php';
    }

    public function classify(string $stringToken): TokenInterface {
        //print_r($this->config);
        foreach ($this->config as $reg => $value) {
            if (preg_match($reg, $stringToken) ) return new $value;
        }
    }

}