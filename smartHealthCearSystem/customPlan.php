<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/about.css" />
    <title>DocumentsmartHealthCearSystem</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .details {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<main>
    <section>
        <nav>
            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="pointCollection.php">Point Collection</a></li>
                <li><a href="tourPackages.php">Tour Packages</a></li>
                <li><a href="customPlan.php">Custom Plan</a></li>
                <li><a href="map.php">Location</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </section>
    <section>
    <form id="booking-form">
        <label for="from">From:</label>
        <input type="text" id="from" name="from" required>

        <label for="to">To:</label>
        <input type="text" id="to" name="to" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="service">Service:</label>
        <select id="service" name="service" required>
            <option value="">Select Service</option>
            <option value="Wellness Checkups">Wellness Checkups</option>
            <option value="Diagnostic Imaging">Diagnostic Imaging</option>
            <option value="Emergency Care">Emergency Care</option>
            <option value="Physical Therapy">Physical Therapy</option>
            <option value="Surgical Procedures">Surgical Procedures</option>
            <option value="Mental Health Counseling">Mental Health Counseling</option>
        </select>

        <label for="duration">Duration (in hours):</label>
        <input type="number" id="duration" name="duration" required>

        <button type="button" onclick="viewDetails()">View Details</button>
    </form>
    </section>
    <div id="selected-details" class="details"></div>
    <script>
        function viewDetails() {
            const form = document.getElementById('booking-form');
            const from = form.elements['from'].value;
            const to = form.elements['to'].value;
            const date = form.elements['date'].value;
            const service = form.elements['service'].value;
            const duration = form.elements['duration'].value;

            const detailsDiv = document.getElementById('selected-details');
            detailsDiv.innerHTML = `
                <p><strong>From:</strong> ${from}</p>
                <p><strong>To:</strong> ${to}</p>
                <p><strong>Date:</strong> ${date}</p>
                <p><strong>Service:</strong> ${service}</p>
                <p><strong>Duration:</strong> ${duration} hours</p>
            `;

        
            document.cookie = `from=${encodeURIComponent(from)};`;
            document.cookie = `to=${encodeURIComponent(to)};`;
            document.cookie = `date=${encodeURIComponent(date)};`;
            document.cookie = `service=${encodeURIComponent(service)};`;
            document.cookie = `duration=${encodeURIComponent(duration)};`;
        }
    </script>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Smart Health Care System. All rights reserved.</p>
    </footer>
</main>
<script src="js/aboutUs.js"></script>
</body>
</html>