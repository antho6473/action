<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./ressources/style/style.css">

<body>

    <?php require_once 'header.php' ?>


    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="./ressources/images/fond1.jpg" class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-4">
                    <h2 class="display-4 fw-bolder text-capitalize">CONCRETISEZ VOTRE DONC DANS LE CADRE DE LA COURSE CONTRE LA FAIM</h1>
                        <button class="btn btn-success px-4 py-2 fs-5 mt-5">FAIRE UN DON À LA COURSE CONTRE LA FAIM <img src="./ressources/images/fleche.svg" alt="" height="20px"></button>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="./ressources/images/fond3.jpg" class="d-block w-100 c-img" alt="Slide 2">
                <div class="carousel-caption top-0 mt-4">
                    <h2 class="display-4 fw-bolder text-capitalize">COMMENT L'AGRICULTURE TRANSFORME LA VIE DES RÉFUGIES</p>
                        <button class="btn btn-success px-4 py-2 fs-5 mt-5" data-bs-toggle="modal" data-bs-target="#booking-modal">Lire <img src="./ressources/images/fleche.svg" alt="" height="20px"></button>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="./ressources/images/fond2.jpg" class="d-block w-100 c-img" alt="Slide 3">
                <div class="carousel-caption top-0 mt-4">
                    <h2 class="display-4 fw-bolder text-capitalize">ACTION CONTRE LA FAIM LANCE SA BOURSE POUR UN NOUVEAU REGARD HUMANITAIRE</p>
                        <button class="btn btn-success px-4 py-2 fs-5 mt-5" data-bs-toggle="modal" data-bs-target="#booking-modal">Lire <img src="./ressources/images/fleche.svg" alt="" height="20px"></button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>


    <!-- Footer -->
    <?php require_once 'footer.php' ?>
    <!-- Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>