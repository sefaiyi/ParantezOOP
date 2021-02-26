<?php


class ParenthesisClosingChecker extends AbstractChecker implements Checker
{
    /**
     * @param string $input
     * @throws CheckException
     */
    public function check(string $input):void{
        $success = true;
        $totalUnClosedParenthesis = 0;
        foreach ($this->getParenthesisArray() as $open => $close) {
            $openCount = substr_count($input,$open);
            $closeCount = substr_count($input,$close);

            if ($openCount != $closeCount) {
                $success = false;
                $unClosedParenthesis = $openCount - $closeCount;
                $totalUnClosedParenthesis += $unClosedParenthesis > 0 ? $unClosedParenthesis : 0;
                if ($totalUnClosedParenthesis > 10) {
                    throw new CheckException("Çok Fazla Kapanmamış Parantez Var");
                }
            }
        }

        if (!$success) {
            throw new CheckException("Başarısız");
        }
    }
}