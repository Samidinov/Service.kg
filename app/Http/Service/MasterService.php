<?php


namespace App\Http\Service;


use App\Models\Master;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class MasterService
{
    public function find($user_id)
    {
        return Master::find($user_id);
    }

    public function findUser($master_id)
    {
        return User::find($master_id);
    }

    public function store(Request $request)
    {
        $master = new Master();
        $master->setBirthYear($request->input('birth_year'));
        $master->setExperience($request->input('experience'));
        $master->setId($request->input('user_id'));
        $master->setPhoto($request->input('photo'));

        /*$imagePath = $request->input('photo')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(320, 320);
        $image->save();
        dd($image);
        $master->setPhoto($imagePath);*/

        $master->save();
        return $master;
//        return $master->categories()->attach( $request->input('subcategory_id'));

    }

    public function update(Request $request, $master_id)
    {
        $master = Master::find($master_id);
        $this->change($request, $master);
        $master->categories()->detach();
        return $master->categories()->attach( $request->input('subcategory_id'));
    }

    private function change (Request $request, Master $master){
        $master->setBirthYear($request->input('birth_year'));
        $master->setExperience($request->input('experience'));
        $master->setId($request->input('user_id'));
//        $master->setPhoto($request->input('photo'));

      /*  $imagePath = $request->input('photo')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(320, 320);
        $image->save();
        return $master->save();*/
    }

    public function validateMaster (Request $request) {
        //
    }

    public function getContractsByMasterId ($master_id) {
        return DB::table('contracts')
            ->leftJoin('works', 'contracts.work_id', '=', 'works.id')
            ->leftJoin('users', 'contracts.client_id', '=', 'users.id')
            ->where('contracts.master_id', '=', $master_id)->get();

    }

    public function getAllMasters() {
        $masters = Master::all();
        $mastersList = [];

        foreach ($masters as $master) {
            $user = User::query()->where('id',$master->getId())->first();
            $mastersList[] = [
                'id'=>$master->getId(),
                'name' => $user->name,
                'surname' => $user->surname,
                'phone_number' => $user->phone_number,
                'email' => $user->email,
                'photo' => $master->getPhoto(),
                'experience' => $master->getExperience(),
                'birth_year' => $master->getBirthYear()
            ];
        }

        return $mastersList;
    }
}
