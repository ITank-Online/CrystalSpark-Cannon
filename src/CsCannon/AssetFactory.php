<?php

/**
 * Created by EverdreamSoft.
 * User: Shaban Shaame
 * Date: 06.04.19
 * Time: 14:36
 */

namespace CsCannon;



use CsCannon\Blockchains\BlockchainTokenFactory;
use SandraCore\System;

class AssetFactory extends \SandraCore\EntityFactory
{


    protected static $className = 'CsCannon\Asset' ;
    public static $isa = 'blockchainizableAsset';
    public static $file = 'blockchainizableAssets';
    public static $tokenJoinVerb = 'bindToContract';
    public static $collectionJoinVerb = 'bindToCollection';
    public const ID = "assetId";
    public const IMAGE_URL = "imgURL";
    public const METADATA_URL = "metaDataURL";



    public function __construct(System $system = null)
    {



        if (is_null($system)) $system = SandraManager::getSandra();

        parent::__construct(self::$isa, self::$file, $system);

        $this->generatedEntityClass = self::$className ;
    }

    //legacy (token doesn't exist anymore it's contracts)
    public function joinToken (BlockchainTokenFactory $factory){

        $this->joinFactory(AssetFactory::$tokenJoinVerb,$factory);


    }

    public function joinCollection (AssetCollectionFactory $factory){

        $this->joinFactory(AssetFactory::$collectionJoinVerb,$factory);


    }




}