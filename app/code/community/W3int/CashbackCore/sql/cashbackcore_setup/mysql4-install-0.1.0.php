<?php

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
$setup->addAttributeGroup('catalog_product', 'Default', 'Cashback', 1000);
$setup->addAttribute('catalog_product', 'cashback_url', array(
'group' => 'Cashback',
'input' => 'text',
'type' => 'text',
'label' => 'Url',
'backend' => '',
'visible' => 1,
'required' => 0,
'user_defined' => 1,
'searchable' => 1,
'filterable' => 0,
'comparable' => 1,
'visible_on_front' => 1,
'visible_in_advanced_search' => 0,
'is_html_allowed_on_front' => 0,
'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
 
$setup->addAttribute('catalog_product', 'cashback_product', array(
    'group'                        => 'Cashback',
    'type'                          => 'int',
    'input'                         => 'select',
    'label'                         => 'Cashback Product',
    'global'                       => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'                       => 1,
    'required'                    => 0,
    'visible_on_front'        => 0,
    'is_html_allowed_on_front'  => 0,
    'is_configurable'         => 0,
    'source'                      => 'eav/entity_attribute_source_boolean',
    'searchable'               => 1,
    'filterable'                   => 0,
    'comparable'              => 1,
    'unique'                     => 0,
    'user_defined'           => 1,
    'is_user_defined'       => 1,
    'used_in_product_listing'  => 1
));
	
$attr = array (
  'attribute_model' => NULL,
  'group'=>'Cashback',
  'backend' => '',
  'type' => 'int',
  'table' => '',
  'frontend' => '',
  'input' => 'select',
  'label' => 'Retail',
  'frontend_class' => '',
  'source' => '',
  'required' => '0',
  'user_defined' => '1',
  'default' => '',
  'unique' => '0',
  'note' => '',
  'input_renderer' => NULL,
  'global' => '1',
  'visible' => '1',
  'searchable' => '1',
  'filterable' => '1',
  'comparable' => '1',
  'visible_on_front' => '0',
  'is_html_allowed_on_front' => '0',
  'is_used_for_price_rules' => '1',
  'filterable_in_search' => '1',
  'used_in_product_listing' => '0',
  'used_for_sort_by' => '0',
  'is_configurable' => '1',
  'apply_to' => 'simple',
  'visible_in_advanced_search' => '1',
  'position' => '1',
  'wysiwyg_enabled' => '0',
  'used_for_promo_rules' => '1',
  'option' => 
  array (
    'values' => 
    array (
      0 => 'Test1',
      1 => 'Test2',
    ),
  ),
);

$setup->addAttribute('catalog_product','cashback_retail',$attr);

$installer->endSetup();