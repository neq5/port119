<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity
 * @ORM\Table(name="accounts")
 */

class User extends BaseUser
{
    /**
    * @ORM\Id()
    * @ORM\Column(type="guid")
    * @ORM\GeneratedValue(strategy="UUID")
    **/


	protected $id;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $settings = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $about;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sig;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $avatar;

    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;


    /** @ORM\Column(name="googleplus_id", type="string", length=255, nullable=true) */

    protected $googleplus_id;

    /** @ORM\Column(name="googleplus_access_token", type="string", length=255, nullable=true) */

    protected $googleplus_access_token;

    public function setGoogleplusId($googlePlusId)  {
		$this->googleplus_id = $googlePlusId;
		return $this;
    }

    public function getGoogleplusId() {
		return $this->googleplus_id;
    }
	   


    public function setFacebookId($facebookID) {
	        $this->facebook_id = $facebookID;

		    return $this;
    }

    public function getFacebookId() {
	        return $this->facebook_id;
    }

    public function setFacebookAccessToken($facebookAccessToken) {
	        $this->facebook_access_token = $facebookAccessToken;

		    return $this;
    }

    public function getFacebookAccessToken() {
	        return $this->facebook_access_token;
    }




    public function getSettings(): ?array
    {
        return $this->settings;
    }

    public function setSettings(?array $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAbout(): ?bool
    {
        return $this->about;
    }

    public function setAbout(?bool $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getSig(): ?bool
    {
        return $this->sig;
    }

    public function setSig(?bool $sig): self
    {
        $this->sig = $sig;

        return $this;
    }

    public function getAvatar(): ?bool
    {
        return $this->avatar;
    }

    public function setAvatar(?bool $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

}



?>
