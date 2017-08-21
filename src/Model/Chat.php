<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Model;

use Doctrine\Common\Collections\ArrayCollection;

class Chat
{
    /**
     * 'Unique user identifier'
     *
     * @var int
     */
    protected $id;

    /**
     * 'User''s first name'
     *
     * @var string
     */
    protected $firstName;

    /**
     * 'User''s last name'
     *
     * @var string
     */
    protected $lastName;

    /**
     * 'User''s username'
     *
     * @var string
     */
    protected $username;

    /**
     * 'User''s system language'
     *
     * @var string
     */
    protected $languageCode;

    /**
     * 'Entry date creation'
     *
     * @var int
     */
    protected $createdAt;

    /**
     * 'Entry date update'
     *
     * @var int
     */
    protected $updatedAt;

    /**
     * @var ConversationPersonInterface[]|\Doctrine\Common\Collections\Collection
     */
    protected $users;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection|ConversationPersonInterface[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection|ConversationPersonInterface[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }
}
