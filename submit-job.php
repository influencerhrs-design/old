<?php
$data = json_decode(file_get_contents("jobs.json"), true);

$newJob = [
  "company" => $_POST["company"],
  "title" => $_POST["title"],
  "location" => $_POST["location"],
  "company_email" => $_POST["company_email"],
  "whatsapp" => $_POST["whatsapp"],
  "deadline" => $_POST["deadline"],
  "description" => $_POST["description"],
  "approved" => false
];

$data[] = $newJob;
file_put_contents("jobs.json", json_encode($data, JSON_PRETTY_PRINT));

// EMAIL NOTIFICATION TO OWNER
$to = "raf@gmail.com";
$subject = "New Job Posting Request";
$message = "A new job has been submitted.\n\nJob Title: ".$_POST["title"];
$headers = "From: noreply@yourwebsite.com";

mail($to, $subject, $message, $headers);

echo "Job submitted. Waiting for approval.";
?>
