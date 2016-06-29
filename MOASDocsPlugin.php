<?php

/**
 * @package     omeka
 * @subpackage  moas-docs
 * @copyright   2016 University of Nottingham
 * @license     MIT
 * @author      Alan Shortis <alan.shortis@nottingham.ac.uk>
 */

class MOASDocsPlugin extends Omeka_Plugin_AbstractPlugin
{
  // Define Hooks
  protected $_hooks = array('uninstall_message', 'define_acl');

  //Define Filters
  protected $_filters = array('admin_navigation_main');

  public function hookDefineAcl($args)
  {
    $acl = $args['acl'];
    $indexResource = new Zend_Acl_Resource('MOASDocs_Index');
    $acl->add($indexResource);
  }

  public function filterAdminNavigationMain($nav)
  {
    $nav[] = array(
      'label'   => __('MOAS Docs'),
      'uri'     => url(
        array(
          'module'=>'moas-docs',
          'controller'=>'index',
          'action'=>'index',
        ), 'default'
      ),
      'resource' => 'MOASDocs_Index'
    );

    return $nav;
  }

  public function hookUninstallMessage()
  {
    echo __('%sWarning%s: This will remove all MOAS Documentation from the Admin area.%s', '<p><strong>', '</strong>', '</p>');
  }
}