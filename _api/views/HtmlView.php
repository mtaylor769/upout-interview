<?php
class HtmlView extends ApiView {
    public function render($content) {
        header('Content-Type: text/html; charset=utf8');
        echo $content;
        return true;
    }
}
?>