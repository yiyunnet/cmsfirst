<?php
/**
 * Created by PhpStorm.
 * User: vcyber
 * Date: 2019/1/7
 * Time: 17:29
 */
Route::any('','IndexController@index')->name('/');
Route::get('aclist','IndexController@getArticleList')->name('/aclist');