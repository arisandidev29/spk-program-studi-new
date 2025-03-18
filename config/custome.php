<?php

use Illuminate\Support\Facades\Route;

return [
    'sidebar' => [
        [
            'name' => 'dashboard',
            'icon' => "svg.dashboard", 
            'route' => 'admin/dashboard',
            'active_route' => 'admin.dashboard*',
        ],
        [
            'name' => 'Users',
            'icon' => "svg.users", 
            'route' => 'admin/users',
            'active_route' => 'admin.users*',
        ],
        [
            'name' => 'Kriteria',
            'icon' => "svg.kriteria", 
            'route' => 'admin/kriteria',
            'active_route' => 'admin.kriteria*',
        ],
        [
            'name' => 'Bobot',
            'icon' => 'svg.bobot', 
            'route' => 'admin/bobot',
            'active_route' => 'admin.bobot*',
        ],
        [
            'name' => 'Alternative',
            'icon' =>  'svg.alternative',
            'route' => 'admin/alternative',
            'active_route' => 'admin.alternative*',
        ],
    ],
];

?>
