<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 2019-03-08
 * Time: 10:14
 */

namespace App\Model;


class User
{
    private $id;
    private $firstName;
    private $lastName;

    /**
     * User constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     */
    public function __construct($id, $firstName, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}