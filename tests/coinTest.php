 <?php
 require_once "src/coin.php";

 class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_CoinCombo()
        {
            $newVariable = new Coin;
            $input1 = ".99";
            $result = $newVariable->CoinCombo($input1);

            $this->assertEquals(9 , $result[0]);
        }
    }
?>
