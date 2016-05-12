<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>High or Low</title>
</head>
<body>
<?php session_start() ?>

<?php
class Ray
{
    /* Read Session variable*/
    public static function s($v)
    {
        return isset( $_SESSION[$v] ) ? $_SESSION[$v] : null;
    }

    /* Set Session variable*/
    public static function ss($v, $value = null)
    {
        $_SESSION[$v] = $value;
    }

    /* Read get variable*/
    public static function g($v)
    {
        return isset( $_GET[$v] ) ? $_GET[$v] : null;
    }
}
?>

<?php
if( Ray::g('action') == 'newgame' )
{
    Ray::ss('life', 3);
}
?>

<?php if ( Ray::s('life') ) : ?>

    Game View<br>
    Life <?= Ray::s('life') ?><br>
    Guess: 	<a href="/?guess=high">High</a>	| <a href="/?guess=low">low</a>

    <?php
    Ray::ss(
        'life',
        Ray::s('life') - 1
    );
    ?>

<?php else : ?>

    Welcome<br>
    <?php if ( !Ray::g('guess') ) : ?>
        <a href="?action=newgame">New Game!</a>
    <?php else: ?>
        You Lost!<br>
        <a href="?action=newgame">Try again!</a>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>
