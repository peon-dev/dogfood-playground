<?php

declare(strict_types=1);

namespace PHPMateDogFood;

final class SwitchToMatch
{
    public function describeFood(string $food): string
    {
        switch($food) {
            case 'vegetable':
                return 'This food is healthy';
           case 'fruit':
                return 'This food is juicy';
            default:
                return 'This food is yummy';
        }
    }
}
