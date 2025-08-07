<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TN-SIRF Compact Navbar</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            font-size: 0.85rem;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }

        .navbar-brand {
            font-size: 1rem;
            font-weight: 600;
        }

        .navbar-text {
            font-size: 0.85rem;
            color: aqua;
        }

        .nav-link {
            padding-top: 0.4rem;
            padding-bottom: 0.4rem;
        }
    </style>
</head>

<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TN-SIRF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar" aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Form Links -->
                    <li class="nav-item"><a class="nav-link" href="infra_form.php">Infrastructure</a></li>
                    <li class="nav-item"><a class="nav-link" href="research_form.php">Research</a></li>
                    <li class="nav-item"><a class="nav-link" href="teaching_form.php">Teaching</a></li>
                    <li class="nav-item"><a class="nav-link" href="governance_form.php">Governance</a></li>
                    <li class="nav-item"><a class="nav-link" href="outreach_form.php">Outreach</a></li>
                    <li class="nav-item"><a class="nav-link" href="student_support_form.php">Student Support</a></li>
                </ul>
                <span class="navbar-text text-white">
                    Tamil Nadu State Institutional Ranking Framework
                </span>
            </div>
        </div>
    </nav>

    <!-- Padding to offset fixed navbar -->
    <div style="padding-top: 60px;"></div>

    <!-- Example content -->
    <div class="container">
        <h5 class="mt-3">Welcome to TN-SIRF Dashboard</h5>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>