<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campus;
use App\Models\Gallery;
use App\Models\Ipaddress;
use App\Models\OrganizationStructure;
use App\Models\Partner;
use App\Models\Prodi;
use App\Models\Slider as ModelsSlider;
use App\Models\Testimonial;
use App\Models\Ukm;
use App\Models\Visitor;
use Illuminate\Http\Request;
use PHPUnit\Framework\Test;

class HomeController extends Controller
{

    //
    public function index()
    {
        $visitor = new Visitor;
        $visitor->save();
        $slider = ModelsSlider::orderBy('created_at', 'DESC')->paginate(3);
        $article = Article::orderBy('created_at', 'DESC')->paginate(4);
        $prodi = Prodi::all();
        $testimonial = Testimonial::paginate(4);
        return view('users.index', ['testimonial' => $testimonial, 'articles' => $article, 'slider' => $slider, 'prodi' => $prodi]);
    }

    public function detail_prodi($locale, $id) {
        $prodi = Prodi::find($id);
        $testimonial = Testimonial::where('prodi_id' , "=", $id)->get();
        return view('users.Prodi.index', ['prodi' => $prodi, 'testimonials' => $testimonial]);
    }

    public function all_gallery() {
        $galleries = Gallery::paginate(8);
        return view('users.Gallery.detail_gallery', ['galleries' => $galleries]);
    }

    public function all_videos() {
        return view('users.Gallery.detail_youtube');
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
        $structure = OrganizationStructure::all();
        return view('users.About.index', ["structure" => $structure]);
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
        $prodi = Prodi::all();
        return view('users.LinkandMatch.index', ['ukm' => $ukm, 'prodi' => $prodi]);
    }

    public function career_centre()
    {
        $career = Article::query()->where('type', '=', 'Career')->paginate(4);
        $testimonial = Testimonial::paginate(5);
        $partner = Partner::all();
        return view('users.Career.index', ['careers' => $career, 'testimonial' => $testimonial, 'partner' => $partner]);
    }

    public function gallery()
    {
        $galleries = Gallery::paginate(8);
        return view('users.Gallery.index', ['galleries' => $galleries]);
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
