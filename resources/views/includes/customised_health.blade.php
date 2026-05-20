<div class="custom-test-section">

    <h2 class="section-title" id="customized">Customized Health Tests</h2>

    <div class="custom-grid">

        <div class="custom-card search-item-box" data-title="MEN" data-type="custom"  data-category="men">
            <img src="{{ asset('assets/men.png') }}">
            <p>MEN</p>
        </div>

        <div class="custom-card search-item-box" data-title="WOMEN" data-type="custom" data-category="women">
            <img src="{{ asset('assets/women.png') }}">
            <p>WOMEN</p>
        </div>

        <div class="custom-card search-item-box" data-title="PREVENTIVE HEALTH" data-type="custom"  data-category="preventive health">
            <img src="{{ asset('assets/women.png') }}">
            <p>PREVENTIVE HEALTH</p>
        </div>

        <div class="custom-card search-item-box" data-title="SENIOR CITIZENS" data-type="custom"  data-category="senior citizens">
            <img src="{{ asset('assets/senior.png') }}">
            <p>SENIOR CITIZENS</p>
        </div>

        <div class="custom-card search-item-box" data-title="ALLTESTS" data-type="custom"  data-category="all">
            <img src="{{ asset('assets/all_test.png') }}">
            <p>ALLTESTS</p>
        </div>

    </div>

</div>

<div class="book-now-wrapper">
    <img src="{{ asset('assets/book-now.jpeg') }}" class="book-now-img">
    <a href="{{ url('/appointment') }}" class="book-btn">
        BOOK NOW
    </a>
</div>

<div class="test-modal" id="testModal">

    <div class="modal-box">

        <button class="close-modal" id="closeModal">×</button>

        <div class="modal-top">

            <button class="nav-btn">‹</button>

            <div class="top-card">
                <img src="{{ asset('assets/men.png') }}">
                <h3 id="modalTitle">MEN</h3>
            </div>

            <button class="nav-btn">›</button>

        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalHeading">Tests related to Men</h2>
            </div>
            <div class="test-list" id="testList"></div>
        </div>

    </div>

</div>

<style>
    .custom-test-section {
        max-width: 990px;
        margin: 80px auto;
        padding: 0 10px;
    }

    .section-title {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .custom-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 25px;
    }

    .custom-card {
        background: #fff;
        border-radius: 14px;
        padding: 25px 10px;
        text-align: center;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
        cursor: pointer;
    }


    .custom-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(90, 45, 145, 0.15);
    }


    .custom-card img {
        width: 50px;
        margin-bottom: 12px;
    }


    .custom-card p {
        font-size: 13px;
        font-weight: 600;
        color: #5a2d91;
    }

    .book-now-wrapper {
        position: relative;
        width: 100%;
    }

    .book-now-img {
        width: 75%;
        display: block;
        border-radius: 12px;
        margin: 40px auto;
    }

    .book-btn {
        position: absolute;
        bottom: 44px;
        left: 596px;
        background: #ff7a00;
        color: #fff;
        padding: 12px 34px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .book-btn:hover {
        background: #e56700;
    }

    .test-modal {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.35);
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .modal-box {
        width: 100%;
        max-width: 1050px;
        background: #fff;
        border-radius: 35px;
        position: relative;
        overflow: hidden;
        border: 2px solid #7f49b7;
    }

    .close-modal {
        position: absolute;
        top: 5px;
        right: 48px;
        border: none;
        background: none;
        font-size: 54px;
        color: #f28b00;
        cursor: pointer;
        z-index: 10;
    }

    .modal-top {
        background: #e9daf4;
        height: 170px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 40px;
        border-bottom-left-radius: 45px;
        border-bottom-right-radius: 45px;
    }

    .nav-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: none;
        background: #fff;
        font-size: 34px;
        color: #6c35aa;
        cursor: pointer;
    }

    .top-card {
        background: #fff;
        width: 180px;
        height: 125px;
        border-radius: 25px;
        text-align: center;
        padding-top: 18px;
        border: 1px solid #c79be8;
    }

    .top-card img {
        width: 45px;
        margin-bottom: 10px;
    }

    .top-card h3 {
        color: #5f2d91;
        font-size: 15px;
        font-weight: 700;
    }

    .modal-content {
        padding: 8px 51px;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .modal-header h2 {
        padding: 0 78px 13px 0;
        color: #4c4b4b;
        font-family: "Maven Pro";
        font-size: 20.176px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        width: 100%;
    }

    .tabs {
        display: flex;
        gap: 20px;
    }

    .tab-btn {
        border: none;
        padding: 3px 31px;
        border-radius: 10px;
        background: #fff;
        border: 1px solid #ccc;
        font-weight: 600;
        cursor: pointer;
    }

    .tab-btn.active {
        background: #a55bd8;
        color: #fff;
    }

    .test-list {
        max-height: 350px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .test-list::-webkit-scrollbar {
        width: 8px;
    }

    .test-list::-webkit-scrollbar-thumb {
        background: #999;
        border-radius: 20px;
    }

    .test-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .test-item h3 {
        margin: 0;
        color: #5c2d91;
        font-family: Maven Pro;
        font-size: 20.176px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .test-item p {
        margin: 0;
        color: #a965d6;
        font-family: Maven Pro;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .test-item small {
        font-size: 24px;
        color: #444;
    }

    .test-price {
        margin-top: 6px;
        font-size: 16px;
        font-weight: 600;

    }

    .add-btn {
        border: 1px solid #7c3db6;
        background: #fff;
        color: #7c3db6;
        height: 34px;
        width: 120px;
        border-radius: 6px;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 0 0 13px;
        cursor: pointer;
    }

    .add-btn span a {
        width: 45px;
        height: 34px;
        background: #6f2dad;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        border-radius: 0 7px 4px 0;
        text-decoration: none !important;
    }


    @media (max-width: 1200px) {

        .custom-test-section {
            margin: 60px 40px;
        }

        .custom-grid {
            grid-template-columns: repeat(4, 1fr);
        }

        .book-now-img {
            width: 90%;
            margin: 40px auto;
        }

        .book-btn {
            left: 50%;
            transform: translateX(-50%);
            bottom: 30px;
        }
    }


    @media (max-width: 992px) {
        .custom-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .custom-test-section {
            margin: 50px 20px;
        }

        .custom-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .custom-card {
            padding: 20px 10px;
        }

        .book-now-img {
            width: 95%;
        }

        .book-btn {
            left: 50%;
            transform: translateX(-50%);
            bottom: 25px;
        }
    }

    @media (max-width: 768px) {
        .book-btn {
            left: 20px;
            bottom: 15px;
            padding: 10px 18px;
            font-size: 14px;
        }

        .custom-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .custom-card img {
            width: 40px;
        }

        .custom-card p {
            font-size: 12px;
        }

        .book-now-img {
            width: 100%;
            margin: 30px 0;
        }

        .book-btn {
            padding: 10px 20px;
            font-size: 13px;
            bottom: 20px;
        }

        .modal-box {
            border-radius: 20px;
            width: 100%;
            max-height: 100vh;
            height: auto;
            overflow: hidden;
        }

        .modal-top {
            height: auto;
            padding: 20px;
        }

        .top-card {
            width: 140px;
            height: 110px;
        }

        .top-card h3 {
            font-size: 13px;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-header {
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 2px;
        }

        .modal-header h2 {
            font-size: 15px;
        }

        .tabs {
            width: 100%;
        }

        .tab-btn {
            width: 100%;
            padding: 12px;
        }

        .test-item {
            align-items: flex-start;
            gap: 4px;
            margin-bottom: 10px;
        }

        .test-item h3 {
            font-size: 12px;
        }

        .test-item p {
            font-size: 13px;
        }

        .test-item small {
            font-size: 14px;
        }

        .test-list {
            max-height: 55vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .add-btn {
            width: 88px;
            font-size: 17px;
            height: 24px;
            /* padding-left: 20px; */
        }

        .add-btn span {
            width: 38px;
            height: 40px;
            font-size: 24px;
        }

        .add-btn span a {
            width: 35px;
            height: 25px;
            background: #6f2dad;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            border-radius: 0 7px 4px 0;
            text-decoration: none !important;
            margin-top: 7px;
        }

        .close-modal {
            position: absolute;
            top: 1px;
            right: 27px;
            border: none;
            background: none;
            font-size: 44px;
            color: #f28b00;
            cursor: pointer;
            z-index: 10;
        }
    }

    @media (max-width: 576px) {
        .custom-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {

        .custom-grid {
            grid-template-columns: 1fr;
        }

        .custom-card {
            padding: 18px;
        }

        .book-btn {
            border-radius: 8px;
            margin: -1px 2px -7px -5px;
            padding: 2px 5px 2px 5px;
            font-size: 11px;
        }
    }
</style>

<script>
    const modal = document.getElementById('testModal');
    const closeModal = document.getElementById('closeModal');

    const cards = document.querySelectorAll('.custom-card');

    const modalTitle = document.getElementById('modalTitle');
    const modalHeading = document.getElementById('modalHeading');
    const testList = document.getElementById('testList');


    const testData = {

        "MEN": [{
                name: "Prostate Specific Antigen",
                price: "Starting from Rs.900"
              
            },
            {
                name: "SEMEN TEST",
                price: "Starting from Rs.1500"
            },
            {
                name: "TESTOSTERONE",
                price: "Starting from Rs.660"
            },
            {
                name: " NEU- ENERGY & METABOLIS",
                price: "Starting from Rs.1000"
            },
            {
                name: "NEU- STAMINA & ENDURANCE",
                price: "Starting from Rs.1800"
            },
            {
                name: "NEU-VITAMINS & MINERALS",
                price: "Starting from Rs.3250"
            },
            {
                name: "NEU- INFLAMMATION & RECOVERY",
                price: "Starting from Rs.2500"

            }
        ],

        "WOMEN": [{
                name: "DUAL MARKER",
                price: "Starting from Rs.2250",
            },
            {
                name: "Quadraple marker",
                price: "Starting from Rs.3500",
            },
            {
                name: "NIPT",
                price: "Starting from Rs.12000",
            },
            {
                name: "PAP SMEAR",
                price: "Starting from Rs.1500",
            },
            {
                name: "NEU- ENERGY & METABOLISM",
                price: "Starting from Rs.1000"
            },
            {
                name: "NEU- STAMINA & ENDURANCE",
                price: "Starting from Rs.1800"
            },
            {
                name: "NEU-VITAMINS & MINERALS",
                price: "Staring from Rs.3250"
            },
            {
                name: "NEU- INFLAMMATION & RECOVERY",
                price: "Starting from Rs.2500"
            },

        ],

        "PREVENTIVE HEALTH": [{
                name: "Basic Body Profile New",
                price: "Starting from Rs.1600",
            },
            {
                name: "Basic Body Profile P1",
                price: "Starting from Rs.1760",
            },
            {
                name: "Basic Body Profile P2",
                price: "Starting from Rs.1760",
            },
            {
                name: "Basic Body Profile P3",
                price: "Starting from Rs.1980",
            },
            {
                name: "Basic Body Profile P4",
                price: "Starting from Rs.3520"
            }

        ],

        "SENIOR CITIZENS": [{
                name: "NEU NURTURER Package",
                price: "Starting from Rs.2800"
            }

        ],

        "ALLTESTS": [{
                name: "Complete Blood Count (CBC)",
                price: "Starting from Rs.160"
            },
            {
                name: "ESR (Erythrocyte Sedimentation Rate)",
                price: "Starting from Rs.120"
            },
            {
                name: "Fasting Blood Sugar (FBS)",
                price: "Starting from Rs.50"
            },
            {
                name: "Post Prandial Blood Sugar (PPBS)",
                price: "Starting from Rs.50"
            },
            {
                name: "Random Blood Sugar (RBS)",
                price: "Starting from Rs.50"
            },
            {
                name: "HbA1c (Glycated Hemoglobin)",
                price: "Starting from Rs.450"
            },
            {
                name: "Total Cholesterol",
                price: "Starting from Rs.130"
            },
            {
                name: "SGPT (ALT)",
                price: "Starting from Rs.100"
            },
            {
                name: "SGOT (AST)",
                price: "Starting from Rs.100"
            },
            {
                name: "Liver Function Test (LFT Panel)",
                price: "Starting from Rs.350"
            },
            {
                name: "Renal Function Test",
                price: "Starting from Rs.380"
            },
            {
                name: "Serum Creatinine",
                price: "Starting from Rs.110"
            },
            {
                name: "Blood Urea",
                price: "Starting from Rs.100"
            },
            {
                name: "Uric Acid",
                price: "Starting from Rs.100"
            },
            {
                name: "Thyroid Function test(TFT)",
                price: "Starting from Rs.250"
            },
            {
                name: "TSH",
                price: "Starting from Rs.180"
            },
            {
                name: "T3",
                price: "Starting from Rs.200"
            },
            {
                name: "T4",
                price: "Starting from Rs.200"
            },
            {
                name: "Sodium (Na⁺)",
                price: "Starting from Rs.130"
            },
            {
                name: "Potassium (K⁺)",
                price: "Starting from Rs.130"
            },
            {
                name: "Calcium",
                price: "Starting from Rs.130"
            },
            {
                name: "Vitamin D (25-OH)",
                price: "Starting from Rs.1400"
            },
            {
                name: "Vitamin B12",
                price: "Starting from Rs.1200"
            },
            {
                name: "Iron Studies",
                price: "Starting from Rs.500"
            },
            {
                name: "C-Reactive Protein (CRP)",
                price: "Starting from Rs.300"
            },
            {
                name: "Widal Test (Typhoid)",
                price: "Starting from Rs.120"
            },
            {
                name: "Malaria Parasite (MP)",
                price: "Starting from Rs.120"
            },
            {
                name: "HIV I & II",
                price: "Starting from Rs.600"
            },
            {
                name: "HBsAg (Hepatitis B)",
                price: "Starting from Rs.1000"
            },
            {
                name: "HCV MANUAL",
                price: "Starting from Rs.500"
            },
            {
                name: "Urine Routine & Microscopy",
                price: "Starting from Rs.100"
            },
            {
                name: "Urine Culture & Sensitivity",
                price: "Starting from Rs.385"
            },
            {
                name: "Stool Routine Examination",
                price: "Starting from Rs.110"
            },
            {
                name: "Stool Occult Blood",
                price: "Starting from Rs.90"
            },
            {
                name: "PSA",
                price: "Starting from Rs.900"
            },
            {
                name: "HSCRP",
                price: "Starting from Rs.800"
            },
            {
                name: "BLOOD GROUP",
                price: "Starting from Rs.100"
            },
            {
                name: "CEA",
                price: "Starting from Rs.740"
            },
            {
                name: "CA125",
                price: "Starting from Rs.1300"
            },
            {
                name: "CA 19.9",
                price: "Starting from Rs.1500"
            },
            {
                name: "PTINR",
                price: "Starting from Rs.270"
            },
            {
                name: "Rf factor",
                price: "Starting from Rs.300"
            },
            {
                name: "FSH",
                price: "Starting from Rs.600"
            },
            {
                name: "LH",
                price: "Starting from Rs.600"
            },
            {
                name: "PROLACTIN",
                price: "Starting from Rs.330"
            },
            {
                name: "ANTI MULERIN HORMONE",
                price: "Starting from Rs.2100"
            },
            {
                name: "Dengue NS1 / IgM / IgG",
                price: "Starting from Rs.600"
            },
            {
                name: "Amylase",
                price: "Starting from Rs.390"
            },
            {
                name: "Lipase",
                price: "Starting from Rs.390"
            },
            {
                name: "Lipid Profile",
                price: "Starting from Rs.350"
            }
        ]
    };


    cards.forEach(card => {

        card.addEventListener('click', () => {

            let title = card.querySelector('p').innerText.trim();

            modalTitle.innerText = title;
            modalHeading.innerText = "Tests related to " + title;

            let tests = testData[title] || [];

            let html = '';

            tests.forEach(test => {

                html += `
        <div class="test-item">

            <div>
                <h3>${test.name}</h3>
                <p class="test-price">${test.price}</p>
            </div>

            <button class="add-btn">
                Book <span><a href="{{ url('/appointment') }}">+</a></span>
            </button>

        </div>
    `;

            });
            testList.innerHTML = html;

            modal.style.display = 'flex';

        });

    });


    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>

<!-- customized section ends -->
