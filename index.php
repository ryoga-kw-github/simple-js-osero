<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <h1>こんにちは世界</h1>
        <p>Hello,World</p>
        <script type="text/javascript" src="main.js"></script>
        <style>

            .table {
            position:absolute;
            top: 50%;
            left: 50%;
            margin-top: -257px;
            margin-left: -257px;
            }

            .table td {
            width: 60px;
            height: 60px;
            background-color: #ddd;
            text-align: center;
            font-size: 3.8vw;
            cursor: pointer;
            }

            .list {
            max-width: 750px;
            margin: 0 auto;
            list-style: none;
            background-color: #fff;
            padding: 0;
            }

            .list-item {
            display: flex;
            display: -webkit-flex;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            border-bottom: 2px solid #ddd;
            }
            .list-item > * {
            width: 50px;
            padding: 5px 10px;
            text-align: center;
            }
            .list-item *:last-child {
            -webkit-flex-grow: 1;
            flex-grow: 1;
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

        <table>
            <tbody>
                <tr>
                    <td>1-1</td>
                    <td>1-2</td>
                    <td>1-3</td>
                    <td>1-4</td>
                    <td>1-5</td>
                    <td>1-6</td>
                    <td>1-7</td>
                    <td>1-8</td>
                </tr>
                <tr>
                    <td>2-1</td>
                    <td>2-2</td>
                    <td>2-3</td>
                    <td>2-4</td>
                    <td>2-5</td>
                    <td>2-6</td>
                    <td>2-7</td>
                    <td>2-8</td>
                </tr>
                <tr>
                    <td>3-1</td>
                    <td>3-2</td>
                    <td>3-3</td>
                    <td>3-4</td>
                    <td>3-5</td>
                    <td>3-6</td>
                    <td>3-7</td>
                    <td>3-8</td>
                </tr>
                <tr>
                    <td>4-1</td>
                    <td>4-2</td>
                    <td>4-3</td>
                    <td>○</td>
                    <td>●</td>
                    <td>4-6</td>
                    <td>4-7</td>
                    <td>4-8</td>
                </tr>
                <tr>
                    <td>5-1</td>
                    <td>5-2</td>
                    <td>5-3</td>
                    <td>●</td>
                    <td>○</td>
                    <td>5-6</td>
                    <td>5-7</td>
                    <td>5-8</td>
                </tr>
                <tr>
                    <td>6-1</td>
                    <td>6-2</td>
                    <td>6-3</td>
                    <td>6-4</td>
                    <td>6-5</td>
                    <td>6-6</td>
                    <td>6-7</td>
                    <td>6-8</td>
                </tr>
                <tr>
                    <td>7-1</td>
                    <td>7-2</td>
                    <td>7-3</td>
                    <td>7-4</td>
                    <td>7-5</td>
                    <td>7-6</td>
                    <td>7-7</td>
                    <td>7-8</td>
                </tr>
                <tr>
                    <td>8-1</td>
                    <td>8-2</td>
                    <td>8-3</td>
                    <td>8-4</td>
                    <td>8-5</td>
                    <td>8-6</td>
                    <td>8-7</td>
                    <td>8-8</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>