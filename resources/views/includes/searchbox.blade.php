<div class="premium-search">

    <div class="filter-box">

        <select id="filterDropdown">

            <option value="all">Filter By:</option>

            <option value="test">
                Frequently Booked
            </option>

            <option value="package">
                Popular
            </option>

            <option value="men">
                Men
            </option>

            <option value="women">
                Women
            </option>

            <option value="senior citizens">
                Senior Citizens
            </option>

            <option value="preventive health">
                Preventive Health
            </option>

        </select>

    </div>


    <div class="search-box">

        <input
            type="text"
            id="testSearch"
            placeholder="Search for Tests & Packages"
            autocomplete="off">

        <span class="search-icon">
            <img src="{{ asset('assets/search_icon.svg') }}" alt="">
        </span>

    </div>

</div>




<div id="searchResults" class="search-results d-none"></div>
<div id="searchOutputSection"
    class="search-output-section d-none">

    <h2 class="section-title">
        Results Found
    </h2>

    <div id="searchOutputCards"
        class="search-output-grid">

    </div>

</div>



<style>
    .premium-search {
        display: flex;
        align-items: center;
        max-width: 750px;
        margin: auto;
        background: #ff8c00;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        margin-top: 50px;
    }

    /* FILTER */

    .filter-box {
        padding: 0 15px;
        display: flex;
        align-items: center;
    }

    .filter-box select {
        border: none;
        background: #ff8c00;
        color: #fff;
        font-weight: 500;
        font-size: 14px;
        outline: none;
        cursor: pointer;
    }


    /* SEARCH */

    .search-box {
        flex: 1;
        position: relative;
    }

    .search-box input {
        width: 100%;
        border: none;
        height: 50px;
        padding: 0 40px 0 15px;
        font-size: 15px;
        outline: none;
    }

    .search-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
    }


    /* DROPDOWN */

    .search-results {
        max-width: 750px;
        margin: 5px auto;
        background: #fff;
        border-radius: 10px;
        border: 1px solid #eee;
        max-height: 300px;
        overflow-y: auto;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 9999;
    }

    .search-item {
        padding: 12px;
        cursor: pointer;
        border-bottom: 1px solid #f1f1f1;
    }

    .search-item:hover {
        background: #f8f8f8;
    }


    /* RESULT SECTION */

    .search-output-section {
        max-width: 969px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .search-output-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }


    .d-none {
        display: none !important;
    }

    .search-result-card {

        background: #fff;

        border-radius: 12px;

        padding: 20px;

        border: 1px solid #ddd;

        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);

    }

    .search-result-card h3 {

        color: #6c35b3;

        margin-bottom: 10px;

        font-size: 18px;

    }

    .search-result-card p {

        color: #666;

        margin-bottom: 15px;

    }



    /* MOBILE */

    @media(max-width:768px) {

        .premium-search {
            margin: 30px 14px 0;
        }

        .search-output-grid {
            grid-template-columns: 1fr;
        }

    }
</style>




<script>
    document.addEventListener("DOMContentLoaded", function() {

        // ================= TEST DATA =================

        const testData = {

            MEN: [{
                    name: "Men Health Package",
                    price: 999
                },
                {
                    name: "Testosterone Test",
                    price: 599
                }
            ],

            WOMEN: [{
                    name: "Women Wellness Package",
                    price: 1199
                },
                {
                    name: "Thyroid Test",
                    price: 499
                }
            ],

            ALLTESTS: [{
                    name: "CBC Test",
                    price: 299
                },
                {
                    name: "Sugar Test",
                    price: 199
                }
            ]

        };


        // ================= SEARCHABLE ARRAY =================

        let searchableTests = [];

        Object.keys(testData).forEach(category => {

            testData[category].forEach(test => {

                searchableTests.push({

                    title: test.name,

                    category: category.toLowerCase(),

                    price: test.price,

                    type: category === "ALLTESTS" ?
                        "test" :
                        "package"

                });

            });

        });


        console.log(searchableTests);


        // ================= ELEMENTS =================

        const searchInput =
            document.getElementById("testSearch");

        const resultsBox =
            document.getElementById("searchResults");

        const filterDropdown =
            document.getElementById("filterDropdown");

        const outputSection =
            document.getElementById("searchOutputSection");

        const outputCards =
            document.getElementById("searchOutputCards");


        // ================= FILTER =================

        let currentFilter = "all";


        // ================= SHOW ALL =================

        function showAll() {

            document
                .querySelectorAll(".swiper-slide")
                .forEach(slide => {

                    slide.style.display = "flex";

                });


            document
                .querySelectorAll(".custom-card")
                .forEach(el => {

                    el.style.display = "block";

                });


            document
                .querySelectorAll(".swiper")
                .forEach(sw => {

                    if (sw.swiper) {

                        sw.swiper.update();

                    }

                });

        }


        // ================= PLACEHOLDER =================

        function updatePlaceholder(filter) {

            let text =
                "Search for Tests & Packages";


            if (filter === "test") {

                text =
                    "Search frequently booked tests";

            } else if (filter === "package") {

                text =
                    "Search popular packages";

            } else if (filter === "men") {

                text =
                    "Search tests for men";

            } else if (filter === "women") {

                text =
                    "Search tests for women";

            } else if (filter === "senior citizens") {

                text =
                    "Search tests for senior citizens";

            } else if (filter === "preventive health") {

                text =
                    "Search preventive health tests";

            }

            searchInput.placeholder = text;

        }


        // ================= SEARCH FUNCTION =================

        function performSearch(keyword = "") {

            keyword =
                keyword.toLowerCase().trim();


            let matches = [];


            searchableTests.forEach(test => {

                let title =
                    (test.title || "")
                    .toLowerCase();

                let type =
                    (test.type || "")
                    .toLowerCase();

                let category =
                    (test.category || "")
                    .toLowerCase();


                let matchFilter = false;


                // ================= FILTER LOGIC =================

              if(currentFilter === "all"){

    matchFilter = true;

}

else if(
    currentFilter === "test"
    &&
    type === "test"
){

    matchFilter = true;

}

else if(
    currentFilter === "package"
    &&
    type === "package"
){

    matchFilter = true;

}

else if(category === currentFilter){

    matchFilter = true;

}

                // ================= SEARCH MATCH =================

                if (

                    matchFilter

                    &&

                    (

                        keyword === ""

                        ||

                        title.includes(keyword)

                    )

                ) {

                    matches.push(test);

                }

            });


            // ================= DROPDOWN =================

            resultsBox.innerHTML = matches.length

                ?

                matches.map(m => `

            <div class="search-item"
                 data-title="${m.title}">

                ${m.title}

            </div>

        `).join('')

                :

                `

        <div class="search-item">

            No results found

        </div>

        `;


            resultsBox.classList.remove("d-none");


            // ================= RESULT SECTION =================

            outputSection.classList.remove("d-none");


            if (!matches.length) {

                outputCards.innerHTML = `

                <p>
                    No matching tests found.
                </p>

            `;

                return;

            }


            outputCards.innerHTML = matches.map(m => `

            <div class="search-result-card">

                <h3>
                    ${m.title}
                </h3>

                <p>

                    ₹${m.price}

                </p>

                <p>

                    ${m.category.toUpperCase()}

                </p>

                <a href="/appointment"
                   class="cart-btn">

                    Book Now

                </a>

            </div>

        `).join('');

        }


        // ================= SEARCH INPUT =================

        searchInput.addEventListener("keyup", function() {

            let keyword =
                this.value;

            if (!keyword.trim()) {

                resultsBox.classList.add("d-none");

                outputSection.classList.add("d-none");

                outputCards.innerHTML = "";

                showAll();

                return;

            }

            performSearch(keyword);

        });


        // ================= INPUT FOCUS =================

        searchInput.addEventListener("focus", function() {

            performSearch("");

        });


        // ================= CLICK EVENTS =================

        document.addEventListener("click", function(e) {

            // CLICK ON RESULT

            if (
                e.target.classList.contains("search-item")
            ) {

                let selectedText =
                    e.target.dataset.title;

                searchInput.value =
                    selectedText;

                performSearch(selectedText);

                resultsBox.classList.add("d-none");

                return;

            }


            // OUTSIDE CLICK

            const clickedInsideSearch =

                e.target.closest(".premium-search")

                ||

                e.target.closest("#searchResults");


            if (!clickedInsideSearch) {

                resultsBox.classList.add("d-none");

            }

        });


        // ================= FILTER CHANGE =================

        filterDropdown.addEventListener(
            "change",
            function() {

                currentFilter =
                    this.value.toLowerCase();

                searchInput.value = "";

                resultsBox.classList.add("d-none");

                outputSection.classList.add("d-none");

                outputCards.innerHTML = "";

                updatePlaceholder(currentFilter);

                showAll();

                performSearch("");

            }
        );

    });
</script>