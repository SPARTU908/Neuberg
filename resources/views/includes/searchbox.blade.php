<div class="premium-search">

    <!-- FILTER -->

    <div class="filter-box">

        <select id="filterDropdown">

          <option value="" selected disabled>
    Filter By
</option>

            <option value="frequently booked">
                Frequently Booked Tests
            </option>

            <option value="popular package">
                Popular Health Packages
            </option>

            <option value="men">
                Men
            </option>

            <option value="women">
                Women
            </option>

            <option value="preventive health">
                Preventive Health
            </option>

            <option value="senior citizens">
                Senior Citizens
            </option>

        </select>

    </div>


    <!-- SEARCH BOX -->

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


<!-- =========================
SEARCH DROPDOWN
========================= -->

<div id="searchResults"
    class="search-results d-none">

</div>


<!-- =========================
SEARCH OUTPUT SECTION
========================= -->

<div id="searchOutputSection"
    class="search-output-section d-none">

    <h2 class="section-title">
        Results Found
    </h2>

    <div id="searchOutputCards"
        class="search-output-grid">

    </div>

</div>


<!-- =========================
CSS
========================= -->

<style>
     .premium-search {
        display: flex;
        align-items: center;
        max-width: 740px;
        margin: 40px auto 0;
        border-radius: 14px;
        overflow: visible;
        position: relative;
        z-index: 999;
    }

    /* ================= FILTER ================= */

    .filter-box {
        width: 260px;
        position: relative;
        margin-right: 12px;
    }

    .filter-box select {
        width: 100%;
        height: 64px;
        padding: 0 18px;
        border: none;
        outline: none;
        border-radius: 16px;
        background: #ff9800;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        box-shadow: 0 8px 20px rgba(255, 152, 0, 0.25);
        transition: 0.3s ease;
    }

    .filter-box select:hover {
        background: #f28b00;
    }

    .filter-box::after {
        content: "⌄";
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #fff;
        font-size: 24px;
        pointer-events: none;
    }

    /* DROPDOWN OPTIONS */

    .filter-box select option {
        background: #fff;
        color: #333;
        padding: 12px;
        font-size: 16px;
    }
    /* SEARCH BOX */

    .search-box {

        flex: 1;

        position: relative;
    }

    .search-box input {

        width: 100%;

        height: 50px;

        border: none;

        outline: none;

        padding: 0 45px 0 15px;

        font-size: 15px;
    }

    .search-icon {

        position: absolute;

        right: 12px;

        top: 50%;

        transform: translateY(-50%);
    }


    /* SEARCH DROPDOWN */

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

        padding: 12px 15px;

        cursor: pointer;

        border-bottom: 1px solid #f1f1f1;

        transition: 0.2s;
    }

    .search-item:hover {

        background: #f8f8f8;
    }


    /* SEARCH RESULT SECTION */

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

        margin-bottom: 10px;
    }


    .search-result-card .cart-btn {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding: 10px 18px;

        border-radius: 8px;

        background: linear-gradient(90deg, #5a2d91, #9b63d1);

        color: #fff;

        text-decoration: none;

        font-size: 14px;

        margin-top: 10px;
    }


    .d-none {

        display: none !important;
    }


    /* MOBILE */

    @media(max-width:768px) {

        .premium-search {

            margin: 30px 14px 0;
        }

        .search-output-grid {

            grid-template-columns: 1fr;
        }

        .filter-box select {

            font-size: 12px;
        }

        .search-box input {

            font-size: 14px;
        }
    }
</style>



<!-- =========================
SEARCH SCRIPT
========================= -->

<script>

document.addEventListener("DOMContentLoaded", function(){


    // =========================
    // ELEMENTS
    // =========================

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


    // =========================
    // FILTER
    // =========================

    let currentFilter = "all";


    // =========================
    // MASTER SEARCH DATA
    // =========================

    let searchableData = [];


    // =========================
    // FREQUENTLY BOOKED TESTS
    // =========================

    document.querySelectorAll('.test-card').forEach(card => {

        searchableData.push({

            title:
                card.querySelector('h3')?.innerText.trim(),

            section:
                'frequently booked',

            type:
                'test',

            price:
                card.querySelector('.price')?.innerText.trim(),

            link:
                '/appointment'

        });

    });



    // =========================
    // POPULAR PACKAGES
    // =========================

    document.querySelectorAll('.package-card').forEach(card => {

        searchableData.push({

            title:
                card.querySelector('h3')?.innerText.trim(),

            section:
                'popular package',

            type:
                'package',

            price:
                card.querySelector('.new-price')?.innerText.trim(),

            link:
                '/appointment'

        });

    });



    // =========================
    // CUSTOMIZED TESTS
    // =========================

    Object.keys(testData).forEach(category => {

        testData[category].forEach(test => {

            searchableData.push({

                title:
                    test.name,

                section:
                    category.toLowerCase(),

                type:
                    'custom',

                price:
                    test.price,

                link:
                    '/appointment'

            });

        });

    });



    console.log(searchableData);



    // =========================
    // PLACEHOLDER UPDATE
    // =========================

    function updatePlaceholder(filter){

        let text =
            "Search for Tests & Packages";


        if(filter === 'frequently booked'){

            text =
                "Search test related to frequently booked tests";
        }

        else if(filter === 'popular package'){

            text =
                "Search popular health packages";
        }

        else if(filter === 'men'){

            text =
                "Search tests related to men";
        }

        else if(filter === 'women'){

            text =
                "Search tests related to women";
        }

        else if(filter === 'preventive health'){

            text =
                "Search preventive health tests";
        }

        else if(filter === 'senior citizens'){

            text =
                "Search tests related to senior citizens";
        }

        searchInput.placeholder = text;

    }



    // =========================
    // SEARCH FUNCTION
    // =========================

    function performSearch(keyword = ''){

        keyword =
            keyword.toLowerCase().trim();


        let filtered = searchableData.filter(item => {

            let matchKeyword =
                item.title.toLowerCase().includes(keyword);


            let matchFilter =

                currentFilter === 'all'

                ||

                item.section === currentFilter;


            return matchKeyword && matchFilter;

        });


        renderDropdown(filtered);

        renderResults(filtered);

    }



    // =========================
    // RENDER DROPDOWN
    // =========================

    function renderDropdown(items){

        if(!items.length){

            resultsBox.innerHTML = `

                <div class="search-item">
                    No Results Found
                </div>

            `;

            resultsBox.classList.remove('d-none');

            return;
        }


        resultsBox.innerHTML = items.map(item => `

            <div class="search-item"
                 data-title="${item.title}">

                ${item.title}

            </div>

        `).join('');


        resultsBox.classList.remove('d-none');

    }



    // =========================
    // RENDER RESULTS
    // =========================

   function renderResults(items){

    outputSection.classList.remove('d-none');


    if(!items.length){

        outputCards.innerHTML = `

            <p>
                No matching tests found.
            </p>

        `;

        return;
    }


    outputCards.innerHTML = items.map(item => `

        <div class="test-card search-result-card">

            <form class="cart-form"
                  action="/cart/add"
                  method="POST">

                <button type="submit" class="plus-icon">
                    +
                </button>

            </form>

            <h3>
                ${item.title}
            </h3>

            <p class="includes">
                Includes 1 Test
            </p>

            <p class="report">
                Report will be sent within
                <strong>4 hours</strong>
            </p>

            <div class="footer-price">

                <p class="price">
                    ${item.price}
                </p>

            </div>

            <img src="/assets/test.png"
                 class="corner-icon">

        </div>

    `).join('');

}


    // =========================
    // SEARCH INPUT
    // =========================

   searchInput.addEventListener('keyup', function(){

    let keyword =
        this.value.trim();


    // AGAR FILTER SELECT NHI KIYA

    if(!currentFilter){

        return;
    }


    // EMPTY SEARCH

    if(keyword === ''){

        let filteredItems = searchableData.filter(item => {

            return item.section === currentFilter;

        });

        renderDropdown(filteredItems);

        outputSection.classList.add('d-none');

        return;
    }


    // SEARCH

    performSearch(keyword);

});



    // =========================
    // INPUT FOCUS
    // =========================

    searchInput.addEventListener('focus', function(){

        performSearch('');

    });



    // =========================
    // FILTER CHANGE
    // =========================

  filterDropdown.addEventListener('change', function(){

    currentFilter =
        this.value.toLowerCase();

    updatePlaceholder(currentFilter);

    searchInput.value = '';


    // FILTER RELATED DROPDOWN ONLY

    let filteredItems = searchableData.filter(item => {

        return item.section === currentFilter;

    });


    renderDropdown(filteredItems);


    // RESULT SECTION HIDE

    outputSection.classList.add('d-none');

    outputCards.innerHTML = '';

});



    // =========================
    // CLICK EVENTS
    // =========================

    document.addEventListener('click', function(e){

        // CLICK ON SEARCH ITEM

        if(e.target.classList.contains('search-item')){

            let selectedText =
                e.target.dataset.title;

            searchInput.value =
                selectedText;

            performSearch(selectedText);

            resultsBox.classList.add('d-none');

            return;
        }


        // OUTSIDE CLICK

        const insideSearch =

            e.target.closest('.premium-search')

            ||

            e.target.closest('#searchResults');


        if(!insideSearch){

            resultsBox.classList.add('d-none');

        }

    });


});

</script>