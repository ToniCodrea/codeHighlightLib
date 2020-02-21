<?php

declare(strict_types=1);

namespace HighlightLib\Classifier;

use HighlightLib\Token\PlainToken;
use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\TokenInterface;

/**
 * Class Classifier
 * @package HighlightLib\Classifier
 */
class Classifier implements ClassifierInterface {
    /**
     * @var
     */
    private $config;
    /**
     * Classifier constructor.
     * @param $path
     */
    public function __construct($path) {
        $this->config = $path;
    }

    /**
     * @param array $stringToken
     * @return TokenInterface
     */
    /**
     * @param array $stringToken
     * @return TokenInterface
     */
    public function classify(array $stringToken): TokenInterface {
        foreach ($this->config as $reg => $value) {
            if (preg_match($reg, $stringToken[0]) ) return new $value($stringToken[0],$stringToken[1]);
        }
        return new PlainToken($stringToken[0], $stringToken[1]);
    }

}