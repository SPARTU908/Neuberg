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

    }

    .doctor-section {
        max-width: 1050px;
        margin: 70px auto;
        padding: 0 20px;
    }

    .section-title {
        text-align: center;
        font-size: 42px;
        margin-bottom: 60px;
        color: #222;
        font-weight: 700;
    }

    .doctor-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 45px;
    }

    .doctor-card {
        position: relative;
        background: #5a2d91;
        border-radius: 35px 0px 35px 0px;
        padding: 87px 4px 35px;
        text-align: center;
        transition: 0.4s ease;
        height: 440px;
    }

    .doctor-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
    }

    .doctor-image {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
    }

    .doctor-image img {
        width: 175px;
        height: 206px;
        object-fit: cover;
        border-radius: 28px;
        display: block;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .doctor-name {
        font-size: 18px;
        color: #fff;
        font-weight: 700;
        margin-bottom: 10px;
        margin-top: 104px;
    }

    .doctor-role {
        font-size: 18px;
        color: #e9eeee;
        margin-bottom: 18px;
    }

    .doctor-desc {
        color: #f7f7f7;
        line-height: 1.7;
        font-size: 13px;
    }

    .doctor-btn {
        display: inline-block;
        margin-top: 22px;
        padding: 12px 24px;
        background: #fff;
        color: #567672;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .doctor-btn:hover {
        background: #1f1f1f;
        color: #fff;
    }

    @media(max-width:992px) {

        .doctor-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:768px) {

        .section-title {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .doctor-grid {
            grid-template-columns: 1fr;
            gap: 60px;
        }

        .doctor-card {
            padding: 85px 20px 30px;
        }

        .doctor-name {
            font-size: 22px;
        }

        .doctor-role {
            font-size: 16px;
        }
    }
</style>

<?php

$doctors = [

    // [
    //     "name" => "Dr. Manoj Kumar Shah",
    //     "role" => "Advisor",
    //     "image" => asset('assets/doctor-profile/p1.jpg'),

    // ],

    [
        "name" => "Dr. Himani Rastogi",
        "role" => "25+ Years of Experience in Diagnostic Pathology ",
        "image" => asset('assets/doctor-profile/p2.jpg'),
        "desc" => "A highly experienced pathologist specializing in histopathology, cytology, hematology and routine reporting.
          Expert in laboratory management, quality assurance and clinical diagnostics.
          Committed to delivering accurate reports and reliable patient care."

    ],

    // [
    //     "name" => "Shri Ras Bihari Lal",
    //     "role" => "Director,Sales & Marketing ",
    //     "image" => asset('assets/doctor-profile/p3.png'),

    // ],

    // [
    //     "name" => "Shri Aditya Vikram Shah",
    //     "role" => "CEO & Director ",
    //      "image" => asset('assets/doctor-profile/p4.jpg'),

    // ],

    // [
    //     "name" => "DR. ANSHUMAN BANERJEE ",
    //     "role" => "Management Team",
    //     "image" => asset('assets/doctor-profile/p5.png'),

    // ],

    // [
    //     "name" => "CA SANDEEP ANAND SINGH ",
    //     "role" => "Management Team",
    //      "image" => asset('assets/doctor-profile/p6.png'),

    // ],

    // [
    //     "name" => "ADV AYUSH MITAL",
    //     "role" => "Management Team",
    //      "image" => asset('assets/doctor-profile/p7.jpg'),

    // ],

    // [
    //     "name" => "SHRI AMIT TRIPATHI ",
    //     "role" => "Management Team",
    //      "image" => asset('assets/doctor-profile/p8.jpg'),

    // ],

    // [
    //     "name" => "SHRI KAUSTUBH BHATT ",
    //    "role" => "Management Team",
    //      "image" => asset('assets/doctor-profile/p9.jpg'),

    // ],

    // [
    //     "name" => "SHRI VIKAS CHOURASIA",
    //     "role" => "Management Team",
    //      "image" => asset('assets/doctor-profile/p10.png'),

    // ],

    [
        "name" => "Dr. Tanima Mandal",
        "role" => " M.D. (Pathologist)",
        "image" => asset('assets/doctor-profile/p11.png'),
        "desc" => "   6+ Years in Haematology, Biochemistry, Immunology, Clinical Pathology"

    ],

    [
        "name" => "Dr. Piyush Hari",
        "role" => "M.D. (Microbiologist)  ",
        "image" => asset('assets/doctor-profile/p12.jpg'),
        "desc" => "8 Years of experience in Microbiology"

    ],

];

?>

<section class="doctor-section">

    <h2 class="section-title">Meet Our Team</h2>

    <div class="doctor-grid">

        <?php foreach ($doctors as $doctor) { ?>

            <div class="doctor-card">

                <div class="doctor-image">
                    <img src="<?php echo $doctor['image']; ?>" alt="">
                </div>

                <h3 class="doctor-name">
                    <?php echo $doctor['name']; ?>
                </h3>

                <p class="doctor-role">
                    <?php echo $doctor['role']; ?>
                </p>

                <p class="doctor-desc">
                    <?php echo $doctor['desc']; ?>
                </p>


            </div>

        <?php } ?>

    </div>

</section>








@include('includes.footer')