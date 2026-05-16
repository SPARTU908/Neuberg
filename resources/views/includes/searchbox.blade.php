<div class="premium-search">

    <div class="filter-box">
        <select id="filterDropdown">
            <option value="" disabled selected hidden class="filter-label">Filter by</option>
            <option value="all">All Tests</option>
            <option value="test">Frequently Booked</option>
            <option value="package">Popular</option>
            <option value="men">Men</option>
            <option value="woman">Women</option>
            <option value="senior citizens">Senior Citizens</option>
            <option value="preventive health">Preventive Health</option>
        </select>
    </div>

    
    <div class="search-box">
        <input 
            type="text" 
            id="testSearch" 
            placeholder="Search for Tests & Packages"
            autocomplete="off"
        >
        <!-- <span class="search-icon">🔍</span> -->
           <span class="search-icon">
            <img src="{{ asset('assets/search_icon.svg') }}" alt="">
           </span>
    </div>

</div>

<!-- RESULT DROPDOWN -->
<div id="searchResults" class="search-results d-none"></div>

<style>
  .premium-search {
    display: flex;
    align-items: center;
    max-width: 750px;
    margin: auto;
    background: #ff8c00;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    margin-top:50px;
}

/* LEFT FILTER */
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

/* SEARCH ICON */
.search-icon {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 16px;
    color: #999;
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
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
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
.d-none{
    display:none !important;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById("testSearch");
    const resultsBox = document.getElementById("searchResults");
    const items = document.querySelectorAll(".search-item-box");
    const filterDropdown = document.getElementById("filterDropdown");

    let currentFilter = "all"; // ✅ GLOBAL FILTER STATE

    // ================= HIDE =================
    function hideAll() {
        document.querySelectorAll(".test-card, .package-card").forEach(el => {
            let slide = el.closest(".swiper-slide");
            if (slide) slide.style.display = "none";
        });

        document.querySelectorAll(".custom-card").forEach(el => {
            el.style.display = "none";
        });
    }

    // ================= SHOW =================
    function showAll() {
        document.querySelectorAll(".swiper-slide").forEach(slide => {
            slide.style.display = "flex";
        });

        document.querySelectorAll(".custom-card").forEach(el => {
            el.style.display = "block";
        });

        document.querySelectorAll(".swiper").forEach(sw => {
            if (sw.swiper) sw.swiper.update();
        });
    }

    // ================= PLACEHOLDER UPDATE =================
    function updatePlaceholder(filter) {

        let text = "Search for tests, health packages...";

        if (filter === "test") {
            text = "Search for frequently booked tests...";
        }
        else if (filter === "package") {
            text = "Search for popular packages...";
        }
        else if (filter === "men") {
            text = "Search tests for men...";
        }
        else if (filter === "woman") {
            text = "Search tests for women...";
        }
        else if (filter === "senior citizens") {
            text = "Search tests for senior citizens...";
        }
        else if (filter === "preventive health") {
            text = "Search preventive health tests...";
        }

        searchInput.placeholder = text;
    }

    // ================= SEARCH =================
    searchInput.addEventListener("keyup", function () {

        let keyword = this.value.toLowerCase().trim();

        if (!keyword) {
            resultsBox.classList.add("d-none");
            resultsBox.innerHTML = "";
            return;
        }

        let matches = [];

        items.forEach(el => {

            let title = (el.dataset.title || "").toLowerCase();
            let type = (el.dataset.type || "").toLowerCase();

        
            let matchFilter = false;

            if (currentFilter === "all") {
                matchFilter = true;
            }
            else if (currentFilter === "test" && type === "test") {
                matchFilter = true;
            }
            else if (currentFilter === "package" && type === "package") {
                matchFilter = true;
            }
            else if (type === "custom" && title === currentFilter) {
                matchFilter = true;
            }

            // ✅ FINAL MATCH
            if (matchFilter && title.includes(keyword)) {
                matches.push({
                    title: el.dataset.title,
                    type: el.dataset.type
                });
            }
        });

        resultsBox.innerHTML = matches.length
            ? matches.map(m => `
                <div class="search-item" data-type="${m.type}">
                    ${m.title}
                </div>
            `).join('')
            : `<div class="search-item text-muted">No results found</div>`;

        resultsBox.classList.remove("d-none");
    });


  searchInput.addEventListener("focus", function () {
    if (!this.value.trim() && !currentFilter) return;

    let matches = [];

    items.forEach(el => {

        let title = (el.dataset.title || "").toLowerCase();
        let type = (el.dataset.type || "").toLowerCase();

        let matchFilter = false;

        if (!currentFilter || currentFilter === "all") matchFilter = true;
        else if (currentFilter === "test" && type === "test") matchFilter = true;
        else if (currentFilter === "package" && type === "package") matchFilter = true;
        else if (type === "custom" && title === currentFilter) matchFilter = true;

        if (matchFilter) {
            matches.push({
                title: el.dataset.title,
                type: el.dataset.type
            });
        }
    });

    if (matches.length === 0) return;

    resultsBox.innerHTML = matches.map(m => `
        <div class="search-item" data-type="${m.type}">
            ${m.title}
        </div>
    `).join('');

    resultsBox.classList.remove("d-none");
});

// ================= CLICK RESULT =================
// ================= CLICK EVENTS =================
document.addEventListener("click", function (e) {

    // ================= CLICK ON SEARCH RESULT =================
    if (e.target.classList.contains("search-item")) {

        let selectedText = e.target.innerText.trim().toLowerCase();

        // CLOSE DROPDOWN
        resultsBox.classList.add("d-none");

        // OPTIONAL → SHOW TEXT IN INPUT
        searchInput.value = selectedText;

        // SHOW MATCHED CARD
        hideAll();

        items.forEach(el => {

            let title = (el.dataset.title || "").toLowerCase();

            if (title === selectedText) {

                // custom cards
                if (el.dataset.type === "custom") {
                    el.style.display = "block";
                }

                // swiper cards
                if (
                    el.dataset.type === "test" ||
                    el.dataset.type === "package"
                ) {
                    let slide = el.closest(".swiper-slide");

                    if (slide) {
                        slide.style.display = "flex";
                    }
                }
            }
        });

        // UPDATE SWIPER
        document.querySelectorAll(".swiper").forEach(sw => {
            if (sw.swiper) sw.swiper.update();
        });

        return;
    }

    // ================= OUTSIDE CLICK =================
    const clickedInsideSearch =
        e.target.closest(".premium-search") ||
        e.target.closest("#searchResults");

    if (!clickedInsideSearch) {
        resultsBox.classList.add("d-none");
    }
});
   
   filterDropdown.addEventListener("change", function () {

    if (!this.value) return; 

    currentFilter = this.value.toLowerCase();

    searchInput.value = "";
    resultsBox.classList.add("d-none");

    updatePlaceholder(currentFilter);

    hideAll();

    if (currentFilter === "all") {
        showAll();
        return;
    }

    items.forEach(el => {

        let type = (el.dataset.type || "").toLowerCase();
        let title = (el.dataset.title || "").toLowerCase();

        if (currentFilter === "test" && type === "test") {
            let slide = el.closest(".swiper-slide");
            if (slide) slide.style.display = "flex";
        }

        if (currentFilter === "package" && type === "package") {
            let slide = el.closest(".swiper-slide");
            if (slide) slide.style.display = "flex";
        }

        if (type === "custom" && title === currentFilter) {
            el.style.display = "block";
        }
    });

    document.querySelectorAll(".swiper").forEach(sw => {
        if (sw.swiper) sw.swiper.update();
    });

});

});
</script>