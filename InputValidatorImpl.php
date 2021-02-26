<?php


class InputValidatorImpl implements InputValidator
{
    private $checkers = [];

    function registerChecker(Checker $checker): void
    {
        $this->checkers[] = $checker;
    }

    public function validateInput(string $input): string
    {
        try {

            foreach ($this->checkers as $checker) {
                $checker->check($input);
            }

        } catch (CheckException $e) {
            return $e->getMessage();
        }

        return "Başarılı";
    }
}