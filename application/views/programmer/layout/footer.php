<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_programmer/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('/assets/login_programmer/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('/assets/login_programmer/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?= base_url('/assets/login_programmer/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('/assets/login_programmer/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('/assets/login_programmer/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?= base_url('/assets/login_programmer/vendor/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('/assets/login_programmer/vendor/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('/assets/login_programmer/js/main.js') ?>"></script>

	<script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
</body>

</html>