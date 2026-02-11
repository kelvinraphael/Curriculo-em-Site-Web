<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Currículo - Kelvin Raphael</title>

<style>
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f2f5;
    color: #333;
}

.container {
    max-width: 900px;
    margin: 40px auto;
    background: #fff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

/* Header */
.header {
    display: flex;
    align-items: center; /* Alinha imagem e texto verticalmente */
    justify-content: flex-start;
    margin-bottom: 30px;
}

.header img {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    object-fit: cover; /* Preenche o círculo sem deformar */
    border: 3px solid #007bff;
    margin-right: 25px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    flex-shrink: 0; /* Impede que a imagem encolha */
}

.header div {
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centraliza o texto verticalmente com a imagem */
}

.header h1 {
    font-size: 28px;
    margin-bottom: 5px;
}

.subtitle {
    font-weight: bold;
    color: #007bff;
    margin-bottom: 10px;
}

.info {
    font-size: 14px;
    line-height: 1.6;
}

/* Main content */
.main {
    display: flex;
    gap: 30px;
}

.left {
    width: 60%;
}

.right {
    width: 40%;
}

/* Sections */
.section {
    margin-bottom: 30px;
}

.section h2 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #007bff;
    border-bottom: 2px solid #007bff;
    padding-bottom: 4px;
}

.section p, .section ul {
    font-size: 14px;
    line-height: 1.6;
}

ul {
    padding-left: 20px;
}

ul li {
    margin-bottom: 6px;
}

/* Hover leve no texto do resumo */
.section p:hover {
    color: #007bff;
    transition: 0.3s;
}

/* Responsivo */
@media(max-width: 768px) {
    .main {
        flex-direction: column;
    }
    .left, .right {
        width: 100%;
    }
    .header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .header img {
        margin-right: 0;
        margin-bottom: 15px;
    }
}
</style>

</head>
<body>

<div class="container">

    <!-- Header -->
    <div class="header">
        <img src="img/sua-foto.jpg.jpg" alt="Foto">
        <div>
            <h1>KELVIN RAPHAEL DE SOUZA PEREIRA</h1>
            <div class="subtitle">Estagiário de T.I</div>
            <div class="info">
                📞 (61) 985110363 <br>
                📧 kelvinraphael05@gmail.com <br>
                📍 Ceilândia - DF <br>
                🔗 linkedin.com/in/kelvin-raphael
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="main">

        <!-- Left column -->
        <div class="left">

            <div class="section">
                <h2>RESUMO</h2>
                <p>
                Estudante de Análise e Desenvolvimento de Sistemas, em transição de carreira para a área de TI. 
                Possuo experiência com atendimento ao público, desenvolvendo comunicação e organização. 
                Busco oportunidade para aplicar meus conhecimentos e evoluir profissionalmente.
                </p>
            </div>

            <div class="section">
                <h2>EXPERIÊNCIA</h2>
                <p><strong>Frentista - Qualitycombustíveis</strong> (08/2023 - Presente)</p>
                <ul>
                    <li>Atendimento ao cliente</li>
                    <li>Suporte ao sistema do posto</li>
                    <li>Controle de vendas e pagamentos</li>
                </ul>

                <p><strong>Jovem Aprendiz - Qualitycombustíveis</strong> (09/2022 - 08/2023)</p>
                <ul>
                    <li>Auxílio no atendimento</li>
                    <li>Organização administrativa</li>
                </ul>
            </div>

        </div>

        <!-- Right column -->
        <div class="right">

            <div class="section">
                <h2>EDUCAÇÃO</h2>
                <p><strong>Análise e Desenvolvimento de Sistemas</strong><br>
                Centro Universitário Unieuro (2024 - Presente)</p>

                <p><strong>Técnico em TI</strong><br>
                Escola Técnica de Ceilândia (2022 - 2023)</p>
            </div>

            <div class="section">
                <h2>CURSOS</h2>
                <ul>
                    <li>Ciência de Dados</li>
                    <li>Python</li>
                    <li>Pacote Office</li>
                    <li>Inglês</li>
                </ul>
            </div>

        </div>

    </div>

</div>

</body>
</html>
