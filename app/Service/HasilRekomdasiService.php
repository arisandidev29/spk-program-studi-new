<?php

namespace App\Service;

use App\Models\HasilRekomendasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HasilRekomdasiService implements HasilRekomendasiServiceInterface
{
    public function createHasilRekomendasi($vektorS, $user = null)
    {
        $user = $user_id ?? Auth::user();
        $hasilRekomendasi = $this->calculateHasilRekomendasi($vektorS);
        $rekomendasi = [];
        foreach ($hasilRekomendasi as $hasil) {
            $rekomendasi[] = $user->hasilRekomendasi()->create(
                    [
                        'alternative_id' => $hasil['alternative_id'],
                        'vektor_v' => $hasil['vektor_v'],
                        'ranking' => $hasil['ranking']
                    ]
            );
        }
        return $rekomendasi;
    }

    public function calculateVekorV($vektorS)
    {
        $vektorS = collect($vektorS);
        $totalVektorS = $vektorS->sum(function ($item) {
            return $item->vektor_s;
        });

        $vektorV = $vektorS->map(function ($item) use ($totalVektorS) {
            return ([
                "alternative_id" => $item->alternative_id,
                'vektor_v' => round($item->vektor_s / $totalVektorS, 2)
            ]);
        });
        return collect($vektorV);
    }
    public function calculateHasilRekomendasi($vektorS)
    {
        $resultCalculateVektrV = $this->calculateVekorV($vektorS);

        $result = $resultCalculateVektrV->sortByDesc('vektor_v',)
            ->values()
            ->map(function ($item, $index) {
                return [
                    'alternative_id' => $item['alternative_id'],
                    'vektor_v' => $item['vektor_v'],
                    'ranking' => $index + 1
                ];
            });

        return $result;
    }

    public function deleteHasilRekomendasi($user_id )
    {
        return User::find($user_id)
            ->hasilRekomendasi()
            ->delete();
    }

    /**
     * Get all hasil rekomendasi by user id
     *
     * @param int $user_id
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getHasilRekomendasi($user_id)
    {
        return HasilRekomendasi::where('user_id', $user_id)
                    ->orderBy('ranking', 'asc')
                    ->get();
    }

    
}
