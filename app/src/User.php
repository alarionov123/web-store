<?php

namespace App;

class User
{
    protected $pdo;

    /**
     * @param Database $db The Database instance.
     */
    public function __construct(Database $db)
    {
        $this->pdo = $db;
    }

    /**
     * Retrieves user data by email.
     *
     * @param string $email The email address of the user.
     * @return array|bool An array containing user data or false if user not found.
     */
    public function getUserDataByEmail(string $email): array|bool
    {
        $condition = "WHERE email = ?";
        $query = $this->pdo->query('users', ['id', 'email'], $condition, [$email]);

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Creates a new user in the database.
     *
     * @param array $user_data An associative array containing user data.
     * @return int The ID of the newly created user.
     */
    public function createUser(array $user_data): int
    {
        if (!empty($user_data['password'])) {
            $user_data['password'] = password_hash($user_data['password'], PASSWORD_DEFAULT);
        }
        return $this->pdo->insertData('users', $user_data);
    }

    /**
     * Authenticates a user.
     *
     * @param array $user_data An associative array containing user data.
     * @return array|bool An array containing user data if authentication is successful, otherwise an empty array.
     */
    public function authUser(array $user_data): array|bool
    {
        $keys = $user_data;
        if (!isset($user_data['id'])) {
            $keys['id'] = 0;
        }
        $result = $this->pdo->query('users', array_keys($keys), 'WHERE email = ?', [$user_data['email']]);

        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Logs out the current user by clearing the session data.
     * @return void
     */
    public static function logoutUser(): void
    {
        session_unset();
        session_destroy();
    }
}
