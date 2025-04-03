<?php
namespace App\Service;


interface PilihanJawabanServiceInterfaces {
    function createPilihan($data);
    function updatePilihan($id,$data);
    function deletePilihan($id);

}



?>