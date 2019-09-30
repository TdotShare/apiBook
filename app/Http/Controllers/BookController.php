<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function actionIndex()
    {
        $book = Book::all();
        foreach ($book as $key => $item) {
            $author = Author::find($item['idauthor']);
            $publisher = Publisher::find($item['idpublisher']);

            $item['author'] = $author;
            $item['publisher'] = $publisher;
        }

        return $this->responseRequest(
            'success',
            'select * f book',
            $book
        );
    }

    public function actionView($id)
    {
        //$book = Book::find($id);
        $book = Book::where('idbook', $id)->get();
        if (count($book) !== 0) {
            foreach ($book as $key => $item) {
                $author = Author::find($item['idauthor']);
                $publisher = Publisher::find($item['idpublisher']);

                $item['author'] = $author;
                $item['publisher'] = $publisher;
            }
            return $this->responseRequest(
                'success',
                'select * f book w id=' . $id . '',
                $book
            );
        } else {
            return $this->responseRequest('failure', 'None this id rows', );
        }

    }

    public function actionCreate(Request $request)
    {
        try {
            if (($book = Book::create($request->all())) && $request->isMethod('post')) {
                return $this->responseRequest('success', 'create book id = ' . $book->idbook . '');
            }
        } catch (\PDOException $th) {
            return $this->responseRequest('failure', $th);
        }
    }

    public function actionDelete($id)
    {
        try {
            if (Book::destroy($id)) {
                return $this->responseRequest('success', 'delete book id =' . $id . '');
            } else {
                return $this->responseRequest('failure', 'None this id rows');
            }
        } catch (\PDOException $th) {
            return $this->responseRequest('failure', $th);
        }

    }

    public function actionUpdate($id, Request $request)
    {

        $book = Book::find($id);

        if ($book !== null) {
            try {
                if ($book->update($request->all()) && $request->isMethod('post')) {
                    return $this->responseRequest('success', 'update book id = ' . $book->idbook . ' ');
                }
            } catch (\PDOException $th) {
                return $this->responseRequest('failure', $th);
            }
        } else {
            return $this->responseRequest('failure', 'None this id rows');
        }
    }

    public function responseRequest($status, $message, $data = null)
    {
        return response()->json(['status' => $status, 'message' => $message, 'data' => $data]);
    }
}
