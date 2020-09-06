<?php
#1.URLとControllerやActionを紐付ける機能を何といいますか？
Routing

#2.あなたが考える、group化をすることのメリットを考えてみてください。
例えば、
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});
の中で[‘prefix’ => ‘admin’] という設定をfunction(){}の中の全てのURLのRoutingの設定に適用させることができる。

#3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
    Route::get('XXX', 'AAAController@bbb');

#4.【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。
  web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、
  admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。

Route::group(['prefix' => 'admin/profile'], function() {
    Route::get('create', 'ProfileController@add');
    Route::get('edit', 'ProfileController@edit');
});