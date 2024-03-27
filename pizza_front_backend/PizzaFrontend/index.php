<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="pizza.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Ügyfelek nyilvántartása</title>

</head>

<body>
    <div class="container">
        <h1>Vevők nyilvántartása</h1>
        <form action="#" method="post" class="row" id="formm">
            <fieldset>
                <legend>Aktuális felhasználó</legend>
                <div class="row">
                    <div class="mb-3 col-3">
                        <label for="azon" class="form-label">Azonosító</label>
                        <input type="text" class="form-control" name="vazon" id="vazon" readonly required>
                    </div>
                    <div class="mb-3 col-9">
                        <label for="nev" class="form-label">Név</label>
                        <input type="text" class="form-control" name="vnev" id="vnev" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12">
                        <label for="szulev" class="form-label">Lakcím</label>
                        <input type="numeric" class="form-control" name="vcim" id="vcim" required>
                    </div>
                    
                </div>
            </fieldset>
            <div class="d-flex flex justify-content-around">
                <button type="button" class="btn btn-outline-success" id="create">Create</button>
                <button type="button" class="btn btn-outline-info" id="read">Read</button>
                <button type="button" class="btn btn-outline-warning" id="update">Update</button>
                <button type="button" class="btn btn-outline-danger" id="delete">Delete</button>
            </div>
        </form>
        <div id="ugyfellista">
           
        </div>
    </div>
</body>

</html>