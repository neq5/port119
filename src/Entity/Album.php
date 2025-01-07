<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\User")
	 * @ORM\Column(nullable=true)
	 */

	private $accounts;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    public function getId()
    {
        return $this->id;
    }


	public function getAccounts(): ?User
	{
		return $this->accounts;
	}

	public function setAccounts($accounts): self
	{
		$this->accounts = $accounts;
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
