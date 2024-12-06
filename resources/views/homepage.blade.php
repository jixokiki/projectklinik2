<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMR LAB_MIK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #004aad;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        header nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }
        .hero {
            text-align: center;
            padding: 50px;
            background-color: #e8f0ff;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            align-items: flex-start;
        }
        .hero h1 {
            margin: 0;
            font-size: 36px;
            color: #004aad;
        }
        .hero p {
            margin: 10px 0;
            color: #333;
            min-height: 100px;
            max-width: 800px;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            align-items: flex-start;
        }
        .facilities {
            text-align: center;
            padding: 50px;
        }
        .facilities h2 {
            color: #004aad;
        }
        .facility-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .facility-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            width: 150px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .facility-card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        .footer {
            background-color: #004aad;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }

    </style>
</head>
<body>
<header>
    <div class="logo">EMR LAB_MIK</div>
    <nav>
        <a href="/">Home</a>
        <a href="https://pendaftaran.esaunggul.ac.id/">About</a>
        <a href="https://pendaftaran.esaunggul.ac.id/kontak-kami-kampus-bekasi/">Contact</a>
        <a href="login">Login</a>
    </nav>
</header>

<div class="hero">
    <h1>EMR LAB_MIK</h1>
    <p>The Electronic Medical Record is an information system provided by Information health Management at Esa Unggul University. EMR LAB_MIK offers services such as Patient Registration, Patient Examination, Counseling specifically for Esa Unggul University students, Laboratory, Radiology, Prescription, Payment, and Reporting.</p>
</div>

<div class="facilities">
    <h2>The Facility</h2>
    <div class="facility-cards">
        <div class="facility-card">
            <img src="https://via.placeholder.com/150" alt="Registration">
            <p>Registration</p>
        </div>
        <div class="facility-card">
            <img src="https://via.placeholder.com/150" alt="Initial Assessment">
            <p>Initial Assessment</p>
        </div>
        <div class="facility-card">
            <img src="https://via.placeholder.com/150" alt="Check-Up">
            <p>Check-Up</p>
        </div>
        <div class="facility-card">
            <img src="https://via.placeholder.com/150" alt="Laboratory">
            <p>Laboratory</p>
        </div>
        <div class="facility-card">
            <img src="https://via.placeholder.com/150" alt="Radiology">
            <p>Radiology</p>
        </div>
        <div class="facility-card">
            <img src="https://via.placeholder.com/150" alt="Pharmacy">
            <p>Pharmacy</p>
        </div>
    </div>
</div>

<div class="footer">
    <p>Contact Us:</p>
    <p>Email: <a href="mailto:labrmik@esaunggul.ac.id">labrmik@esaunggul.ac.id</a></p>
    <p>Phone: +62-811-779-714</p>
</div>
</body>
</html>

