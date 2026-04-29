<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>   
</head>

<body class="bg-gray-500/50 bg-[url('fondo-main.avif')] bg-center bg-repeat-space ">

<header class="flex flex-col items-center justify-center text-center bg-gray-500/80 hover:bg-gray-500 h-[150px] border-4 border-indigo-200 border-x-indigo-500">

  
<h1     id="titulo" class=" items-center justify-center text-center mb-4 text-3xl font-bold text-heading md:text-5xl lg:text-6xl">
    <span class=" items-center justify-center text-center text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Mi primera web</span>profesional🙌</h1>

  <?php
  $color = "red";
  $gap = "3px";
  echo "<p style='color:$color; margin-top:$gap;'>Esta parte se genera mediante PHP</p>";
  ?>

  <div class="flex gap-3">
    <button onclick="cambiarTexto()" class="bg-blue-500 shadow-lg shadow-cyan-500 ring-4 ring-purple-500/50  hover:bg-blue-700 text-white px-4">
      Cambiar texto
    </button>

    <button onclick="cambiarColor()" class="bg-blue-500 shadow-lg shadow-cyan-500 ring-4 ring-purple-500/50 hover:bg-blue-700 text-white px-4 border-radius-999">
      Cambiar color
    </button>
  </div>

</header>

<main class="bg-[url('fondo.jpg')]  bg-center bg-repeat"> 


<h1 class=" items-center justify-center text-center mb-4 text-3xl font-bold text-heading md:text-5xl lg:text-6xl text-white">
    <span class=" items-center justify-center text-center text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">MIS PROYECTOS</span> EN SECCIONES</h1>
<section class="text-white grid grid-cols-3 gap-4 text-center">

  <!-- 01 -->
  <article class="h-[250px] p-2 shadow-cyan-500 ring-4 ring-purple-500 flex flex-col items-center gap-2">

    <h2 class="text-3xl font-bold md:text-5xl lg:text-6xl">
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-emerald-600">
        01
      </span>
    </h2>

    <img src="trotuman.jpg" class="h-20 w-20 object-cover rounded" alt="Proyecto 01">

    <p class="line-clamp-3 text-sm">
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

    <div class="flex gap-3">
      <button onclick="verProyecto()" class="bg-blue-500 shadow-lg shadow-cyan-500 ring-4 ring-purple-500/50 hover:bg-blue-700 text-white px-4 py-1">
        ver proyecto
      </button>
    </div>

  </article>

  <!-- 02 -->
  <article class="h-[250px] p-2 shadow-cyan-500 ring-4 ring-purple-500 flex flex-col items-center gap-2">
    <h2 class="text-3xl font-bold md:text-5xl lg:text-6xl">
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-emerald-600">
        02
      </span>
    </h2>
    <img src="trotuman.jpg" class="h-20 w-20 object-cover rounded" alt="Proyecto 02">
    <p class="line-clamp-3 text-sm">Lorem ipsum dolor sit amet consectetur.</p>
    <div class="flex gap-3">
      <button onclick="verProyecto()" class="bg-blue-500 shadow-lg shadow-cyan-500 ring-4 ring-purple-500/50 hover:bg-blue-700 text-white px-4 py-1">
        ver proyecto
      </button>
    </div>
  </article>

  <!-- 03 -->
  <article class="h-[250px] p-2 shadow-cyan-500 ring-4 ring-purple-500 flex flex-col items-center gap-2">
    <h2 class="text-3xl font-bold md:text-5xl lg:text-6xl">
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-emerald-600">
        03
      </span>
    </h2>
    <img src="trotuman.jpg" class="h-20 w-20 object-cover rounded" alt="Proyecto 03">
    <p class="line-clamp-3 text-sm">Lorem ipsum dolor sit amet consectetur.</p>
    <div class="flex gap-3">
      <button onclick="verProyecto()" class="bg-blue-500 shadow-lg shadow-cyan-500 ring-4 ring-purple-500/50 hover:bg-blue-700 text-white px-4 py-1">
        ver proyecto
      </button>
    </div>
  </article>

</section>

</main>

</body>
<footer class="bg-neutral-primary-soft rounded-base shadow-xs border border-default m-4 bg-gray-500 border-4 border-indigo-200 border-x-indigo-500">
  <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
</div>
</div>
</footer>

<script>
function cambiarTexto() {
  document.getElementById("titulo").innerText = "Texto cambiado con JavaScript 🚀";
}

function cambiarColor () {
  document.getElementById("titulo").style.color = "red";
}
</script>

</html> 