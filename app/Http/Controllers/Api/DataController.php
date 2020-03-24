<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Data;
use App\Services\DataService;

class DataController extends Controller
{
    private $dataService;

    public function __construct()
    {
        $this->dataService = new DataService();
    }

    public function getDataUid($page_uid)
    {
        return $this->dataService->get($page_uid);
    }

    public function addReview($email, $review, $page_uid)
    {
         $this->dataService->addData($email, $review, $page_uid);
    }

}
