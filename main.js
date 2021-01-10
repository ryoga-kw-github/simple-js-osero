window.onload = function() {
    var test = '「テスト」';
    alert('このアラートが表示されてたらwindow.onloadが動いてる'+test);
    //let innerHTMLtest = document.getElementById('test');
    //innerHTMLtest.innerHTML="innerHTMLの動作チェック！";
    

    var $tableElements = document.getElementsByTagName('td');
    //getElementsByTagNameでHTMLのテーブル(tdタグ)をすべて取得してtableElementsに代入

    let order = true;
    //まだ何のための変数なのかわかんない
    let othelloWhite = '○';
    //othelloWhiteに○(白の駒)を代入
    let othelloBlack = '●';
    //othelloBlackに●(黒の駒)を代入
    let othelloColor = othelloBlack;
    //まだ何のための変数なのかわかんない


};