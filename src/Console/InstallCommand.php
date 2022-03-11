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
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-config', '--force' => true]);
        $this->info("Install config!");
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-views', '--force' => true]);
        $this->info("Install view!");
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-components', '--force' => true]);
        $this->info("Install components!");
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-images', '--force' => true]);
        $this->info("Install images!");
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-welcome-minimal-css', '--force' => true]);
        $this->info("Install css!");

        

        $this->replaceInFile("require('tailwindcss'),", "require('tailwindcss'), require('autoprefixer'),", base_path('webpack.mix.js'));
        $this->info("Add autoprefixer to webpack.mix.js!");

        $colors = ['red','orange','amber','yellow','lime','green','emerald','teal','cyan','sky','blue','indigo','violet','purple','fuchsia','pink','rose'];
        $color = $this->choice(
            'Which color?',
            $colors
        );
        $this->setEnvValue('MINIMAL',$color);
        $this->info('Color : '.$color.' is now the main color !');
        $this->call('config:cache');
        
    }

    protected function replaceInFile($search, $replace, $path)
    {
        file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
    }  

    protected function setEnvValue(string $key, string $value)
    {
        $path = app()->environmentFilePath();
        $env = file_get_contents($path);
    
        $old_value = config('minimal.minimal');
    
        if (!str_contains($env, $key.'=')) {
            $env .= sprintf("\n%s=%s\n", $key, $value);
        } else if ($old_value) {
            $env = str_replace(sprintf('%s=%s', $key, $old_value), sprintf('%s=%s', $key, $value), $env);
        } else {
            $env = str_replace(sprintf('%s=', $key), sprintf('%s=%s',$key, $value), $env);
        }
    
        file_put_contents($path, $env);
    } 

}