<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Surabaya</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 895-3372-61274</p>
                        <p><i class="fa fa-envelope me-3"></i>erestadeveloper@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/eresta.dev/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="<?= base_url('home/about') ?>">About Us</a>
                        <a class="btn btn-link" href="<?= base_url('home/service') ?>">Service</a>
                        <a class="btn btn-link" href="<?= base_url('home/project') ?>">Project</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('assets/image/example/img/vaksinasi.png') ?>" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Silahkan Klik Dibawah Ini Untuk Menghubungi Kami.</p>
                        <a href="https://wa.me/62895337261274"><img src="<?= base_url('assets/logo/wa_2.png'); ?>" width="230px"></a>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://erestadev.com">erestadev.com</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="<?= base_url("/") ?>">Home</a>
                                <a href="<?= base_url("home/about") ?>">About</a>
                                <a href="<?= base_url("home/service") ?>">Service</a>
                                <a href="<?= base_url("home/project") ?>">Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('/assets/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('/assets/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('/assets/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('/assets/lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?= base_url('/assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('/assets/lib/isotope/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('/assets/lib/lightbox/js/lightbox.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/user/main.js') ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
  
        //------ Slider Begin
            const CaroS = document.querySelector('.Carousel-slider');
            const CaroSlider = new MicroSlider(CaroS, { indicators: true, indicatorText: '' });
            const hammer = new Hammer(CaroS);
            const CaroSTimer = 2000;
            let CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
            
        //------- Mouseenter Event
            CaroS.onmouseenter = function(e) {
                clearInterval(CaroAutoplay); 
                console.log(e.type + ' mouse detected');
            }
        
        //----- Mouseleave Event
            CaroS.onmouseleave = function(e) {
                clearInterval(CaroAutoplay); 
                CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
                console.log(e.type + ' mouse detected');
            }
        
        //----- Mouseclick Event
            CaroS.onclick = function(e) {
                clearInterval(CaroAutoplay); 
                console.log(e.type + ' mouse detected');
            }
        
        //------ Gesture Tap Event
            hammer.on('tap', function(e) {
                clearInterval(CaroAutoplay);
                console.log(e.type + ' gesture detected');
            });
        
        //----- Gesture Swipe Event
            hammer.on('swipe', function(e) {
                clearInterval(CaroAutoplay); 
                CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
                console.log(e.type + ' gesture detected');
            });

        let slideLink = document.querySelectorAll('.slider-item');
        if (slideLink && slideLink !== null && slideLink.length > 0){
            slideLink.forEach( el => el.addEventListener('click', e => {
            e.preventDefault();
            let href = el.dataset.href;
            let target = el.dataset.target;
            if (href !== '#') window.open(href, target);
            }));
        }
        
        //---- Slider End
        
        });

</script>

</body>

</html>