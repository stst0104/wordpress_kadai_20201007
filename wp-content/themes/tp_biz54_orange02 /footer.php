<footer>

<div id="footermenu">
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
</div>
<!--/#footermenu-->

<div id="copyright">
<small>Copyright&copy; <a href="index.php">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>
<!--/#copyright-->

</footer>

<!--背景スライドショー-->
<?php if (is_home() ): ?>
<aside id="mainimg">
<div class="slide0">slide0</div>
<div class="slide1">slide</div>
<div class="slide2">slide2</div>
<div class="slide3">slide3</div>
</aside>
<?php endif; ?>

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　900px以下-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--子メニュー-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr2", "menubar-s2");
}
</script>

</body>
</html>
