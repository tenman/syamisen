<?php
header("Content-type: text/html;charset=UTF-8");
session_start();

if(!isset($_SESSION['page'])){
    $_SESSION['page'] = "doc2";
    }
if(!isset($_SESSION['col'])){

    $_SESSION['col'] = "t5";
    }
if(!isset($_SESSION['ex'])){

    $_SESSION['ex'] = "g";
}
if(isset($_GET) and !empty($_GET)){

    if($_GET['page'] == 'doc' or
        $_GET['page'] == 'doc2' or
        $_GET['page'] == 'doc3' or
        $_GET['page'] == 'doc4'){

        $_SESSION['page'] = $_GET['page'];
    }


    if($_GET['col'] == 't1' or
        $_GET['col'] == 't2' or
        $_GET['col'] == 't3' or
        $_GET['col'] == 't4' or
        $_GET['col'] == 't5' or
        $_GET['col'] == 't6'){

        $_SESSION['col'] = $_GET['col'];
    }

    if(
        $_GET['ex'] == 'g' or
        $_GET['ex'] == 'gb' or
        $_GET['ex'] == 'gc' or
        $_GET['ex'] == 'gd' or
        $_GET['ex'] == 'ge' or
        $_GET['ex'] == 'gf' ){

        $_SESSION['ex'] = $_GET['ex'];


    }
}else{
/*  $_SESSION['page'] = "doc2";
    $_SESSION['col'] = "t5";
    $_SESSION['ex'] = "gc";*/

}

?><!DOCTYPE html>

    <head>
    <meta charset=utf-8>
    <title>html5 Cupmen</title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://html5resetcss.googlecode.com/files/html5-reset-1.4.css" media="all">
    <!--Include YUI Loader: -->
    <script type="text/javascript" src="http://yui.yahooapis.com/2.8.0r4/build/yuiloader/yuiloader-min.js"></script>
    <!--Use YUI Loader to bring in your other dependencies: -->
    <script type="text/javascript">
    // Instantiate and configure YUI Loader:
    (function() {
        var loader = new YAHOO.util.YUILoader({
            base: "",
            require: ["base","fonts","grids","reset"],
            loadOptional: false,
            combine: true,
            filter: "MIN",
            allowRollup: true,
            onSuccess: function() {
            }
        });
    loader.insert();
    })();
    </script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">google.load("jquery", "1.4.4");</script>
    <script type="text/javascript">
      jQuery(function() {
      //  alert("これはhtml5の実験用のドキュメントです。");
      });
    </script>
    <style type="text/css">
    i{content:"\"/*"}

    /* inline high pass filter
    see http://tantek.com/CSS/Examples/inlinehpf.html

    quote{
       As a result of the inline high pass filter,
       the rules after the filter will only be seen by the following:

        * IE5/Mac or later
        * IE6/Windows or later
        * Netscape 6 or later
        * Opera 5 or later
        * or any other browser which can pass Section 7.1 of the CSS1 Test Suite.
    }
    */
    /*-----------------------------------------------------
    Yahoo UI Library Font-size Adjustment
    Copyright (c) 2006, Yahoo! Inc. All rights reserved.
    http://developer.yahoo.com/yui/license.txt
    http://developer.yahoo.com/yui/fonts/
    10px = 77%     11px = 85%     12px = 93%     13px = 100%
    14px = 108%    15px = 116%    16px = 123.1%  17px = 131%
    18px = 138.5%  19px = 146.5%  20px = 153.9%  21px = 161.6%
    22px = 167%    23px = 174%    24px = 182%    25px = 189%
    26px = 197%
    ------------------------------------------------------*/
    h1,h2,h3{
    font-family:times, Times New Roman, times-roman, georgia, serif;
    font-weight:bold;
    margin:1em 0 .5em 0;
    text-align:left;
    }
    h1{
    font-size:153.9%;
    }
    h2{
    font-size:138.5%;
    }
    h3{
    font-size:123.1%;
    }
    html{
    padding:0;
    }
    body{
    margin:0!important;
    background:#fff;
    }
    h1 {
    text-indent:1em;
    }
    header {
    padding:10px 0;
    }
    article,
    aside,
    dialog,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
    display:block;
    }
    html>body nav li a {
    width:auto;
    }
    nav {
    font-family:'Trebuchet MS','Lucida Grande',Verdana,Lucida,Geneva,Helvetica,Arial,sans-serif;
    margin-bottom:1em;
    padding:0 0 1em;
    width:12em;
    }

    nav ul li{

    }

    nav li a {
    display:block;
    padding:5px 5px 5px .5em;
    text-decoration:none;
    width:100%;
    }
    nav ul {
    list-style:none;
    margin:0;
    padding:0;
    }
    span.location {
    color:green;
    }
    table {
    width:100%;
    }
    td {
    border:none;
    }
    td a {
    text-decoration:none;
    }
    .bar {
    padding:1em;
    height:3em;
       background: -moz-linear-gradient(top,rgba(0,0,200,1),   rgba(0,0,51,1));
       background: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,200,1)),to(rgba(0,0,51,1)));
       border-top:1px solid #fff;
       border-bottom:1px solid #fff;
       -moz-box-shadow: 0 3px 5px #999;
       -webkit-box-shadow: 0 3px 5px #999;
       color:#fff;
       background:rgb(0,0,51)\9; /*for IE hack*/

    }
    .bar a{
    color:orange;
    }
    .vevent {
    border:1px solid #ccc;
    margin:1em;
    padding:1em;
       border-radius:1em 0px 1em 0px;
       -moz-border-radius: 1em 0px 1em 0px;
       -khtml-border-radius: 1em 0px 1em 0px;
       -webkit-border-radius: 1em 0px 1em 0px;
       background:rgba(200,200,255,0.3);
    }
    .vevent:before {
    content:"Schedule";
    display:block;
    font-weight:700;
    margin-bottom:1em;
    text-decoration:underline;
    }
    p.description{
    font-size:small;
    text-align:right;
    }
    h3 ~ p{ /*general sibling combinator*/
    background:#000;
    border:1px solid #ccc;
    color:#eee;
    padding:1em;
    }

    h3 + p{ /*Adjacent sibling combinator*/
    background:#efe;
    color:#333;
    border:1px solid #ccc;
    padding:1em;
    }
    nav ul > li{
    list-style-type:none;
    }
    nav li > ul  li {
    border-bottom:1px solid #ccc;
    margin:0;
    }
    figure{

    border:1px solid #ccc;
    padding:3px;
    text-align:center;
    vertical-align:top;
    display:inline-block;
       border-radius:3px;
       -moz-border-radius:3px;
       -khtml-border-radius:3px;
       -webkit-border-radius:3px;
       background:rgba(200,200,200,0.1);
       max-widht:100%;
    }
    figure img{
    display:block; /*for IE*/
    max-width:100%;
    }
    img{
    max-width:100%;
    height:auto;
    }
    .extra{
       color:#333;
    }
    </style>
    </head>

    <body>

<header class="bar">
    <h1>html5 Template</h1>
    </header>

    <!-- id is page width select doc,doc2,doc3,doc4,custom-doc
    e.g.
    #custom-doc {
       margin:auto;text-align:left; /* leave unchanged */
       width:46.15em;/* non-IE */
       *width:45.00em;/* IE */
       min-width:600px;/* optional but recommended */
    }
    class is column width select yui-t1,yui-t2,yui-t3,yui-t4,yui-t5,yui-t6,
    -->
    <div id="doc" class="yui-t4">

    <section id="yui-main">
    <div class="yui-b" >
    <div class="yui-g">
    <div class="yui-u first">
    <article>
    <h2>Example</h2>
    <p>One of the blocks. Lorem ipsum dolor
    sit amet, consectetuer adipiscing elit,
    sed diam nonummy nibh euismod tincidunt ut
    laoreet dolore magna aliquam erat volutpat.</p>
    <div class="vevent"> <a class="url" href="http://www.web2con.com/">http://www.web2con.com/</a> <span class="summary">Web 2.0 Conference</span>:
    <time class="dtstart" datetime="2007-10-05">October 5</time>
    -
    <time class="dtend" datetime="2007-10-20">19</time>
    ,
    at the <span class="location">Argent Hotel, San Francisco, CA</span> </div>
    </article>


    </div>

    <nav class="yui-u">
    <ul>
    <li>
    <h3>Extra Column</h3>
    <p>Optionally nest standard grids</p>
    <p>ネストブロック</p>
    <ul>
    <li><a href="index.php?ex=g">.yui-g</a>
    <p class="description">Standard <em>half</em> grid and <a href="http://developer.yahoo.com/yui/examples/grids/grids-gg.html">nest again for quarters</a>.</p>
    </li>
    <li><a href="index.php?ex=gb">.yui-gb</a>
    <p class="description">Special grid, 1/3 - 1/3 - 1/3</p>
    </li>
    <li><a href="index.php?ex=gc">.yui-gc</a>
    <p class="description">Special grid, 2/3 - 1/3</p>
    </li>
    <li><a href="index.php?ex=gd">.yui-gd</a>
    <p class="description">Special grid, 1/3 - 2/3</p>
    </li>
    <li><a href="index.php?ex=ge">.yui-ge</a>
    <p class="description">Special grid, 3/4 - 1/4</p>
    </li>
    <li><a href="index.php?ex=gf">.yui-gf</a>
    <p class="description">Special grid, 1/4 - 3/4</p>
    </li>
    </ul>
    </li>
    </ul>
    </nav>

    </div>
    </div>
    </section>

    <nav class="yui-b" id="toc">
    <ul>
    <li>
    <h3>Page Widths</h3>
    <p>Choose the overall page width.</p>
    <p>ページ幅、プリセット4種　拡張自在</p>
    <ul>
    <li><a href="index.php?page=doc">#doc</a>
    <p class="description">750px centered (good for 800x600)</p>
    </li>
    <li><a href="index.php?page=doc2">#doc2</a>
    <p class="description">950px centered (good for 1024x768)</p>
    </li>
    <li><a href="index.php?page=doc3">#doc3</a>
    <p class="description">100% fluid (good for everybody)</p>
    </li>
    <li><a href="index.php?page=doc4">#doc4</a>
    <p class="description">974px fluid (good for 1024x768)</p>
    </li>
    <li><a href="http://developer.yahoo.com/yui/examples/grids/grids-doc-custom.html">#doc-custom</a>
    <p class="description">an example of a custom page width</p>
    </li>
    </ul>
    </li>
    <li>
    <h3>Templates</h3>
    <p>Optionally choose the secondary column's width and orientation with one of six <em>templates</em>.</p>
    <p>カラムは、左右3種からどうぞ</p>
    <ul>
    <li><a href="index.php?col=t1">.yui-t1</a>
    <p class="description">Two columns, narrow on left, 160px</p>
    </li>
    <li><a href="index.php?col=t2">.yui-t2</a>
    <p class="description">Two columns, narrow on left, 180px</p>
    </li>
    <li><a href="index.php?col=t3">.yui-t3</a>
    <p class="description">Two columns, narrow on left, 300px</p>
    </li>
    <li><a href="index.php?col=t4">.yui-t4</a>
    <p class="description">Two columns, narrow on right, 180px</p>
    </li>
    <li><a href="index.php?col=t5">.yui-t5</a>
    <p class="description">Two columns, narrow on right, 240px</p>
    </li>
    <li><a href="index.php?col=t6">.yui-t6</a>
    <p class="description">Two columns, narrow on right, 300px</p>
    </li>
    </ul>
    </li>
    </ul>
    </nav>

    <br style="clear:both;" />
    </div>

    <footer class="bar">
    <address>
    http://d.hatena.ne.jp/tenman/
    </address>
    </footer>

</body>
</html>