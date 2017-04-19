<?php

namespace WTG\Favorites\Interfaces;

/**
 * Interface FavoriteInterface
 *
 * @package     WTG\Favorites
 * @subpackage  Interfaces
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
interface FavoriteInterface
{
    /**
     * Get the id
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Set the id
     *
     * @param  string  $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * Get the product id.
     *
     * @return string
     */
    public function getProductId(): string;

    /**
     * Set the product id.
     *
     * @param  string  $id
     * @return $this
     */
    public function setProductId(string $id);

    /**
     * Get the customer id.
     *
     * @return string
     */
    public function getCustomerId(): string;

    /**
     * Set the customer id.
     *
     * @param  string  $id
     * @return $this
     */
    public function setCustomerId(string $id);
}