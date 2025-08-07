<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Teaching, Learning & Resources – Data Entry</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0d6efd;
      /* Bootstrap primary blue */
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
    }

    .form-container {
      background: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 800px;
    }

    h2 {
      text-align: center;
      color: #0d6efd;
      margin-bottom: 25px;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-primary {
      width: 100%;
      font-weight: bold;
      padding: 10px;
      border-radius: 12px;
    }
  </style>
</head>

<body>
  <?php include "navbar.php"; ?>

  <div class="container">
    <div class="form-container">
      <h2>Teaching, Learning & Resources – Data Entry</h2>
      <form method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">

        <div class="mb-3">
          <label class="form-label">Institution Name</label>
          <input type="text" class="form-control" name="institution_name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">1a. % of New-Age Courses</label>
          <input type="number" step="0.01" class="form-control" name="new_age_course_pct">
        </div>

        <div class="mb-3">
          <label class="form-label">2a. Syllabus Update Cycle (Years)</label>
          <input type="number" step="0.01" class="form-control" name="syllabus_update_gap">
        </div>

        <div class="mb-3">
          <label class="form-label">3a. % Practical Exposure in Curriculum</label>
          <input type="number" step="0.01" class="form-control" name="practical_exposure_pct">
        </div>

        <div class="mb-3">
          <label class="form-label">4a. % Programs with Experiential Components</label>
          <input type="number" step="0.01" class="form-control" name="experiential_programs_pct">
        </div>

        <div class="mb-3">
          <label class="form-label">5a. % Outcome-Based Questions in Exams</label>
          <input type="number" step="0.01" class="form-control" name="outcome_based_question_pct">
        </div>

        <div class="mb-3">
          <label class="form-label">6. Student Feedback (summary)</label>
          <textarea class="form-control" name="student_feedback" rows="2"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">7. Teacher Satisfaction Survey (summary)</label>
          <textarea class="form-control" name="teacher_satisfaction" rows="2"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">8. Student Satisfaction Survey (summary)</label>
          <textarea class="form-control" name="student_satisfaction" rows="2"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">9. Faculty Total (Permanent)</label>
          <input type="number" class="form-control" name="faculty_total">
        </div>

        <div class="mb-3">
          <label class="form-label">9. Student Total</label>
          <input type="number" class="form-control" name="student_total">
        </div>

        <div class="mb-3">
          <label class="form-label">10. Capital Expenditure per Student</label>
          <input type="number" step="0.01" class="form-control" name="capital_expenditure">
        </div>

        <div class="mb-3">
          <label class="form-label">10. Operational Expenditure per Student</label>
          <input type="number" step="0.01" class="form-control" name="operational_expenditure">
        </div>

        <button type="submit" class="btn btn-primary">Submit / Update</button>

      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>