<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import { Button } from '@/components/ui/button'
import { MousePointer, Clock, FolderOpen, Folders, Shield, Heart } from 'lucide-vue-next'
</script>

<template>
    <Head title="Lasteaiapildid.ee - Fotod Eliisist ühe klikiga">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="apple-touch-icon" sizes="128x128" href="/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-gradient-to-b from-turquoise/5 to-background font-['Inter']">
        <!-- Hero Section -->
        <section class="container mx-auto px-4 pt-16 pb-12 text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-foreground mb-6 tracking-wide uppercase flex items-baseline justify-center">
                <span class="mr-3">Fotod</span>
                <a href="https://eliis.eu" target="_blank" rel="noopener noreferrer" class="font-black text-[1.1em] hover:opacity-80 transition-opacity">
                    <span class="text-eliis-e">E</span>
                    <span class="text-eliis-l">L</span>
                    <span class="text-eliis-i1">I</span>
                    <span class="text-eliis-i2">I</span>
                    <span class="text-eliis-s">S</span>
                </a>
                <span class="ml-1">ist ühe klikiga</span>
            </h1>
            <p class="text-lg md:text-xl text-muted-foreground mb-8 mt-4 max-w-3xl mx-auto">
                Laadi alla kõik pildid, nädala, kuu või aasta kaupa ühe klikiga. 
                Pildid salvestatakse automaatselt kuupäevade kaupa kaustadesse.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="https://chromewebstore.google.com/detail/eliisi-piltide-allalaadij/hdmklnffodiiniickmbagjodgieoceip" 
                   target="_blank" 
                   rel="noopener noreferrer">
                    <Button size="lg" class="bg-turquoise hover:bg-turquoise/90 text-white px-8 py-6 text-lg">
                        Alusta tasuta
                    </Button>
                </a>
                <div class="text-center">
                    <p class="text-sm text-muted-foreground">Tasuta kuni august 2025</p>
                    <p class="text-sm text-muted-foreground">Edasi 0,50€/kuus</p>
                </div>
            </div>
        </section>

        <!-- Problem/Solution -->
        <section class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-center mb-12 tracking-tight">
                Piltide allalaadimine on ajamahukas ja tüütu
            </h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Current Problem -->
                <Card class="border-border">
                    <CardHeader>
                        <CardTitle class="text-muted-foreground">Praegu</CardTitle>
                    </CardHeader>
                    <CardContent class="space-y-4">
                        <div class="flex items-center gap-3">
                            <MousePointer class="w-5 h-5 text-muted-foreground/60" />
                            <span class="text-muted-foreground">936 klikki</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <Clock class="w-5 h-5 text-muted-foreground/60" />
                            <span class="text-muted-foreground">82 minutit</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <FolderOpen class="w-5 h-5 text-muted-foreground/60" />
                            <span class="text-muted-foreground">Segadus</span>
                        </div>
                    </CardContent>
                </Card>

                <!-- Our Solution -->
                <Card class="border-turquoise/20 bg-turquoise/5">
                    <CardHeader>
                        <CardTitle class="text-turquoise">Meie lahendusega</CardTitle>
                    </CardHeader>
                    <CardContent class="space-y-4">
                        <div class="flex items-center gap-3">
                            <MousePointer class="w-5 h-5 text-turquoise" />
                            <span class="text-turquoise font-semibold">1 klikk</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <Clock class="w-5 h-5 text-turquoise" />
                            <span class="text-turquoise font-semibold">30 sekundit</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <Folders class="w-5 h-5 text-turquoise" />
                            <span class="text-turquoise font-semibold">Organiseeritud</span>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </section>

        <!-- Privacy Section -->
        <section class="bg-muted/50 py-16">
            <div class="container mx-auto px-4 text-center">
                <Shield class="w-16 h-16 text-turquoise mx-auto mb-6" />
                <h2 class="text-3xl font-bold mb-6 tracking-tight">Teie laste privaatsus on meile oluline</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto mb-8">
                    Fotod ei lähe kunagi meie serveritesse. Kõik toimub 100% teie arvutis. 
                    Eesti oma ja Eesti loodud.
                </p>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="container mx-auto px-4 py-16 text-center">
            <div class="bg-turquoise/10 rounded-2xl p-8 md:p-12 max-w-3xl mx-auto">
                <Heart class="w-12 h-12 text-turquoise mx-auto mb-4" />
                <h2 class="text-2xl md:text-3xl font-bold mb-4 tracking-tight">
                    Tehtud Eesti vanema poolt Eesti vanematele
                </h2>
                <p class="text-lg text-muted-foreground mb-8">
                    Sest igal vanemal on õigus oma lapse lasteaiamälestustele.
                </p>
                <a href="https://chromewebstore.google.com/detail/eliisi-piltide-allalaadij/hdmklnffodiiniickmbagjodgieoceip" 
                   target="_blank" 
                   rel="noopener noreferrer">
                    <Button size="lg" class="bg-turquoise hover:bg-turquoise/90 text-white px-8 py-6 text-lg">
                        Proovi tasuta
                    </Button>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t py-8">
            <div class="container mx-auto px-4 text-center text-muted-foreground">
                <p>&copy; 2025 Lasteaiapildid.ee • Tehtud ❤️-ga Eestis</p>
                <p class="mt-2">
                    <Link href="/privaatsuspoliitika" 
                          class="text-turquoise hover:underline">
                        Privaatsuspoliitika
                    </Link>
                    · 
                    <span>info@lasteaiapildid.ee</span>
                </p>
            </div>
        </footer>
    </div>
</template>