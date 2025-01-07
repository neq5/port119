<?php

namespace App\Entity;

use App\Repository\ProfileVisitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfileVisitsRepository::class)
 */
class ProfileVisits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $visited;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $visitor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId()
    {
        return $this->id;
    }

    public function getVisited()
    {
        return $this->visited;
    }

    public function setVisited($visited)
    {
        $this->visited = $visited;

        return $this;
    }

    public function getVisitor()
    {
        return $this->visitor;
    }

    public function setVisitor($visitor)
    {
        $this->visitor = $visitor;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
