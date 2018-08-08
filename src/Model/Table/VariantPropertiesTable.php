<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VariantProperties Model
 *
 * @property \Chef\Model\Table\VariantsTable|\Cake\ORM\Association\BelongsTo $Variants
 *
 * @method \Chef\Model\Entity\VariantProperty get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\VariantProperty newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\VariantProperty[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\VariantProperty|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\VariantProperty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\VariantProperty[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\VariantProperty findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VariantPropertiesTable extends Table
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

        $this->setTable('variant_properties');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Variants', [
            'foreignKey' => 'variant_id',
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
            ->scalar('value')
            ->maxLength('value', 150)
            ->allowEmpty('value');

        $validator
            ->scalar('key')
            ->maxLength('key', 150)
            ->allowEmpty('key');

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
        $rules->add($rules->existsIn(['variant_id'], 'Variants'));

        return $rules;
    }
}
