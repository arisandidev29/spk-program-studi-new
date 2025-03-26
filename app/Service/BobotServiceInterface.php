<?php
namespace App\Service;


interface BobotServiceInterface {
    function  getAllBobots();
    function getBobotsByPagination(int $pagination);
    function getBobotById($d);
    function createBobot(array $data);
    function updateBobot($id, array $data);
    function deleteBobot($id);

    function normalizeBobots();
}


?>