<div class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <img src="{{ asset('assets/footer-logo.png') }}" class="footer-logo">
            <div class="social-icons">
                <a href="#" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="#" target="_blank">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>

                <a href="#" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="#" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
            <div class="footer-box purple">
                <img src="{{ asset('assets/footer-home.png') }}">
                <div>
                    <p>Book a Home Visit</p>
                    <strong>8939 06 6655</strong>
                </div>
            </div>

            <div class="footer-box orange">
                <img src="{{ asset('assets/footer-call.png') }}">
                <div>
                    <p>Customer Care</p>
                    <strong>9700 36 9700</strong>
                </div>
            </div>

        </div>
        <div class="footer-links">
            <div class="col">
                <h4>Neuberg Diagnostics</h4>
                <a href="#">About Us</a>
                <a href="#">Team</a>
                <a href="#">Accreditations</a>
                <a href="#">Careers</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="col">
                <h4>Doctors</h4>
                <a href="#">Doctor's Wellness</a>
                <a href="#">Directory of Service</a>
                <a href="#">Publications</a>
            </div>
            <div class="col">
                <h4>Patients</h4>
                <a href="#">Book Tests</a>
                <a href="#">Lab Locator</a>
                <a href="#">Wellness Watch</a>
            </div>
            <div class="col">
                <h4>Partnerships</h4>
                <a href="#">Franchise</a>
                <a href="#">Hospital Lab</a>
                <a href="#">Corporate Wellness</a>
            </div>
            <div class="col">
                <h4>International</h4>
                <a href="#">USA</a>
                <a href="#">UAE</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        © 2024 Neuberg Diagnostics. All Rights Reserved.
    </div>

</div>


<style>
    .footer {
        background: #4a4a4f;
        color: #fff;
        padding: 50px 20px 20px;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0px 33px;
        display: flex;
        justify-content: space-between;
        gap: 40px;
        flex-wrap: wrap;
    }

    .footer-left {
        flex: 1;
        min-width: 250px;
    }

    .footer-logo {
        width: 160px;
        margin-bottom: 20px;
    }

    .social-icons {
        display: flex;
        gap: 12px;
        margin-bottom: 20px;
    }

    .social-icons img {
        width: 28px;
        transition: 0.3s;
    }

    .social-icons img:hover {
        transform: scale(1.1);
    }

    .footer-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .footer-box img {
        width: 50px;
    }

    .footer-box p {
        color: #fff;
        font-family: 'Maven Pro', sans-serif;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .footer-box strong {
        font-size: 24px;
    }

    .footer-box.purple {
        background: linear-gradient(90deg, #5a2d91, #8e5cc7);
    }

    .footer-box.orange {
        background: #f7931e;
    }

    .footer-links {
        flex: 2;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .col h4 {
        font-size: 15px;
        margin-bottom: 10px;
    }

    .col a {
        display: block;
        font-size: 13px;
        color: #ddd;
        text-decoration: none;
        margin-bottom: 6px;
        transition: 0.3s;
    }

    .col a:hover {
        color: #fff;
        padding-left: 4px;
    }


    .footer-bottom {
        text-align: center;
        margin-top: 30px;
        font-size: 13px;
        color: #ccc;
    }

    .social-icons {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .social-icons a {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #4a4a4f;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border: 2px solid #fff
    }

    .social-icons a i {
        font-size: 18px;
        color: white;
    }

    .social-icons a:hover {
        transform: translateY(-4px);

    }

    .social-icons a:hover i {
        color: #fff;
    }

    @media (max-width: 992px) {

        .footer-links {
            grid-template-columns: repeat(3, 1fr);
        }

    }

    @media (max-width: 768px) {

        .footer-container {
            flex-direction: column;
        }

        .footer-left {
            text-align: center;
        }

        .social-icons {
            justify-content: center;
        }

        .footer-box {
            justify-content: center;
        }

        .footer-links {
            grid-template-columns: repeat(2, 1fr);
            text-align: center;
        }

    }


    @media (max-width: 480px) {

        .footer-links {
            grid-template-columns: 1fr;
        }

        .footer-logo {
            width: 140px;
        }

        .footer-box strong {
            font-size: 14px;
        }

    }
</style>