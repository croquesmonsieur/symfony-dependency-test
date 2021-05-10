<?php


namespace App;


interface Transform
{
public function transform(string $word): string;

}