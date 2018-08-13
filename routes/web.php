<?php

Route::get('/', 'SettingController@index');

Route::get('groups', 'GroupController@index');
Route::get('groups/{group}', 'GroupController@show');
Route::get('groups/{group}/forum', 'GroupController@forumIndex');
Route::get('groups/{group}/users', 'GroupController@usersIndex');

Route::get('events', 'EventController@index');
Route::get('events/{event}', 'EventController@show');

Route::get('users', 'UserController@index');

Route::get('forum', 'ForumController@index');
Route::get('forum/{forum}', 'ForumController@show');
Route::get('forum/{forum}/{subForum}/sub', 'ForumController@showSubForum');
Route::get('forum/{forum}/{subForum}/{topic}/replies', 'ForumController@showTopicReplies');

Auth::routes();

Route::post('/groups/{group}/posts', 'GroupPostController@store');
Route::post('/groups/{group}/users', 'GroupController@joinGroup');

Route::post('/events/{event}/users', 'EventController@joinEvent');

Route::post('forum/{forum}/{subForum}/{topic}/posts', 'TopicReplyController@store');

Route::post('forum/{forum}/{subForum}/topics', 'TopicController@store');
