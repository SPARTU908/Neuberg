@section('contain')

@include('includes.header')


 <style>

 body {
    background-image: url(/assets/bg.png);
            background-size: cover;
            background-repeat: no-repeat;
}

/* Card container */
.enquiry-card {
    width: 420px;
    margin: 80px auto;
    background: rgba(255, 239, 220, 0.3);
    box-shadow: rgba(0, 0, 0, 0.12) 0px 4px 4px;
    padding: 30px;
    border-radius: 12px;
    border: 2px solid #d8b4fe;
   
}

/* Heading */
.enquiry-card h2 {
    color: rgb(76, 75, 75);
    font-size: 14px;
    font-weight: 600;
    font-family: "Maven Pro";
    margin: 13px 0px;
}

/* Inputs */
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
    outline: none;
}

/* Placeholder */
.enquiry-card input::placeholder,
.enquiry-card textarea::placeholder {
    color: #64748b;
}







/* Select styling */
.enquiry-card select {
    color: #6b21a8;
}

/* Textarea */
.enquiry-card textarea {
    resize: none;
    height: 80px;
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
    cursor: pointer;
}

.enquiry-card button:hover {
    opacity: 0.9;
}



@media (max-width: 480px) {
  .enquiry-card {
         width: 319px;
         margin: 20px auto;
    } 
}

 </style>



<div class="enquiry-card">
    <h2>Book Appointment</h2>

    <form method="POST" action="{{ route('appointment.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
        @error('name') <div class="error">{{ $message }}</div> @enderror

        <input type="number" name="age" placeholder="Age" value="{{ old('age') }}">
        @error('age') <div class="error">{{ $message }}</div> @enderror

        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
        @error('phone') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Get a Callback</button>
    </form>
</div>



@include('includes.footer')