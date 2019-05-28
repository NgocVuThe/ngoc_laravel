
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type "text/css" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table class = "table table-bordered">
            <thead>
                <th>Name</th>
                <th>Pass</th>
                <th>Email</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name = "user_name">
                    </td>
                    <td>
                        <input type="text" name = "user_pass">
                    </td>
                    <td>
                        <input type="text" name ="user_email">
                    </td> 
                </tr>
            </tbody>
        </table>
        <input type = "submit" name = "insert" value="Insert"></button>
    </form>
</body>
</html>