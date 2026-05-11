@section('contain')
@include('includes.header')

<style>
    body {
        background-image: url(/assets/bg.png);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .contact-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1100px;
        margin: 60px auto;
        gap: 60px;
    }


    .contact-left {
        width: 50%;
    }

    .contact-left h2 {
    color: rgb(76, 75, 75);
    font-size: 24px;
    font-weight: 600;
    margin: 10px 0px 30px;
    font-family: "Maven Pro";
    }

    .contact-left h4 {
        margin-bottom: 20px;
        color: #555;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        gap: 8px;
    }

    .contact-item .icon {
        font-size: 20px;
        margin-right: 12px;
        color: #f97316;
    }

    .contact-item img {
        width: 21px;
        margin-top: 2px;
    }


    .contact-item p {
        margin: 0;
        color: #6b21a8;
        font-size: 14px;
    }


    .contact-right {
        width: 100%;
        max-width: 420px;
    }


    .enquiry-card {
        background: rgba(255, 239, 220, 0.3);
        box-shadow: rgba(0, 0, 0, 0.12) 0px 4px 4px;
        padding: 30px;
        border-radius: 12px;
        border: 2px solid #d8b4fe;

    }

    .enquiry-card h3 {
        margin-bottom: 20px;
        color: #333;
    }


    .enquiry-card input,
    .enquiry-card select,
    .enquiry-card textarea {
        width: 100%;
        padding: 12px 14px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #cbd5e1;
        background: #f1f5f9;
        font-size: 14px;
    }

    .enquiry-card select {
        color: #6b21a8;
    }

    .enquiry-card textarea {
        height: 80px;
        resize: none;
    }


    .enquiry-card button {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 8px;
        background: var(--Orange-Gradient, linear-gradient(91deg, #f7941d 58.96%, rgba(255, 173, 75, .86) 98.25%));
        color: #fff;
        font-size: 16px;
        font-weight: 600;
    }


    @media (max-width: 900px) {
        .contact-section {
            flex-direction: column;
        }

        .contact-left,
        .contact-right {
            width: 100%;
        }
    }


    input,
    select,
    textarea {
        width: 100%;
        padding: 12px 14px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #cbd5e1;
        background: #f1f5f9;
        font-size: 14px;
        outline: none;
    }

    input::placeholder,
    textarea::placeholder {
        color: #64748b;
    }

    select {
        color: #6b21a8;
        background: #f1f5f9;
    }

    textarea {
        resize: none;
        height: 80px;
    }

    .btn {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(90deg, #f97316, #fb923c);
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .map-section {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }

    .map-section h3 {
    margin-bottom: 15px;
    font-size: 22px;
    text-align: center;
}

    .connection-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 40px 0;
    }

    .connection {
        width: 100%;
        max-width: 500px;
        height: auto;
    }

    @media (max-width: 1200px) {

        .contact-section {
            max-width: 95%;
            gap: 40px;
        }

        .contact-right {
            width: 100%;
            max-width: 420px;
        }

        .map-section {
            max-width: 95%;
        }
    }



    @media (max-width: 992px) {

        .contact-section {
            flex-direction: column;
            gap: 30px;
            margin: 40px 20px;
        }

        .contact-left,
        .contact-right {
            width: 100%;
        }

        .contact-left h2 {
            font-size: 24px;
        }

        .enquiry-card {
            padding: 25px;
        }
    }



    @media (max-width: 768px) {

        .contact-section {
            margin: 30px 15px;
            gap: 25px;
        }

        .contact-left h2 {
            font-size: 22px;
        }

        .contact-left h4 {
            font-size: 14px;
        }

        .contact-item {
            gap: 10px;
        }

        .contact-item p {
            font-size: 13px;
            line-height: 1.5;
        }

        .enquiry-card {
            padding: 20px;
        }

        .enquiry-card h3 {
            font-size: 18px;
        }

        input,
        select,
        textarea {
            padding: 10px 12px;
            font-size: 13px;
        }

        .btn {
            padding: 12px;
            font-size: 14px;
        }

        .map-section {
            margin: 30px 15px;
        }

        .map-section h3 {
            font-size: 18px;
        }

        .map-section iframe {
            height: 300px;
        }
    }


    @media (max-width: 480px) {

        .contact-left h2 {
            font-size: 20px;
        }

        .contact-item img {
            width: 18px;
        }

        .contact-item p {
            font-size: 12px;
        }

        .enquiry-card {
            padding: 18px;
            width: 302px;
        }

        .map-section iframe {
            height: 250px;
        }


    }
</style>


<div class="contact-section">


    <div class="contact-left">
        <h2>Contact Us</h2>

        <h4>Corporate Office</h4>

        <div class="contact-item">
            <img src="{{ asset('assets/map.png') }}" alt="">
            <p>2nd Floor, Central Bank of India Building, Lanka, Varanasi, Uttar Pradesh 221005</p>
        </div>

        <div class="contact-item">
            <img src="{{ asset('assets/home2.png') }}" alt="">
            <p>Home Visit - <strong>+91 9055449055</strong></p>
        </div>

        <div class="contact-item">
            <img src="{{ asset('assets/contact.png') }}" alt="">
            <p>Customer Care - <strong>+91 9055449055</strong></p>
        </div>
    </div>


    <div class="contact-right">
        <div class="enquiry-card">
            <h3>Send an Enquiry</h3>


            <form method="POST" action="#">
                @csrf

                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">

                <select name="state" id="state">
                    <option value="">Select State</option>
                </select>

                <select name="city" id="city">
                    <option value="">Select City</option>
                </select>

                <textarea name="message" placeholder="Message"></textarea>

                <button class="btn">Book Your Test Now</button>
            </form>

        </div>
    </div>

</div>

<div class="map-section">
    <h3>Our Collection Centers</h3>

</div>

<div class="connection-wrapper">
    <img src="{{ asset('assets/connection-centers.jpeg') }}" alt="" class="connection">
</div>





<script>
const stateCityData = {
    "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur"],
    "Arunachal Pradesh": ["Itanagar", "Tawang", "Ziro"],
    "Assam": ["Guwahati", "Silchar", "Dibrugarh"],
    "Bihar": ["Patna", "Gaya", "Muzaffarpur"],
    "Chhattisgarh": ["Raipur", "Bilaspur", "Durg"],
    "Goa": ["Panaji", "Margao", "Vasco da Gama"],
    "Gujarat": ["Ahmedabad", "Surat", "Vadodara"],
    "Haryana": ["Gurgaon", "Faridabad", "Panipat"],
    "Himachal Pradesh": ["Shimla", "Manali", "Dharamshala"],
    "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad"],
    "Karnataka": ["Bengaluru", "Mysuru", "Hubli"],
    "Kerala": ["Kochi", "Thiruvananthapuram", "Kozhikode"],
    "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur"],
    "Maharashtra": ["Mumbai", "Pune", "Nagpur"],
    "Manipur": ["Imphal", "Thoubal", "Bishnupur"],
    "Meghalaya": ["Shillong", "Tura", "Jowai"],
    "Mizoram": ["Aizawl", "Lunglei", "Champhai"],
    "Nagaland": ["Kohima", "Dimapur", "Mokokchung"],
    "Odisha": ["Bhubaneswar", "Cuttack", "Rourkela"],
    "Punjab": ["Ludhiana", "Amritsar", "Jalandhar"],
    "Rajasthan": ["Jaipur", "Udaipur", "Jodhpur"],
    "Sikkim": ["Gangtok", "Namchi", "Geyzing"],
    "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai"],
    "Telangana": ["Hyderabad", "Warangal", "Nizamabad"],
    "Tripura": ["Agartala", "Udaipur", "Dharmanagar"],
    "Uttar Pradesh": ["Lucknow", "Noida", "Varanasi", "Kanpur", "Agra"],
    "Uttarakhand": ["Dehradun", "Haridwar", "Nainital"],
    "West Bengal": ["Kolkata", "Siliguri", "Durgapur"],
   "Andaman and Nicobar Islands": ["Port Blair"],
    "Chandigarh": ["Chandigarh"],
    "Dadra and Nagar Haveli and Daman and Diu": ["Daman", "Diu"],
    "Delhi": ["New Delhi", "Dwarka", "Rohini"],
    "Jammu and Kashmir": ["Srinagar", "Jammu"],
    "Ladakh": ["Leh", "Kargil"],
    "Lakshadweep": ["Kavaratti"],
    "Puducherry": ["Puducherry", "Karaikal"]
};

const stateSelect = document.getElementById("state");
const citySelect = document.getElementById("city");

for (const state in stateCityData) {
    let option = document.createElement("option");
    option.value = state;
    option.textContent = state;
    stateSelect.appendChild(option);
}

stateSelect.addEventListener("change", function () {
    citySelect.innerHTML = '<option value="">Select City</option>';

    const cities = stateCityData[this.value];

    cities.forEach(city => {
        let option = document.createElement("option");
        option.value = city;
        option.textContent = city;
        citySelect.appendChild(option);
    });
});
</script>



@include('includes.footer')