<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 21-08-17
 * Time: 19:39
 */

namespace Longman\TelegramBot\Driver\Doctrine\ORM\Entity;

use Longman\TelegramBot\Model\Chat as BaseChat;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="fos_message_conversations")
 * @ORM\Entity
 */
class Chat extends BaseChat
{

}
