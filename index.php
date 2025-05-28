<!DOCTYPE html>
<html class="no-js" lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruang Opini</title>
    <meta name="description" content="Portal Berita - Sumber Informasi Terpercaya">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            --warning-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --accent-color: #ff6b6b;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --border-color: #e8ecef;
            --shadow-light: 0 2px 20px rgba(0,0,0,0.08);
            --shadow-medium: 0 4px 25px rgba(0,0,0,0.12);
            --shadow-heavy: 0 8px 30px rgba(0,0,0,0.15);
            
            --border-radius: 12px;
            --border-radius-lg: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Enhanced Header Styles */
        .header-top {
            background: var(--border-color);
            padding: 20px 0;
            box-shadow: var(--shadow-medium);
            position: relative;
            overflow: hidden;
        }

        .header-top::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hamburger-menu {
            color: white;
            font-size: 22px;
            cursor: pointer;
            padding: 12px;
            border-radius: var(--border-radius);
            transition: var(--transition);
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .hamburger-menu:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .logo h2 {
            color: black;
            margin: 0;
            font-weight: 700;
            font-size: 32px;
            font-family: 'Poppins', sans-serif;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            letter-spacing: -0.5px;
        }

        .logo .highlight {
            color: red;
            position: relative;
        }

        .logo .highlight::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--secondary-gradient);
            border-radius: 2px;
        }

        .search-social {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .search-box {
            position: relative;
            transform: translateY(0);
            transition: var(--transition);
        }

        .search-box:hover {
            transform: translateY(-2px);
        }

        .search-box input {
            padding: 14px 50px 14px 20px;
            border: none;
            border-radius: 30px;
            width: 280px;
            outline: none;
            font-size: 14px;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            font-family: 'Inter', sans-serif;
        }

        .search-box input:focus {
            box-shadow: 0 0 0 3px rgba(255,255,255,0.3);
            background: white;
            width: 320px;
        }

        .search-box i {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 16px;
            transition: var(--transition);
        }

        .search-box input:focus + i {
            color: var(--primary-color);
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            color: white;
            font-size: 18px;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
            background: rgba(0,123,255,0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            position: relative;
            overflow: hidden;
        }

        .social-icons a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: var(--transition);
        }

        .social-icons a:hover::before {
            left: 100%;
        }

        .social-icons a:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
        }

        /* Enhanced Navigation */
        .main-nav {
            background: rgba(0,123,255,0.95);
            backdrop-filter: blur(10px);
            padding: 0;
            box-shadow: var(--shadow-medium);
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-menu li {
            position: relative;
        }

        .nav-menu a {
            display: block;
            padding: 18px 30px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: var(--transition);
            border-bottom: 3px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .nav-menu a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: var(--transition);
        }

        .nav-menu a:hover::before {
            left: 100%;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background: rgba(255,255,255,0.15);
            border-bottom-color: var(--accent-color);
            transform: translateY(-2px);
        }

        .nav-menu a.active {
            background: rgba(255,255,255,0.2);
            font-weight: 600;
        }

        /* Enhanced Sidebar Menu */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: -350px;
            width: 350px;
            height: 100vh;
            background: white;
            z-index: 1000;
            transition: var(--transition);
            box-shadow: 5px 0 30px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
        }

        .sidebar-overlay.active {
            left: 0;
        }

        .sidebar-header {
            padding: 25px;
            background: var(--primary-gradient);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .sidebar-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .sidebar-header h4 {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 20px;
            position: relative;
            z-index: 2;
        }

        .sidebar-close {
            float: right;
            cursor: pointer;
            font-size: 22px;
            padding: 8px;
            border-radius: var(--border-radius);
            transition: var(--transition);
            background: rgba(255,255,255,0.1);
        }

        .sidebar-close:hover {
            background: rgba(255,255,255,0.2);
            transform: rotate(90deg);
        }

        .sidebar-menu {
            padding: 0;
            list-style: none;
            margin: 20px 0;
        }

        .sidebar-menu li {
            margin: 0 15px;
            border-radius: var(--border-radius);
            overflow: hidden;
            margin-bottom: 8px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            color: var(--text-dark);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
            border-radius: var(--border-radius);
            position: relative;
            overflow: hidden;
        }

        .sidebar-menu a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--accent-gradient);
            transition: var(--transition);
            z-index: -1;
        }

        .sidebar-menu a:hover::before {
            left: 0;
        }

        .sidebar-menu a:hover {
            color: white;
            transform: translateX(10px);
            box-shadow: var(--shadow-light);
        }

        .sidebar-menu a i {
            margin-right: 15px;
            width: 20px;
            font-size: 16px;
        }

        /* Enhanced Main Content */
        .main-content {
            padding: 40px 0;
            min-height: 60vh;
        }

        .content-card {
            background: white;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-light);
            padding: 35px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-gradient);
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
        }

        .widget {
    margin-bottom: 30px;
    border-radius: var(--border-radius-lg);
    background: white;
    box-shadow: var(--shadow-light);
    overflow: hidden;
    transition: var(--transition);
}

.widget:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.news-item {
    padding: 15px;
    margin: 0 -15px;
    border-bottom: 1px solid var(--border-color);
    transition: var(--transition);
}

.news-item:last-child {
    border-bottom: none;
}

.news-link {
    text-decoration: none;
    color: var(--text-dark);
    display: block;
}

.news-title-wrap {
    display: flex;
    align-items: center;
    gap: 10px;
}

.news-icon {
    color: var(--primary-color);
    font-size: 14px;
    transition: var(--transition);
}

.news-title {
    font-size: 14px;
    font-weight: 500;
    line-height: 1.4;
    transition: var(--transition);
    flex: 1;
}

.news-item:hover {
    background: rgba(102, 126, 234, 0.05);
    padding-left: 20px;
}

.news-item:hover .news-icon {
    transform: translateX(5px);
}

.news-item:hover .news-title {
    color: var(--primary-color);
}

/* Styling untuk komentar */
.comment-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.commenter {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-light);
}

.commenter i {
    color: var(--primary-color);
    font-size: 16px;
}

.commenter-name {
    font-size: 13px;
    font-weight: 600;
    color: var(--primary-color);
}

.commented-news {
    text-decoration: none;
    color: var(--text-dark);
    padding-left: 24px;
}

.commented-news .news-title {
    font-size: 13px;
    color: var(--text-light);
}

.comment-item:hover .commented-news .news-title {
    color: var(--primary-color);
}

/* Widget header styling */
.widget-title {
    background: var(--border-color);
    color: white;
    padding: 20px 25px;
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
}

.widget-title i {
    font-size: 20px;
}

.widget-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: var(--secondary-gradient);
}

.widget-content {
    padding: 15px;
}

/* Animasi fade-in */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: fadeInUp 0.5s ease-out forwards;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .widget {
        margin-bottom: 20px;
    }
    
    .widget-title {
        padding: 15px 20px;
        font-size: 16px;
    }
    
    .widget-content {
        padding: 12px;
    }
    
    .news-item {
        padding: 12px;
    }
}

        .widget::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .widget:hover::before {
            transform: translateX(100%);
        }

        .widget:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }

        .widget-title {
            background: var(--primary-gradient);
            color: white;
            padding: 20px 25px;
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--secondary-gradient);
        }

        .widget-content {
            padding: 25px;
        }

        .widget-content p {
            margin-bottom: 18px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--border-color);
            transition: var(--transition);
            border-radius: var(--border-radius);
            padding: 15px;
            margin: 0 -15px 15px -15px;
        }

        .widget-content p:hover {
            background: rgba(102, 126, 234, 0.05);
            transform: translateX(5px);
        }

        .widget-content p:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .widget-content a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            line-height: 1.5;
        }

        .widget-content a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        .widget-content h5 {
            color: var(--text-light);
            font-size: 13px;
            margin-bottom: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Enhanced Footer */
        .site-footer {
            background: var(--dark-gradient);
            color: white;
            padding: 40px 0;
            margin-top: 60px;
            position: relative;
            overflow: hidden;
        }

        .site-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .copyright {
            text-align: center;
            font-size: 15px;
            opacity: 0.9;
        }

        .copyright i {
            color: var(--accent-color);
            animation: heartbeat 1.5s ease-in-out infinite;
        }

        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        /* Enhanced Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            .search-box input {
                width: 220px;
            }

            .search-box input:focus {
                width: 250px;
            }

            .nav-menu {
                flex-direction: column;
            }

            .nav-menu a {
                padding: 15px 20px;
            }

            .social-icons {
                margin-top: 15px;
            }

            .content-card {
                padding: 25px 20px;
            }

            .widget-content {
                padding: 20px;
            }

            .logo h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 576px) {
            .sidebar-overlay {
                width: 300px;
                left: -300px;
            }

            .search-box input {
                width: 200px;
            }

            .search-box input:focus {
                width: 220px;
            }

            .social-icons {
                gap: 10px;
            }

            .social-icons a {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Enhanced Backdrop */
        .backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(5px);
            z-index: 999;
            display: none;
            transition: var(--transition);
        }

        .backdrop.active {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* News card enhancements */
        .news-item {
            transition: var(--transition);
            border-radius: var(--border-radius);
            padding: 15px;
            margin-bottom: 10px;
        }

        .news-item:hover {
            background: rgba(102, 126, 234, 0.05);
            transform: translateX(5px);
        }
    </style>
</head>

<body>
    <!-- Backdrop for mobile menu -->
    <div class="backdrop" id="backdrop"></div>

    <!-- Sidebar Menu -->
    <div class="sidebar-overlay" id="sidebarMenu">
        <div class="sidebar-header">
            <h4>Menu <span class="sidebar-close" id="closeSidebar"><i class="fas fa-times"></i></span></h4>
        </div>
        <ul class="sidebar-menu">
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="?module=teknologi"><i class="fas fa-laptop"></i> Teknologi</a></li>
            <li><a href="?module=kesehatan"><i class="fas fa-heartbeat"></i> Kesehatan</a></li>
            <li><a href="?module=sport"><i class="fas fa-futbol"></i> Sport</a></li>
            <li><a href="?module=politik"><i class="fas fa-balance-scale"></i> Politik</a></li>
            <li><a href="?module=travel"><i class="fas fa-plane"></i> Travel</a></li>
            <li><a href="admin/login.php"><i class="fas fa-sign-in-alt"></i> Login </a></li>
        </ul>
    </div>

    <div class="overlay-wrapper">
        <!-- Header -->
        <header class="masthead">
            <div class="header-top">
                <div class="container">
                    <div class="header-content">
                        <div class="d-flex align-items-center">
                            <div class="hamburger-menu" id="menuToggle">
                                <i class="fas fa-bars" style="color: #000;"></i>
                            </div>
                            <div class="logo ms-3">
                                <h2>Ruang <span class="highlight">Opini</span></h2>
                            </div>
                        </div>

                            
                            <div class="social-icons">
                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="main-nav">
                <div class="container">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="?module=teknologi">Teknologi</a></li>
                        <li><a href="?module=kesehatan">Kesehatan</a></li>
                        <li><a href="?module=sport">Sport</a></li>
                        <li><a href="?module=politik">Politik</a></li>
                        <li><a href="?module=travel">Travel</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content-card fade-in">
                            <main class="container-fluid">
                                <?php
                                include 'main.php';
                                ?>
                            </main>
                        </div>
                    </div>

                 <div class="col-lg-4">
    <aside class="sidebar">
        <!-- Latest News Widget -->
        <div class="widget fade-in">
            <div class="widget-content">
                <?php
                $sebelum = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
                while($s=mysqli_fetch_array($sebelum)){
                    echo "<div class='news-item'>
                            <a href='?module=detailberita&id=$s[id_berita]' class='news-link'>
                                <div class='news-title-wrap'>
                                    <i class='fas fa-angle-right news-icon'></i>
                                    <span class='news-title'>$s[judul]</span>
                                </div>
                            </a>
                          </div>";
                }
                ?>
            </div>
        </div>

        <!-- Latest Comments Widget -->
        <div class="widget fade-in">
            <div class="widget-content">
                <?php
                $komentar1 = mysqli_query($koneksi,"SELECT nama,judul,komentar.id_berita FROM komentar join berita where komentar.id_berita = berita.id_berita ORDER BY id_komentar DESC LIMIT 5");
                while($s=mysqli_fetch_array($komentar1)){
                    echo "<div class='news-item comment-item'>
                            <div class='commenter'>
                                <i class='fas fa-user-circle'></i>
                                <span class='commenter-name'>$s[nama]</span>
                            </div>
                            <a href='?module=detailberita&id=$s[id_berita]' class='commented-news'>
                                <div class='news-title-wrap'>
                                    <i class='fas fa-comment-dots news-icon'></i>
                                    <span class='news-title'>$s[judul]</span>
                                </div>
                            </a>
                          </div>";
                }
                ?>
            </div>
        </div>
    </aside>
</div>
        </section>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by Ruang Opini
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebarMenu = document.getElementById('sidebarMenu');
        const closeSidebar = document.getElementById('closeSidebar');
        const backdrop = document.getElementById('backdrop');

        menuToggle.addEventListener('click', function() {
            sidebarMenu.classList.add('active');
            backdrop.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeSidebar.addEventListener('click', function() {
            sidebarMenu.classList.remove('active');
            backdrop.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        backdrop.addEventListener('click', function() {
            sidebarMenu.classList.remove('active');
            backdrop.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Search functionality
        const searchInput = document.querySelector('.search-box input');
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                // Add search functionality here
                console.log('Searching for:', this.value);
            }
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading state to search
        const searchIcon = document.querySelector('.search-box i');
        searchInput.addEventListener('input', function() {
            if (this.value.length > 2) {
                searchIcon.className = 'fas fa-spinner fa-spin';
                setTimeout(() => {
                    searchIcon.className = 'fas fa-search';
                }, 1000);
            }
        });

        // Enhanced hover effects for widgets
        document.querySelectorAll('.widget').forEach(widget => {
            widget.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });
            
            widget.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add ripple effect to buttons
        function createRipple(event) {
            const button = event.currentTarget;
            const circle = document.createElement('span');
            const diameter = Math.max(button.clientWidth, button.clientHeight);
            const radius = diameter / 2;

            circle.style.width = circle.style.height = `${diameter}px`;
            circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
            circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
            circle.classList.add('ripple');

            const ripple = button.getElementsByClassName('ripple')[0];
            if (ripple) {
                ripple.remove();
            }

            button.appendChild(circle);
        }

        // Add ripple effect to navigation links
        document.querySelectorAll('.nav-menu a, .sidebar-menu a').forEach(link => {
            link.addEventListener('click', createRipple);
        });

        // Parallax effect for header
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const header = document.querySelector('.header-top');
            if (header) {
                header.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Add typing effect to search placeholder
        const searchPlaceholders = [
            'Cari berita terbaru...',
            'Teknologi terkini...',
            'Berita kesehatan...',
            'Update sport...',
            'Info politik...',
            'Destinasi travel...'
        ];

        let placeholderIndex = 0;
        setInterval(() => {
            if (searchInput && !searchInput.value) {
                searchInput.placeholder = searchPlaceholders[placeholderIndex];
                placeholderIndex = (placeholderIndex + 1) % searchPlaceholders.length;
            }
        }, 3000);

        // Add smooth transitions for page loads
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add progress bar for page scroll
        function updateScrollProgress() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            
            let progressBar = document.querySelector('.scroll-progress');
            if (!progressBar) {
                progressBar = document.createElement('div');
                progressBar.className = 'scroll-progress';
                progressBar.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 0%;
                    height: 3px;
                    background: linear-gradient(90deg, #667eea, #764ba2, #ff6b6b);
                    z-index: 9999;
                    transition: width 0.3s ease;
                `;
                document.body.appendChild(progressBar);
            }
            
            progressBar.style.width = scrollPercent + '%';
        }

        window.addEventListener('scroll', updateScrollProgress);

        // Add click animation to social icons
        document.querySelectorAll('.social-icons a').forEach(icon => {
            icon.addEventListener('click', function(e) {
                e.preventDefault();
                this.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Add CSS for ripple effect
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple-animation 600ms linear;
                pointer-events: none;
            }

            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);
    </script>
</body>
</html>