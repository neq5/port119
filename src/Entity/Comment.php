<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Wall")
     * @ORM\JoinColumn(nullable=false)
     */
    private $wid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $uid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $content;

    public function getContent()
    {
	    return $this->content;
    }

    public function setContent($content)
    {
		$this->content = $content;
		return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getWid()
    {
        return $this->wid;
    }

    public function setWid($wid)
    {
        $this->wid = $wid;

        return $this;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;

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

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }
}
