window.onload = function() {
    var test = '「テスト」';
    let innerHTMLtest = document.getElementById('test');
    innerHTMLtest.innerHTML="innerHTMLの動作チェック！";
    alert('このアラートが表示されてたらwindow.onloadが動いてる'+test);
};