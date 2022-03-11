<?php

namespace Oxedition\LaravelWelcomeMinimal\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minimal:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Laravel Welcome Minimal components and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-views', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-components', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-images', '--force' => true]);

        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-css', '--force' => true]);


        $this->replaceInFile("require('tailwindcss'),", "require('tailwindcss'), require('autoprefixer'),", base_path('webpack.mix.js'));


    }


}