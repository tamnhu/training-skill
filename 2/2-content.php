<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
<div class="container">
    <div class="row">
    <div class="col-md-6 ">
    <div class="ramid bgr-img">
    <h1>SHOP MAN</h1>
    <button class="btn-www">Shop Man</button>
    </div>
    </div>
    <div class="col-md-6 ">
    <div class="ramid bgr-img2">
    <h1>SHOP MAN</h1>
    <button class="btn-www">Shop Man</button>
    </div>
    </div>
    </div>

    </div>
</div>
</div>
