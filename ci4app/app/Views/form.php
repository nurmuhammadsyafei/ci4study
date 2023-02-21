<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>submit demo</title>
    <style>
        p {
            margin: 0;
            color: blue;
        }

        div,
        p {
            margin-left: 10px;
        }

        span {
            color: red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>

<body>

    <p>Type 'correct' to validate.</p>
    <form action="javascript:alert( 'success!' );" id="formtag">
        <div>
            <input type="text">
            <input type="submit">
        </div>
    </form>
    <span></span>

    <script>
        $("form").submit(function(event) {
            if ($("input").first().val() === "correct") {
                $("span").text("Validated...").show();
                return;
            }

            $("span").text("Not valid!").show().fadeOut(1000);
            event.preventDefault();
        });
    </script>

</body>

</html>








<?php die(); ?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.O.R.M</title>
</head>

<body>



    <form>
        <input type="radio" name="foo" value="1" checked="checked" />
        <input type="radio" name="foo" value="0" />
        <input name="bar" value="xxx" />
        <select name="this">
            <option value="hi" selected="selected">Hi</option>
            <option value="ho">Ho</option>
    </form>




</body>

</html>