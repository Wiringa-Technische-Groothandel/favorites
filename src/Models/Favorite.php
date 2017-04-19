<?php

namespace WTG\Favorites\Models;

use Illuminate\Database\Eloquent\Model;
use WTG\Favorites\Interfaces\FavoriteInterface;

/**
 * Favorite model
 *
 * @package     WTG\Favorites
 * @subpackage  Models
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class Favorite extends Model implements FavoriteInterface
{
    /**
     * Get the id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->attributes['id'];
    }

    /**
     * Set the id
     *
     * @param  string  $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->attributes['id'] = $id;

        return $this;
    }

    /**
     * Get the product id.
     *
     * @return string
     */
    public function getProductId(): string
    {
        return $this->attributes['product_id'];
    }

    /**
     * Set the product id.
     *
     * @param  string  $id
     * @return $this
     */
    public function setProductId(string $id)
    {
        $this->attributes['product_id'] = $id;

        return $this;
    }

    /**
     * Get the customer id.
     *
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->attributes['customer_id'];
    }

    /**
     * Set the customer id.
     *
     * @param  string  $id
     * @return $this
     */
    public function setCustomerId(string $id)
    {
        $this->attributes['customer_id'] = $id;

        return $this;
    }
}