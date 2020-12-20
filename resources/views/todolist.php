<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Todolist</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- JQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!-- Vue.JS-->
        <!-- development version, includes helpful console warnings -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <style>
            .todolist-wrapper{
                border: 1px solid #cccccc;
                min-height: 100px;
            }
        </style>
</head> 
<body>
    <div class="container">
        <div id="app">
            <div id="row ">
                <div class="col-sm-3"></div>
                    <div class="col-sm-6 ">
                        <div class="todolist-wrapper ">

                        </div>
                    </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>

    <script>
        var vue = new Vue({
            el:"app",
            data:{

            },
            methods:{

            }
        });
    </script>
</body>
</html>