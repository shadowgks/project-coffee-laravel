<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Categorie;
use App\Models\Plate; //data from databases
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //Data all
        //join 1 tables
        $plates = DB::table('plates')
            ->join('categories', 'plates.categorieID', '=', 'categories.id')
            ->select('plates.*', 'categories.name AS name_categorie')
            ->get();

        $categories = Categorie::all();
        $users = User::all();

        //Statistic
        $statistic_plates = Plate::count();
        $statistic_categories = Categorie::count();
        $statistic_admins = User::where('role', '1')->count();
        $statistic_users = User::where('role', '0')->count();

        //for share data to another pages use 'View share'
        View::share('recent_plates', compact(
            'plates',
            'categories',
            'statistic_plates',
            'statistic_categories',
            'statistic_admins',
            'statistic_users',
            'users'
        ));
    }
}
