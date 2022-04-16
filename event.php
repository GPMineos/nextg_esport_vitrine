<!--
* ==========================================
* Pierre Gervais
* Studi évaluation
* Site vitrine association
* ==========================================
*
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/default.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/navbar-behavior.js" crossorigin="anonymous"></script>
    <title>NextG - Esport</title>
</head>

<body>
    <!--
    ###
    ### Header that contain menu navigation
    ###
    -->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top" style="padding-left: 6%; padding-right: 6%;">

            <a href="#" style="padding: 0px;" class="navbar-brand text-uppercase font-weight-bold"><img alt="logo" height="32px" src="./assets/logo-1024x1024.png" /></a>
            <div class="text-light"></div>
            <button type="button" data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed navbar-toggler-left">
                <svg xmlns="http://www.w3.org/2000/svg" color="white" width="32" height="32" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Accueil</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link text-uppercase font-weight-bold">Evenements</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="nav-link">
                            <span style="padding-right: 20px;">Rejoignez nous sur les réseaux</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-html="true" href="#">
                            <svg class="icon" alt="facebook" title="facebook" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <title>Facebook</title>
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><svg alt="twitter" title="twitter" class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <title>Twitter</title>
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    !
    <!--
    ###
    ### Header text and all website content
    ###
    -->
    <div class="container-fluid">
        <div class="row pt-4 text-white justify-content-center">
            <!--
            ###
            ### Header text
            ###
            -->
            <header class="header-text px-0" style="margin-top:10px;">
                <div class="content text-center py-5">
                    <h1 class="display-2">NextG Lan #1 | CS:GO | ROCKET LEAGUE | VALORANT</h1>
                    <p class="lead mb-0 fs-2">Du 08/09/2022 au 11/09/2022</p>
                    <a href="#" class="link-info fs-4">Inscivrez-vous !</a>
                </div>
            </header>
            <section class="row" style="padding-left: 5%; padding-right: 5%;">
                <!--
            ###
            ### Content that contain some new/actuality
            ###
            -->
                <section class="col-md-12 col-lg-12 mt-5">
                    <h4>Ouverture des inscriptions</h4>
                    <p>Est labore labore veniam ex proident culpa aliquip qui ut enim. Proident deserunt deserunt et mollit anim nostrud esse esse dolor id ipsum reprehenderit. Ullamco commodo eiusmod anim fugiat. Dolor elit eu irure non anim occaecat excepteur
                        incididunt deserunt dolor ea adipisicing nisi incididunt. Incididunt culpa cupidatat enim irure. Pariatur nisi ex occaecat culpa ullamco aliquip commodo. Ex ullamco elit fugiat amet.</p>
                    <p>Est labore labore veniam ex proident culpa aliquip qui ut enim. Proident deserunt deserunt et mollit anim nostrud esse esse dolor id ipsum reprehenderit. Ullamco commodo eiusmod anim fugiat. Dolor elit eu irure non anim occaecat excepteur
                        incididunt deserunt dolor ea adipisicing nisi incididunt. Incididunt culpa cupidatat enim irure. Pariatur nisi ex occaecat culpa ullamco aliquip commodo. Ex ullamco elit fugiat amet.</p>

                    <div class="row mt-4 mb-4">
                        <div class="col-sm-12 col-lg-4 mt-lg-0 mt-sm-3">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <h3 class="card-title">3500€ de cash prize !</h3>
                                    <p class="card-text">
                                        Notre association à réalisé beaucoup d'effort afin de vous fournir de belle dotation ! Plus de 3500€ de cash prize ! Plus de 700€ de lot à remporter Des stand avec differente activité, VR, Simulation
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 mt-lg-0 mt-sm-3">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <h3 class="card-title">Plus de 700€ de lots !</h3>
                                    <p class="card-text">
                                        Notre association à réalisé beaucoup d'effort afin de vous fournir de belle dotation ! Plus de 3500€ de cash prize ! Plus de 700€ de lot à remporter Des stand avec differente activité, VR, Simulation
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 mt-lg-0 mt-sm-3">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <h3 class="card-title">Retrouvez pleins d'activités de GEEK !</h3>
                                    <p class="card-text">
                                        Notre association à réalisé beaucoup d'effort afin de vous fournir de belle dotation ! Plus de 3500€ de cash prize ! Plus de 700€ de lot à remporter Des stand avec differente activité, VR, Simulation
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <p>Qui et voluptate sint laboris. Nostrud Lorem do officia esse officia nisi et laborum elit culpa aute occaecat mollit. Labore consequat eiusmod ipsum dolore est ad voluptate non ut aliqua ut dolor.</p>
                        <p>Sit magna nulla sint aliqua ut dolor officia sunt dolore nisi duis cillum. Officia sunt anim sint culpa ea eiusmod tempor duis pariatur officia occaecat. Aute officia nulla magna mollit ullamco laborum et laboris cupidatat dolore
                            mollit cillum. Fugiat culpa ea et aliquip voluptate consequat Lorem voluptate nisi duis anim. Ullamco do exercitation fugiat voluptate dolor. Ipsum dolore laboris mollit incididunt qui mollit laboris ut.</p>
                        <p>Pariatur reprehenderit eiusmod incididunt incididunt elit voluptate adipisicing do culpa cillum occaecat do. Adipisicing nulla eu amet magna reprehenderit culpa pariatur. Voluptate occaecat officia cillum cupidatat proident consequat
                            dolore. Nostrud excepteur magna elit pariatur non quis. Tempor commodo consectetur ex culpa officia eiusmod velit commodo voluptate laborum minim quis. Commodo ea sit labore cillum elit ut in reprehenderit cupidatat. Non id
                            laboris magna cillum fugiat ullamco dolore.</p>
                        <p>Sit magna nulla sint aliqua ut dolor officia sunt dolore nisi duis cillum. Officia sunt anim sint culpa ea eiusmod tempor duis pariatur officia occaecat. Aute officia nulla magna mollit ullamco laborum et laboris cupidatat dolore
                            mollit cillum. Fugiat culpa ea et aliquip voluptate consequat Lorem voluptate nisi duis anim. Ullamco do exercitation fugiat voluptate dolor. Ipsum dolore laboris mollit incididunt qui mollit laboris ut.</p>

                    </div>
                </section>
        </div>
    </div>
    <!--
    ###
    ### Footer that contain copyright, newsletter and some utils links
    ###
    -->
    <footer class="bg-dark text-center text-lg-start text-white mt-5">
        <!-- Newsletter register -->
        <div class="container p-4 pb-0">
            <form action="#">
                <div class="row justify-content-md-center">
                    <div class="col-auto mb-4 mb-md-0">
                        <p class="pt-2">
                            <strong>Inscris-toi à notre newsletter</strong>
                        </p>
                    </div>
                    <div class="col-md-5 col-12 mb-4 mb-md-0">
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example25" placeholder="Votre email" class="form-control" />
                        </div>
                    </div>
                    <div class="col-auto mb-4 mb-md-0">
                        <button type="submit" class="btn btn-primary mb-4">
                            Inscription
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Newsletter register -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-light" href="https://nextg-esport.com/">france-esport.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</script>

</html>