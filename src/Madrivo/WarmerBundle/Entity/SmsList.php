<?php

namespace Madrivo\WarmerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsList
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Madrivo\WarmerBundle\Entity\SmsListRepository")
 */
class SmsList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $from;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $to;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $messageText;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $messageId;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $when;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set from
     *
     * @param string $from
     *
     * @return SmsList
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return SmsList
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set messageText
     *
     * @param string $messageText
     *
     * @return SmsList
     */
    public function setMessageText($messageText)
    {
        $this->messageText = $messageText;

        return $this;
    }

    /**
     * Get messageText
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * Set messageId
     *
     * @param string $messageId
     *
     * @return SmsList
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set when
     *
     * @param \DateTime $when
     *
     * @return SmsList
     */
    public function setWhen($when)
    {
        $this->when = $when;

        return $this;
    }

    /**
     * Get when
     *
     * @return \DateTime
     */
    public function getWhen()
    {
        return $this->when;
    }
}
