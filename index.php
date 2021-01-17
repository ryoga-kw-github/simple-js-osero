<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <h1>こんにちは世界</h1>
        <p>Hello,World</p>
        <script type="text/javascript" src="main.js"></script>
        <style>

            .table td {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            text-align: center;
            font-size: 3.8vw;
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
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>32</td>
                    <td>33</td>
                    <td>34</td>
                    <td>35</td>
                    <td>36</td>
                    <td>37</td>
                    <td>38</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>42</td>
                    <td>43</td>
                    <td>○</td>
                    <td>●</td>
                    <td>46</td>
                    <td>47</td>
                    <td>48</td>
                </tr>
                <tr>
                    <td>51</td>
                    <td>52</td>
                    <td>53</td>
                    <td>●</td>
                    <td>○</td>
                    <td>56</td>
                    <td>57</td>
                    <td>58</td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>62</td>
                    <td>63</td>
                    <td>64</td>
                    <td>65</td>
                    <td>66</td>
                    <td>67</td>
                    <td>68</td>
                </tr>
                <tr>
                    <td>71</td>
                    <td>72</td>
                    <td>73</td>
                    <td>74</td>
                    <td>75</td>
                    <td>76</td>
                    <td>77</td>
                    <td>78</td>
                </tr>
                <tr>
                    <td>81</td>
                    <td>82</td>
                    <td>83</td>
                    <td>84</td>
                    <td>85</td>
                    <td>86</td>
                    <td>87</td>
                    <td>88</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>