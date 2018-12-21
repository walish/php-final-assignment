<?php
use App\Model\NewsModel;
use App\Migration\Migration;

$newsModel = new NewsModel();
$news = null;
$result = $newsModel->getNewsByName($_POST['search']);

print_r( $_POST['search']);

if (!isset($result['err'])) {
    $news = $result['data'];
} else {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Final</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    .news {
      height: 450px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="table-wrapper">


      <?php if ($news == null) {?>
          
      <?php } else {?>
            

            <div class="row" data-id="<?php echo $news_['id'] ?>">
            
              <?php foreach ($news as $key => $news_) {?>
                  <div class="col-md-3">
                    <div class="card mb-4 box-shadow news">
                      <img class="card-img-top"
                        alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                        src="<?php echo $news_['img_link'] ?>" data-holder-rendered="true">
                      <div class="card-body">
                        <h4>
                        <a href="<?php echo $news_['source_link'] ?>"><?php echo $news_['title'] ?></a>

                        </h4>
                        <p class="card-text"><?php echo $news_['description'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><?php echo $news_['update_time'] ?></small>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php } ?>
            </div>
          
      <?php } ?>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>