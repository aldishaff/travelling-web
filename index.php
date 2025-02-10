<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Explore</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="content">
                <h1>Welcome to Travel Explore</h1>
                <p>Your gateway to unforgettable adventures.</p>
                <button onclick="exploreMore()">Explore Now</button>
            </div>
        </section>

        <!-- Destinations Section -->
        <section class="destinations" id="destinations">
            <h2>Popular Destinations</h2>
            <div class="destination-list" id="destination-list">
                <!-- Data destinations akan ditampilkan di sini -->
            </div>
        </section>

        <!-- Featured Tours Section -->
        <section class="featured-tours">
            <h2>Featured Tours</h2>
            <div class="tour-list">
                <div class="tour">
                    <img src="images/safari.jpg" alt="Safari">
                    <div class="info">
                        <h3>Safari Adventure</h3>
                        <p>Witness wildlife like never before in African safaris.</p>
                        <button>Book Now</button>
                    </div>
                </div>
                <div class="tour">
                    <img src="images/cruise.webp" alt="Cruise">
                    <div class="info">
                        <h3>Luxury Cruise</h3>
                        <p>Sail through breathtaking views on our luxury cruises.</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="about">
            <h2>Why Choose Us?</h2>
            <p>
                At Travel Explore, we believe every journey should be memorable. 
                From stunning landscapes to cultural hotspots, we help you find it all.
            </p>
            <div class="features">
                <div class="feature">
                    <h3>Customizable Trips</h3>
                    <p>Plan your journey your way with personalized itineraries.</p>
                </div>
                <div class="feature">
                    <h3>Best Prices</h3>
                    <p>Explore amazing destinations without breaking the bank.</p>
                </div>
                <div class="feature">
                    <h3>24/7 Support</h3>
                    <p>We're here for you, every step of the way.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="script.js"></script>
    <script>
        // Mengambil data dari API
        fetch('login/fetch_destinations.php')
    .then(response => response.json())
    .then(data => {
        const destinationList = document.getElementById('destination-list');
        destinationList.innerHTML = ''; // Kosongkan daftar sebelum menambah data

        // Menampilkan data destinasi
        data.forEach(destination => {
            const destinationDiv = document.createElement('div');
            destinationDiv.classList.add('destination');
            destinationDiv.innerHTML = `
                <img src="${destination.image}" alt="${destination.name}">
                <h3>${destination.name}</h3>
                <p>${destination.description}</p>
            `;
            destinationList.appendChild(destinationDiv);
        });
    })
    .catch(error => console.error('Error fetching destinations:', error));
    </script>
</body>
</html>