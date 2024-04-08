<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>личный кабинет пользователя</title>
  <style>
    .container {
      margin: auto;
      max-width: 1200px;
      font-size: 1.5rem;

      h1 {
        color: brown;
        text-align: center;
        margin-top: 2rem;
        margin-bottom: 2rem;
      }
    }
    input{
      font-size: 1.5rem;
    }

    p>span:nth-child(1) {
      font-weight: 700;
      color: orangered;
    }

    p>span:nth-child(2) {
      font-style: italic;
      color: red;
    }

    .edit-btn {
      padding: 0.5rem;
      border: 1px solid green;
      background-color: green;
      border-radius: 8px;
      color: white;
    }

    .edit-btn:hover {
      background-color: darkgreen;
      border: 1px solid darkgreen;
      cursor: pointer;
    }
     .save-btn {
      padding: 0.5rem;
      border: 1px solid gold;
      background-color:goldenrod;
      border-radius: 8px;
      color: white;
    }

    .save-btn:hover {
      background-color: rgb(221, 135, 7);
      border: 1px solid rgb(215, 127, 20);
      cursor: pointer;
    }
    .cancel-btn {
      padding: 0.5rem;
      border: 1px solid rgb(255, 177, 251);
      background-color: rgb(211, 167, 231);
      border-radius: 8px;
      color: white;
    }

    .cancel-btn:hover {
      background-color: rgb(184, 57, 171);
      border: 1px solid rgb(176, 63, 169);
      cursor: pointer;
    }
    .destroy {
      padding: 0.5rem;
      border: 1px solid red;

    }
  </style>
</head>

<body>
  <section class="container">
    <h1>личный кабинет</h1>
    <p>
      <span>id: </span>
      <span><?php echo $_SESSION["id"]; ?></span>
    </p>
    <p>
      <span>имя: </span>
      <span><?php echo $_SESSION["name"]; ?></span>
      <span class="edit-btn">изменить</span>
      <span class="save-btn" hidden>сохранить</span>
      <span class="cancel-btn" hidden>отменить</span>
    </p>
    <p>
      <span>фамилия: </span>
      <span><?php echo $_SESSION["lastname"]; ?></span>
      <span class="edit-btn">изменить</span>
      <span class="save-btn" hidden>сохранить</span>
      <span class="cancel-btn" hidden>отменить</span>
    </p>
    <!-- <div class="destroy">выйти</div> -->

    <p>
      <span>email: </span>
      <span><?php echo $_SESSION["email"]; ?></span>
    </p>
  </section>

  <script>
    let edit_buttons = document.querySelectorAll(".edit-btn");
    let save_buttons = document.querySelectorAll(".save-btn");
    let cancel_buttons = document.querySelectorAll(".cancel-btn");

    for (let i = 0; i < edit_buttons.length; i++) {
      edit_buttons[i].addEventListener("click", () => {
        let inputValue = edit_buttons[i].previousElementSibling.innerText;
        edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;

        edit_buttons[i].hidden = true;
        save_buttons[i].hidden = false;
        cancel_buttons[i].hidden = false;
      })
    }
        for (let i = 0; i < save_buttons.length; i++) {
            save_buttons[i].addEventListener("click", () => {
              let inputValue = save_buttons[i].previousElementSibling.innerText;
              save_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;

              edit_buttons[i].hidden = false;
              save_buttons[i].hidden = true;
              cancel_buttons[i].hidden = false;
            })
          }
      for (let i = 0; i < cancel_buttons.length; i++) {
          cancel_buttons[i].addEventListener("click", () => {
            let inputValue = cancel_buttons[i].previousElementSibling.innerText;
            cancel_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;

            edit_buttons[i].hidden = false;
            save_buttons[i].hidden = false;
            cancel_buttons[i].hidden = true;
          })
        }
  </script>

</body>

</html>