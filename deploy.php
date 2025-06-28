<?php
namespace Deployer;

require 'recipe/laravel.php';

set('application', 'lasteaiapildid');
set('repository', 'git@github.com:Anne-dot/lasteaiapildid-web.git');
host('production')
    ->setHostname('lasteaiapildid.ee')
    ->setRemoteUser('virt139054')
    ->setDeployPath('/data03/virt139054/domeenid/www.lasteaiapildid.ee/htdocs')
    ->setIdentityFile('~/.ssh/id_ed25519');

// Don't touch below this line for now!
set('git_tty', true);
set('http_user', 'virt139054');
set('php', '/data03/virt139054/.zse/bin/php');
add('shared_files', ['.env']);
add('shared_dirs', ['storage']);
add('writable_dirs', [
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
    'bootstrap/cache',
]);

task('build:local', function () {
    runLocally('npm install');
    runLocally('npm run build');
    upload('public/build/', '{{release_path}}/public/build/');
});

task('artisan:clear-config', function () {
    run('{{php}} {{release_path}}/artisan config:clear');
    run('{{php}} {{release_path}}/artisan config:cache');
});

before('deploy:symlink', 'build:local');
before('deploy:symlink', 'artisan:clear-config');
before('deploy:symlink', 'artisan:migrate');
after('deploy:failed', 'deploy:unlock');
set('keep_releases', 3);

// Clear cache paths to avoid stale cache issues
set('clear_paths', [
    'storage/framework/cache/*',
    'storage/framework/sessions/*',
    'storage/framework/views/*',
    'bootstrap/cache/*'
]);