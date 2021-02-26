<?php


class ParenthesisBalanceChecker extends AbstractChecker implements Checker
{
    /**
     * @param string $input
     * @throws CheckException
     */
    public function check(string $input):void{
        preg_match_all("#[\[\{\(]#",$input,$openings);
        preg_match_all("#[\]\}\)]#",$input,$closings);
        $openings = $openings[0];
        $closings = array_reverse($closings[0]);
        foreach ($openings as $index => $perOpening) {
            if (!array_key_exists($index,$closings) || $this->getParenthesisArray()[$perOpening] !== $closings[$index]) {
                throw new CheckException("Başarısız");
            }
        }
    }
}