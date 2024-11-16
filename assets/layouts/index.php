<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 center text-center">
                <form id="signo-form" method="POST" action="show_zodiac_sign.php">
                    <div class="form-group">
                        <label for="data_nascimento" class="mb-1 mt-3">Data de Nascimento</label>
                        <input type="date" class="form-control mb-4" id="data_nascimento" name="data_nascimento" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Descubra</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>