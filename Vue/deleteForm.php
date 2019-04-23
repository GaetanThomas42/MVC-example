<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>

<body>
<h2>Delete Confirm</h2>
<div class='p-5 m-3'>
    <h2>Are you sure to delete ? <?php echo $id; ?></h2>
    <a class='btn btn-secondary m-5' href='./index.php?controller=article&action=selectAll'>Cancel</a>
    <a class='btn btn-danger m-5' href='./index.php?controller=article&action=selectAll'>Confirm</button>
</div>
</body>