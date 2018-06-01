<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\ProductPropertiesTable;

/**
 * Chef\Model\Table\ProductPropertiesTable Test Case
 */
class ProductPropertiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\ProductPropertiesTable
     */
    public $ProductProperties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.product_properties',
        'plugin.chef.products',
        'plugin.chef.properties'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductProperties') ? [] : ['className' => ProductPropertiesTable::class];
        $this->ProductProperties = TableRegistry::get('ProductProperties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductProperties);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testCreatedAt()
    {
        $this->markTestIncomplete();
    }

    public function testUpdatedAt()
    {
        $this->markTestIncomplete();
    }
}
