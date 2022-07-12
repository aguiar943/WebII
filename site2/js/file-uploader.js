var $upload = document.getElementById('upload-fotos-produto');

var $nomeArquivo = document.getElementById('nome-foto-produto');

var $uploadDetalhe = document.getElementById('upload-fotos-detalhe');

var $nomeDetalhe = document.getElementById('nome-foto-detalhe');

$upload.addEventListener('change', function()
    {

        $nomeArquivo.textContent = this.files[0].name;

    }
);

$uploadDetalhe.addEventListener('change', function()
    {

        $nomeDetalhe.textContent = this.files[0].name;

    }
);
