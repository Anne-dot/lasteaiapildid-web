<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { Menu, X, Camera, HelpCircle, Bug, UserCircle, FileText, Sparkles } from 'lucide-vue-next'
import { ref } from 'vue'

const mobileMenuOpen = ref(false)

const navigation = [
    { name: 'Funktsioonid', href: '#funktsioonid', icon: Sparkles },
    { name: 'Vead', href: '#vead', icon: Bug },
    { name: 'KKK', href: '#kkk', icon: HelpCircle },
    { name: 'Minust', href: '#minust', icon: UserCircle },
    { name: 'Privaatsuspoliitika', href: '#privaatsuspoliitika', icon: FileText },
]

const scrollToSection = (event: Event) => {
    event.preventDefault()
    const target = event.target as HTMLAnchorElement
    const hash = target.getAttribute('href')
    if (hash && hash.startsWith('#')) {
        const element = document.querySelector(hash)
        if (element) {
            element.scrollIntoView({ behavior: 'smooth', block: 'start' })
            // Close mobile menu if open
            mobileMenuOpen.value = false
        }
    }
}
</script>

<template>
    <header
        class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60"
    >
        <nav class="px-8 lg:px-16">
            <div class="flex h-16 items-center justify-between">
                <!-- Logo -->
                <Link href="/" class="flex items-center gap-2 group">
                    <Camera class="h-8 w-8 text-[var(--theme)] transition-transform group-hover:scale-110" />
                    <span class="text-2xl font-black tracking-tight text-[var(--theme)]"> Lasteaiapildid </span>
                </Link>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-6">
                    <a
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        @click="scrollToSection"
                        class="flex items-center gap-1.5 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground cursor-pointer"
                    >
                        <component :is="item.icon" class="h-4 w-4" />
                        {{ item.name }}
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden rounded-md p-2 text-muted-foreground hover:bg-muted hover:text-foreground"
                    :aria-label="mobileMenuOpen ? 'Sulge menüü' : 'Ava menüü'"
                    :aria-expanded="mobileMenuOpen"
                >
                    <Menu v-if="!mobileMenuOpen" class="h-6 w-6" />
                    <X v-else class="h-6 w-6" />
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div v-if="mobileMenuOpen" class="md:hidden py-4 border-t">
                <div class="flex flex-col space-y-4">
                    <a
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        @click="scrollToSection"
                        class="flex items-center gap-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground cursor-pointer"
                    >
                        <component :is="item.icon" class="h-4 w-4" />
                        {{ item.name }}
                    </a>
                </div>
            </div>
        </nav>
    </header>
</template>
