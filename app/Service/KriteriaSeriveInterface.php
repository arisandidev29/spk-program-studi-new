<?php

namespace App\Service;


interface KriteriaSeriveInterface
{
    function createKriteria($data);

    function getAllKriteria();

    function getKriteriaById($id);

    function updateKriteria($id,$data);

    function deleteKriteria($id);
}
