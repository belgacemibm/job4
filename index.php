<?php include_once 'config/init.php'; ?>

<?php 
$job = new Job;
$template = new Template('template/frontpage.php'); 
$template->jobs = $job->getAllJobs();
echo $template;
?>
