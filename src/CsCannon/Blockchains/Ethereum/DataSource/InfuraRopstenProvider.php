<?php
/**
 * Created by EverdreamSoft.
 * User: Shaban Shaame
 * Date: 2019-10-21
 * Time: 14:02
 */

namespace CsCannon\Blockchains\Ethereum\DataSource;


use CsCannon\Blockchains\Blockchain;
use CsCannon\Blockchains\Ethereum\EthereumBlockchain;
use CsCannon\Blockchains\Ethereum\RopstenEthereumBlockchain;
use CsCannon\Blockchains\RpcProvider;
use SandraCore\Concept;

class InfuraRopstenProvider extends InfuraProvider
{
    public const HOST_URL = 'https://ropsten.infura.io/v3/' ;




    public function getBlockchain(): Blockchain
    {
      return  new RopstenEthereumBlockchain();
    }


}