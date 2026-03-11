<?php

class AnalyzeController extends Controller {

    public function index() {

        $comments = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $youtube = $this->model('YoutubeModel');
            $videoId = $youtube->getVideoId($_POST['youtube_url']);

            if ($videoId) {
                $comments = $youtube->fetchComments($videoId);
            }
        }

        $this->view('analyze', ['comments' => $comments]);
    }
}