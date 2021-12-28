<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// //httpsですべてを読み込む
// if (env('APP_ENV') === 'local') {
//      URL::forceScheme('https');
// }
//対戦チームを募集する画面（投稿画面）の表示
// Route::get('/games', function () {
//     return view('pages.recruitmentgames');
// });

//チームメイトを募集する画面（投稿画面）の表示
Route::get('/teammates', function () {
    return view('pages.recruitmentteammates');
});

//メッセージ画面の表示
//Route::get('/teamchatrooms', function () {
//    return view('pages.teamchatrooms');
//});

//対戦チームを募集する投稿の保存
Route::post('/recruitment_games','RecruitmentGameController@index');

//チームメイトを募集する投稿の保存
Route::post('/recruitment_teammates','RecruitmentTeammateController@index');

//メッセージ関連
// Route::post('/team_chat_rooms','TeamChatRoomController@index');

//チームメイト募集記事の一覧を表示
Route::get('/teammate_list','RecruitmentTeammateController@show');

//チームメイト募集記事の詳細を表示
Route::get('/teammate_detail','RecruitmentTeammateController@detail');

//チームメイト募集記事のの編集画面
Route::get('/teammate_edit','RecruitmentTeammateController@edit');

//チームメイト募集記事の編集を更新
Route::post('/teammate_update','RecruitmentTeammateController@update');

//対戦チーム募集記事の画面表示／都道府県データ、市区町村データを送る
Route::get('/games','RecruitmentGameController@pref');

//チームメイト募集記事の画面表示／都道府県データを送る
Route::get('/teammates','RecruitmentTeammateController@pref');

//対戦チームの一覧を表示
Route::get('/game_list','RecruitmentGameController@show');

//対戦チームの詳細を表示
Route::get('/game_detail','RecruitmentGameController@detail');

//対戦チームの編集画面
Route::get('/game_edit','RecruitmentGameController@edit');

//対戦チームの編集を更新
Route::post('/game_update','RecruitmentGameController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//トップ画面を表示
Route::get('/', function () {
return view('top');
});

//ユーザー登録情報の変更
Route::group(['middleware' => ['auth']], function()
{  
   Route::get('/user_index', 'Admin\UserController@index');
   Route::get('/user_edit', 'Admin\UserController@update');
   Route::post('/user_edit', 'Admin\UserController@update');
   Route::get('/user_complete','Admin\UserController@complete');
});

//チーム登録画面の表示
Route::get('/team_register', 'Admin\TeamController@pref');

//チーム登録のデータを保存
Route::post('/team_register','Admin\TeamController@index');

//チーム登録情報の編集画面
Route::get('/team_edit', 'Admin\TeamController@edit');

//チーム情報の編集を更新
Route::post('/team_update','Admin\TeamController@update');

//チーム登録の完了画面
Route::get('/team_complete','Admin\TeamController@complete');

//対戦チーム募集記事の編集一覧
Route::get('/edit_game_list','RecruitmentGameController@edit_list');

//チームメイト募集記事の編集一覧
Route::get('/edit_teammate_list','RecruitmentTeammateController@edit_list');

//パスワードの変更
Route::get('/password/change', 'Auth\ChangePasswordController@showChangePasswordForm')->name('password.form');
Route::post('/password/change', 'Auth\ChangePasswordController@ChangePassword')->name('password.change');

//会員登録フォームの都道府県セレクト
Route::get('pref/ajax','RecruitmentGameController@ajax');

Route::get('/logout','Auth\LoginController@logout');

