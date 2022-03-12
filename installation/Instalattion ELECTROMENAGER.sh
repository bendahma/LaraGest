cd C:
mkdir BENDJEDDOU_ELECTROMENAGER
cd BENDJEDDOU_ELECTROMENAGER
git clone https://github.com/bendahma/LaraGest.git .
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed 