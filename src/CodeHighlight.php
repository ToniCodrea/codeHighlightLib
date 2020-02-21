<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Assembler\Assembler;
use HighlightLib\Tokenizer\Tokenizer;
use HighlightLib\Classifier\Classifier;

class CodeHighlight {

    /**
     * @var Tokenizer
     */
    private $tokenizer;

    /**
     * @var Assembler
     */
    private $assembler;

    /**
     * @var Classifier
     */
    private $classifier;

    /**
     * Initializes main parts of the highlighter, classifier takes Regex expressions from the file in $path
     * CodeHighlight constructor.
     * @param $path
     */
    public function __construct($path)  {
        $this->classifier = new Classifier($path);
        $this->tokenizer = new Tokenizer();
        $this->assembler = new Assembler();

    }

    /**
     * @param string $string
     * @return string
     */
    public function highlight(string $string): string {
        $arr = array();
        foreach ($this->tokenizer->tokenize($string) as $stringToken) { //takes each sub-array of the tokenized array
            $arr[] = $this->classifier->classify($stringToken); //puts a newly initialized object in an array
        }
        return $this->assembler->assemble($arr); //returns string assembled from array objects
    }
}


