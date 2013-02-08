<?php

namespace YM\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Album
 *
 * @ORM\Table(name="albums")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="YM\TestBundle\Entity\AlbumRepository")
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="YM\TestBundle\Entity\Artist", inversedBy="albums")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank
     */
    private $artist;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\MinLength(limit=3, message="The Name should be at least {{ limit }} characters.")
     * @Assert\NotBlank
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }}.")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="songs", type="text")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }}.")
     * @Assert\NotBlank
     */
    private $songs;

    /**
     * @var string
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @Assert\File(maxSize="6000000")
     * @Assert\Valid()
     */
    public $file;


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
     * Set songs
     *
     * @param string $songs
     * @return Album
     */
    public function setSongs($songs)
    {
        $this->songs = $songs;
    
        return $this;
    }

    /**
     * Get songs
     *
     * @return string 
     */
    public function getSongs()
    {
        return $this->songs;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Album
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set artist
     *
     * @param integer $artist
     * @return Album
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    
        return $this;
    }

    /**
     * Get artist
     *
     * @return integer 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Album
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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

    public function getAbsolutePath()
    {
        return null === $this->picture
            ? null
            : $this->getUploadRootDir().'/'.$this->picture;
    }

    public function getWebPath()
    {
        return null === $this->picture
            ? null
            : $this->getUploadDir().'/'.$this->picture;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'images/Albums';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->picture = $filename.'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->picture);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
}