<?php
namespace phpDocumentor\ResourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Resource
{
  /**
   * @ORM\Id
   * @ORM\Column(type="string", length=100)
   */
  protected $name;

  protected $type;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="resources")
   * @ORM\JoinColumn(name="author", referencedColumnName="username", nullable=false)
   */
  protected $author;

  /**
   * @ORM\OneToMany(targetEntity="Comment", mappedBy="resource")
   */
  protected $comments;

  /**
   * @ORM\Column(type="text")
   */
  protected $description;

  /**
   * @ORM\ManyToMany(targetEntity="Resource")
   * @ORM\JoinTable(name="Dependencies",
   *      joinColumns={@ORM\JoinColumn(name="incoming", referencedColumnName="name")},
   *      inverseJoinColumns={@ORM\JoinColumn(name="outgoing", referencedColumnName="name")}
   * )
   */
  protected $depends_on;

  /**
   * @ORM\ManyToMany(targetEntity="Resource", mappedBy="depends_on")
   */
  protected $dependencies;

  public function __construct()
  {
    $this->comments     = new ArrayCollection();
    $this->dependencies = new ArrayCollection();
    $this->depends_on   = new ArrayCollection();
  }

  /**
   * Set name
   *
   * @param string $name
   */
  public function setName($name)
  {
      $this->name = $name;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * Set description
   *
   * @param text $description
   */
  public function setDescription($description)
  {
      $this->description = $description;
  }

  /**
   * Get description
   *
   * @return text
   */
  public function getDescription()
  {
      return $this->description;
  }

    /**
     * Add comments
     *
     * @param phpDocumentor\ResourceBundle\Entity\Comment $comments
     */
    public function addComment(\phpDocumentor\ResourceBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set author
     *
     * @param phpDocumentor\ResourceBundle\Entity\User $author
     */
    public function setAuthor(\phpDocumentor\ResourceBundle\Entity\User $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return phpDocumentor\ResourceBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Add depends_on
     *
     * @param phpDocumentor\ResourceBundle\Entity\Resource $dependsOn
     */
    public function addResource(\phpDocumentor\ResourceBundle\Entity\Resource $dependsOn)
    {
        $this->depends_on[] = $dependsOn;
    }

    /**
     * Get depends_on
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getDependsOn()
    {
        return $this->depends_on;
    }

    /**
     * Get dependencies
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }
}
