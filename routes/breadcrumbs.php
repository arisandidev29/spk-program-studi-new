<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// dashboard 
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    
});

// dashboard > users 
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('users', route('admin.users'));
});

// dashboard > kriteria
Breadcrumbs::for('kriteria', function (BreadcrumbTrail $trail ) {
    $trail->parent('dashboard');
    $trail->push('kriteria', route('admin.kriteria'),);
});

// dashboard > kriteria > buat Krteria 
Breadcrumbs::for('buat kriteria', function (BreadcrumbTrail $trail) {
    $trail->parent('kriteria');
    $trail->push('buat kriteria', route('admin.kriteria.create'));
});

Breadcrumbs::for('bobot', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('bobot', route('admin.bobot'));
});

Breadcrumbs::for('edit bobot', function (BreadcrumbTrail $trail) {
    $trail->parent('bobot');
    $trail->push('edit bobot', route('admin.bobot.edit','1'));
});

Breadcrumbs::for('alternative', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('alternative',route('admin.alternative'));
});
