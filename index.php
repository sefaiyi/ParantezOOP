<?php
include "include.php";
/*
 * Since we are directly getting instance from implementation itself, we don't actually need the InputValidator Interface
 * But i created it for DI implementation purposes
 * */
$inputValidator = new InputValidatorImpl();
$inputValidator->registerChecker(new CharacterChecker());
$inputValidator->registerChecker(new ParenthesisClosingChecker());
$inputValidator->registerChecker(new ParenthesisBalanceChecker());



echo $inputValidator->validateInput("[{()}]")."<br>";
echo $inputValidator->validateInput("{[]{}(})")."<br>";
echo $inputValidator->validateInput("{[]{}(((((({{{{{{[[[[[)")."<br>";
echo $inputValidator->validateInput("()(({{{[[[(")."<br>";
echo $inputValidator->validateInput("(((((((")."<br>";
echo $inputValidator->validateInput("))))))(")."<br>";
echo $inputValidator->validateInput("/*-/*-/test))))))(")."<br>";