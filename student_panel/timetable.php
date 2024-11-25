
<?php include("../assets/noSessionRedirect.php"); ?>
<?php include("./verifyRoleRedirect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Aluno</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="">
            <h2>E<span class="danger">R</span>P</h2>
        </div>
        <div class="navbar">
            <a href="index.php">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="timetable.php" class="active" onclick="timeTableAll()">
                <span class="material-icons-sharp">hoje</span>
                <h3>Tabela de horários</h3>
            </a> 
            <a href="exam.php">
                <span class="material-icons-sharp">visualização_em_grade</span>
                <h3>Exame</h3>
            </a>
            <a href="workspace.php">
                <span class="material-icons-sharp">descrição</span>
                <h3>Espaço de trabalho</h3>
            </a>
            <a href="password.php">
                <span class="material-icons-sharp">senha</span>
                <h3>Alterar a senha</h3>
            </a>
            <a href="logout.php">
                <span class="material-icons-sharp">Sair</span>
                <h3>Sair</h3>
            </a>
        </div>
        <div id="profile-btn" style="display: none;">
            <span class="material-icons-sharp">pessoa</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">modo_de_luz</span>
            <span class="material-icons-sharp">modo_escuro</span>
        </div>
        
    </header>

    <main style="margin: 0;">
        <div class="timetable active" id="timetable">
            <div>
                <span id="prevDay">&lt;</span>
                <h2>Horário de hoje</h2>
                <span id="nextDay">&gt;</span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Hora de início</th>
                        <th>Fim dos tempos</th>
                        <th>Assunto</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </main>

</body>

<script src="timeTable.js"></script>
<script src="app.js"></script>
</html>