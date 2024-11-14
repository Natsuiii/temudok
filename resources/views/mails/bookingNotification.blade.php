<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        .booking-details {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 6px;
        }
        .booking-details h2 {
            font-size: 16px;
            color: #4CAF50;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Booking Notification</h1>
        <p>Halo {{ $name }},</p>
        
        <p>Terima kasih karena sudah melakukan booking melalui platform kami. Berikut adalah detail booking Anda:</p>

        <div class="booking-details">
            <h2>Detail Booking</h2>
            <p><strong>Nama Dokter:</strong> {{ $doctor }}</p>
            <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($date)->format('d M Y') }}</p>
            <p><strong>Jam:</strong> {{ \Carbon\Carbon::parse($time)->format('H:i') }}</p>
        </div>

        <p>Kami berharap Anda mendapatkan layanan terbaik. Jika ada perubahan atau pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</p>
        
        <p>Salam hangat,<br>Tim {{ config('app.name') }}</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Semua Hak Dilindungi.</p>
        </div>
    </div>
</body>
</html>
