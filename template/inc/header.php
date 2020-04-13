<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    <link rel='stylesheet' href='https://bootswatch.com/4/flatly/bootstrap.min.css'>
    <link rel='stylesheet'href='css/sytles.css'>
</head>
<body>
    <div class="container">
      <div class="header clearfix">
        <nav>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create.php">Create Listing</a>
            </li>
        </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
    <?php displayMessage();?>