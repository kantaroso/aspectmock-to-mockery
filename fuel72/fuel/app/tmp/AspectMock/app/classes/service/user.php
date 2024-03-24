<?php
namespace service;

class User
{
    public function get(int $id) : ?\model\User
    { if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($id), false)) !== __AM_CONTINUE__) return $__am_res; 
        $result = \model\User::find($id);
        return $result;
    }
}
