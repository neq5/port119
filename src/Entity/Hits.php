<?php

namespace App\Entity;

use App\Repository\HitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HitsRepository::class)
 */
class Hits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Group::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $gid;

    /**
     * @ORM\Column(type="integer")
     */
    private $hits;

    public function getId()
    {
        return $this->id;
    }

    public function getGid(): ?Group
    {
        return $this->gid;
    }

    public function setGid(?Group $gid): self
    {
        $this->gid = $gid;

        return $this;
    }

    public function getHits(): ?int
    {
        return $this->hits;
    }

    public function setHits(int $hits): self
    {
        $this->hits = $hits;

        return $this;
    }
}
