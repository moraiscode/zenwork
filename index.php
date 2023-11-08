<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenwork - Equipe Nathan Amorim</title>

    <!-- Meta Tags para SEO -->
    <meta name="description" content="Posicione-se como a primeira escolha dos pacientes através do marketing médico. Atraia mais clientes e fortaleça sua presença online.">
    <meta name="keywords" content="marketing médico, pacientes, presença online, escolha dos pacientes">
    <meta name="author" content="Nathan Amorim">

    <!-- Meta Tags do Open Graph para redes sociais (Facebook, Twitter, etc.) -->
    <meta property="og:title" content="Marketing Médico: Sua Primeira Escolha">
    <meta property="og:description" content="Posicione-se como a primeira escolha dos pacientes através do marketing médico. Atraia mais clientes e fortaleça sua presença online.">
    <meta property="og:image" content="seo/metaotg.jpg">
    <meta property="og:url" content="https://app.nathan.marketing/">
    <meta property="og:type" content="website">

    <!-- Meta Tags do Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@SeuUsuarioNoTwitter">
    <meta name="twitter:title" content="Marketing Médico: Sua Primeira Escolha">
    <meta name="twitter:description" content="Posicione-se como a primeira escolha dos pacientes através do marketing médico. Atraia mais clientes e fortaleça sua presença online.">
    <meta name="twitter:image" content="seo/metaotg.jpg">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="seo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="seo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="seo/favicon-16x16.png">
    <link rel="manifest" href="seo/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <!-- <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3> -->
                    <img src="seo/favicon40_nome.png" class="imgnavbar" alt="">
                </a>

                <!-- <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div> -->

                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-users me-2"></i>Clientes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Atualizações</a>
                            <a href="#" class="dropdown-item">Lista de Tarefas</a>
                            <a href="#" class="dropdown-item">Calendário</a>
                            <a href="#" class="dropdown-item">Reuniões</a>
                            <a href="#" class="dropdown-item">Domínios e Hospedagens</a>
                            <a href="#" class="dropdown-item">Acesso Externo</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-clone me-2"></i>Copy</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Briefing</a>
                            <a href="#" class="dropdown-item">Checklist</a>
                            <a href="#" class="dropdown-item">Mockups</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-wallet me-2"></i>Financeiro</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Contratos</a>
                            <a href="#" class="dropdown-item">Pagamentos</a>
                        </div>
                    </div>

                    <hr class="hr amarelo" />

                    <a href="#" class="nav-item nav-link"><i class="fas fa-chart-line me-2"></i>Relatórios</a>
                    <a href="#" class="nav-item nav-link"><i class="fab fa-wikipedia-w me-2"></i></i>Wiki</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-tools me-2"></i>Ferramentas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Whatsapp</a>
                            <a href="#" class="dropdown-item">ChatGPT</a>
                            <a href="#" class="dropdown-item">Google Ads</a>
                            <a href="#" class="dropdown-item">Netlix</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Configurações</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Usuários</a>
                            <a href="#" class="dropdown-item">Meu Perfil</a>
                            <a href="#" class="dropdown-item">Estágios (CRM)</a>
                            <a href="#" class="dropdown-item">Origens</a>
                        </div>
                    </div>

                    <hr class="hr amarelo" />

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-life-ring me-2"></i>Suporte</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Manuais</a>
                            <a href="#" class="dropdown-item">FAQ</a>
                            <a href="#" class="dropdown-item">Mensagens</a>
                            <a href="#" class="dropdown-item">Código</a>
                        </div>
                    </div>

                    <a href="#" class="nav-item nav-link"><i class="fas fa-info me-2"></i>Logs</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <!-- <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a> -->
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificações</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Novo Cliente Cadastrado</h6>
                                <small>15 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Atualizaçõa de Sistema</h6>
                                <small>2 horas</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Novo Pagamento</h6>
                                <small>14 dias</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Veja todas as Notificações</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/nathan.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Nathan Amorim</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="#" class="dropdown-item">Configurações</a>
                            <a href="#" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Renda Mensal</p>
                                <h6 class="mb-0">R$ 15.347,41</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Custos Totais</p>
                                <h6 class="mb-0">R$ 8.987,33</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Clientes</p>
                                <h6 class="mb-0">17 <sup>+3 novos</sup></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pagamentos</p>
                                <h6 class="mb-0">R$ 8.152,73</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"><a href="" data-bs-toggle="modal" data-bs-target="#addRowModal"><i class="fas fa-user-plus"></i></a></h6>
                        <!-- <h6 class="mb-0"><a href=""><i class="fas fa-file-export"></i></a></h6> -->
                        <a href="">Mostrar tudo</a>
                    </div>

                    <div class="table-responsive">

                        <!-- Modal -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-secondary rounded">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addRowModalLabel">Adicionar Novo Trabalho</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: left;">
                                        <div class="mb-3">
                                            <label for="newTrabalho" class="form-label">Trabalho</label>
                                            <input type="text" class="form-control" id="newTrabalho">
                                        </div>
                                        <div class="mb-3">
                                            <label for="newStatus" class="form-label">Status</label>
                                            <select class="form-select" id="newStatus">
                                                <option selected value="Aguardando">Aguardando</option>
                                                <option value="Não Iniciado">Não Iniciado</option>
                                                <option value="Cancelado">Cancelado</option>
                                                <option value="Parado">Parado</option>
                                                <option value="Iniciado">Iniciado</option>
                                                <option value="Concluído">Concluído</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="addNewRow()">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <table class="table text-start align-middle table-bordered table-hover mb-0">

                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
<<<<<<< HEAD
                                    <th scope="col" style="padding-right: 8em;">Trabalho</th>
                                    <th scope="col" style="padding-right: 7em;">Status</th>
                                    <!-- <th scope="col" style="padding-right: 7em;">Status</th> -->
=======
                                    <th scope="col" style="padding-right: 6em;">Trabalho</th>
                                    <th scope="col">Status</th>
>>>>>>> parent of 3293805 (udpate)
                                    <th scope="col">Copy</th>
                                    <th scope="col">LP</th>
                                    <th scope="col">Google</th>
                                    <th scope="col">Instagram</th>
                                </tr>
                            </thead>

                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                            <tbody id="tableBody"></tbody>

                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Atualizações</h6>
                                <a href="">Mostrar tudo</a>
                            </div>

                            <!-- Atualizações -->
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/felipe.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Felipe Morais</h6>
                                        <small>2 dias atrás</small>
                                    </div>
                                    <span>Liberação de escopo do sistema</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/felipe.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Felipe Morais</h6>
                                        <small>1 semana</small>
                                    </div>
                                    <span>Versão Mobile Concluída</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calendário</h6>
                                <a href="">Mostrar tudo</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Lista de Tarefas</h6>
                                <a href="">Mostrar tudo</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-dark border-0" type="text" placeholder="Adicionar Tarefa">
                                <button type="button" class="btn btn-primary ms-2">
                                    Adicionar</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Lorem ipsum dolor sit amet</del></span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Lorem ipsum dolor sit amet</del></span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Lorem ipsum dolor sit amet</del></span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                        <!-- <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Lorem ipsum dolor sit amet</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Lorem ipsum dolor sit amet</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="https://nathan.marketing/" target="_blank">Nathan Amorim</a>, Todos os
                            Direitos Reservados.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">

                            Desenvolvido por <a href="https://www.instagram.com/moraiscode/" target="_blank">Felipe
                                Morais</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Exemplo de script JSON-LD para SEO -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Nathan Amorim",
            "url": "https://app.nathan.marketing/",
            "name": "Nathan Amorim",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55-61-98653-5340",
                "contactType": "Desenvolvedor"
            }
        }
    </script>

    <!-- Alterar classes dos botões -->
    <script src="js/alterarBotao.js"></script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>