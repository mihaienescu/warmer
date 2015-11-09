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
    protected $numberFrom;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $numberTo;

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
    protected $networkTimestamp;

    /**
    * @ORM\Column(type="integer", nullable=false)
    */
    protected $parsed;



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
     * Set numberFrom
     *
     * @param string $numberFrom
     *
     * @return SmsList
     */
    public function setNumberFrom($numberFrom)
    {
        $this->numberFrom = $numberFrom;

        return $this;
    }

    /**
     * Get numberFrom
     *
     * @return string
     */
    public function getNumberFrom()
    {
        return $this->numberFrom;
    }

    /**
     * Set numberTo
     *
     * @param string $numberTo
     *
     * @return SmsList
     */
    public function setNumberTo($numberTo)
    {
        $this->numberTo = $numberTo;

        return $this;
    }

    /**
     * Get numberTo
     *
     * @return string
     */
    public function getNumberTo()
    {
        return $this->numberTo;
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
     * Set networkTimestamp
     *
     * @param \DateTime $networkTimestamp
     *
     * @return SmsList
     */
    public function setNetworkTimestamp($networkTimestamp)
    {
        $this->networkTimestamp = $networkTimestamp;

        return $this;
    }

    /**
     * Get networkTimestamp
     *
     * @return \DateTime
     */
    public function getNetworkTimestamp()
    {
        return $this->networkTimestamp;
    }

    /**
     * Set parsed
     *
     * @param integer $parsed
     *
     * @return SmsList
     */
    public function setParsed($parsed)
    {
        $this->parsed = $parsed;

        return $this;
    }

    /**
     * Get parsed
     *
     * @return integer
     */
    public function getParsed()
    {
        return $this->parsed;
    }
}
