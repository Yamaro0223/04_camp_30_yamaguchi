<?php
// // データベース接続

// $db['host'] = "localhost";  // DBサーバのURL
// $db['user'] = "root";  // ユーザー名
// $db['pass'] = "root";  // ユーザー名のパスワード
// $db['dbname'] = "wact_db";  // データベース名

// //1. 送信ボタンが押された時にsupMesが空なら反応無し/記述あればdb送信
// if (isset($_POST["send"])){
//     // supMesの空欄判断
//     if(empty($_POST["supMes"])){
//         // 反応無し
//         return null;
//     } else {
//         //2. DB接続します xxxにDB名を入力する
//         //ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
//         try {
//         $pdo = new PDO('mysql:dbname=story;charset=utf8;host=localhost','root','');
//         } catch (PDOException $e) {
//         exit('DbConnectError:'.$e->getMessage());
//         }
        
//     }
// }





// //３．データ登録SQL作成 //ここにカラム名を入力する
// //xxx_table(テーブル名)はテーブル名を入力します
// $stmt = $pdo->prepare("INSERT INTO story_table(id, title, profile, story, category, indate )VALUES(NULL, :title, :profile, :story, :category, sysdate())");
// $stmt->bindValue(':indate', $indate, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':title', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// // $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':profile', $profile, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':story', $story, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':category', $category, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $status = $stmt->execute();

// //４．データ登録処理後
// if($status==false){
//   //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
//   $error = $stmt->errorInfo();
//   exit("QueryError:".$error[2]);
// }else{
//   //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
//   header("Location: select.php");
//   exit;

// }

?>
