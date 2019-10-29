<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div id='app'>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">To Do Count:</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='to_do in to_dos'>
                    <th scope="row">@{{ to_do.name }}
                        <button class="btn btn-primary"
                        v-on:click='addToDoing(to_do)'>move to doings
                            
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>
          <table class="table">
            <thead>
                <tr>
                    <th scope="col">Doing Count:</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='doing in doings'>
                    <th scope="row">@{{ doing.name }}
                        <button class="btn btn-primary">move to doings
                            
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>
          <table class="table">
            <thead>
                <tr>
                    <th scope="col">Done Count:</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='done in dones'>
                    <th scope="row">@{{ done.name }}
                        <button class="btn btn-primary">move to doings
                            
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>



    </div>
   



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
        var vm = new Vue({
            el: '#app',
            data: {
                to_dos: [
                    {'id': 1, 'name': 'Walk the dog', 'is_important': 1},
                    {'id': 2, 'name': 'Walk the cat', 'is_important': 0},
                    {'id': 3, 'name': 'Walk the turtle', 'is_important': 0},
                    {'id': 4, 'name': 'Walk the lion', 'is_important': 0},
                    {'id': 5, 'name': 'Walk the panda', 'is_important': 1},
                    {'id': 6, 'name': 'Walk the walk', 'is_important': 1},
                ],
         
            
            doings:[],
            dones:[],
        },
            methods: {
                addToDoing(to_do){
                    this.doings.push(to_do);
                    var index = this.to_dos.indexOf(to_do);
                    this.to_dos.splice(index, 1);
                }
            }

        })
    </script>



  </body>
</html>