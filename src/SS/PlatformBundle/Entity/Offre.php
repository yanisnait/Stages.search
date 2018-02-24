<?php

namespace SS\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     *
     * @ORM\Column(name="id_etr", type="integer")
     */
    private $idEtr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_offre", type="date")
     */
    private $dateOffre;


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
     * Set idEtr.
     *
     * @param int $idEtr
     *
     * @return Offre
     */
    public function setIdEtr($idEtr)
    {
        $this->idEtr = $idEtr;

        return $this;
    }

    /**
     * Get idEtr.
     *
     * @return int
     */
    public function getIdEtr()
    {
        return $this->idEtr;
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
}
