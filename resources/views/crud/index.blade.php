<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type "text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <title>CRUD</title>
</head>
<body>
<header>Hello</header>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Pass</th>
                <th>
                    <a class="btn btn-sm btn-success" href="crud/create">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($user as $key => $user): ?>
            <tr>
                <td><?= $key+1; ?></td>
                <td><?=$user->name?></td>
                <td><?= $user->email; ?> </a></td>
                <td><?= $user->password; ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="edit.php?id=<?=$user->id ?>">Sua</a>
                    <a class="btn btn-sm btn-danger" href="crud/delete/{{$user->id}}">Xoa</a>
                </td>
            </tr>
            
        <?php endforeach ?>

        </tbody>
    </table>


</body>
</html>