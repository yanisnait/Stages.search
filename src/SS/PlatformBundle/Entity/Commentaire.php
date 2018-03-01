<?php

namespace SS\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SS\UserBundle\Entity\User;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="SS\PlatformBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="SS\UserBundle\Entity\User", inversedBy="commentaires",cascade={"persist"})
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="User_id", referencedColumnName="id")})
     */
    private $auteur;

    /**
     * @var Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre", inversedBy="avis",cascade={"persist"})
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="Offre_id", referencedColumnName="id")})
     */
    private $offre;

    public function __construct()
    {
        $this->date=new \DateTime();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu.
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu.
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param User $user
     *
     */
    public function setAuteur(User $user)
    {
        $this->auteur=$user;
    }

    /**
     * @return User
     *
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param Offre $offre
     */

    public function setOffre(Offre $offre)
    {
        $this->offre=$offre;
    }

    /**
     * @return Offre
     */
    public function getOffre()
    {
        return $this->offre;
    }

}
