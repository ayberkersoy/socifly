<?php

Route::get('/', 'SettingController@index');
Route::get('/contact', 'SettingController@contact');

Route::get('groups', 'GroupController@index');
Route::get('groups/{group}', 'GroupController@show');
Route::get('groups/{group}/forum', 'GroupController@forumIndex');
Route::get('groups/{group}/users', 'GroupController@usersIndex');
Route::get('groups/{group}/events', 'GroupController@eventsIndex');
Route::get('groups/{group}/events/create', 'GroupController@eventsCreate');

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
Route::post('groups/{group}/events', 'GroupController@storeEvent');

Route::post('/events/{event}/users', 'EventController@joinEvent');

Route::post('forum/{forum}/{subForum}/{topic}/posts', 'TopicReplyController@store');

Route::post('forum/{forum}/{subForum}/topics', 'TopicController@store');

Route::post('users/{user}', 'UserController@update');

Route::post('forum/{forum}/{subForum}/{topic}/{topicReply}/answer', 'AnswerController@store');

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/', 'SettingController@adminIndex');

    Route::get('groups', 'GroupController@adminGroups');
    Route::get('groups/create', 'GroupController@create');

    Route::get('events', 'EventController@adminEvents');
    Route::get('events/create', 'EventController@create');

    Route::get('users', 'UserController@adminUsers');
    Route::get('users/create', 'UserController@create');

    Route::get('forum', 'ForumController@adminForum');
    Route::get('forum/create', 'ForumController@create');

    Route::get('sub-forum', 'ForumController@adminSubForum');
    Route::get('subForum/create', 'SubForumController@create');

    Route::get('forum-topics', 'ForumController@adminForumTopics');
    Route::get('forum-posts', 'ForumController@adminForumPosts');

    Route::post('/', 'SettingController@update');
    Route::post('groups', 'GroupController@store');
    Route::post('events', 'EventController@store');
    Route::post('users', 'UserController@store');
    Route::post('forum', 'ForumController@store');
    Route::post('subForum', 'SubForumController@store');

    Route::delete('groups/{group}', 'GroupController@destroy');
    Route::delete('events/{event}', 'EventController@destroy');
    Route::delete('users/{user}', 'UserController@destroy');
    Route::delete('forum/{forum}', 'ForumController@destroy');
    Route::delete('sub-forum/{subForum}', 'SubForumController@destroy');
    Route::delete('forum-topic/{topic}', 'TopicController@destroy');
    Route::delete('forum-posts/{topicReply}', 'TopicReplyController@destroy');
});
