<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * Price Entity
 *
 * @property int $id
 * @property int $variant_id
 * @property float $amount
 * @property string $currency
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $country_iso
 *
 * @property \Chef\Model\Entity\Variant $variant
 */
class Price extends Entity
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
        'variant_id' => true,
        'amount' => true,
        'currency' => true,
        'deleted_at' => true,
        'created_at' => true,
        'updated_at' => true,
        'country_iso' => true,
        'variant' => true
    ];
}
