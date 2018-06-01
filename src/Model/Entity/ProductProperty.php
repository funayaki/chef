<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductProperty Entity
 *
 * @property int $id
 * @property string $value
 * @property int $product_id
 * @property int $property_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $position
 *
 * @property \Chef\Model\Entity\Product $product
 * @property \Chef\Model\Entity\Property $property
 */
class ProductProperty extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'value' => true,
        'product_id' => true,
        'key' => true,
        'created_at' => true,
        'updated_at' => true,
        'position' => true,
        'product' => true,
        'property' => true
    ];
}
