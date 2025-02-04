<!doctype html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>PHP and AJAX example</title>
        <link
            rel="stylesheet"
            href="./assets/css/bulma.min.css"/>
        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>
    <body>
        <main>
            <section class="section">
                <div class="columns is-desktop">
                    <div class="card">
                        <h2 class="has-text-link has-text-centered">
                            PHP and AJAX Example
                        </h2>
                        <div class="card-content">
                            <div class="content">
                                <div class="field">
                                    <p
                                        class="control has-icons-left has-icons-right"
                                    >
                                        <input
                                            class="input"
                                            type="email"
                                            placeholder="Email"
                                        />
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input
                                            class="input"
                                            type="password"
                                            placeholder="Password"
                                        />
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <button class="button is-success">
                                            Login
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>
<div class="modal">
   <div class="modal-background"></div>
   <div class="modal-card">
      <header class="modal-card-head">
         <p class="modal-card-title">Modal title</p>
         <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
          <!-- Content ... -->
      </section>
      <footer class="modal-card-foot">
         <div class="buttons">
            <button class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
         </div>
      </footer>
   </div>
</div>   
     <script src="./assets/js/jquery-3.7.1.min.js"></script>
     <script src="./assets/js/main.js"></script>
    </body>
</html>
