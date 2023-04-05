<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="css/style.css">
    <!--font awesome cdnjs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- javascript -->
    <script src="js/script.js" defer></script>
    <!-- avatar -->
    <link rel="stylesheet" href="css/avatar.css" />
</head>

<body>
    <div class="todo-container">
        <header>
            <div class="avatar">
                <img  class="avatar__img"  src="https://i.pravatar.cc/150?img=8" alt="Elena Rossi">
                <div class="avatar__user"> Aldo Verdi</div>
            </div>
            <h1 class="h1-title">TODO List</h1>
        </header>
        <form id="todo-form">
            <p>Aggiungi task</p>
            <div class="form-control">
                <input type="text" id="todo-input" placeholder="Cosa farai?">
            </div>
            <form id="datepicker">
                <p>Scadenza</p>
                <div class="form-control">
                    <input type="date" placeholder="Cosa farai?">
                    <button type="submit">
                        <i class="fa-thin fa-plus"></i>
                    </button>
                </div>
            </form>
        </form>

        <form id="edit-form" class="hide">
            <p>Edita task</p>
            <div class="form-cotrol">
                <input type="text" name="" id="edit-input">
                <button type="submit">
                    <i class="fa-solid fa-check-double">

                    </i>
                </button>
            </div>
            <button id="cancel-edit-btn">Cancel</button>
        </form>

        <div id="toolbar">
            <div id="search">
                <h4>Ricerca</h4>
                <form>
                    <input type="text" name="search-input" placeholder="Cerca">
                    <button id="erase-button">
                        <i class="fa-solid fa-delete-left"></i>
                    </button>
                </form>
            </div>
        </div>

        <div id="toolbar">
            <div id="filter">
                <h4>Filtra</h4>
                <select id="filter-select">
                    <option value="all">tutti</option>
                    <option value="done">completati</option>
                    <option value="todo">da fare</option>
                </select>
            </div>
        <form id="datepicker">
            <div id="date-filter">
                <h4>Filtra per data</h4>
                <div class="form-control datepicker">
                    <input type="date">
                    <button type="submit">
                        <i class="fa-thin fa-plus"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
        <div id="todo-list">
            <div class="todo done">
                <h3>Task</h3>
                <button class="finish-todo">
                    <i class="fa-solid fa-check"></i>
                </button>
                <button class="edit-todo">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button class="remove-todo">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
        <div id="todo-list">
            <div class="todo">
                <h3>Task</h3>
                <button class="finish-todo">
                    <i class="fa-solid fa-check"></i>
                </button>
                <button class="edit-todo">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button class="remove-todo">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    </div>
    


</body>
</html>