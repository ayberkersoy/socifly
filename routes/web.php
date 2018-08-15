<?php

Route::get('/', 'SettingController@index');

Route::get('groups', 'GroupController@index');
Route::get('groups/{group}', 'GroupController@show');
Route::get('groups/{group}/forum', 'GroupController@forumIndex');
Route::get('groups/{group}/users', 'GroupController@usersIndex');
Route::get('groups/{group}/events', 'GroupController@eventsIndex');

Route::get('events', 'EventController@index');
Route::get('events/{event}', 'EventController@show');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');

Route::get('forum', 'ForumController@index');
Route::get('forum/{forum}', 'ForumController@show');
Route::get('forum/{forum}/{subForum}/sub', 'ForumController@showSubForum');
Route::get('forum/{forum}/{subForum}/{topic}/replies', 'ForumController@showTopicReplies');

Route::get('{topic_reply}/like', 'TopicReplyController@like');
Route::get('{topic_reply}/dislike', 'TopicReplyController@dislike');

Route::get('answer/{answer}/like', 'AnswerController@like');
Route::get('answer/{answer}/dislike', 'AnswerController@dislike');

Auth::routes();

Route::post('/groups/{group}/posts', 'GroupPostController@store');
Route::post('/groups/{group}/users', 'GroupController@joinGroup');

Route::post('/events/{event}/users', 'EventController@joinEvent');

Route::post('forum/{forum}/{subForum}/{topic}/posts', 'TopicReplyController@store');

Route::post('forum/{forum}/{subForum}/topics', 'TopicController@store');

Route::post('users/{user}', 'UserController@update');

Route::post('forum/{forum}/{subForum}/{topic}/{topicReply}/answer', 'AnswerController@store');
