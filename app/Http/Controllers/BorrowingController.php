<?php
namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::paginate(5); 
        return view('borrowings.index', compact('borrowings'));
    }
    public function create()
    {
        $books = Book::all();
        return view('borrowings.create', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bookid' => 'required',
            'memberid' => 'required|integer',
            'borrowingsdate' => 'required|date',
            'duedate' => 'required|date',
        ]);

        Borrowing::create($request->all());
        return redirect()->route('borrowings.index')->with('success', 'Borrowing added successfully.');
    }

    public function edit($id)
    {
        $borrowing = Borrowing::find($id);
        $books = Book::all();
        return view('borrowings.edit', compact('borrowing', 'books'));
    }
    public function show($id)
    {
        $borrowing = Borrowing::findOrFail($id); 
        return view('borrowings.show', compact('borrowing')); 
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'bookid' => 'required',
            'memberid' => 'required|integer',
            'borrowingsdate' => 'required|date',
            'duedate' => 'required|date',
        ]);

        $borrowing = Borrowing::find($id);
        $borrowing->update($request->all());
        return redirect()->route('borrowings.index')->with('success', 'Borrowing updated successfully.');
    }

    public function destroy($id)
    {
        $borrowing = Borrowing::find($id);
        $borrowing->delete();
        return redirect()->route('borrowings.index')->with('success', 'Borrowing deleted successfully.');
    }
}
