<html>
<head>
<title>Registo</title>

<style>
      body{ font: 14px sans-serif;
        background-color: #303641;
        display:flex;
        justify-content:center;
        align-items:center; 
    }
        .wrapper{ width: 860px; padding: 50px; margin: auto; }

body {
    background-color: #303641;
}

h1 {
color: #fff
}
    input[type=text] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=password] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=email] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=date] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
  text-align: center;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
    color: #fff;
    font: 17px sans-serif;
    text-transform: uppercase;
    display: block;
}

input[type=submit] {
   
    width: 20%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ed563b;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    background-color: #ed563b;
    color: #fff;
}

input[type=reset] {
   
   width: 20%;
   height: calc(1.5em + 0.75rem + 2px);
   padding: 0.375rem 0.75rem;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #ed563b;
   border-radius: 0.25rem;
   transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   background-color: #ed563b;
  color: #fff;
}

button[type=submit] {
  width: 20%;
   height: calc(1.5em + 0.75rem + 2px);
   padding: 0.375rem 0.75rem;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #ed563b;
   border-radius: 0.25rem;
   transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   background-color: #ed563b;
  color: #fff;
}

</style>
</head>

<body>

<div class="wrapper">
<form name="frmUser" method="post" action="" align="center">
<form action="exe_registo.php" method="post">

<div class="form-group">
    <h1 align="center">Registo</h1>


    <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" id="id" name="id" />
       

        <div class="form-group">
        <label for="username">Username:</label> 
        <input type="text" id="username" name="username"  />
        </div>

        <div class="form-group">
        <label for="fullname">Nome Completo:</label>
        <input type="text" id="fullname" name="fullname"  />
        </div>

        <div class="form-group">
        <label for="dateofbirth">Data de nascimento:</label>
        <input type="date" id="dateofbirth" name="dateofbirth" />
        </div>

        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />
        </div>

        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" />
        </div>

        <br>

        <div class="form-group">
    <button type="submit">Submeter</button>
    </div>


</div>
</form>
</form>
</body>
</html>