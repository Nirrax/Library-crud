<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::all()
            //'books' =>Book:paginate(10)
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\View
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request) :RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'author' => 'required|max:100',
            'release_date' => 'required|max:4',
            'amount' => 'required|integer|between:1,1000',
            'available' => 'required|integer|between:1,1000'
        ]);
        $book = new Book($validated);
        if($book->available > $book->amount){
            $book->available = $book->amount;
        }
        $book->save();
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',[
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',[
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, Book $book):RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'author' => 'required|max:100',
            'release_date' => 'required|max:4',
            'amount' => 'required|integer|between:1,1000',
            'available' => 'required|integer|between:1,1000'
        ]);
        $book->fill($validated);
        if($book->available > $book->amount){
            $book->available = $book->amount;
        }
        $book->save();
        return redirect(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Book $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Book $book): JsonResponse
    {
        try{
            $book->delete();
            return response()->json(['status' => 'success']);
        }
        catch (Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'Error'
            ])->setStatusCode(500);
        }
    }
}
