<?php

namespace App\Services;

use App\Models\Data;

class DataService
{

    public function get($id)
    {
        return Data::where('page_uid',$id)->get();
    }

    public function addData($email, $review, $page_uid)
    {
        Data::create([
            'email' => $email,
            'review' => $review,
            'page_uid' => $page_uid,
        ]);
    }

}
