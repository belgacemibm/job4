<?php include 'inc/header.php';?>

      <div class="jumbotron">
        <h1>Find a job</h1>
        <form method='GET' action='index.php'>
        <select name='category' class='form-control'>
          <option value = '0'>Choose category</option>
          <?php foreach ($categories as $category): ?>
           <option value = "<?php echo $category->id; ?>"><?php echo $category->name;?></option>
            <?php endforeach;?>
            </select>
            <br>
            <input type='submit' class='btn btn-lg btn-success' value = 'FIND'>
        </form>
      </div>
      <h3><?php echo $title?></h3>
    <?php foreach ($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->job_title; ?> </h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>
        <div class='col-md-2'>
            <button type="button" class="btn btn-dark">View</button>
      </div>
    </div>
    <?php endforeach;?>

    <?php include 'inc/footer.php';?>
