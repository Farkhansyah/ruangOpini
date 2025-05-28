<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Opini</title>
    <link rel="stylesheet" href="assets/css/themes.css">
    <style>
        .btn-custom {
            background-color: #3498db;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #2980b9;
        }

        .blog-post {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .blog-post-title {
            color: #2c3e50;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .blog-post-title:hover {
            color: #3498db;
        }

        .blog-post-meta {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .news-item {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ecf0f1;
        }

        .news-item img {
            border-radius: 4px;
            margin-right: 15px;
            margin-bottom: 10px;
        }

        .news-content {
            line-height: 1.6;
            color: #34495e;
        }

        .detail-image {
            width: 100%;
            max-width: 800px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            margin: 30px 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        .comment-item {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 3px solid #3498db;
            border-radius: 4px;
        }

        .back-link {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .readmore-link {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            display: inline-block;
            margin-top: 10px;
        }

        .readmore-link:hover {
            background-color: #2980b9;
        }

        /* Enhanced Notification Styles */
        .notification-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(2px);
        }

        .notification-modal {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            padding: 40px;
            max-width: 400px;
            width: 90%;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            position: relative;
            transform: scale(0.5);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .notification-modal.show {
            transform: scale(1);
            opacity: 1;
        }

        .notification-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            position: relative;
            overflow: hidden;
        }

        .notification-icon::before {
            content: '✓';
            font-size: 40px;
            color: white;
            font-weight: bold;
            animation: checkmarkPop 0.6s ease-out 0.2s both;
        }

        .notification-icon::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s ease-in-out infinite;
        }

        .notification-title {
            color: white;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .notification-message {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .notification-button {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .notification-button:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .close-notification {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .close-notification:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(90deg);
        }

        /* Animations */
        @keyframes checkmarkPop {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }
            100% {
                left: 100%;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-post {
                padding: 15px;
            }
            
            .news-item img {
                width: 100%;
                float: none !important;
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .jumbotron {
                padding: 20px;
                margin: 20px 0;
            }
            
            .notification-modal {
                padding: 30px 20px;
                margin: 20px;
            }
            
            .notification-title {
                font-size: 20px;
            }
            
            .notification-icon {
                width: 60px;
                height: 60px;
            }
            
            .notification-icon::before {
                font-size: 30px;
            }
        }

        @media (max-width: 480px) {
            .form-control {
                padding: 12px;
                font-size: 16px; /* Prevents zoom on iOS */
            }
            
            .btn-custom {
                padding: 12px 20px;
                font-size: 16px;
                width: 100%;
            }
            
            .readmore-link {
                display: block;
                text-align: center;
                margin-top: 15px;
                padding: 8px 15px;
            }
        }

        /* Form Enhancement */
        .form-group {
            position: relative;
        }

        .form-control:focus + .form-label {
            color: #3498db;
        }

        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .btn-custom.loading {
            opacity: 0.7;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <!-- Notification Modal -->
    <div id="notificationOverlay" class="notification-overlay">
        <div id="notificationModal" class="notification-modal">
            <button class="close-notification" onclick="closeNotification()">&times;</button>
            <div class="notification-icon"></div>
            <h2 class="notification-title">Berhasil!</h2>
            <p class="notification-message">Komentar Anda telah berhasil ditambahkan dan akan segera ditampilkan.</p>
            <button class="notification-button" onclick="closeNotification()">Tutup</button>
        </div>
    </div>

    <div class="blog-post">
        <?php
        include "admin/koneksi.php";
        $_GET['module'] = isset($_GET['module']) ? $_GET['module'] : '';

        // Function untuk menampilkan preview berita
        function displayNewsPreview($koneksi, $query) {
            $result = mysqli_query($koneksi, $query);
            
            while($t = mysqli_fetch_array($result)) {
                $u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
                $nu = mysqli_fetch_array($u);
                
                echo '<div class="news-item">';
                echo "<a href='?module=detailberita&id=$t[id_berita]' style='text-decoration: none;'>";
                echo "<h2 class='blog-post-title'>$t[judul]</h2></a>";
                echo "<p class='blog-post-meta'>$t[tgl_posting] | by: $nu[username]</p>";

                if($t['gambar'] != '') {
                    echo "<img src='admin/foto_berita/$t[gambar]' width='200' height='100' style='float: left; margin-right: 15px; margin-bottom: 10px; border-radius: 4px;' alt='News Image'>";
                }

                // Tampilkan preview berita
                $isi_berita = htmlentities(strip_tags($t['isi_berita']));
                $isi = substr($isi_berita, 0, 210);
                $isi = substr($isi_berita, 0, strrpos($isi, " "));

                echo "<div class='news-content'>";
                echo "<p>$isi... <a href='?module=detailberita&id=$t[id_berita]' class='readmore-link'>Selengkapnya</a></p>";
                echo "</div>";
                echo '<div style="clear: both;"></div>';
                echo '</div>';
            }
        }

        // Tampilkan 5 berita terbaru (halaman utama)
        if($_GET['module'] == '') {
            $query = "SELECT * FROM berita ORDER BY id_berita DESC";
            displayNewsPreview($koneksi, $query);
        }
        
        // Detail berita
        elseif ($_GET['module'] == 'detailberita') {
            $detail = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
            $d = mysqli_fetch_array($detail);
            $u = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$d[id_user]'");
            $nu = mysqli_fetch_array($u);

            echo '<div class="news-detail">';
            
            if($d['gambar'] != '') {
                echo "<img src='admin/foto_berita/$d[gambar]' class='detail-image' alt='News Image'>";
            }
            
            echo "<h1 class='blog-post-title'>$d[judul]</h1>";
            echo "<p class='blog-post-meta'>$d[tgl_posting] | by: $nu[username]</p>";
            echo "<div class='news-content'>$d[isi_berita]</div>";
            echo '</div>';
            
            // Proses submit komentar (pindahkan ke atas sebelum form)
            $showNotification = false;
            if(isset($_POST['btnsubmit'])) {
                include "admin/koneksi.php";
                $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                $email = mysqli_real_escape_string($koneksi, $_POST['email']);
                $komentar_text = mysqli_real_escape_string($koneksi, $_POST['komentar']);
                
                $komentar = mysqli_query($koneksi, "INSERT INTO komentar (id_berita, nama, email, isi_komentar) 
                                                   VALUES ('$_GET[id]', '$nama', '$email', '$komentar_text')");
                if ($komentar) {
                    $showNotification = true;
                    // Redirect untuk mencegah resubmission
                    echo "<script>
                        setTimeout(function() {
                            showNotification();
                        }, 100);
                    </script>";
                }
            }
            ?>
            
            <!-- Form Komentar -->
            <div class="jumbotron">
                <h2 class="display-4">Komentar</h2>
                <form role="form" method="POST" action="" id="commentForm">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="komentar">Komentar</label>
                        <textarea name="komentar" id="komentar" placeholder="Tulis komentar Anda" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-custom" name="btnsubmit" id="submitBtn">
                        Kirim Komentar
                        <span class="loading-spinner" id="loadingSpinner"></span>
                    </button>
                </form>
            </div>

            <!-- Tampilkan Komentar -->
            <div class="jumbotron">
                <h3>Komentar Pembaca</h3>
                <?php
                $tampil = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita = $_GET[id] ORDER BY id_komentar DESC");
                
                if(mysqli_num_rows($tampil) > 0) {
                    while($tam = mysqli_fetch_array($tampil)) {
                        echo "<div class='comment-item'>";
                        echo "<strong>" . htmlspecialchars($tam['nama']) . "</strong>";
                        echo "<p>" . htmlspecialchars($tam['isi_komentar']) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Belum ada komentar. Jadilah yang pertama berkomentar!</p>";
                }
                ?>
            </div>
            
            <?php
            echo "<p><a href='javascript:history.go(-1)' class='back-link'>← Kembali</a></p>";
        }
        
        // Berita terbaru (sidebar)
        elseif($_GET['module'] == 'b_terbaru') {
            $sebelum = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
            echo "<h3>Berita Terbaru</h3>";
            while($s = mysqli_fetch_array($sebelum)) {
                echo "<div class='news-item'>";
                echo "<p><a href='?module=detailberita&id=$s[id_berita]' class='back-link'>$s[judul]</a></p>";
                echo "</div>";
            }
        }
        
        // Komentar terbaru
        elseif($_GET['module'] == 'k_terbaru') {
            $komentar1 = mysqli_query($koneksi, "SELECT nama, judul, komentar.id_berita FROM komentar 
                                                 JOIN berita ON komentar.id_berita = berita.id_berita 
                                                 ORDER BY id_komentar DESC LIMIT 5");
            echo "<h3>Komentar Terbaru</h3>";
            while($s = mysqli_fetch_array($komentar1)) {
                echo "<div class='comment-item'>";
                echo "<p><strong>$s[nama]</strong> berkomentar di: <br>";
                echo "<a href='?module=detailberita&id=$s[id_berita]' class='back-link'>$s[judul]</a></p>";
                echo "</div>";
            }
        }
        
        // Kategori Teknologi
        elseif ($_GET['module'] == 'teknologi') {
            echo "<h2>Berita Teknologi</h2>";
            $query = "SELECT * FROM berita WHERE id_kategori=1 ORDER BY id_berita DESC";
            displayNewsPreview($koneksi, $query);
        }
        
        // Kategori Kesehatan
        elseif ($_GET['module'] == 'kesehatan') {
            echo "<h2>Berita Kesehatan</h2>";
            $query = "SELECT * FROM berita WHERE id_kategori=2 ORDER BY id_berita DESC";
            displayNewsPreview($koneksi, $query);
        }
        
        // Kategori Sport
        elseif ($_GET['module'] == 'sport') {
            echo "<h2>Berita Olahraga</h2>";
            $query = "SELECT * FROM berita WHERE id_kategori=6 ORDER BY id_berita DESC";
            displayNewsPreview($koneksi, $query);
        }
        
        // Kategori Politik
        elseif ($_GET['module'] == 'politik') {
            echo "<h2>Berita Politik</h2>";
            $query = "SELECT * FROM berita WHERE id_kategori=7 ORDER BY id_berita DESC";
            displayNewsPreview($koneksi, $query);
        }
        
        // Kategori Travel
        elseif ($_GET['module'] == 'travel') {
            echo "<h2>Berita Travel</h2>";
            $query = "SELECT * FROM berita WHERE id_kategori=8 ORDER BY id_berita DESC";
            displayNewsPreview($koneksi, $query);
        }
        ?>
    </div>

    <script>
        // Enhanced notification system
        function showNotification() {
            const overlay = document.getElementById('notificationOverlay');
            const modal = document.getElementById('notificationModal');
            
            overlay.style.display = 'flex';
            setTimeout(() => {
                modal.classList.add('show');
            }, 50);
            
            // Auto close after 5 seconds
            setTimeout(() => {
                closeNotification();
            }, 5000);
        }

        function closeNotification() {
            const overlay = document.getElementById('notificationOverlay');
            const modal = document.getElementById('notificationModal');
            
            modal.classList.remove('show');
            setTimeout(() => {
                overlay.style.display = 'none';
                // Clear form after closing notification
                document.getElementById('commentForm').reset();
            }, 400);
        }

        // Enhanced form submission
        document.getElementById('commentForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            const spinner = document.getElementById('loadingSpinner');
            
            // Show loading state
            submitBtn.classList.add('loading');
            spinner.style.display = 'inline-block';
            submitBtn.innerHTML = 'Mengirim... <span class="loading-spinner"></span>';
        });

        // Close notification on overlay click
        document.getElementById('notificationOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeNotification();
            }
        });

        // Close notification on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeNotification();
            }
        });

        <?php if($showNotification): ?>
        // Show notification if comment was submitted successfully
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(showNotification, 500);
        });
        <?php endif; ?>
    </script>
</body>
</html>