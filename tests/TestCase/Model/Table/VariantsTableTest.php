<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\VariantsTable;

/**
 * Chef\Model\Table\VariantsTable Test Case
 */
class VariantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\VariantsTable
     */
    public $Variants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.variants',
        'plugin.chef.products',
//        'plugin.chef.tax_categories',
        'plugin.chef.prices',
//        'plugin.chef.inventory_units',
//        'plugin.chef.line_items',
//        'plugin.chef.order_stock_locations',
//        'plugin.chef.promotion_action_line_items',
//        'plugin.chef.stock_items',
//        'plugin.chef.transfer_items',
//        'plugin.chef.option_values'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Variants') ? [] : ['className' => VariantsTable::class];
        $this->Variants = TableRegistry::get('Variants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Variants);

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
