<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\PropertiesTable;

/**
 * Chef\Model\Table\PropertiesTable Test Case
 */
class PropertiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\PropertiesTable
     */
    public $Properties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.properties',
        'plugin.chef.product_properties',
        'plugin.chef.property_prototypes',
        'plugin.chef.variant_property_rule_values'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Properties') ? [] : ['className' => PropertiesTable::class];
        $this->Properties = TableRegistry::get('Properties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Properties);

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
