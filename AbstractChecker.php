<?php


class AbstractChecker
{
    private $parenthesis = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    protected function getParenthesisArray():array{
        return $this->parenthesis;
    }

    protected function getOpenings():array{
        return array_keys($this->getParenthesisArray());
    }

    protected function getClosings():array
    {
        return array_values($this->getParenthesisArray());
    }
}