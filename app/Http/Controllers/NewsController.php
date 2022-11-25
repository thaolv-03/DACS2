<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $model;
    private $title;
    public function __construct()
    {
        $this->model = new News();
        $routeName = Route::currentRouteName();
        $arr = explode('.', $routeName);
        $arr = array_map('ucfirst', $arr);
        $routeName = implode(' - ', $arr);
        $this->title = $routeName;
        View::share('title', $this->title);
    }

    public function index()
    {
        return view('news.index');
    }

    public function getdata()
    {
        return Datatables::of($this->model::query())
            ->editColumn('created_at', function ($object) {
                // dd($object->getDate());
                return $object->getDate();
            })
            ->addColumn('title', function ($user) {
                $arr = [];
                $arr['link'] = route('news.show', ['news' => $user]);
                $arr['title'] = $user->title;
                return $arr;
            })
            ->addColumn('edit', function ($user) {
                return route('news.edit', ['news' => $user]);
            })
            ->addColumn('destroy', function ($user) {
                return route('news.destroy', ['news' => $user->id]);
            })
            ->filterColumn('title', function ($query, $keyword) {
                if ($keyword !== 'null') {
                    $query->where('id', $keyword);
                }
            })
            ->make(true);
    }

    public function newsClient()
    {
        $listNews = News::all();

        $latestNews = News::orderBy('id', 'desc')->limit(3)->get();

        return view('news.news', compact('listNews', 'latestNews'));
    }


    public function getdataName(Request $request)
    {
        return $this->model
            ->where('title', 'like', '%' . $request->get('a') . '%')
            ->get(
                [
                    'id',
                    'title'
                ]
            );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    public function store(StoreNewsRequest $request)
    {

        $path = Storage::disk('public')->put('/avatars', $request->file('news_img'));
        $this->model::query()->create(
            [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'image' => $path,
            ]
        );
        return redirect()->route('news.index');
    }


    public function show($id)
    {
        $news = News::find($id);

        // dd($news);

        $latestNews = News::orderBy('id', 'desc')->limit(3)->get();
        // dd($news);


        return view('news.newsDetail', compact('news', 'latestNews'));
    }

    public function edit(News $news)
    {
        return view('news.edit', ['news' => $news]);
    }

    // Update
    public function update(UpdateNewsRequest $request, News $news)
    {
        $obj = $this->model->find($news->id);

        $path = $obj->image;
        // dd(!$request->hasFile('product_img'));
        if ($request->file('news_img') != null) {
            Storage::disk('public')->delete($path);
            $path = Storage::disk('public')->put('/avatars', $request->file('news_img'));
            // dd($path);
        }

        // dd($path);
        $obj->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'image' => $path,
        ]);
        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        $this->model->find($news->id)->delete();

        $arr            = [];
        $arr['message'] = '';

        return response($arr, 200);
    }
}
