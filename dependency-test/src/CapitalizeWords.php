<?php


namespace App;


class CapitalizeWords implements Transform
{
    public function transform(string $word): string
    {
        for ($i = 0; $i <= strlen($word); $i+=2) {
            $word[$i] = strtoupper($word[$i]);
        }
        return $word;
    }
}