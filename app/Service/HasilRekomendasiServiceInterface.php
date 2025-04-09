<?php
namespace App\Service;



interface HasilRekomendasiServiceInterface
{
    public function createHasilRekomendasi($vektorS);
    public function deleteHasilRekomendasi($user_id, );
    public function getHasilRekomendasi($user_id);
}



?>