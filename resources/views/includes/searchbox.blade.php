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
            autocomplete="off"
        >

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

.premium-search{
    display:flex;
    align-items:center;
    max-width:750px;
    margin:auto;
    background:#ff8c00;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 6px 20px rgba(0,0,0,0.08);
    margin-top:50px;
}

/* FILTER */

.filter-box{
    padding:0 15px;
    display:flex;
    align-items:center;
}

.filter-box select{
    border:none;
    background:#ff8c00;
    color:#fff;
    font-weight:500;
    font-size:14px;
    outline:none;
    cursor:pointer;
}


/* SEARCH */

.search-box{
    flex:1;
    position:relative;
}

.search-box input{
    width:100%;
    border:none;
    height:50px;
    padding:0 40px 0 15px;
    font-size:15px;
    outline:none;
}

.search-icon{
    position:absolute;
    right:12px;
    top:50%;
    transform:translateY(-50%);
}


/* DROPDOWN */

.search-results{
    max-width:750px;
    margin:5px auto;
    background:#fff;
    border-radius:10px;
    border:1px solid #eee;
    max-height:300px;
    overflow-y:auto;
    box-shadow:0 6px 15px rgba(0,0,0,0.08);
    position:relative;
    z-index:9999;
}

.search-item{
    padding:12px;
    cursor:pointer;
    border-bottom:1px solid #f1f1f1;
}

.search-item:hover{
    background:#f8f8f8;
}


/* RESULT SECTION */

.search-output-section{
    max-width:969px;
    margin:40px auto;
    padding:0 20px;
}

.search-output-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}


.d-none{
    display:none !important;
}



/* MOBILE */

@media(max-width:768px){

    .premium-search{
        margin:30px 14px 0;
    }

    .search-output-grid{
        grid-template-columns:1fr;
    }

}

</style>



<script>

document.addEventListener("DOMContentLoaded", function () {

    const searchInput =
        document.getElementById("testSearch");

    const resultsBox =
        document.getElementById("searchResults");

    const items =
        document.querySelectorAll(".search-item-box");

    const filterDropdown =
        document.getElementById("filterDropdown");

    const outputSection =
        document.getElementById("searchOutputSection");

    const outputCards =
        document.getElementById("searchOutputCards");


    let currentFilter = "all";
    function showAll(){

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
                if(sw.swiper){
                    sw.swiper.update();
                }
            });

    }
 function updatePlaceholder(filter){

        let text =
            "Search for Tests & Packages";

        if(filter === "test"){
            text =
                "Search frequently booked tests";
        }

        else if(filter === "package"){
            text =
                "Search popular packages";
        }

        else if(filter === "men"){
            text =
                "Search tests for men";
        }

        else if(filter === "women"){
            text =
                "Search tests for women";
        }

        else if(filter === "senior citizens"){
            text =
                "Search tests for senior citizens";
        }

        else if(filter === "preventive health"){
            text =
                "Search preventive health tests";
        }

        searchInput.placeholder = text;

    }

    searchInput.addEventListener("keyup", function(){

        let keyword =
            this.value.toLowerCase().trim();


    

        if(!keyword){

            resultsBox.classList.add("d-none");
            resultsBox.innerHTML = "";

            outputSection.classList.add("d-none");
            outputCards.innerHTML = "";

            showAll();

            return;
        }


        let matches = [];


        items.forEach(el => {

            let title =
                (el.dataset.title || "")
                .toLowerCase();

            let type =
                (el.dataset.type || "")
                .toLowerCase();

            let category =
                (el.dataset.category || "")
                .toLowerCase();


            let matchFilter = false;


            // FILTER LOGIC

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

            else if(
                type === "custom"
                &&
                category === currentFilter
            ){

                matchFilter = true;

            }


            // SEARCH MATCH

            if(
                matchFilter
                &&
                title.includes(keyword)
            ){

                matches.push({

                    title: el.dataset.title,

                    type: el.dataset.type,

                    html: el.outerHTML

                });

            }

        });



        // ================= DROPDOWN =================

        resultsBox.innerHTML = matches.length

        ? matches.map(m => `

            <div class="search-item"
                 data-title="${m.title}"
                 data-type="${m.type}">

                ${m.title}

            </div>

        `).join('')

        :

        `<div class="search-item">
            No results found
        </div>`;


        resultsBox.classList.remove("d-none");



        // ================= RESULT SECTION =================

        if(!matches.length){

            outputSection.classList.remove("d-none");

            outputCards.innerHTML = `
                <p>No matching tests found.</p>
            `;

            return;
        }


        outputSection.classList.remove("d-none");


        outputCards.innerHTML =
            matches.map(m => m.html).join('');

    });



    // ================= FOCUS =================

    searchInput.addEventListener("focus", function(){

        let matches = [];


        items.forEach(el => {

            let title =
                (el.dataset.title || "")
                .toLowerCase();

            let type =
                (el.dataset.type || "")
                .toLowerCase();

            let category =
                (el.dataset.category || "")
                .toLowerCase();


            let matchFilter = false;


            if(
                currentFilter === "all"
            ){

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

            else if(
                type === "custom"
                &&
                category === currentFilter
            ){

                matchFilter = true;

            }


            if(matchFilter){

                matches.push({

                    title: el.dataset.title,

                    type: el.dataset.type

                });

            }

        });


        if(!matches.length){
            return;
        }


        resultsBox.innerHTML = matches.map(m => `

            <div class="search-item"
                 data-title="${m.title}"
                 data-type="${m.type}">

                ${m.title}

            </div>

        `).join('');


        resultsBox.classList.remove("d-none");

    });




    // ================= CLICK EVENTS =================

    document.addEventListener("click", function(e){

        // CLICK ON RESULT

        if(
            e.target.classList.contains("search-item")
        ){

            let selectedText =
                e.target.dataset.title;

            searchInput.value =
                selectedText;

            resultsBox.classList.add("d-none");

            return;
        }


        // OUTSIDE CLICK

        const clickedInsideSearch =

            e.target.closest(".premium-search")

            ||

            e.target.closest("#searchResults");


        if(!clickedInsideSearch){

            resultsBox.classList.add("d-none");

        }

    });




    // ================= FILTER CHANGE =================

    filterDropdown.addEventListener(
        "change",
        function(){

        currentFilter =
            this.value.toLowerCase();

        searchInput.value = "";

        resultsBox.classList.add("d-none");

        outputSection.classList.add("d-none");

        outputCards.innerHTML = "";

        updatePlaceholder(currentFilter);

        showAll();

    });

});

</script>