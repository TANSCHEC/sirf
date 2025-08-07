<?php
// DB Connection
include 'connect.php';

$id = $_GET['id'] ?? '';
$data = [
    "institution_name" => "",
    "basic_amenities" => "",
    "cultural_sports_facilities" => "",
    "lab_facilities" => "",
    "library_facilities" => "",
    "infra_satisfaction_score" => "",
    "wifi_update_info" => "",
    "student_computer_ratio" => "",
    "ict_enabled_facilities" => "",
    "online_services_percent" => ""
];

// Fetch existing record if ID is present
if ($id) {
    $stmt = $conn->prepare("SELECT * FROM infra_facilities WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc() ?? $data;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $institution_name = $_POST['institution_name'];
    $basic_amenities = $_POST['basic_amenities'];
    $cultural_sports_facilities = $_POST['cultural_sports_facilities'];
    $lab_facilities = $_POST['lab_facilities'];
    $library_facilities = $_POST['library_facilities'];
    $infra_satisfaction_score = $_POST['infra_satisfaction_score'];
    $wifi_update_info = $_POST['wifi_update_info'];
    $student_computer_ratio = $_POST['student_computer_ratio'];
    $ict_enabled_facilities = $_POST['ict_enabled_facilities'];
    $online_services_percent = $_POST['online_services_percent'];

    if ($id) {
        // Update
        $stmt = $conn->prepare("UPDATE infra_facilities SET institution_name=?, basic_amenities=?, cultural_sports_facilities=?, lab_facilities=?, library_facilities=?, infra_satisfaction_score=?, wifi_update_info=?, student_computer_ratio=?, ict_enabled_facilities=?, online_services_percent=? WHERE id=?");
        $stmt->bind_param("ssssssdssdi", $institution_name, $basic_amenities, $cultural_sports_facilities, $lab_facilities, $library_facilities, $infra_satisfaction_score, $wifi_update_info, $student_computer_ratio, $ict_enabled_facilities, $online_services_percent, $id);
    } else {
        // Insert
        $stmt = $conn->prepare("INSERT INTO infra_facilities (institution_name, basic_amenities, cultural_sports_facilities, lab_facilities, library_facilities, infra_satisfaction_score, wifi_update_info, student_computer_ratio, ict_enabled_facilities, online_services_percent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssdssd", $institution_name, $basic_amenities, $cultural_sports_facilities, $lab_facilities, $library_facilities, $infra_satisfaction_score, $wifi_update_info, $student_computer_ratio, $ict_enabled_facilities, $online_services_percent);
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
    <title>Infrastructure & Facilities – Data Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d3b66;
            color: white;
        }

        .form-container {
            max-width: 800px;
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
    <h2>Infrastructure & Facilities – Data Entry</h2>
    <div class="form-container">
        <form method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">

            <div class="mb-3">
                <label>Institution Name:</label>
                <input type="text" name="institution_name" class="form-control" value="<?= htmlspecialchars($data['institution_name']) ?>" required>
            </div>

            <div class="mb-3">
                <label>1a. Basic Amenities:</label>
                <textarea name="basic_amenities" class="form-control"><?= htmlspecialchars($data['basic_amenities']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>1b. Cultural/Sports/Auditorium Facilities:</label>
                <textarea name="cultural_sports_facilities" class="form-control"><?= htmlspecialchars($data['cultural_sports_facilities']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>1c. Laboratory Facilities:</label>
                <textarea name="lab_facilities" class="form-control"><?= htmlspecialchars($data['lab_facilities']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>1d. Library Facilities (e-resources, journals):</label>
                <textarea name="library_facilities" class="form-control"><?= htmlspecialchars($data['library_facilities']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>1d. Student Satisfaction Score (Infrastructure):</label>
                <input type="number" step="0.01" name="infra_satisfaction_score" class="form-control" value="<?= htmlspecialchars($data['infra_satisfaction_score']) ?>">
            </div>

            <div class="mb-3">
                <label>2a. Wi-Fi Details (date/nature of update, bandwidth):</label>
                <textarea name="wifi_update_info" class="form-control"><?= htmlspecialchars($data['wifi_update_info']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>2b. Student-Computer Ratio:</label>
                <input type="text" name="student_computer_ratio" class="form-control" value="<?= htmlspecialchars($data['student_computer_ratio']) ?>">
            </div>

            <div class="mb-3">
                <label>2c. ICT-enabled Facilities (Smart Class, LMS):</label>
                <textarea name="ict_enabled_facilities" class="form-control"><?= htmlspecialchars($data['ict_enabled_facilities']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>3. % of Student Services Available Online:</label>
                <input type="number" step="0.01" name="online_services_percent" class="form-control" value="<?= htmlspecialchars($data['online_services_percent']) ?>">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary"><?= $id ? 'Update' : 'Submit' ?></button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>