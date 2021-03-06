<?php
/**
 * Created by EverdreamSoft.
 * User: Shaban Shaame
 * Date: 10.12.19
 * Time: 10:17
 */

require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload files using Composer autoload





ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class CrystalSuiteDataSourceTest extends DataSourceAbstract
{
    private $contractToTest ;

    public function loadTestCases() {


       parent::loadTestCases();

       $ethereumContractFactory = new \CsCannon\Blockchains\Ethereum\EthereumContractFactory();
        //we should have 2 tokens of this contract blockchain cutties
       $contractCuties = $ethereumContractFactory->get('0xd73be539d6b2076bab83ca6ba62dfe189abc6bbe');

        //we should have 2 tokens of this contract
        $contract = $ethereumContractFactory->get('0xf5b0a3efb8e8e4c201e2a935f110eaaf3ffecb8d');


       $this->contractToTest[] = $contractCuties;
       $this->contractToTest[] = $contract;



    }


    public function __construct($name = null, array $data = [], $dataName = '')
    {



        parent::__construct($name, $data, $dataName);
    }

    public function testGetBalanceForContract()
    {

        $this->loadTestCases();

        $address = $this->addressToBeChecked[0];
        $address->setDataSource(new \CsCannon\Blockchains\DataSource\CrystalSuiteDataSource());


        $balance = $address->getBalanceForContract($this->contractToTest);

        //we should have equal contract in the balance as the number of requested contracts
        $this->assertCount(count($this->contractToTest),$balance->getContractMap());







    }


}