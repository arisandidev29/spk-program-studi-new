<?php

namespace App\Service;


interface TokenServiceInterface {
    function generateToken():string;
    function validateToken($userToken) :bool;
    function getToken():string;
}



?>