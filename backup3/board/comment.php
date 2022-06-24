<?php 
require('../app/app.php');

$title = 'Insert';
require_once('../layout/header.php');

if (mysqli_connect_errno()){
    echo "MySQL 연결 오류: " . mysqli_connect_error();
    exit;
} else {
    echo "DB : \"$db_name\"에 접속 성공.<br/>";
}
?>

<?php 

$seq = $_POST['seq'];
$comment = $_POST['comment'];
$url = $_POST['url'];
$reply = $_POST['reply'];

$sql = "UPDATE board SET comment = '$comment', reply = '$reply' WHERE seq = $seq";

$result = mysqli_query($conn, $sql);

if($result === false){
    echo '저장하지 못했습니다.';
    error_log(mysqli_error($conn)); // 에러 로그 기록
}else{
    echo '저장 성공';
}

mysqli_close($conn);
header("Location:{$url}");

?>

<?php 
    include('../layout/footer.php');
?>
