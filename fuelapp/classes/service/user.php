<?php
namespace service;

class User
{
    public function get(int $id)
    {
        return \model\User::find($id);
    }
}
