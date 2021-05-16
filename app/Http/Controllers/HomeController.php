<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campus;
use App\Models\Ipaddress;
use App\Models\Slider as ModelsSlider;
use App\Models\Testimonial;
use App\Models\Ukm;
use App\Models\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    //
    public function index()
    {
        $visitor = new Visitor;
        $visitor->save();
        $slider = ModelsSlider::orderBy('created_at', 'DESC')->paginate(3);
        $article = Article::orderBy('created_at', 'DESC')->paginate(4);
        $testimonial = Testimonial::paginate(4);
        return view('users.index', ['testimonial' => $testimonial, 'articles' => $article, 'slider' => $slider]);
    }

    public function tridharma()
    {
        return view('users.Tridharma.index');
    }

    public function articles($locale, $id)
    {
        $article = Article::find($id);
        $anotherArticle = Article::where('id', '!=', $article->id)->paginate(4);
        return view('users.Articles.view', ['article' => $article, 'articles' => $anotherArticle, 'locale' => ["lang" => $locale]]);
    }

    public function about()
    {
        return view('users.About.index');
    }

    public function blogs()
    {
        $article = Article::orderBy('created_at', 'DESC')->paginate(8);
        return view('users.Blogs.index', ['articles' => $article]);
    }

    public function searchArticle(Request $req)
    {
        $search = $req->input('article');
        $article = Article::query()->where('title', 'LIKE', "%$search%")->orWhere('author', 'LIKE', "%$search%")->paginate(8);
        return view('users.Blogs.search', ['articles' => $article]);
    }

    public function blogs_detail($id)
    {
        $blog = Article::find($id);
        $allBlog = Article::paginate(5);
        return view('users.Blogs.view', ['blog' => $blog, 'another_blog' => $allBlog]);
    }

    public function link_and_match()
    {
        $ukm = Ukm::all();
        return view('users.LinkandMatch.index', ['ukm' => $ukm]);
    }

    public function career_centre()
    {
        return view('users.Career.index');
    }

    public function gallery()
    {
        return view('users.Gallery.index');
    }

    public function campus($id)
    {
        $campus = Campus::find($id);
        return view('users.Campus.index', ['campus' => $campus]);
    }

    /// untuk request api
    public function postIpLocation(Request $req)
    {
        $city = $req->city;
        $country = $req->country;
        $lat = $req->lat;
        $lon = $req->lon;

        $ip = new Ipaddress();
        $ip->city = $city;
        $ip->country = $country;
        $ip->lat = $lat;
        $ip->lon = $lon;
        $ip->save();

        return response()->json(["message" => "Success"], 201);
    }
}
