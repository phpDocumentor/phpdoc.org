<?php
namespace phpDocumentor\ResourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Comment
{

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\ManyToOne(targetEntity="Resource", inversedBy="comments")
   * @ORM\JoinColumn(name="resource_name", referencedColumnName="name")
   */
  protected $resource;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
   * @ORM\JoinColumn(name="author", referencedColumnName="username")
   */
  protected $author;

  /**
   * @ORM\Column(type="integer")
   */
  protected $rating = 0;

  /**
   * @ORM\Column(type="text")
   */
  protected $body;

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set resource
     *
     * @param phpDocumentor\ResourceBundle\Entity\Resource $resource
     */
    public function setResource(\phpDocumentor\ResourceBundle\Entity\Resource $resource)
    {
        $this->resource = $resource;
    }

    /**
     * Get resource
     *
     * @return phpDocumentor\ResourceBundle\Entity\Resource
     */
    public function getResource()
    {
        return $this->resource;
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
}