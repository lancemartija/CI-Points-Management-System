<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIO Points Web App</title>
  <link rel="stylesheet" href="src/css/style.css?<?= time(); ?>">
</head>

<body>
  <div class="grid place-content-center h-screen">
    <div>
      <h1 class="text-center text-6xl font-semibold mb-6">CIO Points Web App</h1>
      <div class="flex justify-evenly p-6 w-100">
        <a class="bg-slate-300  hover:bg-slate-600 hover:text-white text-4xl px-8 py-3 rounded" href="admin/">admin</a>
        <a class="bg-slate-300 hover:bg-slate-600 hover:text-white text-4xl px-8 py-3 rounded" href="user/">user</a>
      </div>
    </div>
  </div>
</body>

</html>