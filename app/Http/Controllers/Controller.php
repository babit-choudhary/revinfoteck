<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


/**
 * Class Controller.
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function imageUpload(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'photo' => $request->validation,
            'path' => "required"
        ]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'success' => false,
                    'error' =>  $validator->errors()->first()
                ]);
        }



        return ['success' => true, 'message' => 'Successfully updated', 'path' => "storage/".$request->file('photo')->store($request->path,'public')];
    }
}
