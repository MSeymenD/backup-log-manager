<h1>Backup & Log Manager</h1>

📌 Proje Açıklaması

Bu proje, belirlenen dizinlerin ve veritabanının yedeğini alarak ZIP dosyası olarak saklar. Aynı zamanda yapılan işlemleri log dosyasına kaydeder ve isteğe bağlı olarak e-posta bildirimi gönderebilir.

🚀 Kurulum

1️⃣ Depoyu Klonla

git clone https://github.com/kullaniciadi/backup-log-manager.git
cd backup-log-manager

2️⃣ PHP Bağımlılıklarını Yükle

PHP'nin ZipArchive desteği açık olmalıdır. Eğer yoksa aşağıdaki komutlarla yükleyebilirsin:

sudo apt install php-zip # Ubuntu/Debian
sudo yum install php-zip # CentOS/RHEL

3️⃣ Ayarları Yapılandır

config.php dosyasını açarak aşağıdaki bilgileri kendine göre düzenle:

backup_directories: Yedeklenecek dizinleri belirleyin.

backup_path: Yedeklerin saklanacağı konumu belirleyin.

log_path: Logların saklanacağı konumu belirleyin.

database: Veritabanı yedeği almak istiyorsanız ilgili bilgileri girin.

email: Yedekleme sonrası e-posta almak istiyorsanız bilgileri doldurun.

🛠 Kullanım

📌 Yedekleme İşlemini Başlat

php backup.php

Başarılı olursa backups/ klasörü içinde bir ZIP dosyası oluşur.

📌 Logları Görüntüle

php log_manager.php

📌 E-posta Bildirimi Gönder

Eğer config.php içinde email['enabled'] değeri true ise şu komutla bildirim gönderebilirsiniz:

php send_mail.php

📜 Lisans

Bu proje MIT lisansı ile sunulmaktadır. Özgürce kullanabilir ve geliştirebilirsiniz. 😊
