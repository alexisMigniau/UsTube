<?php

namespace Application\Controllers\Video;

require_once('./lib/database.php');
require_once('./models/video.php');


use Application\Lib\Database\Database;
use Application\Model\Video\VideoRepository;

class getVideo
{
    public function execute($identifier)
    {
        $videoRepository = new VideoRepository();
        $videoRepository->connection = new Database();
        $video = $videoRepository->getVideo($identifier);
        require('templates/homepage.php');
    }
}
