<?php

namespace App\Friend;

use Illuminate\Database\Eloquent\Model;

class Friendlist 
{
    private $friendName;
    private $friendAddress;
    private $friendContact;

    public function __construct($friendName,$friendAddress,$friendContact)
    {
        $this->friendName = $friendName;
        $this->friendContact = $friendContact;
        $this->friendAddress = $friendAddress;
    }
    public function FriendInformation(){
        return[
            'frien_name'=>$this->friendName,
            'friend_contact'=>$this->friendContact,
            'friend_address'=>$this->friendAddress,
        ];
    }
}
