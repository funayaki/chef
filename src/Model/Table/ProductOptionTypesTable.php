<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductOptionTypes Model
 *
 * @property \Chef\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \Chef\Model\Table\OptionTypesTable|\Cake\ORM\Association\BelongsTo $OptionTypes
 *
 * @method \Chef\Model\Entity\ProductOptionType get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\ProductOptionType newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\ProductOptionType[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductOptionType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\ProductOptionType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductOptionType[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductOptionType findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductOptionTypesTable extends Table
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

        $this->setTable('product_option_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Products'
        ]);
        $this->belongsTo('OptionTypes', [
            'foreignKey' => 'option_type_id',
            'className' => 'Chef.OptionTypes'
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
            ->integer('position')
            ->allowEmpty('position');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

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
        $rules->add($rules->existsIn(['option_type_id'], 'OptionTypes'));

        return $rules;
    }
}
