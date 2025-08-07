<?php
include 'connect.php';

$id = $publications = $patents_filed = $patents_granted = $research_funding = $consultancy_revenue = $projects_completed = $scholars_enrolled = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM research_data WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    $publications = $result['publications'];
    $patents_filed = $result['patents_filed'];
    $patents_granted = $result['patents_granted'];
    $research_funding = $result['research_funding'];
    $consultancy_revenue = $result['consultancy_revenue'];
    $projects_completed = $result['projects_completed'];
    $scholars_enrolled = $result['scholars_enrolled'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Research Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d6efd;
            color: white;
        }

        .form-container {
            background-color: white;
            color: black;
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container col-md-8">
        <div class="form-container">
            <h3 class="text-center mb-4">Research Data Form</h3>
            <form method="POST" action="research_submit.php">
                <input type="hidden" name="id" value="<?= $id ?>">

                <div class="mb-3">
                    <label class="form-label">1. Publications (last year)</label>
                    <input type="number" class="form-control" name="publications" value="<?= $publications ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">2. Patents Filed</label>
                    <input type="number" class="form-control" name="patents_filed" value="<?= $patents_filed ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">3. Patents Granted</label>
                    <input type="number" class="form-control" name="patents_granted" value="<?= $patents_granted ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">4. Sponsored Research Funding (₹)</label>
                    <input type="number" class="form-control" name="research_funding" value="<?= $research_funding ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">5. Consultancy Revenue (₹)</label>
                    <input type="number" class="form-control" name="consultancy_revenue" value="<?= $consultancy_revenue ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">6. Projects Completed</label>
                    <input type="number" class="form-control" name="projects_completed" value="<?= $projects_completed ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">7. Scholars Enrolled</label>
                    <input type="number" class="form-control" name="scholars_enrolled" value="<?= $scholars_enrolled ?>" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>