<?php

namespace App;

class Database
{
    public $pdo;

    public function __construct()
    {
        $config = require 'config.php';

        $this->pdo = new \PDO(
            "mysql:host=" . $config['db']['database_host'] . ";dbname=" . $config['db']['database_name'],
            $config['db']['user_name'],
            $config['db']['password']
        );
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Executes an SQL query.
     *
     * @param string $table The name of the table.
     * @param array $keys An array of column names for selection.
     * @param string $condition The condition of the query.
     * @param array $values An array of values for substitution in the query condition.
     * @return \PDOStatement The prepared statement.
     */
    public function query(string $table, array $keys, string $condition = '', array $values = []): object
    {
        $prepared_keys = implode(', ', $keys);
        $query = "SELECT $prepared_keys FROM $table " . $condition;

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($values);

        return $stmt;
    }

    /**
     * Inserts data into the table.
     *
     * @param string $table The name of the table.
     * @param array $data An associative array with data to insert.
     * @return int The ID of the last inserted record.
     */
    public function insertData(string $table, array $data): int
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));

        $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";

        $stmt = $this->pdo->prepare($query);

        $i = 1;
        foreach ($data as $value) {
            $stmt->bindValue($i++, $value);
        }
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    /**
     * Updates data in the table.
     *
     * @param string $table The name of the table.
     * @param array $data An associative array with data to update.
     * @param string $condition The condition of the update query.
     * @param array $values An array of values for substitution in the update query condition.
     * @return \PDOStatement The prepared statement.
     */
    public function updateData(string $table, array $data, string $condition, array $values): object
    {
        $params = array_map(function ($key, $item) {
            return "$key = '{$item}'";
        }, array_keys($data), array_values($data));

        $prepared_data = implode(',', $params);

        $query = "UPDATE $table SET $prepared_data" . $condition;

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($values);

        return $stmt;
    }

    /**
     * Deletes data from the table.
     *
     * @param string $table The name of the table.
     * @param string $condition The condition of the delete query.
     * @param array $values An array of values for substitution in the delete query condition.
     * @return \PDOStatement|null The executed statement.
     */
    public function deleteData(string $table, string $condition, array $values): object|null
    {
        $query = "DELETE FROM $table " . $condition;

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($values);

        return $stmt;
    }
}
