<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


/**
 * @ORM\Entity(repositoryClass="App\Repository\GroupCredentialsRepository")
 */
class GroupCredentials
{
	#public function __toString() {
	#	return $this->getAccounts()->getId();
	#}


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
 
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Group")
     */
    public $groups;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    public $accounts;

    public function getId()
    {
        return $this->id;
    }

    public function getGroups(): ?Group
    {
        return $this->groups;
    }

    public function setGroups($groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getAccounts(): ?User
    {
        return $this->accounts;
    }

    #public function setAccounts(?User $accounts): self
    public function setAccounts($accounts): self
    {
        $this->accounts = $accounts;

        return $this;
    }
}
