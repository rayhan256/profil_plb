<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UkmController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/id');
});

Route::get('/cms', function () {
    return redirect('/cms/en');
});

Route::get('/blogs/view/{id}', [HomeController::class, 'blogs_detail']);
Route::get('/campus/{id}', [HomeController::class, 'campus']);
Route::get('{locale}/articles/{id}', [HomeController::class, 'articles']);

//login
Route::get('/auth/login', [AuthController::class, 'login']);
Route::prefix('{locale}')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/blogs', [HomeController::class, 'blogs']);
    Route::get('/blogs/search', [HomeController::class, 'searchArticle']);
    Route::get('/link_and_match', [HomeController::class, 'link_and_match']);
    Route::get('/career_centre', [HomeController::class, 'career_centre']);
    Route::get('/gallery', [HomeController::class, 'gallery']);
    Route::get('/tridharma', [HomeController::class, 'tridharma']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('cms/en')->group(function () {

        // dashboard
        Route::get('/', [DashboardAdminController::class, 'index'])->name('cms');
        Route::get('/optimize', function () {
            Artisan::call("optimize");
            echo "Web Optimized";
        });

        Route::get('/storage-link', function () {
            Artisan::call("storage:link");
            echo "Storage Link Created";
        });

        Route::get("/run-migration", function () {
            Artisan::call("migrate");
            echo "Migration Clear";
        });
        //route campus
        Route::get('/campus', [CampusController::class, 'index']);
        Route::get('/campus/create_view', [CampusController::class, 'create']);
        Route::post('/campus/post', [CampusController::class, 'create_process']);
        Route::get('/campus/update/{id}', [CampusController::class, 'update']);
        Route::get('/campus/view/{id}', [CampusController::class, 'seeCampus']);
        Route::post('/campus/update/post', [CampusController::class, 'update_process']);
        Route::get('/campus/delete/{id}', [CampusController::class, 'delete']);

        // route prodi
        Route::get('/prodi', [ProdiController::class, 'index']);

        // route ukm
        Route::get('/ukm', [UkmController::class, 'index']);
        Route::get('/ukm/create', [UkmController::class, 'create_view']);
        Route::post('/ukm/post', [UkmController::class, 'post_ukm']);
        Route::get('/ukm/update/{id}', [UkmController::class, 'update_view']);
        Route::post('/ukm/update', [UkmController::class, 'update_ukm']);
        Route::get('/ukm/delete/{id}', [UkmController::class, 'delete_ukm']);

        //route partner
        Route::get('/partner', [PartnerController::class, 'index']);
        Route::post('/partner/insert', [PartnerController::class, 'addPartner']);
        Route::get('/partner/delete/{id}', [PartnerController::class, 'deletePartner']);

        //Testimonial
        Route::get('/testimonial', [TestimonialController::class, 'index']);
        Route::get('/testimonial/insert', [TestimonialController::class, 'create']);
        Route::post('/testimonial/post', [TestimonialController::class, 'insert']);
        Route::get('/testimonial/update/{id}', [TestimonialController::class, 'update']);
        Route::post('/testimonial/update/post', [TestimonialController::class, 'update_process']);
        Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'delete']);

        //blogs
        Route::get('/blogs', [BlogController::class, 'index']);
        Route::get('/blogs/insert', [BlogController::class, 'create']);
        Route::post('/blogs/create', [BlogController::class, 'insert']);
        Route::get('/blogs/view/{id}', [BlogController::class, 'viewBlog']);
        Route::get('/blogs/update/{id}', [BlogController::class, 'update']);
        Route::post('/blogs/update/post', [BlogController::class, 'update_process']);
        Route::get('/blogs/delete/{id}', [BlogController::class, 'delete']);

        //articles
        Route::get('/articles', [ArticleController::class, 'index']);
        Route::get('/articles/insert', [ArticleController::class, 'create']);
        Route::post('/articles/create', [ArticleController::class, 'insert']);
        Route::get('/articles/view/{id}', [ArticleController::class, 'view']);
        Route::get('/articles/update/{id}', [ArticleController::class, 'update']);
        Route::post('/articles/update/post', [ArticleController::class, 'update_process']);
        Route::get('/articles/delete/{id}', [ArticleController::class, 'delete']);

        //slider
        Route::get('/slider', [SliderController::class, 'index']);
        Route::post('/slider/post', [SliderController::class, 'addImage']);
        Route::get('/slider/delete/{id}', [SliderController::class, 'delete']);

        //Profile
        Route::get('/profile', [AuthController::class, 'profile']);
        Route::post('/profile/update', [AuthController::class, 'updateProfile']);
    });
});
