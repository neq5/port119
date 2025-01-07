<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Asserts;

use Symfony\Component\HttpFoundation\File\File;




use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Gallery2Repository")
 * @Vich\Uploadable
 */

class Gallery2
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * Assert\File(mimeTypes={ "image/jpeg" }_)
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     */
    private $brochure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrochure(): ?string
    {
        return $this->brochure;
    }

    public function setBrochure(?string $brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

	/**
	 * @ORM\Column(type="string", length=255)
	 * @var string
         */

	private $image;

	/**
	 * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
	 * @var File
	 */

	private $imageFile;

	/**
	 * @ORM\Column(type="datetime")
	 * @var \DateTime
	 */

	private $updatedAt;

	
	public function setImageFile(File $image = null)
	{
		$this->imageFile=$image;

		if($image) 
		{
			$this->updatedAt = new \DateTime('now');
		}
	}

	public function getImageFile()
	{
		return $this->imageFile;
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	private $todelete;

	public function getTodelete()
	{
		return $this->todelete;
	}	

	public function setTodelete($todelete)
	{
		$this->todelete = $todelete;
	}
}

