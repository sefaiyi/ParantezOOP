<?php


class CharacterChecker extends AbstractChecker implements Checker
{
    /**
     * @param string $input
     * @throws CheckException
     */
    public function check(string $input): void
    {
        preg_match("#^[\[\]\(\)\{\}]+$#",$input,$matches);

        if (empty($matches)) {
            throw new CheckException("Hatalı Parametre");
        }
    }
}