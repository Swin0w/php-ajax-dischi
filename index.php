<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- JS VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
  </head>
  <body>
    <div id="app">
      <div id="center" class="container-c">
        <ul>
          <li v-for="elem in disc">
            <div class="card">
              <img :src="elem.poster" alt="">
              <h1>{{elem.title}}</h1>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
