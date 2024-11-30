<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin {name} {type} {email} {mobile} {password} ';
    // php artisan create:admin Super Admin super.admin@gmail.com 0500085941 admin

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Super Admin Account';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $name               = $this->argument("name");
            $email               = $this->argument("email");
            $type               = $this->argument("type");
            $mobile             = $this->argument("mobile");
            $password           = Hash::make("password");
          

            //Todo => create a new user
            $user = Admin::query()->create([
                "name"              => $name,
                "email"              => $email,
                "type"              => $type,
                "mobile"            => $mobile,
                "password"          => $password,
               
            ]);

            $this->info("Created a New User Information");
        } catch (\Exception $e) {
            $this->info($e->getMessage());
        }
    }
}
