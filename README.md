# CakePHP3 Upload Component

Este Componente tem como funcao receber o array doo arquivo, alterar o nome do mesmo para um hash gerado apartir da função uniqid() do php e retornar o nome para o controller para poder ser gravado no banco.

## Instalação

Faça o download do arquivo UploadComponent.php e salve-o na no diretório src/Controller/Component/ do seu projeto.

## Configuração

Em seu Controller adicione:

```php
    public function initialize() {
        $this->loadComponent('Upload');
    }
```

## Exemplo

View:

```php
    echo $this->Form->create(null, ['enctype' => 'multipart/form-data']);
    echo $this->Form->input('name');
    echo $this->Form->input('file', ['type' => 'file']);
    echo $this->Form->submit();
    echo $this->Form->end();
```

Controller:

```php
    if ($this->request->is('post')) {
        $data = $this->request->data;
        $filename = $this->Upload->uploadArquivo($data['file']);
        $data['file'] = $filename;
        ...
    }
```

## Obrigado
    
   Alexandre Hentges Kaspary
