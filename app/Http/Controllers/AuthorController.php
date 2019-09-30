<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function actionIndex()
    {
       
    }

    public function actionCreate()
    {
       
    }

    public function actionDelete()
    {
       
    }

    public function actionUpdate()
    {
       
    }

    public function responseRequest($status, $message, $data = null)
    {
        return response()->json(['status' => $status, 'message' => $message, 'data' => $data]);
    }
}
