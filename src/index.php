<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <style>
        body {
            background-color: #cde2ff;
        }

        .tui {
            width: 950px;
            height: auto;
            background-color: #FFFFFF;
            box-shadow: 0 0 3px 3px #999999;
            -moz-box-shadow: 0px 0px 8px #999999;
            -webkit-box-shadow: 0px 0px 8px #999999;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .table-main {
            background-color: #FFFFFF;
            border-radius: 16px;
            padding: 8px;
            box-shadow: 0 0 3px 3px #999999;
        }
    </style>
</head>

<body>
    <center>
        <table width="70%" class="table-main">
            <tr>
                <td>
                    <?php require_once('./banner.php'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php require_once('./top-menu.php'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <iframe src="frame.html" width="100%" height="1500" frameborder="0" scrolling="no"></iframe>
                </td>
            </tr>
        </table>
    </center>
</body>