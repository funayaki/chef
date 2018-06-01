<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prices Model
 *
 * @property \Chef\Model\Table\VariantsTable|\Cake\ORM\Association\BelongsTo $Variants
 *
 * @method \Chef\Model\Entity\Price get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\Price newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\Price[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\Price|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\Price patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\Price[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\Price findOrCreate($search, callable $callback = null, $options = [])
 */
class PricesTable extends Table
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

        $this->setTable('prices');
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

        $this->belongsTo('Variants', [
            'foreignKey' => 'variant_id',
            'joinType' => 'INNER',
            'className' => 'Chef.Variants'
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
            ->decimal('amount')
            ->allowEmpty('amount');

        $validator
            ->scalar('currency')
            ->allowEmpty('currency');

        $validator
            ->dateTime('deleted_at')
            ->allowEmpty('deleted_at');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->scalar('country_iso')
            ->maxLength('country_iso', 2)
            ->allowEmpty('country_iso');

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
        $rules->add($rules->existsIn(['variant_id'], 'Variants'));

        return $rules;
    }
}
