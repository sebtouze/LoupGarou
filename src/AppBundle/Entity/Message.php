<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppBundle\Entity\Message
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $Emetteur;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string $message
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

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
     * Set date
     *
     * @param dateTime $date
     */
    public function setDate(\dateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return dateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set Emetteur
     *
     * @param AppBundle\Entity\User $emetteur
     */
    public function setEmetteur(\AppBundle\Entity\User $emetteur)
    {
        $this->Emetteur = $emetteur;
    }

    /**
     * Get Emetteur
     *
     * @return AppBundle\Entity\User 
     */
    public function getEmetteur()
    {
        return $this->Emetteur;
    }
}
