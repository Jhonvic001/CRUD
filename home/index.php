<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
            crossorigin="anonymous">
</head>
<body class="background">

    
    
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary shadow" style="background-color: #8f8e94 !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><h2>CRUD</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="about.php">About</a>
                            </li>
                        </ul>
                        <li>
                            <a href="login.php" class="btn btn-primary">Login</a>
                        </li>
                        
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5 text-center"  style="border: 1px solid #ccc; padding: 20px; margin-top: 20px;">
        <h1>Welcome to My CRUD Application</h1>
        <p>This is a simple CRUD application built with PHP.</p>
    </div>

    <div class="container" style="border: 1px solid #ccc; padding: 20px; margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Current Features</h2>
                <ul>
                    <li>Login functionality</li>
                    <li>Admin panel and User Panel</li>
                    <li>Create new records</li>
                    <li>Read existing records</li>
                    <li>Update records</li>
                    <li>Delete records</li>
                    <li>Dark mode toggle</li>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="themeSwitch">
                            <label class="form-check-label" for="themeSwitch">Toggle Dark Mode</label>
                        </div>
                </ul>
            </div>
        </div>
    </div>








<script>
    const themeSwitch = document.getElementById('themeSwitch');

    // Set the initial state of the switch based on current theme
    themeSwitch.checked = document.documentElement.getAttribute("data-bs-theme") === "dark";

    themeSwitch.addEventListener('change', () => {
        const isDark = themeSwitch.checked;
        document.documentElement.setAttribute("data-bs-theme", isDark ? "dark" : "light");
    });
</script>



<footer class="position-absolute bottom-0 start-50 translate-middle-x">
    <p> &copy; 2025 <a href="https://github.com/Jhonvic001"> CRUD Application</a> </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
        crossorigin="anonymous">
</script>

</body>
</html>