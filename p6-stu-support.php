<?php
// DB Connection
include "connect.php";

$id = $_GET['id'] ?? '';
$data = [
    "institution_name" => "",
    "reported_incidents" => "",
    "grievance_resolve_rate" => "",
    "surveillance_coverage" => "",
    "committee_meetings" => ""
];

// Fetch existing record if ID is present (for update)
if ($id) {
    $stmt = $conn->prepare("SELECT * FROM student_support WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc() ?? $data;
}

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $institution_name = $_POST['institution_name'];
    $reported_incidents = $_POST['reported_incidents'];
    $grievance_resolve_rate = $_POST['grievance_resolve_rate'];
    $surveillance_coverage = $_POST['surveillance_coverage'];
    $committee_meetings = $_POST['committee_meetings'];

    if ($id) {
        // Update
        $stmt = $conn->prepare("UPDATE student_support SET institution_name=?, reported_incidents=?, grievance_resolve_rate=?, surveillance_coverage=?, committee_meetings=? WHERE id=?");
        $stmt->bind_param("siddii", $institution_name, $reported_incidents, $grievance_resolve_rate, $surveillance_coverage, $committee_meetings, $id);
    } else {
        // Insert
        $stmt = $conn->prepare("INSERT INTO student_support (institution_name, reported_incidents, grievance_resolve_rate, surveillance_coverage, committee_meetings) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("siddi", $institution_name, $reported_incidents, $grievance_resolve_rate, $surveillance_coverage, $committee_meetings);
    }

    if ($stmt->execute()) {
        echo "<div class='alert alert-success text-center'>Data saved successfully.</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $stmt->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Support – Data Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d3b66;
            color: white;
        }

        .form-container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #ffffff;
            color: #000000;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }

        .form-control {
            border-radius: 10px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
    <h2>Student Support – Data Entry</h2>
    <div class="form-container">
        <form method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">

            <div class="mb-3">
                <label>Institution Name:</label>
                <input type="text" name="institution_name" class="form-control" value="<?= htmlspecialchars($data['institution_name']) ?>" required>
            </div>

            <div class="mb-3">
                <label>1a. Number of Reported Incidents:</label>
                <input type="number" name="reported_incidents" class="form-control" value="<?= htmlspecialchars($data['reported_incidents']) ?>">
            </div>

            <div class="mb-3">
                <label>2a. % Grievances Resolved in Time:</label>
                <input type="number" step="0.01" name="grievance_resolve_rate" class="form-control" value="<?= htmlspecialchars($data['grievance_resolve_rate']) ?>">
            </div>

            <div class="mb-3">
                <label>3a. No. of Areas Under Surveillance:</label>
                <input type="number" name="surveillance_coverage" class="form-control" value="<?= htmlspecialchars($data['surveillance_coverage']) ?>">
            </div>

            <div class="mb-3">
                <label>4a. No. of Committee Meetings per Year:</label>
                <input type="number" name="committee_meetings" class="form-control" value="<?= htmlspecialchars($data['committee_meetings']) ?>">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary"><?= $id ? 'Update' : 'Submit' ?></button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>