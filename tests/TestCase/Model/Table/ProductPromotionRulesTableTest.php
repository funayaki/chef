<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\ProductPromotionRulesTable;

/**
 * Chef\Model\Table\ProductPromotionRulesTable Test Case
 */
class ProductPromotionRulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\ProductPromotionRulesTable
     */
    public $ProductPromotionRules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.product_promotion_rules',
        'plugin.chef.products',
        'plugin.chef.promotion_rules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductPromotionRules') ? [] : ['className' => ProductPromotionRulesTable::class];
        $this->ProductPromotionRules = TableRegistry::get('ProductPromotionRules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductPromotionRules);

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
