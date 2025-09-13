<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'review' => 'required|string|max:5000',
        ]);

        Review::create($data);

        return redirect()->back()->with('success', 'Thanks! Your review was submitted and is awaiting admin approval.');
    }

    
    public function adminIndex()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();
        return view('Admin.reviews', compact('reviews'));
    }

    
    public function updateStatus(Request $request, Review $review)
    {
        $request->validate([
            'status' => 'required|in:accepted,denied'
        ]);

        $review->status = $request->status;
        $review->save();

        return redirect()->back()->with('success', 'Review status updated to: ' . $review->status);
    }

    
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted.');
    }

    public function index()
{
    $reviews = Review::all();
    return view('Admin.reviews', compact('reviews'));
}
}
