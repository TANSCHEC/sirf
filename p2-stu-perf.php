<?php
include 'connect.php';

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $institution_name = $_POST['institution_name'];
  $students_to_premier_pct = $_POST['students_to_premier_pct'];
  $graduates_employed_pct = $_POST['graduates_employed_pct'];
  $average_ctc = $_POST['average_ctc'];
  $tansche_score_avg = $_POST['tansche_score_avg'];
  $startup_initiated_pct = $_POST['startup_initiated_pct'];
  $startup_survival_pct = $_POST['startup_survival_pct'];
  $alumni_leaders_pct = $_POST['alumni_leaders_pct'];
  $student_competition_participation_pct = $_POST['student_competition_participation_pct'];
  $student_competition_winrate_pct = $_POST['student_competition_winrate_pct'];

  if ($id) {
    // Update record
    $sql = "UPDATE student_outcome_data SET
            institution_name=?, students_to_premier_pct=?, graduates_employed_pct=?, average_ctc=?,
            tansche_score_avg=?, startup_initiated_pct=?, startup_survival_pct=?,
            alumni_leaders_pct=?, student_competition_participation_pct=?, student_competition_winrate_pct=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sdddddddddi",
      $institution_name,
      $students_to_premier_pct,
      $graduates_employed_pct,
      $average_ctc,
      $tansche_score_avg,
      $startup_initiated_pct,
      $startup_survival_pct,
      $alumni_leaders_pct,
      $student_competition_participation_pct,
      $student_competition_winrate_pct,
      $id
    );
  } else {
    // Insert new record
    $sql = "INSERT INTO student_outcome_data (
            institution_name, students_to_premier_pct, graduates_employed_pct, average_ctc,
            tansche_score_avg, startup_initiated_pct, startup_survival_pct,
            alumni_leaders_pct, student_competition_participation_pct, student_competition_winrate_pct
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sddddddddd",
      $institution_name,
      $students_to_premier_pct,
      $graduates_employed_pct,
      $average_ctc,
      $tansche_score_avg,
      $startup_initiated_pct,
      $startup_survival_pct,
      $alumni_leaders_pct,
      $student_competition_participation_pct,
      $student_competition_winrate_pct
    );
  }

  if ($stmt->execute()) {
    echo "<p style='color:green;'>Data saved successfully.</p>";
  } else {
    echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Student Outcome Data Entry</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="bg-primary text-white">
  <?php include "navbar.php"; ?>
  <div class="container mt-5 bg-white text-dark rounded-4 p-5 shadow-lg" style="max-width: 800px;">
    <h2 class="text-center text-primary mb-4">Student Outcome – Data Entry</h2>
    <form method="post">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">

      <div class="mb-3">
        <label class="form-label">Institution Name</label>
        <input type="text" class="form-control" name="institution_name" required>
      </div>

      <div class="mb-3">
        <label class="form-label">1a. % of Students Going to Premier Institutes</label>
        <input type="number" step="0.01" class="form-control" name="students_to_premier_pct">
      </div>

      <div class="mb-3">
        <label class="form-label">2a. % of Graduates Employed Within 6 Months</label>
        <input type="number" step="0.01" class="form-control" name="graduates_employed_pct">
      </div>

      <div class="mb-3">
        <label class="form-label">2b. Average CTC of Placed Students (in LPA)</label>
        <input type="number" step="0.01" class="form-control" name="average_ctc">
      </div>

      <div class="mb-3">
        <label class="form-label">3a. Average Score in Tansche Final Year Assessment</label>
        <input type="number" step="0.01" class="form-control" name="tansche_score_avg">
      </div>

      <div class="mb-3">
        <label class="form-label">4a. % of Graduates Started Business in 3 Months</label>
        <input type="number" step="0.01" class="form-control" name="startup_initiated_pct">
      </div>

      <div class="mb-3">
        <label class="form-label">4b. % of Startups Sustained for 2 Years</label>
        <input type="number" step="0.01" class="form-control" name="startup_survival_pct">
      </div>

      <div class="mb-3">
        <label class="form-label">5a. % of Alumni in Leadership Roles in 5 Years</label>
        <input type="number" step="0.01" class="form-control" name="alumni_leaders_pct">
      </div>

      <div class="mb-3">
        <label class="form-label">6a. % of Students Participated in Competitions</label>
        <input type="number" step="0.01" class="form-control" name="student_competition_participation_pct">
      </div>

      <div class="mb-3">
        <label class="form-label">6b. % of Competitions Won</label>
        <input type="number" step="0.01" class="form-control" name="student_competition_winrate_pct">
      </div>

      <button type="submit" class="btn btn-primary w-100">Submit / Update</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>