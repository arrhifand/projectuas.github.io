<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arya Haifandika">
    <meta name="author-link" content="https://aryahaifandika17.com">
    <title>Website|Portfolio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <div class="mobile-navigasi">
        <div class="mobile-navigasi-animasipindah"></div>
        <div class="mobile-navigasi-item active">
            <a href="#home">
            <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mobile-navigasi-item">
            <a href="#kontener">
            <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mobile-navigasi-item">
            <a href="#tentang">
            <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mobile-navigasi-item">
            <a href="#footer">
            <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <a href="#home" class="back-to-top">
    <i class="bx bxs-to-top"></i>
    </a>
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">
                    Website Portfolio<br>
                </div>
                <div class="nma">Arya Haifandika</div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Dashboard
                    </div>
                </a>
                <a href="#kontener">
                    <div class="menu-item">
                        About
                    </div>
                </a>
                <a href="#tentang">
                    <div class="menu-item">
                        Project
                    </div>
                </a>
                <a href="#footer">
                    <div class="menu-item">
                        Contact Me
                    </div>
                </a>
            </div>
        </div>
    </div>
    <section id="home" class="fullheight align-items-center bekgron-gambar bekgron-gambar-fixed"
        style="background-image: url(assets/background.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="bagiankhusus">
                        <h1 class="bagiankiri animasi-scroll">
                            Frontend Dev
                        </h1>
                        <p class="bagiankiri animasi-scroll delay-2">
                            I'am an beginner Web Developer. My Expertise is
                            to create and website design, and data entry. 
                        </p>
                        <div class="bagiankiri animasi-scroll delay-4">
                            <button onclick="window.location.href='https://www.linkedin.com/in/arya-haifandika-978b08241/'">
                            Hubungi Saya
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="align-items-center bekgron-gambar bekgron-gambar-fixed" id="kontener"
        style="background-image: url(assets/background2.jpg);">
        <div class="container">
            <div class="kontener">
                <h1>
                    Who <span class="primary-color">am</span> I?
                </h1>
                <p>I am a 4th semester student with the Department of 
                    Computer Science and Informatics Study Program from Bhayangkara 
                    University Jakarta Raya. I love technology such as computers and cell phones. I think this 
                    is a science that will develop in the future and will create very many jobs. 
                    Therefore I want to learn this science by going to college. I made this website to fulfill the Midterm Exam assignment from the Web 
                    Programming course. Create a website from HTML, CSS, PHP, JavaScript, and SQL</p>
            </div>
        </div>
    </section>
    <section
    <section class="tentang fullheight align-items-center" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets/bg2.jpg" alt="" class="full_lebar bagiankiri animasi-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="tentang-bagiankhusus bagiankanan animasi-scroll">
                        <h3>
                            <span class="primary-color">Let's</span> Create <span class="primary-color">a Website</span> for Your <span class="primary-color"> Business</span>
                        </h3>
                        <p>Contact me if you are interested in using my services to create a website. I will work professionally and will not disappoint.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer bekgron-gambar" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        Arya Haifandika
                    </h1>
                    <br>
                    <p>You can find me at :</p>
                    <br>
                    <p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="mailto:aryahaifandika17@gmail.com">aryahaifandika17@gmail.com</a></p>
                    <p>Facebook&nbsp;&nbsp;: Arya Haifandika</p>
                    <p>Instagram    : <a href="https://www.instagram.com/_haifannd/">@_haifannd</a></p>
                    <p>Website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: - </p>
                </div>
                <div class="col-6 col-xs-12">
                    <h1>
                        Leave a message
                    </h1>
                    <br>
                    <p>Leave a message or your account name if you are interested in my services. I'm waiting for your work!</p>
                    <div class="input-group">
                        <form action="php/save_message.php" method="POST">
                            <input type="text" name="message" placeholder="Message" required>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                    <br>
                    <h2>Messages:</h2>
                    <div id="messages">
                        <?php include 'php/fetch_messages.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/index.js"></script>
</body>
</html>
