<?php

interface Checker
{

    /**
     * @param string $input
     * @throws CheckException
     */
    function check(string $input):void;
}