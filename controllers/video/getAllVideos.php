<?php

namespace Application\Controllers\Video;

require_once('./lib/database.php');
require_once('./models/video.php');


use Application\Lib\Database\Database;
use Application\Model\Video\VideoRepository;

class getAllVideos
{
    public function execute()
    {
        $videoRepository = new VideoRepository();
        $videoRepository->connection = new Database();
        $videos = $videoRepository->getAllVideos();
        require('templates/homepage.php');
    }
}
