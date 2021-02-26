<?php
interface InputValidator
{
    /**
     * @param string $input*
     * @return string
     */
    function validateInput(string $input) : string;


    /**
     * @param Checker $checker
     */
    function registerChecker(Checker  $checker):void;
}