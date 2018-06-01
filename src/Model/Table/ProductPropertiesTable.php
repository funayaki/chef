<?php
namespace Chef\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductProperties Model
 *
 * @property \Chef\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \Chef\Model\Table\PropertiesTable|\Cake\ORM\Association\BelongsTo $Properties
 *
 * @method \Chef\Model\Entity\ProductProperty get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\ProductProperty newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\ProductProperty[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductProperty|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\ProductProperty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductProperty[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductProperty findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductPropertiesTable extends Table
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

        $this->setTable('product_properties');
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
        $this->belongsTo('Properties', [
            'foreignKey' => 'property_id',
            'className' => 'Chef.Properties'
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
            ->scalar('value')
            ->allowEmpty('value');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->integer('position')
            ->allowEmpty('position');

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
        $rules->add($rules->existsIn(['property_id'], 'Properties'));

        return $rules;
    }

    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->getConnection()->getDriver()->enableAutoQuoting(true);
    }

    public function afterSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->getConnection()->getDriver()->enableAutoQuoting(false);
    }
}
