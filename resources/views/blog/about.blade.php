@extends('layouts.main')

@section('content')

<!-- +++++ Welcome Section +++++ -->
  <div id="ww">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <h1>About Toya Kawakami</h1>
          <p></p>
          <p></p>

        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /ww -->


  <!-- +++++ Information Section +++++ -->

  <div class="container pt">
    <div class="row mt centered">
      <div class="col-lg-3">
        <span class="glyphicon glyphicon-book"></span>
        <p>
          Tech AcademyでJava学習<br>
          TECH EXPERTでRubyOnRails学習
        </p>
      </div>

      <div class="col-lg-3">
        <span class="glyphicon glyphicon-user"></span>
        <p>
          1993年生まれ<br>
          近畿大学卒業<br>
          前職では経理を担当
        </p>
      </div>

      <div class="col-lg-3">
        <span class="glyphicon glyphicon-fire"></span>
        <p>
          趣味は<br>
          カメラ(FUJIFILM X-T2)<br>
          ゲーム(PS4 Switch)<br>
          学生時代はドラムをしていました
        </p>
      </div>

      <div class="col-lg-3">
        <span class="glyphicon glyphicon-globe"></span>
        <p>
          大阪生まれ大阪育ち<br>
          大阪から離れたことはございません
        </p>
      </div>
    </div>
    <!-- /row -->

    <div class="row mt">
      <div class="col-lg-12">
        <h4>THE HISTORY</h4>

        <ul class="timeline">
            <li>
              <p class="timeline-date">1993年</p>
              <div class="timeline-content">
                <h3>生誕</h3>
                <p>小中とパッとしない人生を送る</p>
              </div>
            </li>
            <li>
              <p class="timeline-date">2009年</p>
              <div class="timeline-content">
                <h3>高校生</h3>
                <p>軽音楽部に入りドラムと出会う</p>
                ドラムの叩く人によって違うリズムになることや、その人間性がでるのを見出しのめり込む<br>
                高校生の時はメロコアにはまり
                Hi-STANDARD Dustbox TOTALFATといった昔のメロコアから今のメロコアを聴きあさり、
                また同様に演奏もしていた。<br>
                当時の私服はメロコアのバンTでとてもダサかった
              </div>
            </li>
            <li>
              <p class="timeline-date">2011年</p>
              <div class="timeline-content">
                <h3>大学受験</h3>
                <p>音楽漬けの高校生時代だった</p>
                大学受験では近いからという理由で関西大学を第一志望に勉強を始める<br>
                進路調査で関西大学と近畿大学を書いたところ、担任の先生から浪人するの？と言われたことは今でもよく覚えている<br>
                そこから行ってやろうと勉強をはじめた<br>
                関西大学には惜しくも落ち、近畿大学に入学することになった<br>
              </div>
            </li>
            <li>
              <p class="timeline-date">2012年</p>
              <div class="timeline-content">
                <h3>大学生</h3>
                <p>大学でもやはりドラムを続けたいと思い、サークルではなく部としての軽音楽部に入部した</p>
                大学からは聴く音楽もかわり、
                WEEZER Oasis といった洋ロックであったり、
                NumberGirl チャットモンチー といった邦ロックも聴き音楽の幅が広がった<br>
                バンド>バイト>勉学のような生活であったが、単位は順調にとっていき
                ４年間そこそこ忙しいながらも、楽しんだ大学生活がおくれた<br>
              </div>
            </li>
            <li>
              <p class="timeline-date">2015年</p>
              <div class="timeline-content">
                <h3>就職活動</h3>
                <p>就職活動がはじまる</p>
                文系=営業という考えで就職活動を始めるも、自他共に認める営業の才能がなさそうオーラが出ており
                落ちに落ちた<br>
                大学1回生の時に簿記3級を取得したのを思い出し経理職で再始動すると、一発で内定
                そこに入社することになる<br>
              </div>
            </li>
            <li>
              <p class="timeline-date">2016年</p>
              <div class="timeline-content">
                <h3>社会人</h3>
                <p>プログラミングとの出会い</p>
                パソコンといえばPowerPoint Wordだった学生時代とは違いExcelや会計ソフトを使用するようになり
                はじめはパソコンの基礎から叩き込まれる<br>
                Excelを使用していくとマクロという便利機能があることを教えてもらい、そこからプログラミングと出会うこととなる<br>
                通勤時間が往復で３時間ほどあったためその通勤時間を生かしてVBAの本を読み漁る<br>
                休みの日は趣味のカメラをしたりゲームをしたりしていたが、マクロと出会ってからは、そこにプログラミングも入ることとなる<br>
              </div>
            </li>
            <li>
              <p class="timeline-date">2017年</p>
              <div class="timeline-content">
                <h3>学習</h3>
                <p>プログラミングをしてみる</p>
                Udemyを通じてC#でゲームを作ってみたり、RasberryPiで一定のタイミングでライトをつける物を作ってみたり... <br>
                基礎からなにかプログラミングを学んでみようとTechAcademyでJavaを学習する<br>
                仕事をしながらでなかなか集中できる時間を確保できない中でも、オブジェクト指向の基礎であったり、Webアプリの基礎を体系的に学ぶことができた<br>
                ただ当時はそれを職にしようとまでは考えていなかった<br>
              </div>
            </li>
            <li>
              <p class="timeline-date">2019年</p>
              <div class="timeline-content">
                <h3>退職</h3>
                <p>プログラマーになりたい</p>
                経理を3年するとルーチンの職務に対し、これを後40年続けれるのかと思うようになる<br>
                人間関係や職務内容、就業時間等不満はなかったが、人生一度きり、このまま終わっていいのかという考えがよぎる<br>
                ちょうどその時、会社のシステムをVBAで作成しており、会計業務をしている時より、システム作成をしている時の方が生き生きしていることに気づく<br>
                <strong>そうだこれを仕事にしよう</strong> 
              </div>
            </li>
            <li>
              <p class="timeline-date">2019年</p>
              <div class="timeline-content">
                <h3>プログラミング教室</h3>
                <p>働くことを意識した学習</p>
                なにもビジョンは見えていなかったが、上司に退職の意志を伝え、自分にたいして甘えをを断絶する<br>
                TECH EXPERTに入学し本気でプログラマーを目指す<br>
                限られた時間で膨大なカリキュラムの量に追われながらも、苦痛ややめたいといったこともなく、むしろ
                新しい知識が、どんどん入ってくることに快感をおぼえた<br>
                周りの人にも恵まれ、教室に行くのが楽しみになっていた<br>
                平日休日問わず10時から22時まで没頭し、時には体調を崩し、ドラムの時の腱鞘炎が痛むこともあったが
                最後までやり遂げることができた
              </div>
            </li>
          
          </ul>

      </div>
      <!-- /colg-lg-6 -->


      </div>
      <!-- /col-lg-6 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

@endsection