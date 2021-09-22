<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Личный кабинет</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Панель навигации</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
         <a class="nav-link active" href="/">Главная <span class="sr-only">(текущая)</span></a>
         <a class="nav-link" href="#">Функции</a>
         <a class="nav-link" href="#">Цены</a>
         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Отключенный</a>
      </div>
   </div>
   </nav>
   <div class="container-fluid">
      <div class="row">
      <div class="col-3">
         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="profileTab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Профиль</a>
            <a class="nav-link" id="messagesTab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Сообщения</a>
            <a class="nav-link" id="settingsTab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Друзья</a>
         </div>
      </div>
      <div class="col-9">
         <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
               <div class="row">
                  <div class="col-sm-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU" alt=""></div>
                     <div class="col-sm-9">
                        <h1 id="userName"></h1>
                        <h2>О себе</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum amet placeat optio aut reiciendis nemo odit quibusdam omnis soluta aliquam molestiae magnam, praesentium, modi quas cumque facere minus! Minima, exercitationem!
                           Dolore dolorem qui molestias. Iure quis impedit cupiditate omnis est harum voluptates temporibus illum deserunt, tempora ipsam, dicta, consequuntur natus voluptas ad id. Ex aliquam debitis reprehenderit a dolore necessitatibus!
                           Voluptatum rerum id officiis ipsam ipsum alias natus excepturi? Architecto ipsa dolorum doloribus molestiae. Doloribus cum maxime beatae magnam iusto vitae velit necessitatibus dolorum quasi, minima officiis, pariatur praesentium! Temporibus.</p>
                     </div>
                  </div>
               </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="row">
                        <div class="col-sm-3"><img src="/img/gallery/r5.jpg" alt=""></div>
                        <div class="col-sm-9">
                     <h5>Катерина Семенова</h5>
                     <p>Привет. Да, я завтра смогу.</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3"><img src="/img/gallery/r7.jpg" alt=""></div>
                     <div class="col-sm-9">
                     <h5>Иван Иваныч</h5>
                     <p>Отлично! Едем завтра на рыбалку</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="row">
                  <div class="col-12 border">
                     <div class="row">
                        <div class="col-1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU" alt="" width="100%"></div>
                        <div class="col-11">Поехали завтра на рыбалку?</div>
                     </div>
                     <div class="row">
                        <div class="col-1"><img src="/img/gallery/r7.jpg" alt="" width="100%"></div>
                        <div class="col-11">Отлично! Едем завтра на рыбалку</div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-8">
                     <textarea name="" id="" cols="60" rows="1"></textarea>
                  </div>
                  <div class="col-4"><button class="btn btn-warning">Отправить сообщение</button></div>
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <!-- <p>Имя: <span>Василий</span><span>Изменить</span></p>
            <p>Фамилия: <span>Пупкин</span><span>Изменить</span></p>
            <p></p> -->
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Имя и Фамилия</th>
               <th scope="col">Email</th>
            </tr>
         </thead>
      <tbody id="userListTable"></tbody>
      </table>
      </div>
   </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
   let pathname = location.pathname.split("/")[2];
   let navLinks = document.querySelectorAll(".nav-link");
   let user;
   async function getUser() {
      let responce = await fetch("/getUser");
      return await responce.json();
   }
   async function getUsers() {
      let responce = await fetch("/getUsers");
      return await responce.json();
   }
   $(window).on("popstate", function(e) {
      let path = location.pathname.split("/")[2];
      if (path == "profile") {
         $('#profileTab').tab('show');
      } else if (path == "messages") {
         $('#messagesTab').tab('show');
      } else if (path == "settings") {
         $('#settingsTab').tab('show');
      }
   });
   if (pathname == "profile") {
      getUser().then(user => {
        //console.log(user);
         userName.innerText = `${user.name} ${user.lastname}`;
      });
      $('#profileTab').tab('show');
   } else if (pathname == "messages") {
      $('#messagesTab').tab('show');
   } else if (pathname == "settings") {
      getUsers().then(users => {
        //console.log(users);
         for (let i = 0; i < users.length; i++) {
         userListTable.insertAdjacentHTML('beforeend', `<tr>
                  <th scope="row">${users[i].id}</th>
                  <td>${users[i].name} ${users[i].lastname}</td>
                  <td>${users[i].email}</td>
               </tr>`);
         }
      });
      $('#settingsTab').tab('show');
   } else {
      location.href = location.protocol + "//" + location.host;
   }
   for (let i = 0; i < navLinks.length; i++) {
      navLinks[i].addEventListener("click", () => {
      let page = navLinks[i].getAttribute("aria-controls").split("v-pills-")[1];
      history.pushState('', '', page);
      console.log(page);
      });
   }
   document.getElementById(pathname + "Tab").classList.add("active");
   </script>
</body>
</html>