<?php
    class Coin
    {
        function CoinCombo($something)
        {
            $cash = floatval($something);
            $cash = floor(($cash*100))/100;
            $cash = strval($cash);
            $cash = explode('.', $cash);
            $cash = $cash[1];

            $totalCoins = 0;
            $remainQ = $cash%25;//15
            $quarters = ($cash-$remainQ)/25; //3
            $totalCoins += $quarters;

            $remainD = $remainQ%10;//5
            $dimes = ($remainQ-$remainD)/10;
            $totalCoins += $dimes;

            $remainN = $remainD%5;
            $nickles = ($remainD-$remainN)/5;
            $totalCoins += $nickles;

            $remainP = $remainN%1;
            $pennies = ($remainN-$remainP)/1;
            $totalCoins += $pennies;

            return array("total"=>$totalCoins, "quarters"=>$quarters, "dimes"=>$dimes, "nickles"=>$nickles, "pennies"=>$pennies);
        }
    }

?>
