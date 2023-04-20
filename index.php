<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Criptografia de Cesar</title>
</head>

<body>
    <div class="container p-3 m-2">
        <h1>Criptografia de Cesar</h1>
    </div>
    <hr>
    <?= $alert ?? ''; ?>
    <div class="container p-1">
        <form method="post" action="crypt.php">
            <div class="row g-3 align-items-center ">
                <div class="col-auto">
                    <label for="exemploMessage" class="form-label">Mensagem:</label>
                    <input type="text" id="encryptMsg" class="form-control-lg" for="exemploMessage" min="1" max="100" name="msg">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">Mensagem até 100 caracteres.</span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="exempleValueKey" class="form-label">Valor da chave:</label>
                    <input type="number" id="encryptMsg" class="form-control-lg" for="exempleValueKey" min="0" max="26" name="key">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">Valor de chave até 26</span>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" name="button" value="crypt">Criptografar</button>
                <button class="btn btn-secondary" name="button" value="decrypt">Descriptografar</button>
            </div>
        </form>
        <div class="p-3 col-5 align-items-center">
            <input class="form-control" id="encryptMsg" type="text" value="<?= $stringCrypt ?? ''; ?>" aria-label="Disabled input example" disabled>
        </div>
    </div>
</body>

</html>
