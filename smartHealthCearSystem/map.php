<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <title>smartHealthCearSystem</title>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <style>
        
        #map {
            height: 400px;
            width: 100%;
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
        <h1>Location Details</h1>


<div id="map"></div>


<script>
    
    function initMap() {
        
        var mapCenter = { lat: 40.7128, lng: -74.0060 };

        
        var map = new google.maps.Map(document.getElementById('map'), {
            center: mapCenter,
            zoom: 12 
        });

        
        var marker = new google.maps.Marker({
            position: mapCenter,
            map: map,
            title: 'New York'
        });
    }
</script>


<script>
    
    function loadMap() {
        initMap();
    }

    
    window.onload = loadMap;
</script>
        </section>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Smart Health Care System. All rights reserved.</p>
        </footer>
    </main>
    <script src="js/aboutUs.js"></script>
</body>
</html>