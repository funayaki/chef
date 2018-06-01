<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\PromotionRulesTable;

/**
 * Chef\Model\Table\PromotionRulesTable Test Case
 */
class PromotionRulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\PromotionRulesTable
     */
    public $PromotionRules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
//        'plugin.chef.promotion_rules',
//        'plugin.chef.promotions',
//        'plugin.chef.product_groups',
//        'plugin.chef.product_promotion_rules',
//        'plugin.chef.promotion_rule_taxons',
//        'plugin.chef.promotion_rules_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PromotionRules') ? [] : ['className' => PromotionRulesTable::class];
        $this->PromotionRules = TableRegistry::get('PromotionRules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PromotionRules);

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
