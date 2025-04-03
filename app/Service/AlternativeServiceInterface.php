<?php
namespace App\Service;


interface AlternativeServiceInterface {
    function createAlternative($data) ;
    function updateAlternative($id,$data);
    function deleteAlternative($id);
    function getAllAlternative();
    function getAlternativeById($id);
    function getAlternativeByPegination($pegination);
}



?>