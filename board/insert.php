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

</head>

<?php 

$private = $_POST['private'];
$name = $_POST['name'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$phone3 = $_POST['phone3'];
$phone = $_POST['phone1']."-".$_POST['phone2']."-".$_POST['phone3'];
$email = $_POST['email'];
$title = $_POST['title'];
$password = $_POST['password'];
$answer = $_POST['answer'];
$date = $_POST['date'];
$views = $_POST['views'];
$reply = $_POST['reply'];

$sql = "INSERT INTO board (private, name, phone, phone1, phone2, phone3, email, title, password, answer, date, views, reply) VALUES ('$private', '$name', '$phone', '$phone1', '$phone2', '$phone3', '$email', '$title', '$password', '$answer', '$date', '$views', '$reply')";

$result = mysqli_query($conn, $sql);
$list = '';

if($result === false){
    echo '저장하지 못했습니다.';
    error_log(mysqli_error($conn)); // 에러 로그 기록
}else{
    echo '저장 성공';
}

mysqli_close($conn);
header("Location:../board_view.php");

?>

<?php 
    include('../layout/footer.php');
?>
