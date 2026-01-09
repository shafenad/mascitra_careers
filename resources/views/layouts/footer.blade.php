

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">

    <main class="flex-grow-1">
        @yield('content')
    </main>
    
    

    {{-- FOOTER --}}
<footer class="footer-wrap">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-5">
                <div class="footer-title mb-2">Mascitra Careers</div>
                <p class="job-muted mb-3" style="max-width:520px;">
                    Join a team of passionate innovators dedicated to delivering smart IT solutions. At Mascitra,
                    your ideas shape the future of technology. Let’s grow, create, and make an impact together.
                </p>

                <div class="d-flex gap-3 fs-4">
                    <a href="#" class="text-dark"><i class="bi bi-google"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-tiktok"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-6 col-lg-3 footer-right">
                <div class="footer-title mb-2">Information</div>
                <a class="footer-link" href="#">About Us</a>
                <a class="footer-link" href="#">Service</a>
                <a class="footer-link" href="#">Portfolio</a>
                <a class="footer-link" href="#">Career</a>
            </div>

            <div class="col-6 col-lg-4 footer-right">
                <div class="footer-title mb-3">Contact</div>

                <div class="footer-contact-item">
                    <i class="bi bi-envelope"></i>
                    <span>mascitra@mail.cpm</span>
                </div>

                <div class="footer-contact-item">
                    <i class="bi bi-telephone"></i>
                    <span>+62 812-3003-3880</span>
                </div>

                <div class="footer-contact-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>
                        Tegal Besar Permai 1, Blk. A-B No.9,<br>
                        Kec. Kaliwates, Kabupaten Jember.
                    </span>
                </div>
            </div>

        </div>
    </div>
</footer>

    @stack('scripts')
    
</body>
</html>
