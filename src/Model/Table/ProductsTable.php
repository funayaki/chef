<?php
namespace Chef\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SoftDelete\Model\Table\SoftDeleteTrait;

/**
 * Products Model
 *
 * @property \Chef\Model\Table\ProductPropertiesTable|\Cake\ORM\Association\HasMany $ProductProperties
 * @property \Chef\Model\Table\ProductOptionTypesTable|\Cake\ORM\Association\HasMany $ProductOptionTypes
 * @property \Chef\Model\Table\ProductPromotionRulesTable|\Cake\ORM\Association\HasMany $ProductPromotionRules
 * @property \Chef\Model\Table\VariantsTable|\Cake\ORM\Association\HasMany $Variants
 *
 * @method \Chef\Model\Entity\Product get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
{
    use SoftDeleteTrait;

    protected $softDeleteField = 'deleted_at';

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]);

        $this->hasMany('ProductProperties', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.ProductProperties'
        ]);
        $this->hasMany('ProductOptionTypes', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.ProductOptionTypes'
        ]);
        $this->hasMany('ProductPromotionRules', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.ProductPromotionRules'
        ]);
        $this->hasMany('ProductsTaxons', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.ProductsTaxons'
        ]);
        $this->hasMany('VariantPropertyRules', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.VariantPropertyRules'
        ]);
        $this->hasOne('Masters', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Variants',
            'conditions' => [
                'Masters.is_master' => true,
                'Masters.deleted_at IS' => null,
            ]
        ]);
        $this->hasMany('Variants', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Variants',
            'conditions' => [
                'Variants.is_master' => false,
                'Variants.deleted_at IS' => null,
            ],
            'order' => ['position'],
        ]);
        $this->hasMany('VariantsIncludingMaster', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Variants',
            'conditions' => [
                'VariantsIncludingMaster.deleted_at IS' => null,
            ],
            'order' => ['position'],
        ]);
        $this->hasMany('VariantsIncludingDeleted', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Variants',
            'order' => ['position'],
            'dependent' => true,
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->dateTime('available_on')
            ->allowEmpty('available_on');

        $validator
            ->dateTime('deleted_at')
            ->allowEmpty('deleted_at');

        $validator
            ->scalar('slug')
            ->allowEmpty('slug')
            ->add('slug', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('meta_description')
            ->allowEmpty('meta_description');

        $validator
            ->scalar('meta_keywords')
            ->allowEmpty('meta_keywords');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->boolean('promotionable')
            ->allowEmpty('promotionable');

        $validator
            ->scalar('meta_title')
            ->allowEmpty('meta_title');

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
        $rules->add($rules->isUnique(['slug']));

        return $rules;
    }

    /**
     * @param Event $event
     * @param EntityInterface $entity
     * @param ArrayObject $options
     */
    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->getConnection()->getDriver()->enableAutoQuoting(true);
    }

    /**
     * @param Event $event
     * @param EntityInterface $entity
     * @param ArrayObject $options
     */
    public function afterSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->getConnection()->getDriver()->enableAutoQuoting(false);
    }

    /**
     * @param Query $query
     * @param array $options
     * @return Query
     */
    public function findAvailable(Query $query, array $options)
    {
        return $query->where($this->getAvailableConditions());
    }

    /**
     * @return array
     */
    public function getAvailableConditions()
    {
        return [
            'available_on <=' => new Time()
        ];
    }
}
