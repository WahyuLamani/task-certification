<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class BuildApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build:app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'copy env dan migrasi database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         // Copy .env file
        if (!file_exists('.env')) {
            // copy('.env', '.env.backup'); // Backup existing .env file
            copy('.env.example', '.env');
            $this->info('Generating application key...');
            sleep(5);
            $this->call('key:generate');
        } else {
            $this->error('.env already exist..!');
        }

        // Execute php artisan migrate
        passthru('php artisan migrate --seed', $phpExecute);
        // Periksa kode keluaran (exit code) untuk mengetahui apakah perintah berhasil dijalankan
        if ($phpExecute === 0) {
            $this->info('Migration completed successfully!');
        } else {
            $this->error('Error occurred while running migration!');
        }
        
        passthru('npm install', $npmExecute);
        if ($npmExecute === 0) {
            $this->info('Build app successfully!');
        } else {
            $this->error('error npm install');
        }
        sleep(1);
        passthru('npm run build', $npmExecute);
        if ($npmExecute === 0) {
            $this->info('Build app successfully!');
        } else {
            $this->error('error running npm run build');
        }
    }
}
