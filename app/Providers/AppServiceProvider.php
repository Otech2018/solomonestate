<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Perform_Task;
use App\Models\GigSubCategory;
use Illuminate\Contracts\View\View;


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
        //Statrs here


        view()->composer(
            ['*'],
            function(View $view){
                if (auth()->user() != null) {
                   $Perform_task_grps = Perform_Task::where('user_group_id','=', auth()->user()->user_type)
                                  ->where('status','1')->groupBy('menu_id')->get();
                                  
                    $Perform_task_alls = Perform_Task::where('user_group_id','=', auth()->user()->user_type)
                                  ->where('status','1')->get(); 

                                  $states1 = GigSubCategory::where('status','1')->groupBy('state_id')->get();
                                  $lgas1 = GigSubCategory::where('status','1')->groupBy('lga_id')->get();
                                  $property_type1 = GigSubCategory::where('status','1')->groupBy('property_type')->get();

                    $view->with(
                        [
                            'Perform_task_grps' => $Perform_task_grps,
                            'Perform_task_alls' => $Perform_task_alls,
                            'states1' => $states1,
                            'lgas1' => $lgas1,
                            'property_type1' => $property_type1

                        ]
                    );
                }
            }
        );


        //ends here
    }


    
}








