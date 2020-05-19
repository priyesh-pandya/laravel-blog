<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('your_key') to get the values.
    |
    |    Config::get('constants.company_name')
    |    config('constants.company_name')
    |    Blade
    |        {{ config('constants.sub_dir_path') }}
    |
    */

    'sub_dir_path' => env('SUB_DIR_LINUX_PARTH',''),/* overwrite from .env */
    'company_name' => env('COMPANY_NAME','Priyesh Pandya'), 
    'company_email' => env('COMPANY_email','contact@test.inc'),


];