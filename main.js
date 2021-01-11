window.onload = function() {
    var test = '「テスト」';
    alert('このアラートが表示されてたらwindow.onloadが動いてる'+test);
    //let innerHTMLtest = document.getElementById('test');
    //innerHTMLtest.innerHTML="innerHTMLの動作チェック！";
    

    var $tableElements = document.getElementsByTagName('td');
    //getElementsByTagNameでHTMLのテーブル(tdタグ)をすべて取得してtableElementsに代入

    let order = true;
    //順番を判別したり、交代させたりするときに使う
    let othelloWhite = '○';
    //othelloWhiteに○(白の駒)を代入
    let othelloBlack = '●';
    //othelloBlackに●(黒の駒)を代入
    let othelloColor = othelloBlack;
    //othelloColorにothelloBlack(黒駒●)を代入する

    for (let $i=0; $i < $tableElements.length; $i++) {
    //テーブルのすべてのマスにclick判定をつける
        
        //$tableElementsを配列に変換する
        //変換した配列を利用して、クリックした位置のマスを取得する
        //putOthello()を実行
        //changeOrder()を実行
    }

    function putOthello() {
        //クリックしたマスに自分の駒を置く関数
    }

    function changeOrder() {
        //順番を交代させる関数
        //othelloColorに
        //--othelloBlack(黒駒●)が代入されていた場合、othelloWhite(白駒○)を代入して、
        //--othelloWhite(白駒○)が代入されていた場合、othelloBlack(黒駒●)を代入する
    }
};