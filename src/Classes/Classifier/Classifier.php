<?php

declare(strict_types=1);

namespace HighlightLib\Classes\Classifier;

use HighlightLib\Contracts\Classifier\ClassifierInterface;
use HighlightLib\Contracts\Token\TokenInterface;


class Classifier implements ClassifierInterface
{

    public function classify(string $stringToken): TokenInterface {
        $config = require '/var/www/codeHighlightLib/src/Config/config.php';
        foreach ($config as $reg => $value) {
            if (preg_match($reg, $stringToken) ) return new $value;
        }
    }
}