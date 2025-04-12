<?php

namespace App\Service;


interface VektorSServiceInterface
{
    function getAllVektorSByUser($user);
    function createVektorS();
    function calculateVektorS();
    function deleteVektorS($user_id);

}
