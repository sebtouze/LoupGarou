<?php

namespace LG\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LG\UserBundle\Entity\Vote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LG\UserBundle\Entity\VoteRepository")
 */
class Vote
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
     * @ORM\ManyToOne(targetEntity="LG\UserBundle\Entity\User")
     */
    private $votant;

    /**
     * @ORM\ManyToOne(targetEntity="LG\UserBundle\Entity\User")
     */
    private $votePour;

    /**
     * @var datetime $dateVote
     *
     * @ORM\Column(name="dateVote", type="datetime")
     */
    private $dateVote;
    
    /**
     * @var integer $type
     *
     * @ORM\Column(name="type", type="integer")
     */
     private $type;

    /**
     * @var integer $jour
     *
     * @ORM\Column(name="jour", type="integer")
     */
     private $jour;


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
     * Set dateVote
     *
     * @param datetime $dateVote
     */
    public function setDateVote($dateVote)
    {
        $this->dateVote = $dateVote;
    }

    /**
     * Get dateVote
     *
     * @return datetime 
     */
    public function getDateVote()
    {
        return $this->dateVote;
    }

    /**
     * Set type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set votant
     *
     * @param LG\UserBundle\Entity\User $votant
     */
    public function setVotant(\LG\UserBundle\Entity\User $votant)
    {
        $this->votant = $votant;
    }

    /**
     * Get votant
     *
     * @return LG\UserBundle\Entity\User 
     */
    public function getVotant()
    {
        return $this->votant;
    }

    /**
     * Set votePour
     *
     * @param LG\UserBundle\Entity\User $votePour
     */
    public function setVotePour(\LG\UserBundle\Entity\User $votePour)
    {
        $this->votePour = $votePour;
    }

    /**
     * Get votePour
     *
     * @return LG\UserBundle\Entity\User 
     */
    public function getVotePour()
    {
        return $this->votePour;
    }

    /**
     * Set jour
     *
     * @param integer $jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    }

    /**
     * Get jour
     *
     * @return integer 
     */
    public function getJour()
    {
        return $this->jour;
    }
}