<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Destinations</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.8;
  background-color: #f9fafb;
  color: #333;
}

/* Header with background image */
header {
  background: url('https://source.unsplash.com/1600x400/?travel,destination') no-repeat center center/cover;
  padding: 10px 20px;
  text-align: center;
  color: #234e5e;
}

header h2 {
  font-size: 50px;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
}

/* Navigation - horizontal bar */
nav {
  background: #ffffff;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  padding: 0;
  width: 100%;
}

nav ul {
  display: flex;
  justify-content: center;
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  margin: 0;
}

nav ul li a {
  display: block;
  padding: 15px 50px;
  text-decoration: none;
  color: #0077cc;
  font-size: 20px;
  transition: background-color 0.3s ease;
}

nav ul li a:hover {
  background-color: #e0f0ff;
  color: #005fa3;
}

/* Main content */
article {
  width: 50%;
  padding: 10px;
  background-color: #ffffff;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  border-radius: 10px;
  margin-top: 20px;
  justify-self: center;
}

/* Images inside articles */
article img {
  max-width: 100%;
  height:;
  display: block;
  margin: 0 auto 10px;
  border-radius: 8px;
}

/* Headings and paragraphs */
article h1 {
  font-size: 36px;
  margin-bottom: 20px;
  text-align: center;
}

article p {
  font-size: 18px;
  margin-bottom: 18px;
  text-align: justify;
}

/* Footer */
footer {
  background-color: #0077cc;
  color: white;
  text-align: center;
  padding: 20px;
  font-size: 16px;
  margin-top: 40px;
}

/* Responsive */
@media (max-width: 768px) {
  nav ul {
    flex-direction: column;
    align-items: center;
  }

  nav ul li a {
    padding: 12px 20px;
  }

  article {
    padding: 20px;
    margin-top: 10px;
    border-radius: 0;
  }

  article h1 {
    font-size: 28px;
  }

  article p {
    font-size: 16px;
  }
}
</style>
</head>
<body>

<header>
  <h2>Explore the World</h2>
</header>

<nav>
  <ul>
    <li><a href="home.php?page=london">London</a></li>
    <li><a href="home.php?page=paris">Paris</a></li>
    <li><a href="home.php?page=tokyo">Tokyo</a></li>
  </ul>
</nav>

<section>
  <article>
    <!-- content area -->
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'london':
                include 'london.php';
                break;
            case 'paris':
                include 'paris.php';
                break;
            case 'tokyo':
                include 'tokyo.php';
                break;
        }
    }
    ?>
  </article>
</section>

<footer>
  <p>© 2025 Travel Explorer. Discover your next adventure.</p>
</footer>

</body>
</html>
