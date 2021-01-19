<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <h1>こんにちは世界</h1>
        <p>Hello,World</p>
        <script type="text/javascript" src="main.js"></script>
        <style>        
            .table tr td {
                background-color: #ddd;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                font-size: 30px;
                cursor: pointer;
            }
        </style>

        <!-- 
            ”オセロのルール”
            ―――――――――――――――――――――――――――――――――――――――――――――――――――――――――――――
            1.マスが縦8×横8個ある事。
            2.あらかじめ中央に二駒ずつ、合計四駒を交互になるように置いておく。
            3.縦横斜めいずれかで、
            自分の駒が相手の駒を挟んだ直線上のマスに置くことができる。
            4.置ける場所がなかった場合はパス
        -->
        
        <!-- 
            順番
            ―――――――――――――――――――――――――――――――――――――――――――――――――――――――――――――
            1.htmlで縦8×横8のテーブルを作る
            2.中央4マスは、あらかじめ互いの駒を交互に2駒ずつ置いておく
            3.テーブルのマス(駒)をクリックしたときの処理を書く
            --3-1.クリックされたマスが、駒を置けるかどうかをチェックする(置けない場合はアラートでメッセージを出す)
            --3-2.チェックした結果、置ける場合は駒を設置して、自分の駒(○)同士で挟んだ相手の駒(●)を自分の駒の色(○)に変える
            --3-3.上の処理が全部終わったらテーブルを更新する
            4.もう片方のプレイヤーに順番を回す
            5.3~4を繰り返し置く場所が無くなったらゲーム終了、終了時にコマ数が多かった方の勝ち
        -->

        <table class="table">
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>○</td>
                    <td>●</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>●</td>
                    <td>○</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>