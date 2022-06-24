<?php 
require('../app/app.php');

$title = 'Delete';
require_once('../layout/header.php');

if (mysqli_connect_errno()){
    echo "MySQL 연결 오류: " . mysqli_connect_error();
    exit;
} else {
    echo "DB : \"$db_name\"에 접속 성공.<br/>";
}
?>

</head>

<?php 
$delnum = $_GET['seq'];

$sqldel = "DELETE FROM board WHERE seq = $delnum";
mysqli_query($conn, $sqldel);

$sql = "SELECT * FROM board";
$result = mysqli_query($conn, $sql);
$list = '';

while($row = mysqli_fetch_array($result)){
    $list = $list.
    "<tr>
        <td>{$row['seq']}</td>
        <td><a href=\"board_detail.php?seq={$row['seq']}\"><span $lock><span>{$row['title']}</span></span></a></td>
        <td>{$row['name']}</td>
        <td>{$row['views']}</td>
        <td>{$row['date']}</td>
        <td>답변 완료</td>
    </tr>";
}

echo $list;

mysqli_close($conn);
header("Location:../board_view.php");

?>

<?php
    echo $delnum.'번째 데이터가 삭제 되었습니다.';
?>

<?php 
    include('../layout/footer.php');
?>
