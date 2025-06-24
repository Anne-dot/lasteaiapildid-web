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
import { User, Heart, Code, Target, Sparkles } from 'lucide-vue-next'
import AppFooter from '@/components/AppFooter.vue'
import AppHeader from '@/components/AppHeader.vue'
</script>

<template>
    <Head title="Minust - Lasteaiapildid.ee">
        <meta
            name="description"
            content="Tere! Mina olen Anne, ADHD-ga vanem ja algaja arendaja, kes lõi Lasteaiapildid.ee lahenduse, et aidata teistel vanematel säästa aega ja hoida alles kallid mälestused."
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
                            <Link href="/" class="text-muted-foreground hover:text-foreground transition-colors">
                                Avaleht
                            </Link>
                        </BreadcrumbLink>
                    </BreadcrumbItem>
                    <BreadcrumbSeparator />
                    <BreadcrumbItem>
                        <BreadcrumbPage>Minust</BreadcrumbPage>
                    </BreadcrumbItem>
                </BreadcrumbList>
            </Breadcrumb>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <User class="w-16 h-16 text-theme mx-auto mb-4" />
                    <h1 class="text-4xl font-extrabold text-foreground mb-2 tracking-tight">Tere, mina olen Anne!</h1>
                    <p class="text-lg text-muted-foreground">ADHD-ga vanem, kes muutis oma valu lahenduseks</p>
                </div>

                <!-- Story Section -->
                <Card class="mb-8">
                    <CardHeader>
                        <h2 class="text-2xl text-theme leading-none font-semibold flex items-center gap-2">
                            <Heart class="w-6 h-6" />
                            Minu lugu
                        </h2>
                    </CardHeader>
                    <CardContent class="space-y-4 text-muted-foreground">
                        <p>
                            Olen kahe lapse ema ja nagu paljudel ADHD-ga inimestel, on mul kalduvus asju edasi lükata.
                            "Laadin homme need pildid alla" muutus kiiresti "oh ei, pool aastat on möödas ja ma pole
                            ikka veel..."
                        </p>
                        <p>
                            Ühel päeval, kui mu vanem laps läks uude lasteaeda, sain šoki - kõik vanad pildid Eliisist
                            kadusid! 13 kuud mälestusi, lihtsalt läinud. See oli hetk, mil otsustasin: mitte kunagi
                            enam.
                        </p>
                        <p>
                            Kuna olin just lõpetamas tarkvaraarenduse kooli, otsustasin luua lahenduse. Mitte ainult
                            endale, vaid kõigile vanematele, kes on samas olukorras. Sest iga laps väärib, et tema
                            lasteaiamälestused säiliksid.
                        </p>
                    </CardContent>
                </Card>

                <!-- Technical Journey -->
                <Card class="mb-8">
                    <CardHeader>
                        <h2 class="text-2xl text-theme leading-none font-semibold flex items-center gap-2">
                            <Code class="w-6 h-6" />
                            Tehniline teekond
                        </h2>
                    </CardHeader>
                    <CardContent class="space-y-4 text-muted-foreground">
                        <p>
                            Lasteaiapildid.ee on minu esimene päris projekt pärast kooli lõpetamist. See on olnud
                            õppimise, katsetamise ja pidevate "aha!" momentide teekond.
                        </p>
                        <p>
                            Alustasin lihtsa JavaScript-iga, mis töötas konsoolil. Siis õppisin Chrome'i laiendusi
                            tegema. Nüüd on see täisfunktsionaalne lahendus, mis päästab tuhandeid pilte.
                        </p>
                        <p>
                            Iga päev õpin midagi uut ja see on imeline tunne, kui näen, et mu töö aitab teisi vanemaid
                            päriselt.
                        </p>
                    </CardContent>
                </Card>

                <!-- Mission -->
                <Card class="mb-8">
                    <CardHeader>
                        <h2 class="text-2xl text-theme leading-none font-semibold flex items-center gap-2">
                            <Target class="w-6 h-6" />
                            Minu missioon
                        </h2>
                    </CardHeader>
                    <CardContent class="space-y-4 text-muted-foreground">
                        <p>
                            <strong>936 klikki → 1 klikk</strong>
                        </p>
                        <p>
                            See on rohkem kui lihtsalt tehniline lahendus. See on aja kingitus vanematele, kes on niigi
                            ülekoormatud. See on garantii, et lapsepõlvemälestused ei kao tehniliste takistuste taha.
                        </p>
                        <p>
                            Ma usun, et tehnoloogia peaks elu lihtsamaks tegema, mitte keerulisemaks. Eriti vanematele,
                            kellel on niigi palju mõelda.
                        </p>
                    </CardContent>
                </Card>

                <!-- Future Vision -->
                <Card class="mb-8">
                    <CardHeader>
                        <h2 class="text-2xl text-theme leading-none font-semibold flex items-center gap-2">
                            <Sparkles class="w-6 h-6" />
                            Tulevikuplaanid
                        </h2>
                    </CardHeader>
                    <CardContent class="space-y-4 text-muted-foreground">
                        <p>
                            Lasteaiapildid.ee on alles algus. Mul on unistus luua tööriistade komplekt, mis teeb
                            vanemate digitaalse elu lihtsamaks ja rõõmsamaks.
                        </p>
                        <p>
                            Järgmisena tuleb <strong>Nunnu Mode™</strong> - funktsioon, mis laseb teil näha oma last
                            Eliisis just nii, nagu teie teda kutsute. Sest iga vanem näeb oma last omamoodi. 💕
                        </p>
                        <p>
                            Aga praegu keskendun sellele, et Lasteaiapildid.ee töötaks suurepäraselt igale vanemale, kes
                            seda vajab.
                        </p>
                    </CardContent>
                </Card>

                <!-- Contact -->
                <div class="text-center mt-12">
                    <p class="text-lg text-muted-foreground mb-4">Tahad midagi küsida või lihtsalt tere öelda?</p>
                    <a href="mailto:tere@lasteaiapildid.ee" class="text-theme hover:underline font-semibold text-lg">
                        tere@lasteaiapildid.ee
                    </a>
                    <p class="text-sm text-muted-foreground mt-4">
                        P.S. Jagan meeleldi oma kogemusi ADHD, programmeerimise või vanemluse teemal!
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <AppFooter />
    </div>
</template>
