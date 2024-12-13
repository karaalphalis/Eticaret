Projeyi Ayağa Kaldırmak İçin Gerekli Adımlar

Docker desktop kurulu olmalı

Projenin yolunda docker-compose up -d komutu çalıştırılarak docker geliştirme ortamı ayağa kaldırılmalı

docker containerına bağlanılmalı

docker ps komutu ile containerlar listelenmeli

docker exec -it containerID bash komutu ile container a bağlanmalı

projenin yoluna gelinmeli ( cd eticaret)

cp .env.example .env komutu çalıştırılmalı

Bu komutları tek tek çalıştır.

chmod -R 775 /var/www/html/eticaret/storage

chown -R www-data:www-data /var/www/html/eticaret/storage


php artisan key:generate komutu çalıştırılmalı

composer install komutu çalıştırılmalı
