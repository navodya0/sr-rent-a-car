<?php  return array (
  0 => 
  array (
    'text' => 'Content',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-file-text-o icon icon-large"></i>',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_site',
    'namespace' => 'core',
    'id' => 'site',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Create Resource',
        'parent' => 'site',
        'action' => 'resource/create',
        'description' => 'Create a Resource — usually a web page',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'new_document',
        'namespace' => 'core',
        'id' => 'new_resource',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Preview Site',
        'parent' => 'site',
        'action' => '',
        'description' => 'View your website in a new window',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'MODx.preview(); return false;',
        'permissions' => '',
        'namespace' => 'core',
        'id' => 'preview',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Resource Groups',
        'parent' => 'site',
        'action' => 'security/resourcegroup',
        'description' => 'Assign Resources to Groups',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'id' => 'resource_groups',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Content Types',
        'parent' => 'site',
        'action' => 'system/contenttype',
        'description' => 'Add content types for resources, such as .html, .js, etc.',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'content_types',
        'namespace' => 'core',
        'id' => 'content_types',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  1 => 
  array (
    'text' => 'Media',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-file-image-o icon icon-large"></i>',
    'menuindex' => 1,
    'params' => '',
    'handler' => '',
    'permissions' => 'file_manager',
    'namespace' => 'core',
    'id' => 'media',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Media Browser',
        'parent' => 'media',
        'action' => 'media/browser',
        'description' => 'View, upload and manage media',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'file_manager',
        'namespace' => 'core',
        'id' => 'file_browser',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Media Sources',
        'parent' => 'media',
        'action' => 'source',
        'description' => 'Media sources for use of media from remote services or servers',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'sources',
        'namespace' => 'core',
        'id' => 'sources',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  2 => 
  array (
    'text' => 'Extras',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-cube icon icon-large"></i>',
    'menuindex' => 2,
    'params' => '',
    'handler' => '',
    'permissions' => 'components',
    'namespace' => 'core',
    'id' => 'components',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Installer',
        'parent' => 'components',
        'action' => 'workspaces',
        'description' => 'Manage Add-ons and Distributions',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'packages',
        'namespace' => 'core',
        'id' => 'installer',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  3 => 
  array (
    'text' => 'Manage',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-sliders icon icon-large"></i>',
    'menuindex' => 3,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_tools',
    'namespace' => 'core',
    'id' => 'manage',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Users',
        'parent' => 'manage',
        'action' => 'security/user',
        'description' => 'Manage Users and their Permissions',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_user',
        'namespace' => 'core',
        'id' => 'users',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Clear Cache',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Delete Cache files in all Contexts',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'MODx.clearCache(); return false;',
        'permissions' => 'empty_cache',
        'namespace' => 'core',
        'id' => 'refresh_site',
        'children' => 
        array (
          0 => 
          array (
            'text' => 'Refresh URIs',
            'parent' => 'refresh_site',
            'action' => '',
            'description' => 'Regenerate system Resource URIs.',
            'icon' => '',
            'menuindex' => 0,
            'params' => '',
            'handler' => 'MODx.refreshURIs(); return false;',
            'permissions' => 'empty_cache',
            'namespace' => 'core',
            'id' => 'refreshuris',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Delete Locks',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Delete all locks on Manager pages',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => 'MODx.removeLocks();return false;',
        'permissions' => 'remove_locks',
        'namespace' => 'core',
        'id' => 'remove_locks',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Flush Your Permissions',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Reload this session’s Permissions',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_access\')
    ,text: _(\'flush_access_confirm\')
    ,url: MODx.config.connector_url
    ,params: {
        action: \'security/access/flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this},
        \'failure\': {fn:function(response) { Ext.MessageBox.alert(\'failure\', response.responseText); },scope:this},
    }
});',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'id' => 'flush_access',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'Logout All Users',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Immediately destroy all sessions',
        'icon' => '',
        'menuindex' => 4,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_sessions\')
    ,text: _(\'flush_sessions_confirm\')
    ,url: MODx.config.connector_url
    ,params: {
        action: \'security/flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'flush_sessions',
        'namespace' => 'core',
        'id' => 'flush_sessions',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      5 => 
      array (
        'text' => 'Reports',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Admin reports for your MODX install',
        'icon' => '',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'menu_reports',
        'namespace' => 'core',
        'id' => 'reports',
        'children' => 
        array (
          0 => 
          array (
            'text' => 'Site Schedule',
            'parent' => 'reports',
            'action' => 'resource/site_schedule',
            'description' => 'View Resources with upcoming publish or unpublish dates.',
            'icon' => '',
            'menuindex' => 0,
            'params' => '',
            'handler' => '',
            'permissions' => 'view_document',
            'namespace' => 'core',
            'id' => 'site_schedule',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
          1 => 
          array (
            'text' => 'Manager Actions',
            'parent' => 'reports',
            'action' => 'system/logs',
            'description' => 'View the recent manager activity.',
            'icon' => '',
            'menuindex' => 1,
            'params' => '',
            'handler' => '',
            'permissions' => 'mgr_log_view',
            'namespace' => 'core',
            'id' => 'view_logging',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
          2 => 
          array (
            'text' => 'Error Log',
            'parent' => 'reports',
            'action' => 'system/event',
            'description' => 'View the MODX error.log.',
            'icon' => '',
            'menuindex' => 2,
            'params' => '',
            'handler' => '',
            'permissions' => 'view_eventlog',
            'namespace' => 'core',
            'id' => 'eventlog_viewer',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
          3 => 
          array (
            'text' => 'System Info',
            'parent' => 'reports',
            'action' => 'system/info',
            'description' => 'View server information, such as phpinfo, database info, and more.',
            'icon' => '',
            'menuindex' => 3,
            'params' => '',
            'handler' => '',
            'permissions' => 'view_sysinfo',
            'namespace' => 'core',
            'id' => 'view_sysinfo',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
);