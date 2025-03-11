  <h1>Backup & Log Manager</h1>
        <p><strong>Backup & Log Manager</strong>, belirlenen klasörleri ve veritabanlarını yedekleyen, log tutan ve isteğe bağlı e-posta bildirimi gönderen bir PHP tabanlı sistemdir.</p>
        

        <h2>🚀 Kurulum</h2>
        <ol>
            <li>PHP 7.x veya üzeri sürümünü bilgisayarınıza kurun.</li>
            <li>Proje dosyalarını sunucunuza veya yerel bilgisayarınıza kopyalayın.</li>
            <li><code>config.php</code> dosyasını açıp kendi ayarlarınıza göre düzenleyin.</li>
        </ol>

        <h2>⚙️ Kullanım</h2>
        <h3>1️⃣ Yedekleme işlemini başlat</h3>
        <p>Terminal veya komut satırında aşağıdaki komutu çalıştır:</p>
        <pre><code>php backup.php</code></pre>

        <h3>2️⃣ Logları görüntüle</h3>
        <p>Yedekleme loglarını görmek için şu komutu çalıştır:</p>
        <pre><code>php log_manager.php</code></pre>

        <h3>3️⃣ E-posta bildirimi gönder</h3>
        <p>Eğer yedekleme sonrası e-posta almak istiyorsanız, <code>config.php</code> dosyasında <code>'email' => ['enabled' => true]</code> olarak ayarlayın.</p>
        <pre><code>php send_mail.php</code></pre>

        <h2>📌 Geliştirici Bilgileri</h2>
        <p><strong>Geliştirici:</strong> Mustafa Seymen</p>
        <p><strong>İletişim:</strong> <a href="mailto:mseymend@gmail.com">mseymend@gmail.com</a></p>
