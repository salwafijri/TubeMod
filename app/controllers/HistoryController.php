<?php

class HistoryController extends Controller {

    public function index() {

        if (!isset($_SESSION['user'])) {
            header("Location: ../AuthController/login");
            exit;
        }

        $dummy_videos = [
            [
                'id'=>1,
                'title'=>'Review Gadget Paling Laku 2026!',
                'youtube_url'=>'https://www.youtube.com/watch?v=contoh1',
                'analyzed_at'=>'2026-02-25 10:30'
            ]
        ];

        $this->view('history', ['dummy_videos'=>$dummy_videos]);
    }
}