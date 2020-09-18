<?php
/**
 * Created by EverdreamSoft.
 * User: Shaban Shaame
 * Date: 18.09.20
 * Time: 14:42
 */

use CsCannon\Blockchains\Ethereum\EthereumAddressFactory;
use CsCannon\Blockchains\Ethereum\EthereumBlockchain;
use CsCannon\Blockchains\Ethereum\EthereumContractFactory;
use CsCannon\Blockchains\Ethereum\Interfaces\ERC721;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
require_once  'config.php'; // Don't forget to configure your database in config.php
require_once  'viewHeader.html'; // Don't forget to configure your database in config.php



$ethBlockchain = new EthereumBlockchain();

//the address to query balance
$testEthAddress = '0xf7ee6c2f811b52c72efd167a1bb3f4adaa1e0f89';

$ethereumAddressFactory = new EthereumAddressFactory();
$myTestEthereumAddress = $ethereumAddressFactory->get($testEthAddress,true); //get an address object from the factory

$myTestEthereumAddress->setDataSource(new \CsCannon\Blockchains\Ethereum\DataSource\OpenSeaImporter());

$balance = $myTestEthereumAddress->getBalance() ; //this will return a balance object
$tokenArray = $balance->getTokenBalance();

echo"<pre>";
print_r($tokenArray);
echo"</pre>";

//$balance->saveToDatagraph(null);





$ethereumAddressFactory = $ethBlockchain->getAddressFactory();
$countyAdressFactory = new \CsCannon\Blockchains\Counterparty\XcpAddressFactory();
\CsCannon\Blockchains\Counterparty\XcpAddressFactory::getAddress("myNULLADDRESSS");
$myEthereumAddress = $ethereumAddressFactory->get('0xf7ee6c2f811b52c72efd167a1bb3f4adaa1e0f89',true);
$ethereumAddressFactory->populateLocal();
$ethereumAddressFactory->createViewTable("ethereumAddress");
$sandra->systemConcept->get("ShabanCOncept");

$myContract = EthereumContractFactory::getContract('0xd346d304ea1837053452357c2066a4701de9a04b');

$blockFactory = new \CsCannon\Blockchains\BlockchainBlockFactory($ethBlockchain);


$ethereumAddressFactory->populateLocal();

print_r($ethereumAddressFactory->getDisplay('array'));

$ethAdressEntities = $ethereumAddressFactory->getEntities();

foreach ($ethAdressEntities as $ethAdressEntity){

    /** @var $ethAdressEntity \CsCannon\Blockchains\Ethereum\EthereumAddress  */

    echo $ethAdressEntity->getAddress().PHP_EOL;

}


/*
$myToken = ERC721::init(10);

$eventFactory = new \CsCannon\Blockchains\Ethereum\EthereumEventFactory();
$eventFactory->create($ethBlockchain,$myEthereumAddress,$myEthereumAddress,$myContract,
    '0x1d270fe0d386ec038804165158addec0f20983a9543ee52e5667617b89ae7a37',1600435494,$myBlock,$myToken,1);
*/
