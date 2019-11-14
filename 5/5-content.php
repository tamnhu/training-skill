<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
    
        
            <div class="ramid bgr-dt1">
                <h4>New Smart phone</h4>
                <h5>Big sale off 50%</h5>
            </div>
            <div class="btn-www"> 
                <button >shop now --></button>
            </div>
        
            
    </div>
</div>
