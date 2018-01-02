<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
    <?php if($this->session->userdata('logged_in')) : ?>
      <?php foreach ($upload_data as $image => $id):?>
      <li><?php echo $image;?>: <?php echo $id;?></li>
      <?php endforeach; ?>
</ul>

      <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

    <?php endif; ?>
</body>
</html>
