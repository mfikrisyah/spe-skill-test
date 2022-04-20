<?php
class SpeSkillTest
{


    /**
     * Main Function
     *
     * @return void
     */
    public function mainFunction()
    {
        $testNarcissistic = $this->narcissistic(1634);

        if ($testNarcissistic) {
            echo 'true';
        } else {
            echo 'false';
        }

        $testParityOutlier = $this->parityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]);
        if ($testParityOutlier) {
            echo $testParityOutlier;
        } else {
            echo 'false';
        }

        $testFindNeedle = $this->findNeedle(['red', 'blue', 'yellow', 'black', 'grey'], 'blue');
        if ($testFindNeedle) {
            echo $testFindNeedle;
        } else {
            echo 'false';
        }

        $testBlueOcean = $this->blueOcean([1, 2, 3, 4, 6, 10], [1]);

        if ($testBlueOcean) {
            print($testBlueOcean);
        } else {
            echo 'false';
        }
    }


    /**
     * Funtion to check NARCISSISTIC NUMBER
     *
     * @param int $var
     * @return boolean
     */
    private function narcissistic(int $var)
    {
        try {
            if (!is_numeric($var)) return false;

            $varSplit   = str_split($var);
            $digit      = count($varSplit);

            $lastValue = 0;
            foreach ($varSplit as $value) $lastValue = $lastValue + $value ^ $digit;

            if ($lastValue !== $var) return false;
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }


    /**
     * Funtion to check Parity Outlier
     *
     * @param array $var
     * @return boolean/int
     */
    private function parityOutlier(array $var)
    {
        try {
            if (!array($var)) return false;


            $lastVal = false;
            $odd    = 0;
            $even   = 0;
            foreach ($var as $value) {
                if ($value % 2 == 0) {
                    $odd = $odd + 1;
                } else {
                    $even = $even + 1;
                }
            }

            if ($odd == 1) {
                foreach ($var as $value) {
                    if ($value % 2 == 0) {
                        $lastVal = $value;
                    }
                }

                return $lastVal;
            } else if ($even == 1) {
                if ($value % 2 != 0) {
                    $lastVal = $value;
                }
                return $lastVal;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Funtion to find needle
     *
     * @param array $var1
     * @param string $var2
     * @return boolean/int
     */
    private function findNeedle(array $var1, string $var2)
    {
        try {
            $i = 0;
            foreach ($var1 as $val) {
                if ($val == $var2) return $i;
                $i++;
            }

            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }


    /**
     * Funtion the blue ocean
     *
     * @param array $var1
     * @param array $var2
     * @return boolean/int
     */
    private function blueOcean(array $var1, array $var2)
    {
        try {
            foreach ($var2 as $val) {
                unset($var1[$val]);
            }

            return $var1;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
