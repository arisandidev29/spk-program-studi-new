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
            'route' => '',
            'active_route' => '',
        ],
        [
            'name' => 'Alternative',
            'icon' =>  'svg.alternative',
            'route' => '',
            'active_route' => '',
        ],
    ],
];

?>
