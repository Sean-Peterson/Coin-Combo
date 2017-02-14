<?php
    class Ana
    {
        function CoinCombo($something)
        {
            $cash = explode('.', $something);
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

            return $totalCoins . " Coins";
        }
    }

?>


<!-- 90

90-25
65-25
40-25
15-10
5-5

90/25%
equals 3.7474983489
add 3 to quarters
15/10 -->
