<?php

/* //getting all users with DB facade
    //$users = DB::select('SELECT * FROM users'); 

    //select a row by ID or by email or by both

    //$users = DB::select('SELECT * FROM users WHERE id = 1');

    // $users = DB::select('SELECT * FROM users WHERE id = ?', [
    //     1
    // ]);

    // $users = DB::select('SELECT * FROM users WHERE email = ?', [
    //     'iloritoluwalopestephen@gmail.com'
    // ]);

    // $users = DB::select('SELECT * FROM users WHERE id = ? AND email = ?', [
    //     10,
    //     'iloritoluwalopestephen@gmail.com'
    // ]);

    // dd($users); //array of users */


    //create new user
    /* $newUser = DB::insert('INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)', [
        'Deborah',
        'Adepoju',
        'debby01@mail.com',
        'password'
    ]);

    dd($newUser); //true or false*/

    //update user
    /* $updateUser = DB::update('UPDATE users SET email = ? WHERE last_name = ?', [
        'binary@gmail.com',
        'adepoju'
    ]);

    dd($updateUser); //number of rows affected */

    /* //delete users

    $deleteUsers = DB::delete('DELETE FROM users WHERE email = ?', ['binary@gmail.com']);

    $deleteUsers = DB::delete('DELETE FROM users');
    dd($deleteUsers); //number of rows affected */

    ?>