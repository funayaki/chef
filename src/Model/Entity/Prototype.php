<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prototype Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\OptionTypePrototype[] $option_type_prototypes
 * @property \Chef\Model\Entity\SpreePropertyPrototype[] $spree_property_prototypes
 * @property \Chef\Model\Entity\SpreePrototypeTaxon[] $spree_prototype_taxons
 */
class Prototype extends Entity
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
        'name' => true,
        'created_at' => true,
        'updated_at' => true,
        'option_type_prototypes' => true,
        'spree_property_prototypes' => true,
        'spree_prototype_taxons' => true
    ];
}
