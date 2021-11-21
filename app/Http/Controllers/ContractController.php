<?php

namespace App\Http\Controllers;

use App\Http\Service\ContractService;
use App\Http\Service\MasterService;
use App\Http\Service\UserService;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    private $userService;
    private $masterService;
    private $contractService;

    public function __construct(UserService $userService , MasterService  $masterService, ContractService $contractService){
        $this->userService = $userService;
        $this->masterService = $masterService;
        $this->contractService = $contractService;
    }


    public function masterSuggestContractToClient (Request $request) {
        if ($this->contractService->checkActionOfMastersSuggest($request->all())) {
            return ['result' => true];
        }
    }

    public function isMasterSendSuggestToContract (Request $request) {
        $values = $request->all();
        if ($this->contractService->getMasterContractByWorkId($values['master_id'], $values['ad_id']))
        {
            return ['result' => true];
        } return ['result' => false];
    }
}
