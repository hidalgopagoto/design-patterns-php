<?php
namespace Entities;

class Revision
{
    /**
     * @var Page
     */
    private $page;

    public function __construct(Page $page)
    {
        $this->setPage($page);
    }

    /**
     * @return Page
     */
    public function getPage(): Page
    {
        return $this->page;
    }

    /**
     * @param Page $page
     */
    public function setPage(Page $page): void
    {
        $this->page = $page;
    }
}