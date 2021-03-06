<?php

namespace App\Model;

use Colorium\Orm;

class User
{

    use Orm\Model;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    /** @var string */
    public $email;

    /** @var int */
    public $rank = 1;


    /**
     * New user
     *
     * @param string $username
     * @param string $password
     * @param string $email
     * @param int $rank
     */
    public function __construct($username = null, $password = null, $email = null, $rank = 1)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->rank = $rank;
    }

}