<?php


namespace App;


class DashTheSpaces implements Transform
{
    public function transform(string $word): string
    {
        return str_replace(' ', '-', $word);
    }
}