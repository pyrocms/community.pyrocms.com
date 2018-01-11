@servers(['web' => 'root@162.243.76.10', 'local' => 'ryanthompson@127.0.0.1'])

@task('push', ['on' => 'web'])
cd /usr/share/nginx/html/community/
git pull
@endtask

@task('update', ['on' => 'web'])
cd /usr/share/nginx/html/community/
composer update -o
@endtask

@task('build', ['on' => 'web'])
cd /usr/share/nginx/html/community/
php bin/satis build
@endtask
