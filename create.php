<?php include_once 'config/init.php';?>

<?php
$job = new Job;
if (isset($__POST['submit'])) {
    //create Data Array
    $data = array();
    $data['job_title'] = $__POST['job_title'];
    $data['company'] = $__POST['company'];
    $data['category_id'] = $__POST['category_id'];
    $data['description'] = $__POST['description'];
    $data['location'] = $__POST['location'];
    $data['salary'] = $__POST['salary'];
    $data['contact_user'] = $__POST['contact_user'];
    $data['contact_email'] = $__POST['contact_email'];
    if($job-create($data)){
        readdir('index.php', 'Your job has been listed','success');
    }else{
        readdir('index.php', 'Something went wrong','error');
    }
}
$template = new Template('template/job-create.php');
$template->categories = $job->getCategories();
echo $template;
?>
