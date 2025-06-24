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
import { Collapsible, CollapsibleContent, CollapsibleTrigger } from '@/components/ui/collapsible'
import { HelpCircle, ChevronDown } from 'lucide-vue-next'
import { ref } from 'vue'
import AppFooter from '@/components/AppFooter.vue'
import AppHeader from '@/components/AppHeader.vue'

interface Faq {
    id: number
    question: string
    answer: string
    order: number
    is_active: boolean
}

interface Props {
    faqs: Faq[]
}

const props = defineProps<Props>()

// Track which items are open
const openItems = ref<number[]>([])

const toggleItem = (id: number) => {
    const index = openItems.value.indexOf(id)
    if (index > -1) {
        openItems.value.splice(index, 1)
    } else {
        openItems.value.push(id)
    }
}

const isOpen = (id: number) => openItems.value.includes(id)
</script>

<template>
    <Head title="KKK - Lasteaiapildid.ee">
        <meta
            name="description"
            content="Korduma kippuvad küsimused Lasteaiapildid.ee kohta. Kuidas töötab, kas on turvaline, kui palju maksab ja muud olulised küsimused."
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
                        <BreadcrumbPage>KKK</BreadcrumbPage>
                    </BreadcrumbItem>
                </BreadcrumbList>
            </Breadcrumb>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <HelpCircle class="w-16 h-16 text-theme mx-auto mb-4" />
                    <h1 class="text-4xl font-extrabold text-foreground mb-2 tracking-tight">
                        Korduma Kippuvad Küsimused
                    </h1>
                    <p class="text-lg text-muted-foreground">Kõik vastused ühes kohas</p>
                </div>

                <div class="space-y-4">
                    <Card v-for="faq in props.faqs" :key="faq.id">
                        <Collapsible :open="isOpen(faq.id)" @update:open="() => toggleItem(faq.id)">
                            <CollapsibleTrigger class="w-full">
                                <CardHeader class="cursor-pointer hover:bg-muted/50 transition-colors">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-semibold text-left">{{ faq.question }}</h2>
                                        <ChevronDown
                                            class="w-5 h-5 text-muted-foreground transition-transform duration-200"
                                            :class="{ 'rotate-180': isOpen(faq.id) }"
                                        />
                                    </div>
                                </CardHeader>
                            </CollapsibleTrigger>
                            <CollapsibleContent>
                                <CardContent class="pt-0 pb-6">
                                    <p class="text-muted-foreground">{{ faq.answer }}</p>
                                </CardContent>
                            </CollapsibleContent>
                        </Collapsible>
                    </Card>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-muted-foreground mb-4">Ei leidnud vastust oma küsimusele?</p>
                    <a href="mailto:tere@lasteaiapildid.ee" class="text-theme hover:underline font-semibold">
                        Kirjuta meile →
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <AppFooter />
    </div>
</template>
