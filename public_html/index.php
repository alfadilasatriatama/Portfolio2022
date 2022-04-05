<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
</head>
<body>
<style>
  
</style>
<script>
        // -------coztumize in tailwindcss--------
        tailwind.config = {
            darkMode: 'class', 
          theme: {
            extend: {
                // -----ex:-----
              spacing: {
                '13': '3.25rem',
              },
            // ----- input fonts to tailwindcss----------
              fontFamily: {
                  monospace: ['Major Mono display' , monospace],
              },
            // ------- cotumize color--------
                colors: {
                    coffe: '#c0ffee',
                },
            // -----costumize animation-----
                animation: {
                    'spin-slow': 'spin 3s linear infinite',
                    'wiggle': 'wiggle 1s ease-in-out infinite',
                },
                // -------wiggle animation------
                keyframes: {
                    wiggle: {
                        '0%, 100%' : { transform: 'rotate(-3deg)'},
                        '50%': { transform: 'rotate(3deg)'},
                    }
                }
            },
          },
        };
      </script>

</head>

<body class="antialiased ">
  <?php include 'include/header.php' ; ?>
  <div class="page ">
    <?php require_once 'include/page.php' ; ?>
  </div>
  
  <div class="footer">
    <?php require_once 'include/footer.php' ; ?>
  </div>
  <div class="w-14 h-14 bg-white bg-opacity-10 rounded-full flex fixed bottom-5 right-5 cursor-pointer "><a href="#" class="text-3xl m-auto ">🔝</a></div>
</body>
</html>