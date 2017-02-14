 <?php
 require_once "src/coin.php";

 class AnaTest extends PHPUnit_Framework_TestCase
    {
        function test_CoinCombo()
        {
            $newVariable = new Ana;
            $input1 = ".99";
            $result = $newVariable->CoinCombo($input1);

            $this->assertEquals("9 Coins" , $result);
        }
    }
?>
