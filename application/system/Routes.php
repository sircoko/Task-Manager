<?php
	Route::set('users', function() {
		Users::CreateView();
	});
	Route::set('tasks', function() {
		Tasks::CreateView();
	});
	Route::set('comments', function() {
		Comments::CreateView();
	});
?>