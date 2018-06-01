<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OptionTypes Model
 *
 * @property |\Cake\ORM\Association\HasMany $OptionTypePrototypes
 * @property \Chef\Model\Table\OptionValuesTable|\Cake\ORM\Association\HasMany $OptionValues
 * @property \Chef\Model\Table\ProductOptionTypesTable|\Cake\ORM\Association\HasMany $ProductOptionTypes
 *
 * @method \Chef\Model\Entity\OptionType get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\OptionType newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\OptionType[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\OptionType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionType[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionType findOrCreate($search, callable $callback = null, $options = [])
 */
class OptionTypesTable extends Table
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

        $this->setTable('option_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('OptionTypePrototypes', [
            'foreignKey' => 'option_type_id',
            'className' => 'Chef.OptionTypePrototypes'
        ]);
        $this->hasMany('OptionValues', [
            'foreignKey' => 'option_type_id',
            'className' => 'Chef.OptionValues'
        ]);
        $this->hasMany('ProductOptionTypes', [
            'foreignKey' => 'option_type_id',
            'className' => 'Chef.ProductOptionTypes'
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
            ->maxLength('name', 100)
            ->allowEmpty('name');

        $validator
            ->scalar('presentation')
            ->maxLength('presentation', 100)
            ->allowEmpty('presentation');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        return $validator;
    }
}
