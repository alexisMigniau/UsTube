<?php

namespace Application\Model\Video;

require_once('./lib/database.php');
require_once('user.php');

use Application\Model\User\User;
use Application\Lib\Database\Database;

class Video
{
    public int $identifier;
    public string $title;
    public string $description;
    public string $img;
    public string $creationDate;
    public string $video;
}

class VideoRepository
{
    public Database $connection;
    public User $user;

    public string $tableName = "video";

    public function uploadVideo(string $title, string $description): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            "INSERT INTO $this->tableName (title, description) VALUES (?, ?)"
        );
        $affectedLines = $statement->execute([$title, $description]);
        return ($affectedLines > 0);
    }

    public function getVideo(int $identifier): Video
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM $this->tableName WHERE id = ?"
        );
        $statement->execute([$identifier]);

        $row = $statement->fetch();
        $video = new Video();
        $video->title = $row['title'];
        $video->description = $row['description'];
        $video->img = $row['img'];
        $video->video = $row['video'];
        $video->creationDate = $row['date'];

        return $video;
    }

    public function getAllVideos(): array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM $this->tableName"
        );
        $statement->execute();

        $videos = [];

        while ($row = $statement->fetch()) {
            $video = new Video();
            $video->title = $row['title'];
            $video->description = $row['description'];
            $video->img = $row['img'];
            $video->video = $row['video'];
            $video->creationDate = $row['date'];

            $videos[] = $video;
        }

        return $videos;
    }
}
