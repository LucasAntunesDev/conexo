<a id="readme-top"></a>

<div align="center">
  <h1 align="center">Clone do Conexo</h1>

<img src="https://lucasantunesdev.github.io/LucasAntunes.dev/src/imgs/conexo-clone.gif">

  <p align="center">
    Trabalho de <strong>Desenvolvimento de Sistemas</strong> de um clone do jogo online <a href="conexo.ws">conexo.ws</a> que permita:
    <ol>
        <li>a criação de jogos temáticos, de acordo com a disiplina de que o professor leciona. Dessa forma, um professor de Fundamentos de Redes de Computadores, por exemplo, pode criar jogos com palavras relacionadas à sua matéria.</li>
        <li>criar, ler, editar e exluir dados (CRUD) dos seguintes módulos: 
        <ul align="left">
            <li>Palavras</li>
            <li>Categorias (de palavras)</li>
            <li>Disciplinas (em que cada categoria faz parte)</li>
            <li>Professores (que criam jogos de acordo com o tema das disciplinas)</li>
        </ul>
        </li>
    </ol>
  </p>
</div>

<a id="tecnologias"></a>

### Tecnologias 💻

O software foi contruido com as seguintes tecnologias:

<img src="https://camo.githubusercontent.com/66b0abc7b36a5cc492bfeb18961f1d6d07440089dff857ef45732c7e9c6ea712/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d4646324432303f7374796c653d666f722d7468652d6261646765266c6f676f3d6c61726176656c266c6f676f436f6c6f723d7768697465">
<img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
<img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white">
<img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white">

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<a id="instalacao"></a>

## Instalação e uso📥

_Aqui está uma explicação passo a passo de como instalar e, posteriormente, usar o sistema._

1. Clone o repositório
    ```sh
    git clone https://github.com/LucasAntunesDev/conexo.git
    ```
2. Instale as dependências
    ```sh
    composer install
    ```
    ```sh
    npm install
    ```
3. Crie m arquivo .env
    ```
    cp .env.example .env
    ```
4. Criar uma chave da aplicação
    ```
    php artisan key:generate
    ```
5. Crie as migrations
    ```
    php artisan key:generate
    ```
6. Crie as seeders
    ```
    php artisan migrate --seed
    ```
7. Rode o servidor
    ```
    npm run dev
    ```

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>
