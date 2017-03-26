<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use App\Review;

class ReviewsController extends Controller
{
    public function getReview(){
        $reviews = Review::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.review.review', ['reviews' => $reviews]);
    }

    public function getCreateReview(){
        return view('backend.review.create_review');
    }

    public function postCreateReview(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $review = new Review();
        $slug = $request['name'];
        $review->name = $request['name'];
        $review->description = $request['description'];
        $review->slug = str_slug($slug,'-');
        $review->status = $request['status'];
        $user = Auth::user();
        $user->reviews()->save($review);
        return redirect()->route('backend.review')->with(['success' => 'Successfully created']);
    }


    public function getUpdate($review_id){
        $review = Review::findorFail($review_id);
        return view('backend.review.update_review', ['review' => $review]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $review = Review::findOrFail($request['review_id']);
        $slug = $request['name'];
        $review->name = $request['name'];
        $review->description = $request['description'];
        $review->slug = str_slug($slug, '-');
        $review->status = $request['status'];
        $user = Auth::user();
        $review->user_id = $user->id;
        $review->update();
        return redirect()->route('backend.review')->with(['success' => 'successfully updated']);
    }

    public function getDelete($review_id){
        $review = Review::findOrFail($review_id);
        $review->delete();
        return redirect()->route('backend.review.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($review_id){
        $review = Review::findOrFail($review_id);
        $review->status = "trash";
        $review->update();
        return redirect()->route('backend.review')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleReview($review_slug){
        $review = Review::where('slug', $review_slug)
            ->first();
        return view('backend.review.single_review', ['review' => $review]);
    }

    public function DeleteForever(){
        $reviews = Review::all();
        return view('backend.review.trash_review', ['reviews' => $reviews ]);
    }

    public function Restore($review_id){
        $review = Review::findorFail($review_id);
        $review->status = "published";
        $review->update();
        return redirect()->route('backend.review');
    }

}
