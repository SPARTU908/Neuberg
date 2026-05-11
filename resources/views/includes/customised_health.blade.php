<div class="custom-test-section">

    <h2 class="section-title">Customized Health Tests</h2>

    <div class="custom-grid">

        <div class="custom-card">
            <img src="{{ asset('assets/men.png') }}">
            <p>MEN</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/women.png') }}">
            <p>WOMAN</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/women.png') }}">
            <p>PREVENTIVE HEALTH</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/senior.png') }}">
            <p>SENIOR CITIZENS</p>
        </div>

        <div class="custom-card">
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


<!-- MODAL -->
<div class="test-modal" id="testModal">

    <div class="modal-box">

        <button class="close-modal" id="closeModal">×</button>

        <!-- TOP CATEGORY -->
        <div class="modal-top">

            <button class="nav-btn">‹</button>

            <div class="top-card">
                <img src="{{ asset('assets/men.png') }}">
                <h3 id="modalTitle">MEN</h3>
            </div>

            <button class="nav-btn">›</button>

        </div>

        <!-- CONTENT -->
        <div class="modal-content">

            <div class="modal-header">

                <h2 id="modalHeading">Tests related to Men</h2>

                <div class="tabs">
                    <button class="tab-btn active">Tests</button>
                    <button class="tab-btn">Health Packages</button>
                </div>

            </div>

            <!-- TEST LIST -->
            <!-- <div class="test-list">

                <div class="test-item">
                    <div>
                        <h3>Prostate Specific Antigen</h3>
                       
                    </div>

                    <button class="add-btn">
                        Add <span>+</span>
                    </button>
                </div>

                <div class="test-item">
                    <div>
                        <h3>SEMEN TEST</h3>
                    </div>

                    <button class="add-btn">
                        Add <span>+</span>
                    </button>
                </div>

                <div class="test-item">
                    <div>
                        <h3>TESTOSTERONE</h3>
                    </div>

                    <button class="add-btn">
                        Add <span>+</span>
                    </button>
                </div>


            </div> -->

            <!-- TEST LIST -->
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

    @media (max-width: 992px) {
        .custom-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 576px) {
        .custom-grid {
            grid-template-columns: repeat(2, 1fr);
        }
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


    @media (max-width: 768px) {
        .book-btn {
            left: 20px;
            bottom: 15px;
            padding: 10px 18px;
            font-size: 14px;
        }
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
    }



    @media (max-width: 480px) {

        .custom-grid {
            grid-template-columns: 1fr;
        }

        .custom-card {
            padding: 18px;
        }

        .book-btn {
            /* width: 80%; */
            /* text-align: center; */
            border-radius: 8px;
            margin: -1px 2px -8px -5px;
            padding: 2px 5px 2px 5px;
            font-size: 11px;
        }
    }

    /* MODAL */

.test-modal{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.35);
    z-index:9999;
    display:none;
    align-items:center;
    justify-content:center;
    padding:20px;
}

.modal-box{
    width:100%;
    max-width:1050px;
    background:#fff;
    border-radius:35px;
    position:relative;
    overflow:hidden;
    border:2px solid #7f49b7;
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

.modal-top{
    background:#e9daf4;
    height:170px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 40px;
    border-bottom-left-radius:45px;
    border-bottom-right-radius:45px;
}

.nav-btn{
    width:42px;
    height:42px;
    border-radius:50%;
    border:none;
    background:#fff;
    font-size:34px;
    color:#6c35aa;
    cursor:pointer;
}

.top-card{
    background:#fff;
    width:180px;
    height:125px;
    border-radius:25px;
    text-align:center;
    padding-top:18px;
    border:1px solid #c79be8;
}

.top-card img{
    width:45px;
    margin-bottom:10px;
}

.top-card h3{
    color:#5f2d91;
    font-size:15px;
    font-weight:700;
}

.modal-content {
    padding: 8px 51px;
}

.modal-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:40px;
}

.modal-header h2{
       padding: 0 78px 13px 0;
    color: #4c4b4b;
    font-family: "Maven Pro";
    font-size: 20.176px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    width: 100%;
}

.tabs{
    display:flex;
    gap:20px;
}

.tab-btn{
    border:none;
   padding: 3px 31px;
    border-radius:10px;
    background:#fff;
    border:1px solid #ccc;
    font-weight:600;
    cursor:pointer;
}

.tab-btn.active{
    background:#a55bd8;
    color:#fff;
}

.test-list{
    max-height:350px;
    overflow-y:auto;
    padding-right:10px;
}

.test-list::-webkit-scrollbar{
    width:8px;
}

.test-list::-webkit-scrollbar-thumb{
    background:#999;
    border-radius:20px;
}

.test-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:40px;
}

.test-item h3{
    margin: 0;
    color: #5c2d91;
    font-family: Maven Pro;
    font-size: 20.176px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
}

.test-item p{
    color:#9d5ee1;
    font-size:28px;
    font-weight:700;
}

.test-item small{
    font-size:24px;
    color:#444;
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

/* MOBILE */

@media(max-width:768px){

    .modal-box{
        border-radius:20px;
    }

    .modal-top{
        height:auto;
        padding:20px;
    }

    .top-card{
        width:140px;
        height:110px;
    }

    .top-card h3{
        font-size:22px;
    }

    .modal-content{
        padding:25px 20px;
    }

    .modal-header{
        flex-direction:column;
        gap:20px;
        align-items:flex-start;
    }

    .modal-header h2{
        font-size:24px;
    }

    .tabs{
        width:100%;
    }

    .tab-btn{
        width:100%;
        padding:12px;
    }

    .test-item{
        flex-direction:column;
        align-items:flex-start;
        gap:18px;
    }

    .test-item h3{
        font-size:20px;
    }

    .test-item p{
        font-size:16px;
    }

    .test-item small{
        font-size:14px;
    }

    .add-btn{
        width:110px;
        font-size:16px;
        height:42px;
        padding-left:20px;
    }

    .add-btn span{
        width:38px;
        height:40px;
        font-size:24px;
    }

}
</style>



<!-- <script>

    const modal = document.getElementById('testModal');
    const closeModal = document.getElementById('closeModal');

    const cards = document.querySelectorAll('.custom-card');

    const modalTitle = document.getElementById('modalTitle');
    const modalHeading = document.getElementById('modalHeading');

    cards.forEach(card => {

        card.addEventListener('click', () => {

            let title = card.querySelector('p').innerText;

            modalTitle.innerText = title;
            modalHeading.innerText = "Tests related to " + title;

            modal.style.display = 'flex';
        });

    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if(e.target == modal){
            modal.style.display = 'none';
        }
    });

</script> -->



<script>

const modal = document.getElementById('testModal');
const closeModal = document.getElementById('closeModal');

const cards = document.querySelectorAll('.custom-card');

const modalTitle = document.getElementById('modalTitle');
const modalHeading = document.getElementById('modalHeading');
const testList = document.getElementById('testList');


const testData = {

    "MEN": [
        "Prostate Specific Antigen",
        "SEMEN TEST",
        "TESTOSTERONE",
       
    ],

    "WOMAN": [
       "DUAL MARKER",
       "Quadraple marker",
       "NIPT",
       "PAP SMEAR",
    ],

    "PREVENTIVE HEALTH": [
       
    ],

    "SENIOR CITIZENS": [
       
    ],

    "ALLTESTS": [
       "Complete Blood Count (CBC)",
       "ESR (Erythrocyte Sedimentation Rate)",
       "Fasting Blood Sugar (FBS)",
       "Post Prandial Blood Sugar (PPBS)",
       "Random Blood Sugar (RBS)",
       "HbA1c (Glycated Hemoglobin)",
       "Total Cholesterol",
       "SGPT (ALT)",
       "SGOT (AST)",
       "Liver Function Test (LFT Panel)",
       "Renal Function Test",
       "Serum Creatinine",
       "Blood Urea",
       "Uric Acid",
       "Thyroid Function test(TFT)",
       "TSH",
       "T3",
       "T4",
       "Sodium (Na⁺)",
       "Potassium (K⁺)",
       "Calcium",
       "Vitamin D (25-OH)",
       "Vitamin B12",
       "Iron Studies",
       "C-Reactive Protein (CRP)",
       "Widal Test (Typhoid)",
       "Malaria Parasite (MP)",
       "HIV I & II",
       "HBsAg (Hepatitis B)",
       "HCV MANUAL",
       "Urine Routine & Microscopy",
       "Urine Culture & Sensitivity",
       "Stool Routine Examination",
       "Stool Occult Blood",
       "PSA",
       "HSCRP",
       "BLOOD GROUP",
       "CEA",
       "CA125",
       "CA 19.9",
       "PTINR",
       "Rf factor",
       "FSH",
       "LH",
       "PROLACTIN",
       "ANTI MULERIN HORMONE",
       "Dengue NS1 / IgM / IgG",
       "Amylase",
       "Lipase",
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
                        <h3>${test}</h3>
                    </div>

                    <button class="add-btn">
                        Book <span> <a href="{{ url('/appointment') }}">+</a></span>
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
    if(e.target == modal){
        modal.style.display = 'none';
    }
});

</script>