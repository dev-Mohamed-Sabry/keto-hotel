<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create a new admin user';

    public function handle(): int
    {
        $name = $this->ask('Admin name');

        $email = $this->ask('Admin email');

        $password = $this->secret('Admin password');

        $passwordConfirmation = $this->secret('Confirm password');

        if ($password !== $passwordConfirmation) {
            $this->error('Passwords do not match.');

            return self::FAILURE;
        }

        if (User::where('email', $email)->exists()) {
            $this->error('A user with this email already exists.');

            return self::FAILURE;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'usertype' => 'admin',
            'email_verified_at' => now(),
        ]);

        $this->info('Admin user created successfully.');

        return self::SUCCESS;
    }
}
