<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
      $ages = array();
      $people = array();
      $allergies = array();
      $lifestyle = array();

      $pets = array();
      $welcome = array();
      $living_expenses = array();
      $medical_bills = array();
      $hard = array();

      $otherExizoPets = array();
      $otherPets = array();
      $pets_good= array();
      $pets_hard= array();
      $pets_info= array();

      // 飼い主に関する回答
      $selectedAges = $_POST['age'];
      $selectedPeople = $_POST['people'];
      $selectedAllergy = $_POST['allergy'];
      $selectedLifestyle= $_POST['lifestyle'];

      // ペットに関する回答(チェックボックス)
      $selectedPets= $_POST['pets'];
      $selectedWelcome= $_POST['welcome'];
      $selectedLiving_expenses= $_POST['living_expenses'];
      $selectedMedical_bills= $_POST['medical_bills'];
      $selectedHard= $_POST['hard'];

      // ペットに関する回答(テキストエリア)
      $pets_good[]= $_POST['pets_good'];
      $pets_info[]= $_POST['pets_info'];

      if (in_array('小動物', $selectedPets)) {
        $otherExizoPets[] = $_POST['other_exizopets'];
      }
 
      if (in_array('その他の動物', $selectedHard)) {
        $otherPets[]= $_POST['other_pets'];
      }

      if (in_array('その他の理由', $selectedHard)) {
        $pets_hard[]= $_POST['pets_hard'];
      }

      foreach($selectedAges as $Ages){
        $ages[] = $Ages;
      }
      foreach($selectedPeople as $People){
        $people[] = $People;
      }
      foreach($selectedAllergy as $Allergy){
        $allergies[] = $Allergy;
      }
      foreach($selectedLifestyle as $Lifestyle){
        $lifestyle[] = $Lifestyle;
      }

      foreach($selectedPets as $Pets){
        $pets[] = $Pets;
      }
      foreach($selectedWelcome as $Welcome){
        $welcome[] = $Welcome;
      }
      foreach($selectedLiving_expenses as $Living_expenses){
        $living_expenses[] = $Living_expenses;
      }
      foreach($selectedMedical_bills as $Medical_bills){
        $medical_bills[] = $Medical_bills;
      }
      foreach($selectedHard as $Hard){
        $hard[] = $Hard;
      }
 
      $data =array_merge($ages, $people, $allergies, $lifestyle,$pets,$otherExizoPets,$otherPets,$welcome,$living_expenses,$medical_bills,$pets_good,$hard,$pets_hard,$pets_info);
     
      $output = implode("\n", $data);
      file_put_contents(date("YmdHis"). ".txt", $output);
      header('Location: thanks.php');
      exit();
      }
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="stylesheet" href="css/main.css">
    <title>アンケート</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
  </head>
  <body class="column1">
    <header class="header">
      <div class="header-image">
        <h1 class="logo">ペットアンケート</h1>
      </div>
    </header>
    <div class="wrap">
      <div class="content">
        <main>
          <form method="post">
            <div class="box-wrap">
              <section class="form-header-section">
                <div class="form-section-header"></div>
                <div class="form-section-wrap">
                  <p  class="form-section-text">現在ペットの情報検索サイトを作成しています。(今後公開予定です。)</p>
                  <p class="form-section-text">自分のお家情報やライフスタイルに合った動物を探し、動物の特徴を知ることでお迎え後のミスマッチを防ぎたいと思っています。</p>
                  <p class="form-section-text"> また、よくネットで「一人暮らしでも飼いやすい！」「賃貸におすすめのペット！」と紹介しているサイトがありますが、
                    チンチラとモルモットを飼育している自分でも違うだろ…と思う情報がたくさんあります。</p>
                  <p class="form-section-text">そこで、実際に飼育している/飼育していた飼い主さんの声をたくさん集め、これからペットをお迎えしたいと考えている未来の飼い主さんに正しい知識を知ってもらうため、このアンケートを実施しました。</p>
                  <p class="form-section-text">こちらはすべて匿名のアンケートです！ご協力よろしくお願いいたします。</p>
                </div>
              </section>

              <section class="form-section form-title">
                <div class="form-section-header"></div>
                <div class="form-section-wrap">
                  <p>飼い主さんについて</p>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">1：飼い主さんの年齢を教えてください</p>
                  <div class="checkbox-wrap">
                    <label id="age[]">
                      <input type="checkbox" name="age[]" value="10代" />
                      <span>10代</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="age[]">
                      <input type="checkbox" name="age[]" value="20代" />
                      <span>20代</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="age[]">
                      <input type="checkbox" name="age[]" value="30代" />
                      <span>30代</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="age[]">
                      <input type="checkbox" name="age[]" value="40代" />
                      <span>40代</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="age[]">
                      <input type="checkbox" name="age[]" value="50代" />
                      <span>50代</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="age[]">
                      <input type="checkbox" name="age[]" value="60歳以上" />
                      <span>60歳以上</span>
                    </label>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">2：何人で暮らしているか教えてください。</p>
                  <div class="checkbox-wrap">
                    <label id="people[]">
                      <input type="checkbox" name="people[]" value="一人暮らし" />
                      <span>一人暮らし</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="people[]">
                      <input type="checkbox" name="people[]" value="二人暮らし(同棲・夫婦・友達・家族)" />
                      <span>二人暮らし(同棲・夫婦・友達・家族)</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="people[]">
                      <input type="checkbox" name="people[]" value="家族(2人以上)" />
                      <span>家族(2人以上)</span>
                    </label>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">3：飼い主さんのアレルギーについて教えてください(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="allergy[]">
                      <input type="checkbox" name="allergy[]" value="飼い主がアレルギー持ち" />
                      <span>飼い主がアレルギー持ち</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="allergy[]">
                      <input type="checkbox" name="allergy[]" value="一緒に住んでいる人がアレルギー持ち" />
                      <span>一緒に住んでいる人がアレルギー持ち</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="allergy[]">
                      <input type="checkbox" name="allergy[]" value="飼育してからアレルギーが発症した(飼い主または一緒に住んでいる人)" />
                      <span>飼育してからアレルギーが発症した(飼い主または一緒に住んでいる人)</span>
                    </label>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">4：飼い主さんの生活スタイルついて教えてください(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="lifestyle[]">
                      <input type="checkbox" name="lifestyle[]" value="基本の生活(決まった時間に出社/退勤し、土日予定があれば出かける等)" />
                      <span>基本の生活(決まった時間に出社/退勤し、土日予定があれば出かける等)</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="lifestyle[]">
                      <input type="checkbox" name="lifestyle[]" value="仕事のため家を出るのが朝早い、または夜遅い" />
                      <span>仕事のため家を出るのが朝早い、または夜遅い</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="lifestyle[]">
                      <input type="checkbox" name="lifestyle[]" value="仕事で家にいないが、休日は家にいる(またはインドア)" />
                      <span>仕事で家にいないが、休日は家にいる(またはインドア)</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="lifestyle[]">
                      <input type="checkbox" name="lifestyle[]" value="仕事で家にいるが、休日は外出が多い(またはアウトドア)" />
                      <span>仕事で家にいるが、休日は外出が多い(またはアウトドア)</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="plifestyleeople[]">
                      <input type="checkbox" name="lifestyle[]" value="ほとんど家にいる" />
                      <span>ほとんど家にいる</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="lifestyle[]">
                      <input type="checkbox" name="lifestyle[]" value="1、2日不在な日もある" />
                      <span>1、2日不在な日もある</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="lifestyle[]">
                      <input type="checkbox" name="lifestyle[]" value="飼い主は不在だが、平日も休日も家に人がいる" />
                      <span>飼い主は不在だが、平日も休日も家に人がいる</span>
                    </label>
                  </div>
                </div>
              </section>

              <section class="form-section form-title">
                <div class="form-section-header"></div>
                <div class="form-section-wrap">
                  <p>ペットについて</p>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">1：飼育している動物の種類を教えてください。(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="pets[]">
                      <input type="checkbox" name="pets[]" value="犬" />
                      <span>犬</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="pets[]">
                      <input type="checkbox" name="pets[]" value="猫" />
                      <span>猫</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="pets[]">
                      <input type="checkbox" name="pets[]" value="小動物" />
                      <span>小動物</span>
                    </label>
                  </div>
                  <div class="textarea-wrap chack-exizo-textarea">
                    <p class="item-name">その他の動物</p>
                    <textarea id="other_exizopets" name="other_exizopets" rows="8" cols="80"></textarea>
                    <div class="counter"><span class="js-textCounter exizopets_count">500</span>文字</div>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="pets[]">
                      <input type="checkbox" name="pets[]" value="鳥" />
                      <span>鳥</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="pets[]">
                      <input type="checkbox" name="pets[]" value="爬虫類" />
                      <span>爬虫類</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="pets[]">
                      <input type="checkbox" name="pets[]" value="その他の動物" />
                      <span>その他の動物</span>
                    </label>
                  </div>
                  <div class="textarea-wrap chack-textarea">
                    <p class="item-name">その他の動物</p>
                    <textarea id="other_pets" name="other_pets" rows="8" cols="80"></textarea>
                    <div class="counter"><span class="js-textCounter pets_count">500</span>文字</div>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">2：現在飼っているペットはどこでお迎えましたか？(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="ペットショップ（路面店）" />
                      <span>ペットショップ（路面店）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="ペットショップ（ホームセンター内）" />
                      <span>ペットショップ（ホームセンター内）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="ペットショップ（商業施設内）" />
                      <span>ペットショップ（商業施設内）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="ブリーダー（自分で探した）" />
                      <span>ブリーダー（自分で探した）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="ブリーダー（マッチングサイトなどを利用）" />
                      <span>ブリーダー（マッチングサイトなどを利用）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="保健所から保護" />
                      <span>保健所から保護</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="譲渡会で保護" />
                      <span>譲渡会で保護</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="里親募集（インターネット、動物病院など）" />
                      <span>里親募集（インターネット、動物病院など）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="知り合いから譲り受けた" />
                      <span>知り合いから譲り受けた</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="捨てられていた子を保護した" />
                      <span>捨てられていた子を保護した</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="welcome[]">
                      <input type="checkbox" name="welcome[]" value="その他のお店" />
                      <span>その他</span>
                    </label>
                  </div>
                  <div class="textarea-wrap chack-shop-textarea">
                    <p class="item-name">その他の理由</p>
                    <textarea id="other_shop" name="other_shop" rows="8" cols="80"></textarea>
                    <div class="counter"><span class="js-textCounter shop_count">500</span>文字</div>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">3：.ペット一頭あたりの生活費用はひと月平均でいくらかかっていますか？(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="5,000円未満" />
                      <span>5,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="5,000円〜10,000円未満" />
                      <span>5,000円〜10,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="10,000円〜15,000円未満" />
                      <span>10,000円〜15,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="10,000円〜15,000円未満" />
                      <span>10,000円〜15,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="15,000円〜20,000円未満" />
                      <span>15,000円〜20,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="20,000円〜30,000円未満" />
                      <span>20,000円〜30,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="30,000円〜40,000円未満" />
                      <span>30,000円〜40,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="40,000円〜50,000円未満" />
                      <span>40,000円〜50,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="50,000円以上" />
                      <span>50,000円以上</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="living_expenses[]">
                      <input type="checkbox" name="living_expenses[]" value="わからない" />
                      <span>わからない</span>
                    </label>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">4：ペット一頭あたりの医療費はひと月平均でいくらかかっていますか？(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="1,000円未満" />
                      <span>1,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="1,000円〜2,000円未満" />
                      <span>1,000円〜2,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="2,000円〜3,000未満" />
                      <span>2,000円〜3,000未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="3,000円〜4,000円未満" />
                      <span>3,000円〜4,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="4,000円〜5,000円未満" />
                      <span>4,000円〜5,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="5,000円〜10,000円未満" />
                      <span>5,000円〜10,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="10,000円〜20,000円未満" />
                      <span>10,000円〜20,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="20,000円〜30,000円未満" />
                      <span>20,000円〜30,000円未満</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="30,000円以上" />
                      <span>30,000円以上</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="medical_bills[]">
                      <input type="checkbox" name="medical_bills[]" value="特にかかっていない（病気をしていない）" />
                      <span>特にかかっていない（病気をしていない）</span>
                    </label>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">5：ペットを迎えて一番良かったと感じたことはなんですか？</p>
                  <div class="textarea-wrap">
                    <textarea id="pets_good" name="pets_good" rows="8" cols="80"　placeholder="例：チンチラは毎日砂浴びが必要なため、部屋に砂が舞う。"></textarea>
                    <div class="counter"><span class="js-textCounter good_count">500</span>文字</div>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">6：ペットを迎えて一番大変だと感じたことはなんですか？(複数の項目選択可)</p>
                  <div class="checkbox-wrap">
                    <label id="hard[]">
                      <input type="checkbox" name="hard[]" value="しつけ全般（トイレトレーニング、無駄吠え、夜中の運動など）" />
                      <span>しつけ全般（トイレトレーニング、無駄吠え、夜中の運動など）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="hard[]">
                      <input type="checkbox" name="hard[]" value="暮らし全般（ニオイ、家具や壁紙などの保護、掃除など）" />
                      <span>暮らし全般（ニオイ、家具や壁紙などの保護、掃除など）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="hard[]">
                      <input type="checkbox" name="hard[]" value="生活スタイル全般（起床時間や帰宅時間の調整、外出や旅行などの制限など）" />
                      <span>生活スタイル全般（起床時間や帰宅時間の調整、外出や旅行などの制限など）</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label ID="hard[]">
                      <input type="checkbox" name="hard[]" value="特に大変とは感じなかった" />
                      <span>特に大変とは感じなかった</span>
                    </label>
                  </div>
                  <div class="checkbox-wrap">
                    <label id="hard[]">
                      <input type="checkbox" name="hard[]" value="その他の理由" />
                      <span>その他</span>
                    </label>
                  </div>
                  <div class="textarea-wrap chack-reason-textarea">
                    <p class="item-name">その他の理由</p>
                    <textarea id="pets_hard" name="pets_hard" rows="8" cols="80"></textarea>
                    <div class="counter"><span class="js-textCounter hard_count">500</span>文字</div>
                  </div>
                </div>
              </section>

              <section class="form-section">
                <div class="form-section-wrap">
                  <p class="item-name">7：飼育するうえで、他の方に知ってほしいことはありますか。</p>
                  <div class="textarea-wrap">
                    <textarea  id="other_countDown" name="pets_info" rows="8" cols="80"　placeholder="例：チンチラは毎日砂浴びが必要なため、部屋に砂が舞う。"></textarea>
                    <div class="counter"><span class="js-textCounter other_count">500</span>文字</div>
                  </div>
                </div>
              </section>

              <div class="submit-wrap">
                <input class="submit-btn" type="submit" name="" value="送信する" >
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>
    <footer class="footer">
      <section class="footer2">© 2023 questionnaire </section>
    </footer>
  </body>
</html>