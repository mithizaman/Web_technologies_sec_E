<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["service"])) {

    $_SESSION["selected_service"] = $_POST["service"];
}


$serviceData = json_decode(file_get_contents('service.json'), true);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <title>smartHealthCearSystem</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            margin-top: 20px;
        }

        .card {
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .card .price {
            margin: 10px 0;
            font-size: 18px;
            color: #4CAF50;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
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
            <div class="container" id="service-container"></div>
        </section>
        
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Smart Health Care System. All rights reserved.</p>
        </footer>
    </main>
    <script>
        
        fetch('service.json')
            .then(response => response.json())
            .then(data => {
                const serviceContainer = document.getElementById('service-container');

                
                data.forEach(service => {
                    const card = document.createElement('div');
                    card.classList.add('card');

                    
                    card.innerHTML = `
                        <h3>${service.name}</h3>
                        <div class="price">$${service.price}</div>
                        <a href="#" class="btn">Select Package</a>
                    `;

                    
                    const selectButton = card.querySelector('.btn');
                    selectButton.addEventListener('click', () => {
                        alert('Congratulations! You selected ' + service.name);
                    });

                    
                    serviceContainer.appendChild(card);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>
</html>
