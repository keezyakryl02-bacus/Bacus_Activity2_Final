<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faith & Fashion Co. | Lighted Path</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen antialiased overflow-x-hidden">

    <nav class="bg-ghibli-forest border-b-4 border-ghibli-gold shadow-md py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row gap-4 justify-between items-center">
            <a href="#" class="font-bold tracking-wider uppercase text-ghibli-cream text-lg md:text-xl text-center sm:text-left">
                Faith & Fashion Co.
            </a>

            <div class="flex items-center space-x-6 text-sm font-medium">
                <a href="#" class="text-white hover:text-ghibli-gold transition-colors">Our Story</a>
                <a href="#" class="text-white hover:text-ghibli-gold transition-colors">The Collection</a>

                <div class="space-x-2 md:space-x-3 flex items-center">
                    <a href="/mobile-app" class="border border-white text-white px-3 py-1.5 md:px-4 md:py-2 rounded-full hover:bg-white hover:text-ghibli-forest transition-all whitespace-nowrap">
                        Login
                    </a>
                    <a href="/mobile-app?action=register" class="bg-ghibli-gold text-white px-4 py-1.5 md:px-5 md:py-2 rounded-full font-semibold shadow-[0_4px_0px_#a6854e] active:translate-y-[2px] active:shadow-[0_2px_0px_#a6854e] transition-all whitespace-nowrap">
                        Join Us
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero-section relative min-h-[85vh] flex items-center justify-center text-center px-4 py-12 lg:py-0 lg:items-start lg:pt-[15vh]">
        <div class="relative z-10 max-w-3xl mx-auto w-full">
            <h1 class="woven-text text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold text-ghibli-cream tracking-wide mb-6 leading-tight">
                Woven with Purpose
            </h1>

            <p class="text-ghibli-gold font-serif italic text-xl sm:text-2xl md:text-3xl drop-shadow-[1px_1px_10px_rgba(0,0,0,0.5)] mb-10 max-w-xl mx-auto leading-relaxed">
                "I will lead them beside quiet waters."
            </p>

            <div>
                <a href="/mobile-app" class="inline-block bg-ghibli-gold text-white text-base md:text-lg px-6 py-3 md:px-8 md:py-3 rounded-full font-semibold shadow-[0_4px_0px_#a6854e] active:translate-y-[2px] active:shadow-[0_2px_0px_#a6854e] transition-all">
                    Explore the Collection
                </a>
            </div>
        </div>
    </section>

</body>

</html>