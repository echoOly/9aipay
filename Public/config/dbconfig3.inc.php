<?php
/*数据库配置信息*/
return array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => SAE_MYSQL_HOST_M,
	'DB_NAME' => SAE_MYSQL_DB,
	'DB_USER' => SAE_MYSQL_USER,
	'DB_PWD' => SAE_MYSQL_PASS,
	'DB_PORT'  => SAE_MYSQL_PORT,
	'DB_PREFIX' => 't_',
	'RBAC_ROLE_TABLE' => 't_role',
	'RBAC_USER_TABLE'=>'t_role_user',
	'RBAC_ACCESS_TABLE'=>'t_access',
	'RBAC_NODE_TABLE'=>'t_node',
);
?>