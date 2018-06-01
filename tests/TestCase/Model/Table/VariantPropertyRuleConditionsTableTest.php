<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\VariantPropertyRuleConditionsTable;

/**
 * Chef\Model\Table\VariantPropertyRuleConditionsTable Test Case
 */
class VariantPropertyRuleConditionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\VariantPropertyRuleConditionsTable
     */
    public $VariantPropertyRuleConditions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.variant_property_rule_conditions',
        'plugin.chef.option_values',
        'plugin.chef.variant_property_rules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VariantPropertyRuleConditions') ? [] : ['className' => VariantPropertyRuleConditionsTable::class];
        $this->VariantPropertyRuleConditions = TableRegistry::get('VariantPropertyRuleConditions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VariantPropertyRuleConditions);

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
