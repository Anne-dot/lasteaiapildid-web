<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3'
import { Breadcrumb, BreadcrumbItem, BreadcrumbLink, BreadcrumbList, BreadcrumbPage, BreadcrumbSeparator } from '@/components/ui/breadcrumb'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import { Shield } from 'lucide-vue-next'
</script>

<template>
    <Head title="Privaatsuspoliitika - Lasteaiapildid.ee">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-gradient-to-b from-turquoise/10 to-background font-['Inter']">
        <!-- Header with Breadcrumbs -->
        <div class="container mx-auto px-4 pt-8">
            <Breadcrumb>
                <BreadcrumbList>
                    <BreadcrumbItem>
                        <BreadcrumbLink asChild>
                            <Link href="/">Avaleht</Link>
                        </BreadcrumbLink>
                    </BreadcrumbItem>
                    <BreadcrumbSeparator />
                    <BreadcrumbItem>
                        <BreadcrumbPage>Privaatsuspoliitika</BreadcrumbPage>
                    </BreadcrumbItem>
                </BreadcrumbList>
            </Breadcrumb>
        </div>

        <!-- Privacy Policy Content -->
        <section class="container mx-auto px-4 py-12 max-w-4xl">
            <div class="text-center mb-12">
                <Shield class="w-16 h-16 text-turquoise mx-auto mb-6" />
                <h1 class="text-4xl font-extrabold text-foreground mb-2 tracking-tight">
                    Privaatsuspoliitika
                </h1>
                <p class="text-sm text-muted-foreground">Viimati uuendatud: 18.06.2025</p>
            </div>

            <Card class="mb-8">
                <CardHeader>
                    <CardTitle class="text-2xl text-turquoise">Lühidalt</CardTitle>
                </CardHeader>
                <CardContent class="space-y-4 text-muted-foreground">
                    <p>
                        See laiendus on loodud ühelt Eesti lapsevanemalt teistele. 
                        Ma mõistan, kui oluline on teie laste fotode privaatsus.
                    </p>
                </CardContent>
            </Card>

            <Card class="mb-8">
                <CardHeader>
                    <CardTitle class="text-2xl text-turquoise">Mida see laiendus TEEB</CardTitle>
                </CardHeader>
                <CardContent>
                    <ul class="space-y-2 text-muted-foreground">
                        <li class="flex items-start">
                            <span class="text-turquoise mr-2">✓</span>
                            <span>Töötab 100% teie arvutis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-turquoise mr-2">✓</span>
                            <span>Laadib fotod otse teie brauserist teie arvutisse</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-turquoise mr-2">✓</span>
                            <span>EI salvesta teie fotosid ega isiklikke andmeid</span>
                        </li>
                    </ul>
                </CardContent>
            </Card>

            <Card class="mb-8">
                <CardHeader>
                    <CardTitle class="text-2xl text-turquoise">Mida see laiendus EI TEE</CardTitle>
                </CardHeader>
                <CardContent>
                    <ul class="space-y-2 text-muted-foreground">
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>EI saada teie fotosid minu serverisse</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>EI jälgi, milliseid fotosid te alla laadite</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>EI kogu teie isikuandmeid</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>EI kasuta analüütikat ega jälgimistehnoloogiaid</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>EI müü ega jaga teie andmeid</span>
                        </li>
                    </ul>
                </CardContent>
            </Card>

            <Card class="mb-8">
                <CardHeader>
                    <CardTitle class="text-2xl text-turquoise">Tehnilised üksikasjad</CardTitle>
                </CardHeader>
                <CardContent class="space-y-4 text-muted-foreground">
                    <p>Laiendus kasutab järgmisi brauseri õigusi:</p>
                    <ul class="space-y-2 ml-4">
                        <li>
                            <strong class="text-foreground">activeTab</strong> - 
                            et lugeda fotosid praeguselt Eliisi lehelt
                        </li>
                        <li>
                            <strong class="text-foreground">downloads</strong> - 
                            et salvestada fotod teie arvutisse
                        </li>
                        <li>
                            <strong class="text-foreground">notifications</strong> - 
                            et näidata allalaadimise edenemist
                        </li>
                    </ul>
                    <p class="mt-4 text-sm text-muted-foreground/80">
                        Tulevikus võib lisanduda <strong>storage</strong> õigus teie eelistuste meeldejätmiseks (nt allalaadimise kausta asukoht).
                    </p>
                    <p class="mt-2 font-semibold">
                        Kõik toimub teie brauseris. Mitte mingeid väliseid ühendusi.
                    </p>
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle class="text-2xl text-turquoise">Kontakt</CardTitle>
                </CardHeader>
                <CardContent class="text-muted-foreground">
                    <p>Küsimused? <a href="mailto:info@lasteaiapildid.ee" class="text-turquoise hover:underline">info@lasteaiapildid.ee</a></p>
                </CardContent>
            </Card>

            <div class="mt-12 text-center text-sm text-muted-foreground">
                <p>
                    See privaatsuspoliitika kehtib Chrome Web Store'is saadaval oleva 
                    "Eliisi piltide allalaadija" laienduse kohta.
                </p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t py-8">
            <div class="container mx-auto px-4 text-center text-muted-foreground">
                <p>&copy; 2025 Lasteaiapildid.ee • Tehtud ❤️-ga Eestis</p>
            </div>
        </footer>
    </div>
</template>