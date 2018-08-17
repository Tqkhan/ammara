<html>
        <head>
                <title>Smileys</title>
                <?php echo smiley_js(); ?>
        </head>
        <body>
                <form name="blog">
                        <textarea name="comments" id="comments" cols="40" rows="4"></textarea>
                </form>
                <p>Click to insert a smiley!</p>
                <?php echo $smiley_table; ?> </body> </html>
                When you have created the above controller and view, load it by visiting http://www.example.com/index.php/smileys/
        
        <?php $str = 'Here are some smileys: :-)  ;-)';
$str = parse_smileys($str,base_url().'smileys/');
echo $str; ?>

        </body>
</html>
