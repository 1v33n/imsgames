<?php

namespace App\Repository;

use App\Database\ConnectionHandler;
use Exception;


class RequestRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'request';

    public function create($email, $link)
    {
        $query = "INSERT INTO $this->tableName (email, link) VALUES (?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ss', $email, $link);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }
}