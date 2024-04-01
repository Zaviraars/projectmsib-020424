<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </style>
</head>

<body>
    <section class="py-5">
        <div class="container">
            <h2 style="text-align: center;">Drama Korea</h2>
            <hr>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="drakor">Pilih Drama Korea:</label>
                    <select class="form-control" name="drakor" id="drakor">
                        <option selected>-- Pilih Drama Korea --</option>
                        <option selected>School 2013</option>
                        <option selected>School 2015</option>
                        <option selected>School 2017</option>
                        <option selected>School 2021</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Episode yang Akan Ditonton:</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" value="1">
                </div>
                <br>
                <input type="submit" name="tonton" value="Tonton" class="btn btn-dark">
            </form>
        </div>
    </section>
</body>