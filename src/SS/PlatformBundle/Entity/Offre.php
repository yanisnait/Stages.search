<?php

namespace SS\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use SS\UserBundle\Entity\User;
/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="SS\PlatformBundle\Repository\OffreRepository")
 */
class Offre
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
     * @ORM\Column(name="intitule", type="string", length=100)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=25)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="missions", type="text")
     */
    private $missions;

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="text")
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=25)
     */
    private $duree;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_offre", type="datetime")
     */
    private $dateOffre;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="SS\UserBundle\Entity\User", inversedBy="offres",cascade={"persist"})
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="User_id", referencedColumnName="id")})
     */
    private $auteur;

    /**
     * @var Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise", inversedBy="offres",cascade={"persist"})
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="Entreprise_id", referencedColumnName="id")})
     */
    private $entreprise;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="offre", cascade={"persist","remove"})
     */
    private $avis;

    public function __construct()
    {
        // Par défaut, la date de l'annonce est la date d'aujourd'hui
        $this->dateOffre = new \DateTime();
        $this->avis=new ArrayCollection();
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
     * Set intitule.
     *
     * @param string $intitule
     *
     * @return Offre
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule.
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set domaine.
     *
     * @param string $domaine
     *
     * @return Offre
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine.
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set missions.
     *
     * @param string $missions
     *
     * @return Offre
     */
    public function setMissions($missions)
    {
        $this->missions = $missions;

        return $this;
    }

    /**
     * Get missions.
     *
     * @return string
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * Set profil.
     *
     * @param string $profil
     *
     * @return Offre
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil.
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set duree.
     *
     * @param string $duree
     *
     * @return Offre
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree.
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set dateOffre.
     *
     * @param \DateTime $dateOffre
     *
     * @return Offre
     */
    public function setDateOffre($dateOffre)
    {
        $this->dateOffre = $dateOffre;

        return $this;
    }

    /**
     * Get dateOffre.
     *
     * @return \DateTime
     */
    public function getDateOffre()
    {
        return $this->dateOffre;
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
     * @param Entreprise $entreprise
     *
     */
    public function setEntreprise(Entreprise $entreprise)
    {
        $this->entreprise=$entreprise;
    }

    /**
     * @return Entreprise
     *
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param Commentaire $commentaire
     *
     */
    public function addAvis(Commentaire $commentaire)
    {
        $commentaire->setOffre($this);
        if(!$this->avis->contains($commentaire))
            $this->avis->add($commentaire);

    }

    /**
     * @return ArrayCollection
     */
    public function getAvis()
    {
        return $this->avis;
    }

}
