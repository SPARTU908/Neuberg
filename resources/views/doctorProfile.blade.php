@section('contain')
@include('includes.header')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Maven Pro', sans-serif;
        background: #f3f3f3;
    }

    .doctor-section {
        max-width: 1300px;
        margin: 70px auto;
        padding: 0 20px;
    }

    .section-title {
        text-align: center;
        font-size: 42px;
        margin-bottom: 70px;
        color: #5a2d91;
        font-weight: 700;
    }

    .doctor-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 45px;
    }

    .doctor-card {
        position: relative;
        background: #efefef;
        border-radius: 25px;
        overflow: hidden;
        text-align: center;
        padding: 30px 25px 120px;
        transition: 0.4s ease;
        min-height: 760px;
    }

    .doctor-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
    }

    .logo {
        width: 220px;
        margin-bottom: 25px;
    }

    .experience {
        color: #f59b14;
        font-size: 30px;
        font-weight: 800;
        line-height: 1.1;
    }

    .exp-text {
        color: #5a2d91;
        font-size: 20px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 35px;
    }

    .doctor-image-wrapper {
        position: relative;
        margin-bottom: 30px;
    }

    .circle-bg {
        width: 260px;
        height: 260px;
        background: #5a2d91;
        border-radius: 50%;
        border: 4px solid #f59b14;
        margin: auto;
        overflow: hidden;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .doctor-image img {
        width: 100%;
        max-width: 230px;
        object-fit: cover;
    }

    .doctor-info {
        width: 100%;
        background: #5a2d91;
        border: 3px solid #f59b14;
        border-radius: 18px;
        padding: 16px 15px;
        margin-top: -25px;
        position: relative;
        z-index: 5;
    }

    .doctor-name {
        font-size: 30px;
        color: #fff;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .doctor-role {
        font-size: 20px;
        color: #f59b14;
        font-weight: 600;
    }

    .doctor-heading {
        color: #5a2d91;
        font-size: 24px;
        font-weight: 700;
        margin-top: 35px;
        margin-bottom: 20px;
    }

    .doctor-desc {
        color: #5a2d91;
        line-height: 1.8;
        font-size: 17px;
        font-weight: 500;
    }

    .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
    }

    @media(max-width:992px) {

        .doctor-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:768px) {

        .doctor-grid {
            grid-template-columns: 1fr;
        }

        .section-title {
            font-size: 32px;
        }

        .doctor-card {
            min-height: auto;
        }

        .experience {
            font-size: 32px;
        }

        .exp-text {
            font-size: 22px;
        }

        .doctor-name {
            font-size: 24px;
        }

        .doctor-role {
            font-size: 17px;
        }

        .doctor-heading {
            font-size: 20px;
        }

        .doctor-desc {
            font-size: 15px;
        }

        .circle-bg {
            width: 220px;
            height: 220px;
        }
    }
</style>

<?php

$doctors = [

    [
        "name" => "Dr. Himani Rastogi",
        "role" => "MD (Pathology), KGMU, Lucknow",
        "experience" => "25+ YEARS",
        "exp_text" => "OF EXPERIENCE IN DIAGNOSTIC PATHOLOGY",
        "image" => asset('assets/doctor-profile/p2.jpg'),

        "desc" => "A highly experienced pathologist specializing in histopathology, cytology, hematology and routine reporting. Expert in laboratory management, quality assurance and clinical diagnostics. Committed to delivering accurate reports and reliable patient care."
    ],

    [
        "name" => "Dr. Tanima Mandal",
        "role" => "M.D. (Pathologist)",
        "experience" => "6+ YEARS",
        "exp_text" => "OF EXPERIENCE IN HEMATOLOGY & BIOCHEMISTRY",
        "image" => asset('assets/doctor-profile/p11.png'),

        "desc" => "6+ Years in Haematology, Biochemistry, Immunology and Clinical Pathology."
    ],

    [
        "name" => "Dr. Piyush Hari",
        "role" => "M.D. (Microbiologist)",
        "experience" => "8+ YEARS",
        "exp_text" => "OF EXPERIENCE IN MICROBIOLOGY",
        "image" => asset('assets/doctor-profile/p12.jpg'),

        "desc" => "8 Years of experience in Microbiology."
    ],

];

?>

<section class="doctor-section">

    <h2 class="section-title">Meet Our Team</h2>

    <div class="doctor-grid">

        <?php foreach ($doctors as $doctor) { ?>

            <div class="doctor-card">

                <!-- Logo -->
               

                <!-- Experience -->
                <h2 class="experience">
                    <?php echo $doctor['experience']; ?>
                </h2>

                <h3 class="exp-text">
                    <?php echo $doctor['exp_text']; ?>
                </h3>

                <!-- Doctor Image -->
                <div class="doctor-image-wrapper">

                    <div class="circle-bg">

                        <div class="doctor-image">
                            <img src="<?php echo $doctor['image']; ?>" alt="">
                        </div>

                    </div>

                    <div class="doctor-info">

                        <h3 class="doctor-name">
                            <?php echo $doctor['name']; ?>
                        </h3>

                        <p class="doctor-role">
                            <?php echo $doctor['role']; ?>
                        </p>

                    </div>

                </div>

                <!-- Description -->
                <h4 class="doctor-heading">
                    To Neuberg Diagnostics Private Limited
                </h4>

                <p class="doctor-desc">
                    <?php echo $doctor['desc']; ?>
                </p>

                <!-- Bottom Wave -->
                <svg class="wave" viewBox="0 0 1440 320">
                    <path fill="#5a2d91" fill-opacity="1"
                        d="M0,224L60,234.7C120,245,240,267,360,272C480,277,600,267,720,245.3C840,224,960,192,1080,192C1200,192,1320,224,1380,240L1440,256L1440,320L0,320Z">
                    </path>
                </svg>

            </div>

        <?php } ?>

    </div>

</section>

@include('includes.footer')