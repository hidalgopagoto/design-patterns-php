<?php
namespace Entities;

use Interfaces\PrintableInterface;
use Interfaces\PrototypeInterface;

class Page implements PrototypeInterface, PrintableInterface
{
    /**
     * @var Author
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    /**
     * @var Revision
     */
    private $revision;

    /**
     * @var string
     */
    private $description;

    public function __clone()
    {
        $this->setAuthor(clone $this->getAuthor());
        $this->setTitle($this->getTitle().' copy');
        $this->setDescription($this->getDescription().' copy');
        $this->getAuthor()->setName($this->author->getName().' copy');
        $this->setRevision(clone $this->getRevision());
        $this->getRevision()->setPage($this);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }

    /**
     * @return Revision
     */
    public function getRevision(): Revision
    {
        return $this->revision;
    }

    /**
     * @param Revision $revision
     */
    public function setRevision(Revision $revision): void
    {
        $this->revision = $revision;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'author' => [
                'name' => $this->getAuthor()->getName(),
                'email' => $this->getAuthor()->getEmail()
            ],
            'revision' => [
                'page' => [
                    'title' => $this->getRevision()->getPage()->getTitle(),
                    'description' => $this->getRevision()->getPage()->getDescription(),
                    'author' => [
                        'name' => $this->getRevision()->getPage()->getAuthor()->getName(),
                        'email' => $this->getRevision()->getPage()->getAuthor()->getEmail()
                    ]
                ]
            ]
        ];
    }
}