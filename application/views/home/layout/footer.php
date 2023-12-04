<!-- <footer>
    <div class="container_footer">
        <div class="wrapper">
            <div class="footer-widget">
                <a href="#">
                    <img src="<?= base_url('/assets/logo/eresta_dev.png'); ?>" class="logo" width="150px">
                </a>
                <p class="desc">
                    Perkenalkan, kami dari tim eresta developer menawarkan kalian untuk jasa dalam pembuatan, pengembangan, dan custome website maupun android. Sesuai dengan kebutuhan anda.
                </p>
                <ul class="socials">
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxl-tiktok'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Quick Link</h6>
                <ul class="links">
                    <li><a href="<?= base_url('/'); ?>"><i class='bx bxs-home'></i> Home</a></li>
                    <li><a href="#project"><i class='bx bxl-product-hunt'></i> Project</a></li>
                    <li><a href="#portofolio"><i class='bx bxs-book'></i> Portofolio</a></li>
                    <li><a href="#"><i class='bx bx-grid'></i> About</a></li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Services</h6>
                <ul class="links">
                    <li>Web Design</li>
                    <li>Web Development</li>
                    <li>Seo Optimization</li>
                    <li>Logo & Banner</li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Help &amp; Support</h6>
                <ul class="links">
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright-wrapper">
            <p>Develop By
                <a href="#" target="blank">Eresta Developer</a>
            </p>
        </div>
    </div>
</footer> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
<script>

    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open')
    }

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

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