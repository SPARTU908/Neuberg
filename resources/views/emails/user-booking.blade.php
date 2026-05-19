<h2>Booking Confirmation</h2>

<p>Dear {{ $booking->name }},</p>

<p>
    Your test booking request has been received successfully.
</p>

<p>
    <strong>Selected Tests:</strong>
    {{ $booking->test_name }}
</p>

<p>
    Our team will contact you shortly.
</p>

<p>Thank You</p>

<p>
    Neuberg Diagnostics
</p>