<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="App\Repository\UserRepository")
 */
class User implements \Serializable
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $username;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $isAdmin;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $signature;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $notes;
}
