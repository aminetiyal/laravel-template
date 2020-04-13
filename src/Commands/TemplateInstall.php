<?php
/**
 *  Some of logic is used from jeroennoten/Laravel-AdminLTE Many thanks to the maintainers
 *  you can checkout the package from here: https://github.com/jeroennoten/Laravel-AdminLTE
 */

namespace Aminetiyal\LaravelTemplate\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TemplateInstall extends Command
{
    protected $signature = 'template:install' .
    '{--routes : Add template routes}' .
    '{--auth : Update Auth views}' .
    '{--home : Update Home view}';


    protected $description = 'Install template package';

    protected $authViews = [
        'views/auth/login.blade.php' => '@extends(\'template::lte.login\')',
        'views/auth/register.blade.php' => '@extends(\'template::lte.register\')',
        'views/auth/verify.blade.php' => '@extends(\'template::lte.verify\')',
        'views/auth/passwords/confirm.blade.php' => '@extends(\'template::lte.passwords.confirm\')',
        'views/auth/passwords/email.blade.php' => '@extends(\'template::lte.passwords.email\')',
        'views/auth/passwords/reset.blade.php' => '@extends(\'template::lte.passwords.reset\')',
    ];

    protected $homeView = 'views/home.blade.php';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if ($this->option('routes')) {
            $this->exportRoutes();
        }
        if ($this->option('home')) {
            $this->exportHomeView();
        }
        if ($this->option('auth')) {
            $this->exportAuthViews();
        }
    }

    protected function exportHomeView()
    {
        if (!$this->confirm('Install Home view?')) {
            return;
        }

        $content = File::get(__DIR__ . '/stubs/home.blade.stub');

        file_put_contents(resource_path($this->homeView), $content);


        $this->comment('Home view updated successfully.');
    }

    protected function exportAuthViews()
    {
        if (!$this->confirm('Install Template authentication views?')) {
            return;
        }

        // create auth directory if not exists
        if (!File::isDirectory(resource_path('/views/auth'))) {
            File::makeDirectory(resource_path('views/auth'), 0755, true);
        }

        foreach ($this->authViews as $file => $content) {
            file_put_contents(resource_path($file), $content);
        }

        $this->comment('Authentication views updated successfully.');
    }

    protected function exportRoutes()
    {
        if (!$this->confirm('Install Profile Routes?')) {
            return;
        }

        $file = File::get(base_path('routes/web.php'));
        $content = File::get(__DIR__ . '/stubs/routes.stub');

        if (!strpos($file, $content)) {
            File::append(
                base_path('routes/web.php'),
                file_get_contents(__DIR__.'/stubs/routes.stub'),
                FILE_APPEND
            );

            $this->comment('Profile routes installed successfully.');
            return;
        }
    }
}
