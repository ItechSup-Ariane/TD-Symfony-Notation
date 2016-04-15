<?php

namespace ItechSup\NotationBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity(repositoryClass="ItechSup\NotationBundle\Repository\EnseignantRepository")
 */
class Enseignant extends Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * @ORM\OneToMany(targetEntity="Session", mappedBy="enseignant")
     */
    private $sessions;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();

    }

    /**
     * Add sessions
     *
     * @param \ItechSup\NotationBundle\Entity\Session $sessions
     * @return Enseignant
     */
    public function addSession(\ItechSup\NotationBundle\Entity\Session $sessions)
    {
        $this->sessions[] = $sessions;

        return $this;
    }

    /**
     * Remove sessions
     *
     * @param \ItechSup\NotationBundle\Entity\Session $sessions
     */
    public function removeSession(\ItechSup\NotationBundle\Entity\Session $sessions)
    {
        $this->sessions->removeElement($sessions);
    }

    /**
     * Get sessions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSessions()
    {
        return $this->sessions;
    }
}
