<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/songs', function () {
    return [
        [
            'id' => 1,
            'title' => 'El prisionero',
            'artist' => [
                'id' => 1,
                'name' => 'Pibes Chorros'
            ],
            'duration' => 300
        ],
        [
            'id' => 2,
            'title' => 'Andrea',
            'artist' => [
                'id' => 1,
                'name' => 'Pibes Chorros'
            ],
            'duration' => 250
        ],
        [
            'id' => 3,
            'title' => 'La danza del humo',
            'artist' => [
                'id' => 1,
                'name' => 'Pibes Chorros'
            ],
            'duration' => 257
        ],
        [
            'id' => 4,
            'title' => 'Sentimiento villero',
            'artist' => [
                'id' => 1,
                'name' => 'Pibes Chorros'
            ],
            'duration' => 314
        ]
    ];
});

Route::get('/artist/{id}', function($id) {
    return [
        'name' => 'Damas Gratis',
        'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        'portraitUrl' => 'https://via.placeholder.com/150',
        'songs' => [
            [
                'id' => 1,
                'title' => 'El prisionero',
                'duration' => 300
            ]
        ]
    ];
});
