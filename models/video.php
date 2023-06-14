<?php

namespace Application\Model\Video;

require_once('../lib/database.php');
require_once('user.php');

use Application\Model\User\User;
use Application\Lib\Database\Database;

class Video
{
    public int $identifier;
    public string $title;
    public string $description;
    public string $img;
    public int $creationDate;
    public string $video;
}

class VideoRepository
{
    public Database $connection;
    public User $user;

    public string $tableName = "videos";

    public function uploadVideo(string $title, string $description): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            "INSERT INTO $this->tableName (title, description) VALUES (?, ?)"
        );
        $affectedLines = $statement->execute([$title, $description]);
        return ($affectedLines > 0);
    }
}