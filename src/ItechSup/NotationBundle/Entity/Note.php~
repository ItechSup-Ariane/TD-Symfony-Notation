<?php

namespace ItechSup\NotationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="ItechSup\NotationBundle\Repository\NoteRepository")
 */
class Note
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
     * @var string
     *
     * @ORM\Column(name="valeur", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $valeur;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="notes")
     * @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity="Session", inversedBy="notes")
     * @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     */
    private $session;

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
     * Set valeur
     *
     * @param string $valeur
     * @return Note
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set etudiant
     *
     * @param \ItechSup\NotationBundle\Entity\Etudiant $etudiant
     * @return Note
     */
    public function setEtudiant(\ItechSup\NotationBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \ItechSup\NotationBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set session
     *
     * @param \ItechSup\NotationBundle\Entity\Session $session
     * @return Note
     */
    public function setSession(\ItechSup\NotationBundle\Entity\Session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \ItechSup\NotationBundle\Entity\Session 
     */
    public function getSession()
    {
        return $this->session;
    }
}
