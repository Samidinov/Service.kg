<?php
namespace App\Http\Service;


use App\Models\Contract;
use Illuminate\Support\Facades\DB;

class ContractService
{

    public function getMastersContractsByMasterId ($master_id) {
        return Contract::where('master_id', '=', $master_id)->get();
    }

    public function getMasterContractByWorkId ( $master_id, $ad_id) {
        return DB::table('contracts')->where([['master_id', '=', $master_id],['work_id', '=', $ad_id]])->first();
    }

    public function deleteContractByClientMasterAdId ($client_id, $master_id, $ad_id) {
        return DB::table('contracts')->where('master_id', '=', $master_id)
            ->where('client_id', '=', $client_id)->where('work_id', '=', $ad_id)->delete();
    }

    public function store ($value) {
        $contract = new Contract();
        $contract->master_id = $value['master_id'];
        $contract->work_id = $value['ad_id'];
        $contract->client_id = $value['client_id'];
        $contract->status = 'MASTER_SUGGEST';
        $contract->rating = 0;
        return $contract->save();
    }

    public function checkActionOfMastersSuggest ($value) {
        if ($value['action'] === 'add') {
           return $this->store($value);

        } else if ($value['action'] === 'remove') {
            return $this->deleteContractByClientMasterAdId($value['client_id'], $value['master_id'], $value['ad_id']);
        }
    }
}
