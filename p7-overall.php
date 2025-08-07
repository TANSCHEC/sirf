<?php
// --- DATABASE CONNECTION ---
$host = "localhost";
$username = "sirf";
$password = "sirf";
$database = "sirf_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- HANDLE FORM SUBMISSION ---
$success = "";
$error = "";
$editData = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? null;
    $cgpa = $_POST['cgpa'];
    $nba = $_POST['nba_percentage'];
    $nirf = $_POST['nirf_rank'];
    $global_participation = $_POST['global_participation'];
    $global_rank = $_POST['global_rank'];

    if ($id) {
        // Update
        $sql = "UPDATE institution_ranking SET cgpa=?, nba_percentage=?, nirf_rank=?, global_participation=?, global_rank=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ddissi", $cgpa, $nba, $nirf, $global_participation, $global_rank, $id);
        if ($stmt->execute()) {
            $success = "Data updated successfully!";
        } else {
            $error = "Update failed: " . $stmt->error;
        }
    } else {
        // Insert
        $sql = "INSERT INTO institution_ranking (cgpa, nba_percentage, nirf_rank, global_participation, global_rank)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ddiss", $cgpa, $nba, $nirf, $global_participation, $global_rank);
        if ($stmt->execute()) {
            $success = "Data added successfully!";
        } else {
            $error = "Insert failed: " . $stmt->error;
        }
    }
}

// --- FETCH FOR EDIT ---
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM institution_ranking WHERE id = $id");
    if ($result && $result->num_rows > 0) {
        $editData = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Institution Ranking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0d47a1, #1976d2);
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .form-container {
            background: white;
            color: black;
            border-radius: 20px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .form-label {
            font-weight: 600;
            color: #0d47a1;
        }

        .form-control {
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .btn-blue {
            background-color: #0d47a1;
            color: white;
            font-weight: 500;
            border-radius: 10px;
            padding: 10px 30px;
            border: none;
        }

        .btn-blue:hover {
            background-color: #08306b;
        }

        .alert {
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="form-container col-lg-8 mx-auto">
            <h3 class="text-center mb-4"><?= isset($editData) ? "Update" : "Add" ?> Institution Ranking Data</h3>

            <?php if ($success): ?>
                <div class="alert alert-success"><?= $success ?></div>
            <?php elseif ($error): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="post" action="">
                <input type="hidden" name="id" value="<?= $editData['id'] ?? '' ?>">

                <div class="mb-3">
                    <label class="form-label">1a. CGPA of Institution</label>
                    <input type="number" step="0.01" name="cgpa" class="form-control" required
                        value="<?= $editData['cgpa'] ?? '' ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">2a. % of NBA Accredited Courses</label>
                    <input type="number" step="0.01" name="nba_percentage" class="form-control" required
                        value="<?= $editData['nba_percentage'] ?? '' ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">3a. NIRF Rank</label>
                    <input type="number" name="nirf_rank" class="form-control"
                        value="<?= $editData['nirf_rank'] ?? '' ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">4a. Participation in QS/THE/Other Global Rankings</label>
                    <input type="text" name="global_participation" class="form-control"
                        value="<?= $editData['global_participation'] ?? '' ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">4b. Rank in QS/THE/Other Global Rankings</label>
                    <input type="text" name="global_rank" class="form-control"
                        value="<?= $editData['global_rank'] ?? '' ?>">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-blue"><?= isset($editData) ? "Update" : "Submit" ?></button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>