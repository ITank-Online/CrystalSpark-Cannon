<?php
/**
 * Created by EverdreamSoft.
 * User: Shaban Shaame
 * Date: 2019-09-10
 * Time: 11:04
 */

namespace CsCannon\AssetSolvers;


use CsCannon\AssetCollection;
use CsCannon\Blockchains\BlockchainContractFactory;
use CsCannon\Blockchains\BlockchainContractStandard;
use CsCannon\Orb;

abstract class AssetSolver
{


public abstract static function resolveAsset(Orb $orb, BlockchainContractStandard $specifier) ;

public static function loadContractsAssets(BlockchainContractFactory $contractFactory){






}

}