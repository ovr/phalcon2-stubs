<?php

namespace Phalcon\Db\Adapter;

abstract class Pdo extends \Phalcon\Db\Adapter
{
    /**
     * PDO Handler
     */
    protected $_pdo;
    /**
     * Last affected rows
     */
    protected $_affectedRows;

    /**
     * Constructor for Phalcon\Db\Adapter\Pdo
     *
     * @param array $descriptor 
     */
	public function __construct($descriptor) {}

    /**
     * This method is automatically called in Phalcon\Db\Adapter\Pdo constructor.
     * Call it when you need to restore a database connection
     * <code>
     * //Make a connection
     * $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
     * 'host' => '192.168.0.11',
     * 'username' => 'sigma',
     * 'password' => 'secret',
     * 'dbname' => 'blog',
     * ));
     * //Reconnect
     * $connection->connect();
     * </code>
     *
     * @param mixed $descriptor 
     * @param  $array descriptor
     * @return  
     */
	public function connect($descriptor = null) {}

    /**
     * Returns a PDO prepared statement to be executed with 'executePrepared'
     * <code>
     * $statement = $db->prepare('SELECTFROM robots WHERE name = :name');
     * $result = $connection->executePrepared($statement, array('name' => 'Voltron'));
     * </code>
     *
     * @param string $sqlStatement 
     * @return \PDOStatement 
     */
	public function prepare($sqlStatement) {}

    /**
     * Executes a prepared statement binding. This function uses integer indexes starting from zero
     * <code>
     * $statement = $db->prepare('SELECTFROM robots WHERE name = :name');
     * $result = $connection->executePrepared($statement, array('name' => 'Voltron'));
     * </code>
     *
     * @param \PDOStatement $statement 
     * @param array $placeholders 
     * @param array $dataTypes 
     * @return \PDOStatement 
     */
	public function executePrepared(\PDOStatement $statement, $placeholders, $dataTypes) {}

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server is returning rows
     * <code>
     * //Querying data
     * $resultset = $connection->query("SELECTFROM robots WHERE type='mechanical'");
     * $resultset = $connection->query("SELECTFROM robots WHERE type=?", array("mechanical"));
     * </code>
     *
     * @param string $sqlStatement 
     * @param array $bindParams 
     * @param array $bindTypes 
     * @return \Phalcon\Db\ResultInterface|bool 
     */
	public function query($sqlStatement, $bindParams = null, $bindTypes = null) {}

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server doesn't return any row
     * <code>
     * //Inserting data
     * $success = $connection->execute("INSERT INTO robots VALUES (1, 'Astro Boy')");
     * $success = $connection->execute("INSERT INTO robots VALUES (?, ?)", array(1, 'Astro Boy'));
     * </code>
     *
     * @param string $sqlStatement 
     * @param array $bindParams 
     * @param array $bindTypes 
     * @return boolean 
     */
	public function execute($sqlStatement, $bindParams = null, $bindTypes = null) {}

    /**
     * Returns the number of affected rows by the lastest INSERT/UPDATE/DELETE executed in the database system
     * <code>
     * $connection->execute("DELETE FROM robots");
     * echo $connection->affectedRows(), ' were deleted';
     * </code>
     *
     * @return int 
     */
	public function affectedRows() {}

    /**
     * Closes the active connection returning success. Phalcon automatically closes and destroys
     * active connections when the request ends
     *
     * @return boolean 
     */
	public function close() {}

    /**
     * Escapes a column/table/schema name
     * <code>
     * $escapedTable = $connection->escapeIdentifier('robots');
     * $escapedTable = $connection->escapeIdentifier(array('store', 'robots'));
     * </code>
     *
     * @param string $identifier 
     * @return string 
     */
	public function escapeIdentifier($identifier) {}

    /**
     * Escapes a value to avoid SQL injections according to the active charset in the connection
     * <code>
     * $escapedStr = $connection->escapeString('some dangerous value');
     * </code>
     *
     * @param string $str 
     * @return string 
     */
	public function escapeString($str) {}

    /**
     * Converts bound parameters such as :name: or ?1 into PDO bind params ?
     * <code>
     * print_r($connection->convertBoundParams('SELECTFROM robots WHERE name = :name:', array('Bender')));
     * </code>
     *
     * @param string $sql 
     * @param array $params 
     * @param string $$sql 
     * @param array $$params 
     * @return array 
     */
	public function convertBoundParams($sql, $params = array()) {}

    /**
     * Returns the insert id for the auto_increment/serial column inserted in the lastest executed SQL statement
     * <code>
     * //Inserting a new robot
     * $success = $connection->insert(
     * "robots",
     * array("Astro Boy", 1952),
     * array("name", "year")
     * );
     * //Getting the generated id
     * $id = $connection->lastInsertId();
     * </code>
     *
     * @param string $sequenceName 
     * @return int|boolean 
     */
	public function lastInsertId($sequenceName = null) {}

    /**
     * Starts a transaction in the connection
     *
     * @param boolean $nesting 
     * @return boolean 
     */
	public function begin($nesting = true) {}

    /**
     * Rollbacks the active transaction in the connection
     *
     * @param boolean $nesting 
     * @return boolean 
     */
	public function rollback($nesting = true) {}

    /**
     * Commits the active transaction in the connection
     *
     * @param boolean $nesting 
     * @return boolean 
     */
	public function commit($nesting = true) {}

    /**
     * Returns the current transaction nesting level
     *
     * @return int 
     */
	public function getTransactionLevel() {}

    /**
     * Checks whether the connection is under a transaction
     * <code>
     * $connection->begin();
     * var_dump($connection->isUnderTransaction()); //true
     * </code>
     *
     * @return boolean 
     */
	public function isUnderTransaction() {}

    /**
     * Return internal PDO handler
     *
     * @return \PDO 
     */
	public function getInternalHandler() {}

    /**
     * Return the error info, if any
     *
     * @return array 
     */
	public function getErrorInfo() {}

}
