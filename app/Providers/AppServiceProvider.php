<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Perform_Task;
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

                    $view->with(
                        [
                            'Perform_task_grps' => $Perform_task_grps,
                            'Perform_task_alls' => $Perform_task_alls

                        ]
                    );
                }
            }
        );


        //ends here
    }


    
}








