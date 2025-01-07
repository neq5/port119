<?php

namespace App\Entity;

use App\Repository\WhitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WhitsRepository::class)
 */
class Whits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @ORM\Column(type="guid")
     */
    private $g_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $hits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGId(): ?string
    {
        return $this->g_id;
    }

    public function setGId(string $g_id): self
    {
        $this->g_id = $g_id;

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
