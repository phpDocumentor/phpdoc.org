<?php
namespace phpDocumentor\ThemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Theme
{
    /**
     * @ORM\Column(type="string", length="100")
     */
    protected $name;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length="100")
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    private function generateSlug($phrase, $maxLength)
    {
        $result = strtolower($phrase);

        $result = preg_replace("/[^a-z0-9\s-]/", "", $result);
        $result = trim(preg_replace("/[\s-]+/", " ", $result));
        $result = trim(substr($result, 0, $maxLength));
        $result = preg_replace("/\s/", "-", $result);

        return $result;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        if ($this->slug === null)
        {
            $this->slug = $this->generateSlug($name, 100);
        }
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
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
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
}
