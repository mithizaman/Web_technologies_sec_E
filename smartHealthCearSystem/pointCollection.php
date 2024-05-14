<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/about.css" />
    <title>DocumentsmartHealthCearSystem</title>
    <style>
        .point-body {
            height: 400px;
            margin-top: 150px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .points-h1 {
            text-align: center;
            margin-top: 50px;
        }

        /* Style for the table */
        table {
            width: 75%;
            border-collapse: collapse;
        }

        /* Style for table rows */
        tr {
            background-color: #f2f2f2;
        }

        /* Style for table data cells */
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        /* Style for table header cells */
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4caf50;
            color: white;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<main>
    <section>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="pointCollection.php">Point Collection</a></li>
                <li><a href="tourPackages.php">Tour Packages</a></li>
                <li><a href="customPlan.php">Custom Plan</a></li>
                <li><a href="map.php">Location</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </section>
    <h1 class="points-h1">User Points</h1>
    <section class="point-body">
        <table id="points-table">
            <thead>
                <tr>
                    <th>Points Earn</th>
                    <th>Points Number</th>
                    <th>Purchase</th>
                </tr>
            </thead>
            <tbody id="points-body"></tbody>
        </table>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Smart Health Care System. All rights reserved.</p>
    </footer>
</main>
<script src="js/aboutUs.js"></script>
<script>
    // Fetch data from JSON file
    fetch('points.json')
        .then(response => response.json())
        .then(data => {
            const points = data.points;
            const tableBody = document.getElementById('points-body');

            points.forEach(point => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${point.earn}</td>
                    <td>${point.number}</td>
                    <td><a href="tourPackages.php?earn=${point.earn}&number=${point.number}" class="pursue-button">Pursue Service</a></td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
</script>
</body>
</html>