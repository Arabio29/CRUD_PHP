<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="main.css"  />
    <title>ELTASK</title>
  </head>
  <body>
    <div class="w-full h-screen flex">
      <!-- Formulario -->
      <div class="w-full md:w-1/2 flex items-center justify-center bg-violet-950">
      <div class="flex flex-col items-center">  
        <div>
            <div class="conteiner mb-5">
              <span class="text first-text">I'am</span>
              <span class="text second-text">Eliasib Cantor</span>
            </div>

            <script>
            const text = document.querySelector(".second-text");

            const textLoad = () => {
              setTimeout(() => {
                text.textContent = "Eliasib Cantor";
              }, 0);
              setTimeout(() => {
                text.textContent = "FullStak Developer";
              }, 4000);
              setTimeout(() => {
                text.textContent = "a programmer :)";
              }, 8000);
            }
            textLoad();
            setInterval(textLoad, 12000);
            </script>
          </div>
          
          <div>

            <div class="mt-8 flex flex-col gap-y-4 w-60">
              <a
                class="active:scale-[0.98] active:duration-75 transition-all hover:scale-[1.01] ease-in-out py-3 rounded-xl bg-violet-500 text-white text-lg font-bold text-center"
                href="app.php"
              >
                Guardar tareas
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden md:flex h-full w-1/2 items-center justify-center relative bg-gray-950">
        <div class="w-60 h-60 bg-gradient-to-tr from-violet-500 to pink-500 rounded-full animate-spin"></div>
        <div class="w-full h-1/2 absolute bottom-0 bg-white/1 backdrop-blur-lg"></div>
      </div>
    </div>
  </body>
</html>


        
