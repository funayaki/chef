<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Properties'), ['controller' => 'ProductProperties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Property'), ['controller' => 'ProductProperties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Spree Product Option Types'), ['controller' => 'SpreeProductOptionTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spree Product Option Type'), ['controller' => 'SpreeProductOptionTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Spree Product Promotion Rules'), ['controller' => 'SpreeProductPromotionRules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spree Product Promotion Rule'), ['controller' => 'SpreeProductPromotionRules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Spree Products Taxons'), ['controller' => 'SpreeProductsTaxons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spree Products Taxon'), ['controller' => 'SpreeProductsTaxons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Spree Variant Property Rules'), ['controller' => 'SpreeVariantPropertyRules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spree Variant Property Rule'), ['controller' => 'SpreeVariantPropertyRules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Variants'), ['controller' => 'Variants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Variant'), ['controller' => 'Variants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($product->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Keywords') ?></th>
            <td><?= h($product->meta_keywords) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Title') ?></th>
            <td><?= h($product->meta_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax Category Id') ?></th>
            <td><?= $this->Number->format($product->tax_category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Category Id') ?></th>
            <td><?= $this->Number->format($product->shipping_category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Available On') ?></th>
            <td><?= h($product->available_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($product->deleted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($product->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($product->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotionable') ?></th>
            <td><?= $product->promotionable ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->meta_description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Product Properties') ?></h4>
        <?php if (!empty($product->product_properties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Property Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->product_properties as $productProperties): ?>
            <tr>
                <td><?= h($productProperties->id) ?></td>
                <td><?= h($productProperties->value) ?></td>
                <td><?= h($productProperties->product_id) ?></td>
                <td><?= h($productProperties->property_id) ?></td>
                <td><?= h($productProperties->created_at) ?></td>
                <td><?= h($productProperties->updated_at) ?></td>
                <td><?= h($productProperties->position) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductProperties', 'action' => 'view', $productProperties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductProperties', 'action' => 'edit', $productProperties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductProperties', 'action' => 'delete', $productProperties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productProperties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Spree Product Option Types') ?></h4>
        <?php if (!empty($product->spree_product_option_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Option Type Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->spree_product_option_types as $spreeProductOptionTypes): ?>
            <tr>
                <td><?= h($spreeProductOptionTypes->id) ?></td>
                <td><?= h($spreeProductOptionTypes->position) ?></td>
                <td><?= h($spreeProductOptionTypes->product_id) ?></td>
                <td><?= h($spreeProductOptionTypes->option_type_id) ?></td>
                <td><?= h($spreeProductOptionTypes->created_at) ?></td>
                <td><?= h($spreeProductOptionTypes->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SpreeProductOptionTypes', 'action' => 'view', $spreeProductOptionTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SpreeProductOptionTypes', 'action' => 'edit', $spreeProductOptionTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SpreeProductOptionTypes', 'action' => 'delete', $spreeProductOptionTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spreeProductOptionTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Spree Product Promotion Rules') ?></h4>
        <?php if (!empty($product->spree_product_promotion_rules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Promotion Rule Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->spree_product_promotion_rules as $spreeProductPromotionRules): ?>
            <tr>
                <td><?= h($spreeProductPromotionRules->id) ?></td>
                <td><?= h($spreeProductPromotionRules->product_id) ?></td>
                <td><?= h($spreeProductPromotionRules->promotion_rule_id) ?></td>
                <td><?= h($spreeProductPromotionRules->created_at) ?></td>
                <td><?= h($spreeProductPromotionRules->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SpreeProductPromotionRules', 'action' => 'view', $spreeProductPromotionRules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SpreeProductPromotionRules', 'action' => 'edit', $spreeProductPromotionRules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SpreeProductPromotionRules', 'action' => 'delete', $spreeProductPromotionRules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spreeProductPromotionRules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Spree Products Taxons') ?></h4>
        <?php if (!empty($product->spree_products_taxons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Taxon Id') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->spree_products_taxons as $spreeProductsTaxons): ?>
            <tr>
                <td><?= h($spreeProductsTaxons->id) ?></td>
                <td><?= h($spreeProductsTaxons->product_id) ?></td>
                <td><?= h($spreeProductsTaxons->taxon_id) ?></td>
                <td><?= h($spreeProductsTaxons->position) ?></td>
                <td><?= h($spreeProductsTaxons->created_at) ?></td>
                <td><?= h($spreeProductsTaxons->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SpreeProductsTaxons', 'action' => 'view', $spreeProductsTaxons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SpreeProductsTaxons', 'action' => 'edit', $spreeProductsTaxons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SpreeProductsTaxons', 'action' => 'delete', $spreeProductsTaxons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spreeProductsTaxons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Spree Variant Property Rules') ?></h4>
        <?php if (!empty($product->spree_variant_property_rules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->spree_variant_property_rules as $spreeVariantPropertyRules): ?>
            <tr>
                <td><?= h($spreeVariantPropertyRules->id) ?></td>
                <td><?= h($spreeVariantPropertyRules->product_id) ?></td>
                <td><?= h($spreeVariantPropertyRules->created_at) ?></td>
                <td><?= h($spreeVariantPropertyRules->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SpreeVariantPropertyRules', 'action' => 'view', $spreeVariantPropertyRules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SpreeVariantPropertyRules', 'action' => 'edit', $spreeVariantPropertyRules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SpreeVariantPropertyRules', 'action' => 'delete', $spreeVariantPropertyRules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spreeVariantPropertyRules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Variants') ?></h4>
        <?php if (!empty($product->variants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sku') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Height') ?></th>
                <th scope="col"><?= __('Width') ?></th>
                <th scope="col"><?= __('Depth') ?></th>
                <th scope="col"><?= __('Deleted At') ?></th>
                <th scope="col"><?= __('Is Master') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Cost Price') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Cost Currency') ?></th>
                <th scope="col"><?= __('Track Inventory') ?></th>
                <th scope="col"><?= __('Tax Category Id') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->variants as $variants): ?>
            <tr>
                <td><?= h($variants->id) ?></td>
                <td><?= h($variants->sku) ?></td>
                <td><?= h($variants->weight) ?></td>
                <td><?= h($variants->height) ?></td>
                <td><?= h($variants->width) ?></td>
                <td><?= h($variants->depth) ?></td>
                <td><?= h($variants->deleted_at) ?></td>
                <td><?= h($variants->is_master) ?></td>
                <td><?= h($variants->product_id) ?></td>
                <td><?= h($variants->cost_price) ?></td>
                <td><?= h($variants->position) ?></td>
                <td><?= h($variants->cost_currency) ?></td>
                <td><?= h($variants->track_inventory) ?></td>
                <td><?= h($variants->tax_category_id) ?></td>
                <td><?= h($variants->updated_at) ?></td>
                <td><?= h($variants->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Variants', 'action' => 'view', $variants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Variants', 'action' => 'edit', $variants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Variants', 'action' => 'delete', $variants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $variants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
