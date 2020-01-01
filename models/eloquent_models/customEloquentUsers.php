<?php


namespace models\eloquent_models;
use Cartalyst\Sentinel\Users\EloquentUser as EloquentUser;

class customEloquentUsers extends EloquentUser{

  protected $table = 'users';

  protected $loginNames = ['email', 'login'];

  protected $fillable = [
    'login',
    'email',
    'username',
    'password',
    'last_name',
    'first_name',
    'permissions',
  ];


}