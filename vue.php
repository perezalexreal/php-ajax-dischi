<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>

<body>

<div id="app">
<div>
        <div class="main-container">
            <div v-for="album in albumList" class="card">
                <img :src="album.poster" alt="" />
                
                <h1>{{ album.title }}</h1>
                <p>{{ album.author}}</p>
                <p>{{ album.year}}</p>
            </div>
        </div>

    </div>
</div>
</body>

<script>

var app = new Vue({
      el: '#app',
      data: {
        albumList : [],
      },
      mounted() {
          axios.get("http://localhost:8888/repo-php-ajax-dischi/api/api.php").then(result => {
              this.albumList = result.data;
          })
      }
    })

</script>

</html>