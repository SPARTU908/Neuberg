<div class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <img src="{{ asset('assets/footer-logo.png') }}" class="footer-logo">
            <div class="social-icons">
                <a href="https://www.facebook.com/neuberg.varanasi" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

              <a href="https://www.linkedin.com/company/neuberg-diagnostics-varanasi" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="https://www.instagram.com/neuberglab.varanasi/?hl=en" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

              
            </div>
            <div class="footer-box purple">
                <img src="{{ asset('assets/footer-home.png') }}">
                <div>
                    <p>Book a Home Visit</p>
                    <strong>9055449055</strong>
                </div>
            </div>

            <!-- <div class="footer-box orange">
                <img src="{{ asset('assets/footer-call.png') }}">
                <div>
                    <p>Customer Care</p>
                    <strong>9055449055</strong>
                </div>
            </div> -->

        </div>
        <div class="footer-links">
            <div class="col">
                <div class="heading">
                    <h4>Home</h4>
                </div>
               <a href="#frequently-booked-tests">Frequently Booked Test</a>
                <a href="#popular-health-package">Popular Health Packages</a>
                <a href="#customized">Customized Health Tests</a>
            </div>
            <div class="col">
                 <div class="heading">
                    <h4>Our Team of Experts</h4>
                </div>
                <a href="/doctors-profile">Dr. Himani Rastogi</a>
                <a href="/doctors-profile">Dr. Tanima Mandal</a>
                <a href="/doctors-profile">Dr. Piyush Hari</a>
            </div>
           
            <div class="col">
                <div class="heading">
                    <h4>Book an apointment</h4>
                </div>
                <a href="/appointment">Book Tests</a>
               
            </div>
            <div class="col">
              <div class="heading">
                    <h4>Contact Us</h4>
                </div>
                <a href="/contact">Our Collection Centers</a>
              
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
        gap: 26px;
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

    .col .heading {
        font-size: 14px;
        margin-bottom: 10px;
        font-weight: bolder;
    }

    .col a {
        display: block;
        font-size: 14px;
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


        .footer {
            background: #4a4a4f;
            color: #fff;
            padding: 50px 0px 20px;
        }

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