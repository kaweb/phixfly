<?php

namespace Kaweb\Phixfly\Models;

class PrevNextPagedListModel
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
     * http://api-docs.fixflo.com/#resources-prevnextpagedlist
     *
     * @param string $previousUrl
     * @param string $nextUrl
     * @param array $items
     * @param int $totalItems
     * @param int $totalPages
     */
    public function __construct(string $previousUrl, string $nextUrl, array $items, int $totalItems, int $totalPages)
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
    public function getPreviousUrl(): string
    {
        return $this->previousUrl;
    }

    /**
     * @param string $previousUrl
     */
    public function setPreviousUrl(string $previousUrl)
    {
        $this->previousUrl = $previousUrl;
    }

    /**
     * @return string
     */
    public function getNextUrl(): string
    {
        return $this->nextUrl;
    }

    /**
     * @param string $nextUrl
     */
    public function setNextUrl(string $nextUrl)
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
    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    /**
     * @param int $totalItems
     */
    public function setTotalItems(int $totalItems)
    {
        $this->totalItems = $totalItems;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     */
    public function setTotalPages(int $totalPages)
    {
        $this->totalPages = $totalPages;
    }
}