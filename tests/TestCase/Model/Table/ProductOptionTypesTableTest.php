<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\ProductOptionTypesTable;

/**
 * Chef\Model\Table\ProductOptionTypesTable Test Case
 */
class ProductOptionTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\ProductOptionTypesTable
     */
    public $ProductOptionTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.product_option_types',
        'plugin.chef.products',
        'plugin.chef.option_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductOptionTypes') ? [] : ['className' => ProductOptionTypesTable::class];
        $this->ProductOptionTypes = TableRegistry::get('ProductOptionTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductOptionTypes);

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
}
