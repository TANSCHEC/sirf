<?php
include 'connect.php';

$id = $_POST['id'];
$publications = $_POST['publications'];
$patents_filed = $_POST['patents_filed'];
$patents_granted = $_POST['patents_granted'];
$research_funding = $_POST['research_funding'];
$consultancy_revenue = $_POST['consultancy_revenue'];
$projects_completed = $_POST['projects_completed'];
$scholars_enrolled = $_POST['scholars_enrolled'];

if ($id) {
    // Update
    $sql = "UPDATE research_data SET
        publications=?, patents_filed=?, patents_granted=?, research_funding=?, consultancy_revenue=?, projects_completed=?, scholars_enrolled=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiiiiii", $publications, $patents_filed, $patents_granted, $research_funding, $consultancy_revenue, $projects_completed, $scholars_enrolled, $id);
} else {
    // Insert
    $sql = "INSERT INTO research_data (publications, patents_filed, patents_granted, research_funding, consultancy_revenue, projects_completed, scholars_enrolled) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiiiii", $publications, $patents_filed, $patents_granted, $research_funding, $consultancy_revenue, $projects_completed, $scholars_enrolled);
}

if ($stmt->execute()) {
    echo "<script>alert('Data saved successfully'); window.location.href='research_form.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}
