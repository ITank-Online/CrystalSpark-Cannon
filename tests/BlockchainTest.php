<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.07.2019
 * Time: 17:46
 */


require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;





final class BlockchainTest extends TestCase
{

    public function testBlockchain()

    {


      $exploreTx = \CsCannon\Blockchains\Klaytn\KlaytnBlockchain::getNetworkData('cypress','explorer_tx');

      $this->assertEquals('https://scope.klaytn.com/tx/',$exploreTx);


    }









}
