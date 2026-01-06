<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = $_POST['name']    ?? '';
    $email   = $_POST['email']   ?? '';
    $message = $_POST['message'] ?? '';
    $rate    = $_POST['rate']    ?? '';

    // Contoh simpan ke file (simple & aman buat testing)
    $data = "Name: $name | Email: $email | Rate: $rate | Message: $message\n";

    file_put_contents("feedback.txt", $data, FILE_APPEND);

    echo "success";
}
?>
<?php
if($_POST){
    $to = "alamatemailkamu@example.com";
    $subject = "New Feedback from Website";
    $message = "Name: ".$_POST['name']."\n".
               "Email: ".$_POST['email']."\n".
               "Favorite Menu: ".$_POST['menu']."\n".
               "Rating: ".$_POST['rate']."\n".
               "Suggestions: ".$_POST['suggestion']."\n".
               "Recommendation: ".$_POST['recommendation'];
    $headers = "From: ".$_POST['email'];

    mail($to,$subject,$message,$headers);
}
?>

