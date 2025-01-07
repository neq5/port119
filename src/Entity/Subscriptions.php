<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubscriptionsRepository")
 */
class Subscriptions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Group")
     */
    private $groups;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $accounts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroups(): ?Group
    {
        return $this->groups;
    }

    #public function setGroups(?Group $groups): self
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
