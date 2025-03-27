<?php
namespace App\Service;

use App\Models\User;

class UserService implements UserServiceInterface {
    public function getAllUsers() {
        return User::all();
    }

    public function getUserById($id) {
        return User::find($id);
    }

    public function getUsersByPegination($pegination) {
        return User::where('role','users')->simplePaginate($pegination);
    }

    public function getUserByCondition($column, $value, $condition = '=') {
        return User::where('role',"!=",'admin')
                    ->where($column,$condition,$value)->get();
    }

    public function getUserByConditionUsePagination($column, $value, $condition = '=', $paginate) {
        return User::where('role',"!=",'admin')
                    ->where($column,$condition,$value)->simplePaginate($paginate);
    }

    public function updateUserById($id, $data) {
        $user = User::find($id);

        $user->update($data);
        return $user;

    }

    public function deleteUser($id) {
        $user = user::find($id);
        $user->delete();

        return $user;
    }
}





?>