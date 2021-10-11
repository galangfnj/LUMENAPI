<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
// // $router->get('/key', function () use ($router) {
// //     return Str::random(32);
// // });

// $router->post('/test','myController@index') ;
// /////////////////////////////////////////////////////////
// $router->get('/get', function () {
//     return 'GET';
//     });

//     $router->post('/post', function () {
//         return 'POST';
//         });
//         $router->put('/put', function () {
//         return 'PUT';
//         });
//         $router->patch('/patch', function () {
//         return 'PATCH';
//         });
//         $router->delete('/delete', function () {
//         return 'DELETE';
//         });
//         $router->options('/options', function () {
//         return 'OPTIONS';
//         });
// /////////////////////////////////////////////////////////////////

//         $router->get('/user/{id}', function ($id) {
//             return 'User Id = ' . $id;
//             });

//         $router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
//             return 'Post ID = ' . $postId . ' Comments ID = ' . $commentId;
//             });
//         $router->get('/users[/{userId}]', function ($userId = null) {
//             return $userId === null ? 'Data semua users' : 'Data user dengan id ' . $userId;
//                 });

//         $router->get('/auth/login', ['as' => 'route.auth.login', function () {
//             return 'ini halaman login';
//          }]);
            
//         // $router->get('/profile', function (Request $request) {
//         // if ($request->isLoggedIn == null) {
//         // return redirect()->route('route.auth.login');
//         // }
//         // return 'ini halaman profile';
//         // });

//         $router->group(['prefix' => 'users'], function () use ($router) {
//             $router->get('/', function () { // menjadi /users/, /users => prefix, / => path
//             return "GET /users";
//             });
//             });
//             $router->group(['prefix' => 'users'], function () use ($router) {
//                 $router->get('/mahasiswa', function () { // menjadi /users/, /users => prefix, / => path
//                 return "GET /users/mahasiswa";
//                 });
//                 });
        
                // $router->get('/admin/home/', ['middleware' => 'age', function () {
                //     return 'Dewasa';
                //     }]);
                //     $router->get('/fail', function () {
                //     return 'dibawah umur';
                //     });
                    
/////////////////////////////////////////////////////////
                // $router->get('/mahasiswa/registrasi/', ['middleware' => 'pay', function () {
                //  }]);
                // $router->get('/success', function () {
                //     return 'Dapat melakukan pembayaran';
                //      });
                // $router->get('/fail', function () {
                //     return 'harap melakukan pembayaran';
                //     });
/////////////////////////////////////////////////////////////////////////////
                

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('mahasiswa', ['uses' => 'MhsController@showAllMahasiswa']);
    
//     $router->get('mahasiswa/status', ['uses' => 'MhsController@showStatusPembayaran']
//    );
    
//     $router->post('mahasiswa', ['uses' => 'MhsController@create']);
    
//     $router->delete('mahasiswa/{id}', ['uses' => 'MhsController@delete']);
    
//     $router->put('mahasiswa/{id}', ['uses' => 'Mhsr@update']);
    
//      });
   

///////////////////////////////////////////////////////////////////////////////
$router->get('/', ['uses' => 'UserController@index']);

$router->get('/tambahuser', ['uses' => 'UserController@tambahuser']);

$router->get('/hello', ['uses' => 'UserController@hello']);
$router->post('/update/{id}', 'UserController@update');

// $router->put('update/user/{id}', ['uses' => 'UserController@update']);

$router->group(['prefix' => 'v1'], function () use ($router) {

    $router->get('/biodata', 'BiodataController@index');
    $router->post('/biodata', 'BiodataController@store');
    $router->post('/biodata/{id}', 'BiodataController@update');

});