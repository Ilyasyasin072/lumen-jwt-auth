<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    public function index() {
        $post_data = Post::all();
        try {
        return $this->sendResponse($post_data, 'Showing Post Data Success');
        } catch (\Throwable $th) {
            return $this->sendError($th, 'Showing Post Data Failed');
        }
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $title_ = $request->input('title');
        $description_ = $request->input('description');

        $data = new Post();

        $data->title = $title_;
        $data->description = $description_;
        
        $format = $request->format();

        if($data->save()) {
            switch ($format) {
                default:
                    $render = $this->sendResponse($data, 'Showing Post Data Success');
                    break;
            }
        } else {
            switch ($format) {
                default:
                    $render = $this->sendError($data, 'Showing Post Data Failed');
                    break;
            }

        }

        return $render;
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $format = $request->format();

        $title_ = $request->input('title');
        $description_ = $request->input('description');
        

        $data = Post::find($id);

        $data->title = $title_;
        $data->description = $description_;

        if($data->save()) {
            switch ($format) {
                default:
                    $render = $this->sendResponse($data, 'Showing Post Data Success');
                    break;
            }
        } else {
            switch ($format) {
                default:
                    $render = $this->sendResponse($data, 'Showing Post Data Success');
                    break;
            }
        }

        return $render;
    }

    public function destroy(Request $request, $id) {
        $format = $request->format();
        
        $data = Post::find($id);

        if($data->delete()) {
            switch ($format) {
                default:
                $render = $this->sendResponse($data, 'Showing Delete Data Success');
                    break;
            }
        } else {
            switch ($format) {
                default:
                $render = $this->sendResponse($data, 'Showing Delete Data Success');
                break;
        }
        }

        return $render;
    } 
}
