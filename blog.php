<!DOCTYPE html>
<html dir="rtl" lang="he-IL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>GEO - front page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <!--    <link rel="stylesheet" href="css/owl.carousel.min.css">-->
    <!--    <link rel="stylesheet" href="css/owl.theme.default.min.css">-->
    <link rel="stylesheet" href="css/linearicons-free.min.css">
    <link rel="stylesheet" href="css/opensanshebrew.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.min.css">
    <link rel="stylesheet" href="css/blog.min.css">
    <link rel="stylesheet" href="css/front-page.css">
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!--    <link rel="stylesheet" href="css/front-page-mobile.css">-->
    <!--    <link rel ="stylesheet" href = "css/mobile.css">-->
</head>

<body>
<?php include 'header.php';
get_header("front-page"); ?>

<section class="section-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="current">בית</span>
                    <span class="sep">/</span>
                    <span itemprop="itemListElement">
                        <a href="" itemprop="item" class="home">
                            <span itemprop="name">בלוג</span>
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="blog-head">
                    <div class="blog-head_item">
                        <h1>בלוג</h1>
                    </div>

                    <div class="blog-head_form">
                        <form action="" class="search">
                            <input type="text" name="search" placeholder="חיפוש מאמרים בבלוג">
                            <button type="submit" name="btn-search">
                                <span></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>

</html>