<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        thead th {

            background-color: transparent !important;
            color: white !important;
        }
        tbody td {
            border: 1px solid white !important;
            border-bottom: none !important;
            background-color: #d7e4ed !important;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="d-flex  flex-column align-items-center" style="background-color: #f5f7fa;">
        <div class="bg-white border rounded mt-3 mb-3" style="width: 65%;">
            <!-- Header -->
            <?php include __DIR__ . '/layout/header.php'; ?>
            <!-- Content -->
             <?php
            require_once '../controller/RegisterController.php';
            require_once '../controller/IndexController.php';
            require_once '../controller/LoginController.php';
            require_once '../controller/AuthorController.php';
            $action = $_REQUEST['action'] ?? 'home';

            switch ($action) {
                case 'register':
                    $controller = new RegisterController();
                    $controller->goToRegisterPage();
                    break;
                case 'login':
                    $controller = new LoginController();
                    $controller->goToLoginPage();
                    break;
                case 'author':
                    $controller = new AuthorController();
                    $controller->goToAuthorPage();
                    break;
                case 'home':
                default:
                    $controller = new IndexController();
                    $controller->goToHomePage();
                    break;
            }
            ?>
            <!-- Footer -->
            <?php include __DIR__ . '/layout/footer.php'; ?>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        });
        function togglePassword() {
            const passwordInput = document.getElementById("exampleInputPassword1");
            const toggleBtn = event.target;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleBtn.textContent = "Hide password";
            } else {
                passwordInput.type = "password";
                toggleBtn.textContent = "Show password";
            }
        }
    </script>
    <script src="../public/js/app.js" type="module"></script>
</body>

</html>