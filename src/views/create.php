<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Leads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?action=home">Leads</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?action=home">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="p-4">
        <div class="card">
            <div class="card-header">
                <a href="index.php" class="btn btn-success rounded-pill"><i class="fa-solid fa-angle-left"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row mb-3">
                        <div class="col-12 col-sm-4">
                            <label class="form-label" for="tanggal">Tanggal</label>
                            <input class="form-control" type="date" id="tanggal" name="tanggal"/>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label class="form-label" for="sales">Sales</label>
                            <select class="form-select" id="sales" name="sales">
                                <option class="form-select-option" selected>--Pilih Sales--</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label class="form-label" for="lead">Nama Lead</label>
                            <input class="form-control" type="text" id="lead" name="lead" placeholder="Nama Lead"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <label class="form-label" for="product">Product</label>
                            <select class="form-select" id="product" name="product">
                                <option class="form-select-option" selected>--Pilih Product--</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label class="form-label" for="no_wa">No Whatsapp</label>
                            <input class="form-control" type="text" id="no_wa" name="no_wa" placeholder="No Whatsapp"/>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label class="form-label" for="kota">Kota</label>
                            <input class="form-control" type="text" id="kota" name="kota" placeholder="Asal Kota"/>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-center align-items-center gap-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>