<?php
namespace App\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(name="content2")
 * use repository for handy tree functions
 * @ORM\Entity(repositoryClass="Gedmo\Tree\Entity\Repository\NestedTreeRepository")
 */

class Content2
{

    /**
     * @ORM\Column(type="guid")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Group")
         * @ORM\JoinColumn(nullable=true);
	 */

	private $groups;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\User")
	 * @ORM\JoinColumn(nullable=true)
	 */

	private $accounts;


    /**
     * @ORM\Column(length=64)
     */
    private $title;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\ManyToOne(targetEntity="Content2")
     * @ORM\JoinColumn(referencedColumnName="id", onDelete="CASCADE")
     */
    private $root;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Content2", inversedBy="children")
     * @ORM\JoinColumn(referencedColumnName="id", onDelete="CASCADE")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Content2", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	private $content;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	private $deleted;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	private $todelete;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;



	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	private $image;

	public function getImage()
	{
		return  $this->image;
	}

	public function setImage($image)
	{
		$this->image = $image;
		return $this;

	}

    public function getId()
    {   
        return $this->id;
    }

    public function setTitle($title)
    {   
        $this->title = $title;
    }

    public function getTitle()
    {   
        return $this->title;
    }

    public function getRoot()
    {   
        return $this->root;
    }

    public function setParent(Content2 $parent = null)
    {   
        $this->parent = $parent;
    }

    public function getParent()
    {   
        return $this->parent;
    }

	public function getGroups(): ?Group
	{
		return $this->groups;
	}

	public function setGroups($groups)
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

	public function getContent(): ?bool
	{
		return $this->content;
	}

	public function setContent(?bool $content): self
	{
		$this->content=$content;
		return $this;
	}

	public function getDeleted(): ?bool
	{
		return $this->deleted;
	}

	public function setDeleted(?bool $deleted): self
	{
		$this->deleted=$deleted;
		return $this;
	}

	public function getTodelete()
	{
		return $this->todelete;
	}

	public function setTodelete($todelete)
	{	
		$this->todelete=$todelete;
		return $this;
	}
}

