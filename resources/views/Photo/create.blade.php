<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="container my-5">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <h1>Prontuario Médico</h1>
                <form action="{{route('photo.store')}}" method="post" class="row g-3 needs-validation">
                    @csrf
                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="validationCustom01" placeholder="nome" required>

                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Idade</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Idade" required>

                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Sexo</label>
                        <select class="form-select" id="validationCustom04"  required>
                            <option selected value="masculino">Masculino</option>
                            <option selected value="feminino">Feminino</option>
                        </select>
                        
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">Sangue tipo:</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Sangue tipo" required>

                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Nacionalidade</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="nacionalidade" required>
                        
                    </div>
                    
                    <div class="col-12">
                        <label for="formFile" class="form-label">imagem</label>
                        <input class="form-control" type="file" id="formFile" placeholder="imagem">
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </form>

            </div>
            <div class="col-4">

            </div>

        </div>
    </div>

</body>

</html>