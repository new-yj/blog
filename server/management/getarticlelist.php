<?php
$con = mysql_connect("localhost:3306", "root", "win");
if (!$con) {
    echo 'Connect mysql failed!';
} else {
    mysql_select_db("blog", $con);
    $sql = "select * from articles order by articledate desc";
    $result = mysql_query($sql, $con);

    $re = "";
    while($row = mysql_fetch_array($result)) {
            $count += 1;
            $re .= (
                '"' . $row["articletitle"] . '"' . ','
            );
    }

    echo "[" . substr($re, 0, -1) . "]";
}
mysql_close($con);
?>