<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Variants Model
 *
 * @property \Chef\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \Chef\Model\Table\TaxCategoriesTable|\Cake\ORM\Association\BelongsTo $TaxCategories
 * @property \Chef\Model\Table\PricesTable|\Cake\ORM\Association\HasMany $Prices
 * @property \Chef\Model\Table\SpreeInventoryUnitsTable|\Cake\ORM\Association\HasMany $SpreeInventoryUnits
 * @property \Chef\Model\Table\SpreeLineItemsTable|\Cake\ORM\Association\HasMany $SpreeLineItems
 * @property \Chef\Model\Table\SpreeOrderStockLocationsTable|\Cake\ORM\Association\HasMany $SpreeOrderStockLocations
 * @property \Chef\Model\Table\SpreePromotionActionLineItemsTable|\Cake\ORM\Association\HasMany $SpreePromotionActionLineItems
 * @property \Chef\Model\Table\SpreeStockItemsTable|\Cake\ORM\Association\HasMany $SpreeStockItems
 * @property \Chef\Model\Table\SpreeTransferItemsTable|\Cake\ORM\Association\HasMany $SpreeTransferItems
 * @property \Chef\Model\Table\OptionValuesTable|\Cake\ORM\Association\BelongsToMany $OptionValues
 *
 * @method \Chef\Model\Entity\Variant get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\Variant newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\Variant[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\Variant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\Variant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\Variant[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\Variant findOrCreate($search, callable $callback = null, $options = [])
 */
class VariantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('variants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Products'
        ]);
        $this->belongsTo('TaxCategories', [
            'foreignKey' => 'tax_category_id',
            'className' => 'Chef.TaxCategories'
        ]);
        $this->hasMany('Prices', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.Prices'
        ]);
        $this->hasMany('SpreeInventoryUnits', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.SpreeInventoryUnits'
        ]);
        $this->hasMany('SpreeLineItems', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.SpreeLineItems'
        ]);
        $this->hasMany('SpreeOrderStockLocations', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.SpreeOrderStockLocations'
        ]);
        $this->hasMany('SpreePromotionActionLineItems', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.SpreePromotionActionLineItems'
        ]);
        $this->hasMany('SpreeStockItems', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.SpreeStockItems'
        ]);
        $this->hasMany('SpreeTransferItems', [
            'foreignKey' => 'variant_id',
            'className' => 'Chef.SpreeTransferItems'
        ]);
        $this->belongsToMany('OptionValues', [
            'foreignKey' => 'variant_id',
            'targetForeignKey' => 'option_value_id',
            'joinTable' => 'option_values_variants',
            'className' => 'Chef.OptionValues'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('sku')
            ->requirePresence('sku', 'create')
            ->notEmpty('sku');

        $validator
            ->decimal('weight')
            ->allowEmpty('weight');

        $validator
            ->decimal('height')
            ->allowEmpty('height');

        $validator
            ->decimal('width')
            ->allowEmpty('width');

        $validator
            ->decimal('depth')
            ->allowEmpty('depth');

        $validator
            ->dateTime('deleted_at')
            ->allowEmpty('deleted_at');

        $validator
            ->boolean('is_master')
            ->allowEmpty('is_master');

        $validator
            ->decimal('cost_price')
            ->allowEmpty('cost_price');

        $validator
            ->integer('position')
            ->allowEmpty('position');

        $validator
            ->scalar('cost_currency')
            ->allowEmpty('cost_currency');

        $validator
            ->boolean('track_inventory')
            ->allowEmpty('track_inventory');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['product_id'], 'Products'));
//        $rules->add($rules->existsIn(['tax_category_id'], 'TaxCategories'));

        return $rules;
    }
}
