<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\PrototypesTable;

/**
 * Chef\Model\Table\PrototypesTable Test Case
 */
class PrototypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\PrototypesTable
     */
    public $Prototypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.prototypes',
        'plugin.chef.option_type_prototypes',
        'plugin.chef.spree_property_prototypes',
        'plugin.chef.spree_prototype_taxons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prototypes') ? [] : ['className' => PrototypesTable::class];
        $this->Prototypes = TableRegistry::get('Prototypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prototypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
