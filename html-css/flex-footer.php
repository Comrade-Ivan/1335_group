<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Flex-разметка</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /*visible height - высота экрана (100 - весь экран)*/
      /*vw - visible width - ширина экрана (100 - весь экран)*/
    }
    
    header {
      min-height: 200px;
      background-color: rgb(255, 50, 50);
    }
    
    main {
      flex-grow: 1;
    }
    
    footer {
      min-height: 200px;
      background-color: rgb(50, 255, 50);
    }
  </style>
</head>
<body>
  <header></header>
  <main>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, incidunt, harum, iste similique perferendis nihil facilis ut autem repellat quia dignissimos veniam dolore modi. Nam, veniam, corporis, molestiae quae asperiores harum veritatis consectetur debitis reprehenderit quam magnam suscipit quos nobis expedita sunt sequi ad iusto tenetur quia voluptas cumque laboriosam corrupti mollitia aliquam dicta natus tempora tempore officiis quis magni dolores repellat fugit quo. Commodi, veniam, accusamus, sequi magni odit aliquam et tenetur perspiciatis dolorum nihil quas nesciunt illo non quidem nam corrupti modi atque. Molestias, vitae, possimus, quo cum nisi natus voluptatum quos amet voluptates ipsam tempora libero eaque.</p>
  </main>
  <footer></footer>
</body>
</html>