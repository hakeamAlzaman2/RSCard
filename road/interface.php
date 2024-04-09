<!DOCTYPE html>
<html>
<head>
  <title> بطاقة تهنئة من تصميمك </title>
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name="description" content="أمن الطرق">
  <meta http-equiv="Pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/uikit-rtl.css" />
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <div id="HomePage">
      <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">  
    <div>
      <center>
        <a href="index.php"><img src="img/logo.png" style="width:200px;" /></a>
        <h2 class="aid-text">
      اكتب اسمك واضغط على عرض أو تحميل
</h2>
        <div class="clr"></div><br>
        <form action="index.php" method="post" enctype="multipart/form-data" style="font-family: 'Amiri', serif !important;">
          <fieldset class="uk-fieldset">

          <!-- <div class="uk-margin">
            <input class=" btn-2" type="file" name="fileToUpload" id="uploaded-image" required>
            <label class="inpu" for="uploaded-image">إختر صورة من جهازك</label>
            </div> -->

            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name1" placeholder="الاسم واللقب" >
            </div>

            <div class="uk-margin">
              <button type="submit" name="submit" class="uk-button button" style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; "> عرض <i class="fa fa-eye">  </i></button>

              <button type="submit" name="submit1" class="uk-button button" style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; "> تحميل <i class="fa fa-file" >  </i></button>
            </div>

            <br />

            <!-- <div class="uk-margin">
              <a href=" https://twitter.com/Sultan_Magfory">
                برمجة وتصميم البطاقة
              </a> -->
              <div class="uk-margin">
                عدد البطاقات المطبوعة
                <?php echo file_get_contents("use.txt");?>
              </div>
          </fieldset>
        </form>
        <div class="clr"></div><br>
      </center>
    </div>
  </div>
</body>
</html>