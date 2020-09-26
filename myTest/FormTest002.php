<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action 指定另一支php檔案進行資料接收，因為傳送多筆資料，因此<select> 名稱指定為陣列 -->
    <form action="php2_form2.php" method="GET">
        <select name="items[]" size="4" multiple="multiple">
            <option name ="Taipei">Taipei</option>
            <option name ="Taichung">TaiChung</option>
            <option name ="Hualien">Hualien</option>
            <option name = "Tainan">Tainan</option>
        </select><br>
        <input type="submit" value="送出">

    </form>
</body>
</html>