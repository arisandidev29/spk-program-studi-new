<?php
namespace App\Service;

use App\Models\User;

interface UserServiceInterface {
    function getAllUsers(); 

    function getUserById($id);

    function getUsersByPegination($pegination);

    function getUserByCondition($column, $value, $condition = "=");
    function getUserByConditionUsePagination($column, $value, $condition = "=",$paginate);

    function deleteUser($id);

    function updateUserById($id, $data);
}


?>