<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hiyield Testsite</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .apple-buttons {
      position: absolute;
      top: 6px;
      right: -45px;
      display: flex;
      z-index: 1;
    }

    .apple-button {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      margin-left: 4px;
      cursor: pointer;
    }

    .green {
      background-color: #53d769;
    }

    .red {
      background-color: #ff3b30;
    }

    .yellow {
      background-color: #ffcc00;
    }

    .image-container {
      position: relative;
    }
  </style>
</head>

<body class="bg-slate-50 font-mono">
  <div class="container mx-auto py-8">
    <div class="flex justify-center">
      <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 rounded">
        <?php
        $counter = 1;
        if (have_posts()):
          while (have_posts()):
            the_post();
            ?>
            <div class="group">
              <a href="<?php the_permalink(); ?>">
                <div class="image-container">
                  <div class="overflow-hidden rounded-md">
                    <?php the_post_thumbnail('medium', ['class' => 'transition duration-200 hover:scale-105']); ?></div>
                  <div
                    class="absolute top-0 -left-4 text-red-500 text-xl rounded-full w-8 h-8 flex items-center justify-center font-bold">
                    0<?php echo $counter; ?></div>
                </div>
                <div class="flex items-center">
                  <h2 class="group-hover:text-red-500 mt-1"><?php the_title(); ?></h2>
                  <span
                    class="w-5 h-5 inline-block ml-2 group-hover:translate-x-1.5 transition-transform duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      class="feather feather-arrow-right text-red-500">
                      <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                  </span>
                </div>
                <h3><?php the_time(); ?></h3>
                <p class="text-left mb-2 font-bold"><?php the_author(); ?></p>
              </a>
            </div>
            <?php
            $counter++; // Counter increments
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</body>

</html>
