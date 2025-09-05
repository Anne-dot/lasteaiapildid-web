<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import { Button } from '@/components/ui/button'
import { Collapsible, CollapsibleContent, CollapsibleTrigger } from '@/components/ui/collapsible'
import {
    Shield,
    Heart,
    ChevronDown,
    Mail,
    HelpCircle,
    UserCircle,
    FileText,
    Bug,
    AlertCircle,
    Sparkles,
    Camera,
} from 'lucide-vue-next'
import AppFooter from '@/components/AppFooter.vue'
import AppHeader from '@/components/AppHeader.vue'

interface FAQ {
    id: number
    question: string
    answer: string
    order: number
    is_active: boolean
}

interface Bug {
    id: number
    title: string
    problem: string
    workaround: string
    status: string
    severity: string
    order: number
    is_active: boolean
}

interface Feature {
    id: number
    title: string
    description: string
    status: string
    priority: string
    order: number
    is_active: boolean
}

interface Props {
    faqs?: FAQ[]
    bugs?: Bug[]
    existingFeatures?: Feature[]
    plannedFeatures?: Feature[]
}

const props = defineProps<Props>()
</script>

<template>
    <Head title="Lasteaiapildid - Fotod Eliisist ühe klikiga">
        <meta
            name="description"
            content="Lasteaiapildid Chrome'i laiendus salvestab ja organiseerib Eliisi fotod automaatselt sinu arvutis. Loodud Eesti vanema poolt Eesti vanematele."
        />
        <!-- Original content with pricing: "Lasteaiapildid Chrome'i laiendus salvestab ja organiseerib Eliisi fotod automaatselt sinu arvutis. Tasuta kuni august 2025. Loodud Eesti vanema poolt Eesti vanematele." -->
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="apple-touch-icon" sizes="128x128" href="/apple-touch-icon.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap"
            rel="stylesheet"
        />
    </Head>

    <div class="min-h-screen bg-background font-['Inter']">
        <AppHeader />

        <!-- Hero Section -->
        <section class="container mx-auto px-4 pt-12 pb-4">
            <Card class="max-w-4xl mx-auto">
                <CardContent class="text-center p-6 md:p-8">
                    <div class="flex justify-center mb-6">
                        <span
                            class="inline-flex items-center px-4 py-2 rounded-full text-base font-semibold bg-yellow-100 text-yellow-800 border border-yellow-200"
                        >
                            <AlertCircle class="w-5 h-5 mr-2" />
                            Testversioon
                        </span>
                    </div>
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-theme mb-8 tracking-tight text-center">
                        Lasteaiamälestused on väärtuslikud!
                    </h1>
                    <p class="text-lg md:text-xl text-muted-foreground mb-6 max-w-3xl mx-auto">
                        Nende Eliisist allalaadimine ja arvutis organiseerimine saab olla lihtsam ja kiirem.
                    </p>
                    <p class="text-xl md:text-2xl font-semibold text-foreground mb-8 max-w-4xl mx-auto">
                        <a
                            href="https://chromewebstore.google.com/detail/eliisi-piltide-allalaadij/hdmklnffodiiniickmbagjodgieoceip"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 text-[var(--theme)] hover:opacity-80 transition-opacity"
                        >
                            <Camera class="h-5 w-5" />
                            <span>Lasteaiapildid</span>
                        </a>
                        <span class="text-foreground">
                            Chrome'i laiendus salvestab ja organiseerib need sinu eest sinu arvutis. Ühe klikiga.</span
                        >
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a
                            href="https://chromewebstore.google.com/detail/eliisi-piltide-allalaadij/hdmklnffodiiniickmbagjodgieoceip"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <Button
                                size="lg"
                                class="bg-button-primary hover:bg-button-primary/90 text-white px-8 py-6 text-lg"
                            >
                                Tõmba laiendus
                            </Button>
                        </a>
                        <div class="text-center">
                            <!-- <p class="text-sm text-muted-foreground">Tasuta kuni august 2025</p> -->
                            <!-- <p class="text-sm text-muted-foreground">Edasi 0,50€/kuus</p> -->
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-muted/50 rounded-lg">
                        <p class="text-sm text-muted-foreground">
                            <strong>Testversioon:</strong> Palun vaadake
                            <a
                                href="#vead"
                                @click="scrollToSection"
                                class="text-red-700 underline hover:text-red-600 font-medium"
                                >teadaolevaid vigu</a
                            >
                            ja andke tagasisidet →
                            <a href="mailto:info@lasteaiapildid.ee" class="text-theme underline hover:opacity-80"
                                >info@lasteaiapildid.ee</a
                            >
                        </p>
                    </div>
                </CardContent>
            </Card>
        </section>

        <!-- Privacy Section -->
        <section class="py-4">
            <div class="container mx-auto px-4">
                <Card class="max-w-4xl mx-auto">
                    <CardContent class="text-center p-6 md:p-8">
                        <Shield class="w-16 h-16 text-theme mx-auto mb-6" />
                        <h2 class="text-3xl font-bold mb-6 tracking-tight text-theme">
                            Teie laste privaatsus on mulle oluline
                        </h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                            Olen ise kahe lasteaialapse ema ja privaatsus on minu jaoks väga oluline. Fotod ei lähe
                            kunagi minu serveritesse. Kõik toimub 100% teie arvutis. Lähemalt saate lugeda
                            <a
                                href="#privaatsuspoliitika"
                                @click="scrollToSection"
                                class="text-theme underline hover:opacity-80"
                                >privaatsuspoliitika</a
                            >
                            lõigus.
                        </p>
                    </CardContent>
                </Card>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="kkk" class="container mx-auto px-4 py-4 scroll-mt-20">
            <Card class="max-w-4xl mx-auto">
                <CardContent class="p-6 md:p-8">
                    <div class="text-center">
                        <HelpCircle class="w-16 h-16 text-theme mx-auto mb-6" />
                        <h2 class="text-3xl font-bold mb-12 tracking-tight text-theme">Korduma Kippuvad Küsimused</h2>
                    </div>
                    <div class="max-w-3xl mx-auto space-y-4">
                        <div v-if="!props.faqs || props.faqs.length === 0" class="text-center py-8">
                            <p class="text-muted-foreground mb-2">Küsimusi pole veel esitatud.</p>
                            <p class="text-muted-foreground">
                                Sul on küsimus?
                                <a href="mailto:info@lasteaiapildid.ee" class="text-theme underline hover:opacity-80"
                                    >Kirjuta mulle → info@lasteaiapildid.ee</a
                                >
                            </p>
                        </div>
                        <Collapsible v-else v-for="faq in props.faqs" :key="faq.id">
                            <CollapsibleTrigger
                                class="flex w-full items-center justify-between rounded-lg border p-4 text-left transition-colors hover:bg-muted/50"
                            >
                                <span class="font-medium">{{ faq.question }}</span>
                                <ChevronDown
                                    class="h-5 w-5 text-muted-foreground transition-transform duration-200 data-[state=open]:rotate-180"
                                />
                            </CollapsibleTrigger>
                            <CollapsibleContent class="px-4 pb-4 pt-2">
                                <p class="text-muted-foreground">{{ faq.answer }}</p>
                            </CollapsibleContent>
                        </Collapsible>

                        <div v-if="props.faqs && props.faqs.length > 0" class="mt-8 text-center">
                            <p class="text-muted-foreground">
                                Ei leidnud vastust oma küsimusele?
                                <a href="mailto:info@lasteaiapildid.ee" class="text-theme underline hover:opacity-80">
                                    Kirjuta mulle → info@lasteaiapildid.ee
                                </a>
                            </p>
                        </div>
                    </div>
                </CardContent>
            </Card>
        </section>

        <!-- About Section -->
        <section id="minust" class="py-4 scroll-mt-20">
            <div class="container mx-auto px-4">
                <Card class="max-w-4xl mx-auto">
                    <CardContent class="p-6 md:p-8">
                        <div class="text-center">
                            <UserCircle class="w-16 h-16 text-theme mx-auto mb-6" />
                            <h2 class="text-3xl font-bold mb-4 tracking-tight text-theme">Minust</h2>
                            <p class="text-xl text-muted-foreground">Anne Ruusmann</p>
                        </div>
                        <div class="space-y-8 mt-8">
                            <div class="border-b pb-8">
                                <h3 class="text-xl font-semibold mb-3 text-theme">Kuidas Lasteaiapildid sündis</h3>
                                <p class="text-muted-foreground text-justify">
                                    Olen kahe väikese lapse ema, kellele meeldib automatiseerida igavaid korduvaid
                                    tegevusi. Selle teksti kirjutamise ajal lõpetasin just Kuressaare Ametikooli Noorem
                                    tarkvararendaja eriala. Lasteaiapildid sai aga alguse hoopis isikliku probleemi
                                    lahendamisest. Tükk aega tagasi kurtis mees Eliisist laste piltide ühekaupa
                                    allalaadimise üle. Umbes pool aastat hiljem tegin enda pere jaoks prototüübi, mis
                                    tõmbas pooleteise tunni jooksul mõlema lapse 4 kuu pildid alla. Samal ajal nautisime
                                    perega saunaõhtut. Kaks kuud hiljem jäi mul lõputöö kaitsmise ja laste suvepuhkuse
                                    vahele üks nädal ning otsustasin selle kõigile kättesaadavaks teha. Ma väärin oma
                                    laste pilte ka siis, kui ma selle nimel tuhandeid klikke teha ei taha. Ja sina
                                    samuti.
                                </p>
                            </div>

                            <div class="border-b pb-8">
                                <h3 class="text-xl font-semibold mb-3 text-theme">Tehniline teekond</h3>
                                <p class="text-muted-foreground text-justify">
                                    Minu tee tarkvara arendamise poole sai alguse CNC operaatorina töötamisest. Nägin
                                    seal optimeerimise ja automatiseerimise võimalusi ja vajadusi ning hakkasin omal
                                    käel Pythoniga pusima. Seejärel sain kaks last, kuid programmeerimispisik oli juba
                                    sees. Lasteaiapildid on minu esimene "avalik" rakendus. Selle arendamine ja
                                    avaldamine on olnud põnev ja õpetlik teekond.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold mb-3 text-theme">Minu missioon</h3>
                                <p class="text-muted-foreground text-justify">
                                    Mina usun, et kõik igavad ja korduvad tegevused, mida saab ära automatiseerida,
                                    tuleb automatiseerida. Lapsevanematena on meil niigi palju kohustusi ja ülesandeid.
                                    Las need klikid jäävad masinatele ja aeg lapsevanematele. Iga lahendus algab kellegi
                                    jaoks piisavalt suurest probleemist.
                                </p>
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </section>

        <!-- Privacy Policy Section -->
        <section id="privaatsuspoliitika" class="container mx-auto px-4 py-4 scroll-mt-20">
            <Card class="max-w-4xl mx-auto">
                <CardContent class="p-6 md:p-8">
                    <div class="text-center">
                        <FileText class="w-16 h-16 text-theme mx-auto mb-6" />
                        <h2 class="text-3xl font-bold mb-12 tracking-tight text-theme">Privaatsuspoliitika</h2>
                    </div>
                    <div class="space-y-8">
                        <Card>
                            <CardHeader>
                                <CardTitle>Lühidalt</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <p class="text-muted-foreground">
                                    See laiendus on loodud ühelt Eesti lapsevanemalt teistele. Ma mõistan, kui oluline
                                    on teie laste fotode privaatsus.
                                </p>
                            </CardContent>
                        </Card>

                        <div class="grid md:grid-cols-2 gap-8">
                            <Card class="border-theme/20 bg-theme/5">
                                <CardHeader>
                                    <CardTitle class="text-theme">✅ Mida see laiendus TEEB</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-3">
                                    <p class="text-muted-foreground">→ Töötab 100% teie arvutis</p>
                                    <p class="text-muted-foreground">
                                        → Laadib fotod otse teie brauserist teie arvutisse
                                    </p>
                                    <p class="text-muted-foreground">
                                        → EI salvesta teie fotosid ega isiklikke andmeid
                                    </p>
                                </CardContent>
                            </Card>

                            <Card class="border-destructive/20 bg-destructive/5">
                                <CardHeader>
                                    <CardTitle class="text-destructive">❌ Mida see laiendus EI TEE</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-3">
                                    <p class="text-muted-foreground">→ EI saada teie fotosid minu serverisse</p>
                                    <p class="text-muted-foreground">→ EI jälgi, milliseid fotosid te alla laadite</p>
                                    <p class="text-muted-foreground">→ EI kogu teie isikuandmeid</p>
                                    <p class="text-muted-foreground">
                                        → EI kasuta analüütikat ega jälgimistehnoloogiaid
                                    </p>
                                    <p class="text-muted-foreground">→ EI müü ega jaga teie andmeid</p>
                                </CardContent>
                            </Card>
                        </div>

                        <Card>
                            <CardHeader>
                                <CardTitle>Tehnilised üksikasjad</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-4">
                                <p class="text-muted-foreground">Laiendus kasutab järgmisi brauseri õigusi:</p>
                                <ul class="list-disc list-inside space-y-2 ml-4 text-muted-foreground">
                                    <li>
                                        <strong class="text-foreground">activeTab</strong> - et lugeda fotosid
                                        praeguselt Eliisi lehelt
                                    </li>
                                    <li>
                                        <strong class="text-foreground">downloads</strong> - et salvestada fotod teie
                                        arvutisse
                                    </li>
                                    <li>
                                        <strong class="text-foreground">notifications</strong> - et näidata
                                        allalaadimise edenemist
                                    </li>
                                </ul>
                                <p class="mt-4 text-sm text-muted-foreground">
                                    Tulevikus võib lisanduda <strong>storage</strong> õigus teie eelistuste
                                    meeldejätmiseks (nt allalaadimise kausta asukoht).
                                </p>
                                <p class="mt-2 text-muted-foreground font-semibold">
                                    Kõik toimub teie brauseris. Mitte mingeid väliseid ühendusi.
                                </p>
                            </CardContent>
                        </Card>

                        <div class="text-center">
                            <p class="text-muted-foreground">
                                Küsimusi privaatsuse kohta?
                                <a href="mailto:info@lasteaiapildid.ee" class="text-theme underline hover:opacity-80">
                                    info@lasteaiapildid.ee
                                </a>
                            </p>
                        </div>
                    </div>
                </CardContent>
            </Card>
        </section>

        <!-- Known Bugs Section -->
        <section id="vead" class="py-4 scroll-mt-20">
            <div class="container mx-auto px-4">
                <Card class="max-w-4xl mx-auto">
                    <CardContent class="p-6 md:p-8">
                        <div class="text-center">
                            <Bug class="w-16 h-16 text-theme mx-auto mb-6" />
                            <h2 class="text-3xl font-bold mb-12 tracking-tight text-theme">
                                Teadaolevad vead ja lahendused
                            </h2>
                        </div>
                        <div class="max-w-3xl mx-auto space-y-4">
                            <Collapsible v-for="bug in props.bugs" :key="bug.id">
                                <CollapsibleTrigger
                                    class="flex w-full items-center justify-between rounded-lg border p-4 text-left transition-colors hover:bg-muted/50"
                                    :class="{
                                        'border-orange-200 bg-orange-50 dark:border-orange-900 dark:bg-orange-950':
                                            bug.severity === 'high',
                                        'border-yellow-200 bg-yellow-50 dark:border-yellow-900 dark:bg-yellow-950':
                                            bug.severity === 'medium',
                                        'border-blue-200 bg-blue-50 dark:border-blue-900 dark:bg-blue-950':
                                            bug.severity === 'low',
                                    }"
                                >
                                    <div class="flex items-center gap-3">
                                        <AlertCircle
                                            class="h-5 w-5 flex-shrink-0"
                                            :class="{
                                                'text-orange-600': bug.severity === 'high',
                                                'text-yellow-600': bug.severity === 'medium',
                                                'text-blue-600': bug.severity === 'low',
                                            }"
                                        />
                                        <span class="font-medium">{{ bug.title }}</span>
                                    </div>
                                    <ChevronDown
                                        class="h-5 w-5 text-muted-foreground transition-transform duration-200 data-[state=open]:rotate-180"
                                    />
                                </CollapsibleTrigger>
                                <CollapsibleContent class="px-4 pb-4 pt-2">
                                    <div class="space-y-3 pl-8">
                                        <div>
                                            <p class="font-semibold text-sm mb-1">Probleem:</p>
                                            <p class="text-muted-foreground">{{ bug.problem }}</p>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-sm mb-1">Lahendus:</p>
                                            <p class="text-muted-foreground">{{ bug.workaround }}</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-muted-foreground">
                                                <strong>Staatus:</strong>
                                                <span v-if="bug.status === 'active'">Aktiivne viga</span>
                                                <span v-else-if="bug.status === 'fixed'"
                                                    >Parandatud (ootab kinnitust)</span
                                                >
                                                <span v-else-if="bug.status === 'working'"
                                                    >Töös (planeeritud järgmisesse versiooni)</span
                                                >
                                                <span v-else>Ei paranda (süsteemi piirang)</span>
                                            </p>
                                        </div>
                                    </div>
                                </CollapsibleContent>
                            </Collapsible>

                            <div class="text-center mt-8">
                                <p class="text-muted-foreground mb-2">Leidsid uue vea?</p>
                                <a
                                    href="mailto:info@lasteaiapildid.ee"
                                    class="inline-flex items-center gap-2 text-theme underline hover:opacity-80"
                                >
                                    <Mail class="w-5 h-5" />
                                    Anna mulle teada → info@lasteaiapildid.ee
                                </a>
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </section>

        <!-- Planned Features Section -->
        <section id="funktsioonid" class="container mx-auto px-4 py-4 scroll-mt-20">
            <Card class="max-w-4xl mx-auto">
                <CardContent class="p-6 md:p-8">
                    <div class="text-center">
                        <Sparkles class="w-16 h-16 text-theme mx-auto mb-6" />
                        <h2 class="text-3xl font-bold mb-12 tracking-tight text-theme">Funktsioonid</h2>
                    </div>
                    <div class="max-w-3xl mx-auto space-y-8">
                        <!-- Existing Features -->
                        <div v-if="props.existingFeatures && props.existingFeatures.length > 0">
                            <h3 class="text-xl font-semibold mb-4 text-theme">Olemasolevad funktsioonid</h3>
                            <div class="space-y-4">
                                <Collapsible v-for="feature in props.existingFeatures" :key="feature.id">
                                    <CollapsibleTrigger
                                        class="flex w-full items-center justify-between rounded-lg border p-4 text-left transition-colors hover:bg-muted/50"
                                        :class="{
                                            'border-green-200 bg-green-50 dark:border-green-900 dark:bg-green-950':
                                                feature.priority === 'high',
                                            'border-yellow-200 bg-yellow-50 dark:border-yellow-900 dark:bg-yellow-950':
                                                feature.priority === 'medium',
                                            'border-gray-200 bg-gray-50 dark:border-gray-700 dark:bg-gray-950':
                                                feature.priority === 'low',
                                        }"
                                    >
                                        <div class="flex items-center gap-3">
                                            <Sparkles
                                                class="h-5 w-5 flex-shrink-0"
                                                :class="{
                                                    'text-green-600': feature.priority === 'high',
                                                    'text-yellow-600': feature.priority === 'medium',
                                                    'text-gray-600': feature.priority === 'low',
                                                }"
                                            />
                                            <span class="font-medium">{{ feature.title }}</span>
                                        </div>
                                        <ChevronDown
                                            class="h-5 w-5 text-muted-foreground transition-transform duration-200 data-[state=open]:rotate-180"
                                        />
                                    </CollapsibleTrigger>
                                    <CollapsibleContent class="px-4 pb-4 pt-2">
                                        <div class="pl-8">
                                            <pre class="text-muted-foreground font-mono text-sm whitespace-pre-wrap">{{
                                                feature.description
                                            }}</pre>
                                        </div>
                                    </CollapsibleContent>
                                </Collapsible>
                            </div>
                        </div>

                        <!-- Planned Features -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4 text-theme">Planeeritud funktsioonid</h3>
                            <div class="space-y-4">
                                <Collapsible v-for="feature in props.plannedFeatures" :key="feature.id">
                                    <CollapsibleTrigger
                                        class="flex w-full items-center justify-between rounded-lg border p-4 text-left transition-colors hover:bg-muted/50"
                                        :class="{
                                            'border-green-200 bg-green-50 dark:border-green-900 dark:bg-green-950':
                                                feature.priority === 'high',
                                            'border-yellow-200 bg-yellow-50 dark:border-yellow-900 dark:bg-yellow-950':
                                                feature.priority === 'medium',
                                            'border-gray-200 bg-gray-50 dark:border-gray-700 dark:bg-gray-950':
                                                feature.priority === 'low',
                                        }"
                                    >
                                        <div class="flex items-center gap-3">
                                            <Sparkles
                                                class="h-5 w-5 flex-shrink-0"
                                                :class="{
                                                    'text-green-600': feature.priority === 'high',
                                                    'text-yellow-600': feature.priority === 'medium',
                                                    'text-gray-600': feature.priority === 'low',
                                                }"
                                            />
                                            <span class="font-medium">{{ feature.title }}</span>
                                        </div>
                                        <ChevronDown
                                            class="h-5 w-5 text-muted-foreground transition-transform duration-200 data-[state=open]:rotate-180"
                                        />
                                    </CollapsibleTrigger>
                                    <CollapsibleContent class="px-4 pb-4 pt-2">
                                        <div class="pl-8">
                                            <p class="text-muted-foreground mb-2">{{ feature.description }}</p>
                                            <p class="text-sm text-muted-foreground">
                                                <strong>Prioriteet:</strong>
                                                <span v-if="feature.priority === 'high'" class="text-green-600"
                                                    >Kõrge</span
                                                >
                                                <span v-else-if="feature.priority === 'medium'" class="text-yellow-600"
                                                    >Keskmine</span
                                                >
                                                <span v-else class="text-gray-600">Madal</span>
                                            </p>
                                        </div>
                                    </CollapsibleContent>
                                </Collapsible>
                            </div>
                        </div>

                        <div class="text-center mt-8">
                            <p class="text-muted-foreground mb-2">On idee uue funktsiooni jaoks?</p>
                            <a
                                href="mailto:info@lasteaiapildid.ee"
                                class="inline-flex items-center gap-2 text-theme underline hover:opacity-80"
                            >
                                <Mail class="w-5 h-5" />
                                Jaga minuga → info@lasteaiapildid.ee
                            </a>
                        </div>
                    </div>
                </CardContent>
            </Card>
        </section>

        <!-- CTA Section -->
        <section class="container mx-auto px-4 py-4">
            <Card class="max-w-4xl mx-auto">
                <CardContent class="text-center p-6 md:p-8">
                    <Heart class="w-12 h-12 text-theme mx-auto mb-4" />
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 tracking-tight text-theme">
                        Tehtud Eesti vanema poolt Eesti vanematele
                    </h2>
                    <p class="text-lg text-muted-foreground mb-8">
                        Sest igal vanemal on õigus oma lapse lasteaiamälestustele.
                    </p>
                    <a
                        href="https://chromewebstore.google.com/detail/eliisi-piltide-allalaadij/hdmklnffodiiniickmbagjodgieoceip"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <Button
                            size="lg"
                            class="bg-button-primary hover:bg-button-primary/90 text-white px-8 py-6 text-lg"
                        >
                            Tõmba laiendus
                        </Button>
                    </a>
                </CardContent>
            </Card>
        </section>

        <!-- Footer -->
        <AppFooter />
    </div>
</template>
