<?php
// variables
$random_num1 =  rand(0, 30);
$random_num2 =  rand(0, 30);
?>


<!<!DOCTYPE html>
<html lang="en">
<head>
    <title> Higher or lower game  </title>
</head>
<style>
    h1{
        text-align:center;
        margin-top: 5px;
    }
</style>

<html>

<body>
<h1> welcome to my higher and lower game </h1>
<form name="frmMain" method="POST"  action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <DIV align="center">
        <input type="hidden" name="txtRand" value="<?php echo $random_num1 ?>">
        <input type="hidden" name="txtNum" value="<?php echo $random_num2 ?>">
        <table class="table" width=20% cellspacing=0 cellpadding=0 border="0">
            <tr>
                <td colspan="2"> Choose higher or lower than <?php echo $random_num1 ?></td>
            </tr>
            <tr><td align="center"><input type="Submit" name="subLower" value="Lower"></td>
                <td align="center"><input type="Submit" name="subHigher" value="Higher"></td></tr>

            <?php
            // a random number
            if (isset($_POST['txtNum'])) {
                $randnum = $_POST['txtRand'];
                $num = $_POST['txtNum'];

                if (isset($_POST['subLower'])) {
                    if ($num < $randnum) echo '<tr><td colspan="2">The number ' . $num . ' is lower, you were right life lost</td></tr>';
                    if ($num > $randnum) echo '<tr><td colspan="2">The number ' . $num . ' is higher, you were wrong</td></tr>';
                    if ($num == $randnum) echo '<tr><td colspan="2">The number was the same, Oops :)</td></tr>';
                }

                if (isset($_POST['subHigher'])) {
                    if ($num > $randnum) echo '<tr><td colspan="2">The number ' . $num . ' is higher, you were right :)</td></tr>';
                    if ($num < $randnum) echo '<tr><td colspan="2">The number ' . $num . ' is lower, you were wrong :(</td></tr>';
                    if ($num == $randnum) echo '<tr><td colspan="2">The number was the same, Oops :)</td></tr>';
                }

            }

            ?>
        </table>
    </DIV>
</FORM>
</body>
</html>