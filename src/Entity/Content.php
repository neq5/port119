<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContentRepository")
 */
class Content
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Group")
     * @ORM\JoinColumn(nullable=true)
     */
    private $groups;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $accounts;

    /**
     * @ORM\Column(type="guid", nullable=true)
     */
    private $refs;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subject;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $content;

    #public function getId(): ?int
    public function getId()
    {
        return $this->id;
    }

    public function getGroups(): ?Group
    {
        return $this->groups;
    }

    public function setGroups(?Group $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getAccounts(): ?User
    {
        return $this->accounts;
    }

    public function setAccounts(?User $accounts): self
    {
        $this->accounts = $accounts;

        return $this;
    }

    public function getRefs(): ?string
    {
        return $this->refs;
    }

    public function setRefs(string $refs): self
    {
        $this->refs = $refs;

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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getContent(): ?bool
    {
        return $this->content;
    }

    public function setContent(?bool $content): self
    {
        $this->content = $content;

        return $this;
    }
}
