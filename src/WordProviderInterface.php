<?php

namespace KnpU\LoremIpsumBundle;

interface WordProviderInterface
{
    /**
     * Returns an array of words to use for fake text.
     *
     * @return array
     */
    public function getWordList(): array;
}