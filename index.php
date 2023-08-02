<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta charset="utf-8">

    <meta name="theme-color" content="#red" />
    <title>Consultar valor de Máquinas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.gstatic.com'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&amp;display=swap'>
    <link rel="stylesheet" href="style.css?19">
    <link rel="stylesheet" href="lineicons.css?">

    <meta property="og:image" content="img/logo_extra_maquinas.png">
    <link rel="icon" href="img/favicon.ico" />
</head>
<body>
<div class="topo-minisite" style="text-align: center;">
    <img class="lazy-loaded" src="img/logo_extra_maquinas.png" data-lazy-type="image" style="max-width: 200px;" title="Extra Máquinas XCMG">
    <span class="title">
        CONSULTA DE VALOR DE MÁQUINA
    </span>
</div>
<main>
    <div class="container">
        <form action="acao.php" method="POST">
            <div class="form-group">
                <label for="maquina">SELECIONE A MÁQUINA:</label>
                <select name="maquina" id="maquina">
                    <option value="LW180KV - SEM KIT">LW180KV - SEM KIT - R$ 270.000,00</option>
                    <option value="LW180KV - COM KIT">LW180KV - COM KIT - R$ 290.000,00</option>
                    <option value="LW300KV - FREIO SECO">LW300KV - FREIO SECO - R$ 460.000,00</option>
                    <option value="LW300KV - FREIO BANHADO A OLEO">LW300KV - FREIO BANHADO A OLEO - R$ 490.000,00</option>
                    <option value="LW300BR - FREIO SECO">LW300BR - FREIO SECO - R$ 475.000,00</option>
                    <option value="LW300BR - FREIO BANHADO A OLEO">LW300BR - FREIO BANHADO A OLEO - R$ 500.000,00</option>
                    <option value="LW350KV - FREIO SECO">LW350KV - FREIO SECO - R$ 520.000,00</option>
                    <option value="LW350KV - FREIO BANHADO A OLEO">LW350KV - FREIO BANHADO A OLEO - R$ 550.000,00</option>
                    <option value="LW500BRI - FREIO HIDRAULICO">LW500BRI - FREIO HIDRAULICO - R$ 750.000,00</option>
                    <option value="LW700 - PADRAO">LW700 - PADRÃO - R$ 1.300.000,00</option>
                    <option value="LW600 - PADRAO">LW600 - PADRÃO - R$ 850.000,00</option>
                    <option value="XE150BRII - PADRAO">XE150BRII - PADRÃO - R$ 600.000,00</option>
                    <option value="XE225BR - PADRAO">XE225BR - PADRÃO - R$ 780.000,00</option>
                    <option value="XE150BRII - PADRAO">XE150BRII - PADRÃO - R$ 600.000,00</option>
                    <option value="XE260BR - PADRAO">XE260BR - PADRÃO - R$ 900.000,00</option>
                    <option value="XE370BR - PADRAO">XE370BR - PADRÃO - R$ 1.350.000,00</option>
                    <option value="XE490DK - PADRAO">XE490DK - PADRÃO - R$ 2.200.000,00</option>
                    <option value="XE750 - PADRAO">XE750 - PADRÃO - R$ 3.700.000,00</option>
                    <option value="XE900D - PADRAO">XE900D - PADRÃO - R$ 4.500.000,00</option>
                    <option value="XE55DA - PADRAO">XE55DA - PADRÃO - R$ 360.000,00</option>
                    <option value="XE80DA - PADRAO">XE80DA - PADRÃO - R$ 390.000,00</option>
                    <option value="XE180BRII - PADRAO">XE180BRII - PADRÃO - R$ 700.000,00</option>
                    <option value="XE15U - PADRAO">XE15U - PADRÃO - R$ 170.000,00</option>
                    <option value="XE17U - PADRAO">XE17U - PADRÃO - R$ 170.000,00</option>
                    <option value="XE27U - PADRAO">XE27U - PADRÃO - R$ 225.000,00</option>
                    <option value="XE35U - PADRAO">XE35U - PADRÃO - R$ 280.000,00</option>
                    <option value="XS123PDBR - PADRAO">XS123PDBR - PADRÃO - R$ 520.000,00</option>
                    <option value="XS123BR - PADRAO">XS123BR - PADRÃO - R$ 500.000,00</option>
                    <option value="XMR403S - PADRAO">XMR403S - PADRÃO - R$ 280.000,00</option>
                    <option value="XMR403SVT - PADRAO">XMR403SVT - PADRÃO - R$ 290.000,00</option>
                    <option value="XD103 - PADRAO">XD103 - PADRÃO - R$ 490.000,00</option>
                    <option value="GR1803BRI - PADRAO">GR1803BRI - PADRÃO - R$ 850.000,00</option>
                    <option value="GR1803BR - PADRAO">GR1803BR - PADRÃO - R$ 850.000,00</option>
                    <option value="XT870BR - PADRAO">XT870BR - PADRÃO - R$ 410.000,00</option>
                    <option value="XT870BRI - PADRAO">XT870BRI - PADRÃO - R$ 410.000,00</option>
                    <option value="XCB-L-20 - PADRAO">XCB-L-20 - PADRÃO - R$ 200.000,00</option>
                    <option value="XCB-L-25 - PADRAO">XCB-L-25 - PADRÃO - R$ 210.000,00</option>
                    <option value="XCB-L-30 - PADRAO">XCB-L-30 - PADRÃO - R$ 230.000,00</option>
                    <option value="XCB-L-35 - PADRAO">XCB-L-35 - PADRÃO - R$ 240.000,00</option>
                </select>
                <br>
                <input class="form-input" type="text" name="valor" id="valor" placeholder="R$ 0,00" inputmode="numeric" required>
                <br>
            </div>
            <div class="form-group">
                <button class="form-button" type="submit" id="submitButton">
                    Consultar
                </button>
            </div>
        </form>
		<div id="resultado">
		</div>
    </div>
</main>

<script>
    const valorInput = document.getElementById('valor');
    const form = document.querySelector('form');
    const resultadoDiv = document.getElementById('resultado');

    valorInput.addEventListener('input', function () {
        let valor = this.value.replace(/\D/g, '');
        valor = (valor / 100).toFixed(2).replace('.', ',');
        const partes = valor.split(',');
        partes[0] = partes[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        valor = 'R$ ' + partes.join(',');
        this.value = valor;
    });

    form.addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(form);

    fetch('acao.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        resultadoDiv.innerHTML = result;
        resultadoDiv.style.display = 'block';
    })
    .catch(error => {
        resultadoDiv.innerHTML = 'Ocorreu um erro ao processar a requisição.';
        resultadoDiv.style.display = 'block';
    });
});
</script>

</body>
</html>
