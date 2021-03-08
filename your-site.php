<?php
include "includes/header.php";
?>

<div class="modal fade" id="codeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Website Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <code>
          <textarea readonly class="form-control">
            <!DOCTYPE html>
            <html lang="en" dir="ltr">
              <head>
                <meta charset="utf-8">
                <title><?php echo $_GET["title"]; ?></title>
                <link rel="shortcut icon" href="<?php echo $_GET["logo"]; ?>">

                <link rel="stylesheet" href="https://make-a-site.roboticobsession.xyz/assets/user-site/style.css">
                <script src="https://make-a-site.roboticobsession.xyz/assets/user-site/script.js"></script>
              </head>
              <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="/"><?php if(isset($_GET["logo"])) { ?><img src="<?php echo $_GET["logo"]; ?>" alt="<?php echo $_GET["title"]; ?>'s logo" width="30"><?php } ?> <?php echo $_GET["title"]; ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo $_GET["nav-link"]; ?>"><?php echo $_GET["nav-name"]; ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <br>
                <div class="container">
                  <?php if(isset($_GET["section1-name"])) { ?>
                  <div class="section1">
                    <h2><?php echo $_GET["section1-name"]; ?></h2>
                    <?php if(isset($_GET["section1-name"])) { ?>
                    <p><?php echo $_GET["section1-text"]; ?></p>
                    <?php if(isset($_GET["section1-image"])) { ?>
                      <img src="<?php echo $_GET["section1-image"]; ?>">
                    <?php } ?>
                    <?php } ?>
                  </div>
                  <?php } ?>
                  <br>
                  <?php if(isset($_GET["section2-name"])) { ?>
                  <div class="section2">
                    <h2><?php echo $_GET["section2-name"]; ?></h2>
                    <?php if(isset($_GET["section2-text"])) { ?>
                    <p><?php echo $_GET["section2-text"]; ?></p>
                    <?php if(isset($_GET["section2-image"])) { ?>
                      <img src="<?php echo $_GET["section2-image"]; ?>">
                    <?php } ?>
                    <?php } ?>
                  </div>
                  <?php } ?>
                </div>
              </body>
            </html>
          </textarea>
        </code>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container">
  <?php if(!$_GET["title"]){ ?>
    <div class="alert alert-danger" role="alert">
      Error: <code>title</code> parameter is not found
    </div>
    <?php
      return;
      } ?>

  <?php if(!$_GET["section1-name"]){ ?>
    <div class="alert alert-danger" role="alert">
      Error: <code>section1-name</code> parameter is not found
    </div>
    <?php
      return;
      } ?>

  <?php if(!$_GET["section1-text"]){ ?>
    <div class="alert alert-danger" role="alert">
      Error: <code>section1-text</code> parameter is not found
    </div>
    <?php
      return;
      } ?>

  <br>

  <h1>Your <span class="txt-rotate" data-period="1000" data-rotate='[ "website", "blog" ]'></span> is ready</h1>
  <p>Thanks for using our website builder</p>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#codeModal">
    Get Code
  </button>
  <br>
  <br>
</div>

<?php
include "includes/footer.php";
?>
