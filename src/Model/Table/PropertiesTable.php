<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Properties Model
 *
 * @property \Chef\Model\Table\ProductPropertiesTable|\Cake\ORM\Association\HasMany $ProductProperties
 * @property \Chef\Model\Table\SpreePropertyPrototypesTable|\Cake\ORM\Association\HasMany $SpreePropertyPrototypes
 * @property \Chef\Model\Table\SpreeVariantPropertyRuleValuesTable|\Cake\ORM\Association\HasMany $SpreeVariantPropertyRuleValues
 *
 * @method \Chef\Model\Entity\Property get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\Property newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\Property[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\Property|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\Property patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\Property[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\Property findOrCreate($search, callable $callback = null, $options = [])
 */
class PropertiesTable extends Table
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

        $this->setTable('properties');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('ProductProperties', [
            'foreignKey' => 'property_id',
            'className' => 'Chef.ProductProperties'
        ]);
        $this->hasMany('SpreePropertyPrototypes', [
            'foreignKey' => 'property_id',
            'className' => 'Chef.SpreePropertyPrototypes'
        ]);
        $this->hasMany('SpreeVariantPropertyRuleValues', [
            'foreignKey' => 'property_id',
            'className' => 'Chef.SpreeVariantPropertyRuleValues'
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
            ->allowEmpty('name');

        $validator
            ->scalar('presentation')
            ->requirePresence('presentation', 'create')
            ->notEmpty('presentation');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        return $validator;
    }
}
