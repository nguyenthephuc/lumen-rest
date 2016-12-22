<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\User;

class UserController extends Controller {

    public function getList() {
        return User::getData();
    }

    public function getOne($id) {
        $data = User::find($id);
        if($data)
            return User::find($id);
        return response()->json(['status'=>true, 'message'=>'Không tìm thấy tài khoản với id: '.$id]);
    }
}