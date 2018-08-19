<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>パスワード・ランダム文字列ジェネレーター</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
  <!--
  .container{
    margin: 30px 40px;
  }
  -->
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">パスワード・ランダム文字列ジェネレーター</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  </nav>
  <div class="container">
  <form action="/" method="post">
  <div class="form-group">
  <label for="ServiceSelect">サービス選択</label>
  <select class="form-control" id="ServiceSelect">
  <option></option>
  <option value="3">Twitterパスワード</option>
  <option value="1">エックスサーバーメールパスワード</option>
  <option value="2">エックスサーバーMySQLユーザーパスワード</option>
  </select>
  <small id="ServiceSelectHelp" class="form-text text-muted">サービスに応じて自動的に項目をセットします。</small>
  </div>
  <div class="form-group">
  <label for="Mozisuu">文字数</label>
  <input type="number" class="form-control" name="Mozisuu" id="Mozisuu">
  <small id="MozisuuHelp" class="form-text text-muted">何文字で生成するか入力してください。</small>
  </div>
  <div class="form-group">
  <label for="Seisei">生成数</label>
  <input type="number" class="form-control" name="Seisei" id="Seisei">
  <small id="SeiseiHelp" class="form-text text-muted">何個文字列を生成するか入力してください。</small>
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="all[]" id="all0" value="0">
  <label class="form-check-label" for="all0">全てにチェックする</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="all[]" id="all1" value="1" checked="checked">
  <label class="form-check-label" for="all1">英数字全て</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="all[]" id="all2" value="2">
  <label class="form-check-label" for="all2">記号全て</label>
  </div>
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="mozikata[]" id="mozi0" value="0" checked="checked">
  <label class="form-check-label" for="mozi0">0~9</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="mozikata[]" id="mozi1" value="1" checked="checked">
  <label class="form-check-label" for="mozi1">a~z</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="mozikata[]" id="mozi2" value="2" checked="checked">
  <label class="form-check-label" for="mozi2">A~Z</label>
  </div>
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox0" value="0">
  <label class="form-check-label" for="inlineCheckbox0">!</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">#</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">$</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox3" value="3">
  <label class="form-check-label" for="inlineCheckbox3">%</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox4" value="4">
  <label class="form-check-label" for="inlineCheckbox4">=</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox5" value="5">
  <label class="form-check-label" for="inlineCheckbox5">~</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox6" value="6">
  <label class="form-check-label" for="inlineCheckbox6">^</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox7" value="7">
  <label class="form-check-label" for="inlineCheckbox7">|</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox8" value="8">
  <label class="form-check-label" for="inlineCheckbox8">:</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox9" value="9">
  <label class="form-check-label" for="inlineCheckbox9">_</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox10" value="10">
  <label class="form-check-label" for="inlineCheckbox10">[</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox11" value="11">
  <label class="form-check-label" for="inlineCheckbox11">]</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox12" value="12">
  <label class="form-check-label" for="inlineCheckbox12">{</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox13" value="13">
    <label class="form-check-label" for="inlineCheckbox13">}</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox14" value="14">
    <label class="form-check-label" for="inlineCheckbox14">.</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox15" value="15">
    <label class="form-check-label" for="inlineCheckbox15">+</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox16" value="16">
    <label class="form-check-label" for="inlineCheckbox16">-</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox17" value="17">
    <label class="form-check-label" for="inlineCheckbox17">*</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="option[]" id="inlineCheckbox18" value="18">
    <label class="form-check-label" for="inlineCheckbox18">/</label>
    </div>
    </div>

    <input class="btn btn-outline-primary" type="submit" value="生成">
    <input class="btn btn-outline-secondary" type="reset" value="リセット">
    </form>
    <?php
    $mozisuu = $_POST['Mozisuu'];
    $seisei = $_POST['Seisei'];
    $option = $_POST['option'];
    $mozikata = $_POST['mozikata'];
    for ($i=0; $i <$seisei ; $i++) {
      echo "<p>".RandomMozi($mozisuu,$option,$mozikata)."</p>";
    }

    ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js">

    </script>

    </body>
    </html>

    <?php
    function RandomMozi($length,$kigouno,$mozikata) {
      $num = range('0', '9');
      $shou = range('a', 'z');
      $dai = range('A', 'Z');
      $mozi = [];
      foreach ($mozikata as $value) {
        if($value==0) $mozi = array_merge($mozi, $num);
        if($value==1) $mozi = array_merge($mozi, $shou);
        if($value==2) $mozi = array_merge($mozi, $dai);
      }

      $kigou = ['!','#','$','%','=','~','^','|',':','_','[',']','{','}','.','+','-','*','/'];
      if($kigouno!=null){
        foreach ($kigouno as $value) {
          $mozi[count($mozi)] = $kigou[$value];
        }
      }
      shuffle($mozi);
      $Rdata = null;
      for ($i = 0; $i < $length; $i++) {
        $Rdata .= $mozi[random_int(0,count($mozi)-1)];
      }
      return $Rdata;
    }
    ?>
