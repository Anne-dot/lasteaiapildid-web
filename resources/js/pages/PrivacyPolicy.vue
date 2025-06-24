<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3'
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/components/ui/breadcrumb'
import { Card, CardContent, CardHeader } from '@/components/ui/card'
import { Shield } from 'lucide-vue-next'
import AppFooter from '@/components/AppFooter.vue'
import AppHeader from '@/components/AppHeader.vue'
</script>

<template>
    <Head title="Privaatsuspoliitika - Lasteaiapildid.ee">
        <meta
            name="description"
            content="Lasteaiapildid.ee privaatsuspoliitika. Teie laste fotod jäävad teie arvutisse - me ei näe, säilita ega töötle ühtegi pilti. Turvalisus ja privaatsus on meie esimene prioriteet."
        />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap"
            rel="stylesheet"
        />
    </Head>

    <div class="min-h-screen bg-background font-['Inter']">
        <AppHeader />

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
                <Shield class="w-16 h-16 text-theme mx-auto mb-6" />
                <h1 class="text-4xl font-extrabold text-foreground mb-2 tracking-tight">Privaatsuspoliitika</h1>
                <p class="text-sm text-muted-foreground">Viimati uuendatud: 18.06.2025</p>
            </div>

            <Card class="mb-8">
                <CardHeader>
                    <h2 class="text-2xl text-theme leading-none font-semibold">Lühidalt</h2>
                </CardHeader>
                <CardContent class="space-y-4 text-muted-foreground">
                    <p>
                        See laiendus on loodud ühelt Eesti lapsevanemalt teistele. Ma mõistan, kui oluline on teie laste
                        fotode privaatsus.
                    </p>
                </CardContent>
            </Card>

            <Card class="mb-8">
                <CardHeader>
                    <h2 class="text-2xl text-theme leading-none font-semibold">Mida see laiendus TEEB</h2>
                </CardHeader>
                <CardContent>
                    <ul class="space-y-2 text-muted-foreground">
                        <li class="flex items-start">
                            <span class="text-theme mr-2">✓</span>
                            <span>Töötab 100% teie arvutis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-theme mr-2">✓</span>
                            <span>Laadib fotod otse teie brauserist teie arvutisse</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-theme mr-2">✓</span>
                            <span>EI salvesta teie fotosid ega isiklikke andmeid</span>
                        </li>
                    </ul>
                </CardContent>
            </Card>

            <Card class="mb-8">
                <CardHeader>
                    <h2 class="text-2xl text-theme leading-none font-semibold">Mida see laiendus EI TEE</h2>
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
                    <h2 class="text-2xl text-theme leading-none font-semibold">Tehnilised üksikasjad</h2>
                </CardHeader>
                <CardContent class="space-y-4 text-muted-foreground">
                    <p>Laiendus kasutab järgmisi brauseri õigusi:</p>
                    <ul class="space-y-2 ml-4">
                        <li>
                            <strong class="text-foreground">activeTab</strong> - et lugeda fotosid praeguselt Eliisi
                            lehelt
                        </li>
                        <li><strong class="text-foreground">downloads</strong> - et salvestada fotod teie arvutisse</li>
                        <li>
                            <strong class="text-foreground">notifications</strong> - et näidata allalaadimise edenemist
                        </li>
                    </ul>
                    <p class="mt-4 text-sm text-muted-foreground/80">
                        Tulevikus võib lisanduda <strong>storage</strong> õigus teie eelistuste meeldejätmiseks (nt
                        allalaadimise kausta asukoht).
                    </p>
                    <p class="mt-2 font-semibold">Kõik toimub teie brauseris. Mitte mingeid väliseid ühendusi.</p>
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <h2 class="text-2xl text-theme leading-none font-semibold">Kontakt</h2>
                </CardHeader>
                <CardContent class="text-muted-foreground">
                    <p>
                        Küsimused?
                        <a href="mailto:info@lasteaiapildid.ee" class="text-theme hover:underline"
                            >info@lasteaiapildid.ee</a
                        >
                    </p>
                </CardContent>
            </Card>

            <div class="mt-12 text-center text-sm text-muted-foreground">
                <p>
                    See privaatsuspoliitika kehtib
                    <a
                        href="https://chromewebstore.google.com/detail/eliisi-piltide-allalaadij/hdmklnffodiiniickmbagjodgieoceip"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-theme hover:underline"
                        >Chrome Web Store'is saadaval oleva "Eliisi piltide allalaadija" laienduse</a
                    >
                    kohta.
                </p>
            </div>
        </section>

        <!-- Footer -->
        <AppFooter />
    </div>
</template>
