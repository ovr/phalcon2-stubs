<?php

namespace Phalcon\Acl\Adapter;

class Memory extends \Phalcon\Acl\Adapter
{
    /**
     * Roles Names
     *
     * @var mixed
     */
    protected $_rolesNames;
    /**
     * Roles
     *
     * @var mixed
     */
    protected $_roles;
    /**
     * Resource Names
     *
     * @var mixed
     */
    protected $_resourcesNames;
    /**
     * Resources
     *
     * @var mixed
     */
    protected $_resources;
    /**
     * Access
     *
     * @var mixed
     */
    protected $_access;
    /**
     * Role Inherits
     *
     * @var mixed
     */
    protected $_roleInherits;
    /**
     * Access List
     *
     * @var mixed
     */
    protected $_accessList;

    /**
     * Phalcon\Acl\Adapter\Memory constructor
     */
	public function __construct() {}

    /**
     * Adds a role to the ACL list. Second parameter allows inheriting access data from other existing role
     * Example:
     * <code>
     * $acl->addRole(new Phalcon\Acl\Role('administrator'), 'consultant');
     * $acl->addRole('administrator', 'consultant');
     * </code>
     *
     * @param \Phalcon\Acl\RoleInterface $role 
     * @param array|string $accessInherits 
     * @return boolean 
     */
	public function addRole($role, $accessInherits = null) {}

    /**
     * Do a role inherit from another existing role
     *
     * @param string $roleName 
     * @param string $roleToInherit 
     */
	public function addInherit($roleName, $roleToInherit) {}

    /**
     * Check whether role exist in the roles list
     *
     * @param string $roleName 
     * @return boolean 
     */
	public function isRole($roleName) {}

    /**
     * Check whether resource exist in the resources list
     *
     * @param string $resourceName 
     * @return boolean 
     */
	public function isResource($resourceName) {}

    /**
     * Adds a resource to the ACL list
     * Access names can be a particular action, by example
     * search, update, delete, etc or a list of them
     * Example:
     * <code>
     * //Add a resource to the the list allowing access to an action
     * $acl->addResource(new Phalcon\Acl\Resource('customers'), 'search');
     * $acl->addResource('customers', 'search');
     * //Add a resource  with an access list
     * $acl->addResource(new Phalcon\Acl\Resource('customers'), array('create', 'search'));
     * $acl->addResource('customers', array('create', 'search'));
     * </code>
     *
     * @param mixed $resourceValue 
     * @param array $accessList 
     * @param \Phalcon\Acl\Resource $resource 
     * @return boolean 
     */
	public function addResource($resourceValue, $accessList) {}

    /**
     * Adds access to resources
     *
     * @param string $resourceName 
     * @param mixed $accessList 
     * @return boolean 
     */
	public function addResourceAccess($resourceName, $accessList) {}

    /**
     * Removes an access from a resource
     *
     * @param string $resourceName 
     * @param mixed $accessList 
     */
	public function dropResourceAccess($resourceName, $accessList) {}

    /**
     * Checks if a role has access to a resource
     *
     * @param string $roleName 
     * @param string $resourceName 
     * @param string $access 
     * @param string $action 
     */
	protected function _allowOrDeny($roleName, $resourceName, $access, $action) {}

    /**
     * Allow access to a role on a resource
     * You can use '*' as wildcard
     * Example:
     * <code>
     * //Allow access to guests to search on customers
     * $acl->allow('guests', 'customers', 'search');
     * //Allow access to guests to search or create on customers
     * $acl->allow('guests', 'customers', array('search', 'create'));
     * //Allow access to any role to browse on products
     * $acl->allow('*', 'products', 'browse');
     * //Allow access to any role to browse on any resource
     * $acl->allow('*', '*', 'browse');
     * </code>
     *
     * @param string $roleName 
     * @param string $resourceName 
     * @param mixed $access 
     */
	public function allow($roleName, $resourceName, $access) {}

    /**
     * Deny access to a role on a resource
     * You can use '*' as wildcard
     * Example:
     * <code>
     * //Deny access to guests to search on customers
     * $acl->deny('guests', 'customers', 'search');
     * //Deny access to guests to search or create on customers
     * $acl->deny('guests', 'customers', array('search', 'create'));
     * //Deny access to any role to browse on products
     * $acl->deny('*', 'products', 'browse');
     * //Deny access to any role to browse on any resource
     * $acl->deny('*', '*', 'browse');
     * </code>
     *
     * @param string $roleName 
     * @param string $resourceName 
     * @param mixed $access 
     * @return boolean 
     */
	public function deny($roleName, $resourceName, $access) {}

    /**
     * Check whether a role is allowed to access an action from a resource
     * <code>
     * //Does andres have access to the customers resource to create?
     * $acl->isAllowed('andres', 'Products', 'create');
     * //Do guests have access to any resource to edit?
     * $acl->isAllowed('guests', '*', 'edit');
     * </code>
     *
     * @param string $roleName 
     * @param string $resourceName 
     * @param string $access 
     * @return int|boolean 
     */
	public function isAllowed($roleName, $resourceName, $access) {}

    /**
     * Return an array with every role registered in the list
     *
     * @return \Phalcon\Acl\Role[] 
     */
	public function getRoles() {}

    /**
     * Return an array with every resource registered in the list
     *
     * @return \Phalcon\Acl\Resource[] 
     */
	public function getResources() {}

}
