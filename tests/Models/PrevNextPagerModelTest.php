<?php

namespace Kaweb\Phixfly\Models;

class PrevNextPagerModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    protected $previousUrl;
    
    /**
     * @var string
     */
    protected $nextUrl;
    
    /**
     * @var array
     */
    protected $items;
    
    /**
     * @var int
     */
    protected $totalItems;
    
    /**
     * @var int
     */
    protected $totalPages;

    /**
     * PrevNextPagedListModel constructor.
     * http://api-docs.fixflo.com/#resources-prevnextpager
     *
     * @param string $previousUrl
     * @param string $nextUrl
     * @param array $items
     * @param int $totalItems
     * @param int $totalPages
     */
    public function __construct($previousUrl, $nextUrl, array $items, $totalItems, $totalPages)
    {
        $this->previousUrl = $previousUrl;
        $this->nextUrl = $nextUrl;
        $this->items = $items;
        $this->totalItems = $totalItems;
        $this->totalPages = $totalPages;
    }

    /**
     * @return string
     */
    public function getPreviousUrl()
    {
        return $this->previousUrl;
    }

    /**
     * @param string $previousUrl
     */
    public function setPreviousUrl($previousUrl)
    {
        $this->previousUrl = $previousUrl;
    }

    /**
     * @return string
     */
    public function getNextUrl()
    {
        return $this->nextUrl;
    }

    /**
     * @param string $nextUrl
     */
    public function setNextUrl($nextUrl)
    {
        $this->nextUrl = $nextUrl;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * @param int $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
    }
}