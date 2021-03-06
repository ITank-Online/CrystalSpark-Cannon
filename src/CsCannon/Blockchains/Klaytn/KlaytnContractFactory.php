<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.03.2019
 * Time: 14:42
 */

namespace CsCannon\Blockchains\Klaytn;







use CsCannon\Blockchains\BlockchainContractFactory;

class KlaytnContractFactory extends BlockchainContractFactory
{

    public static $isa = 'klayContract';
    const ABI_VERB = 'has';
    const ABI_TARGET = 'abi';

    public function __construct()
    {
        $this->blockchain = KlaytnBlockchain::class ;
        return parent::__construct();

    }


    protected static $className = 'CsCannon\Blockchains\Klaytn\KlaytnContract' ;












}