<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

const currentYear = new Date().getFullYear()
</script>

<template>
    <footer class="border-t mt-16">
        <div class="container mx-auto max-w-4xl px-4 py-8">
            <div
                class="flex flex-col sm:flex-row flex-wrap items-center justify-between gap-4 text-sm text-muted-foreground"
            >
                <span>© {{ currentYear }} Anne Ruusmann · Lasteaiapildid</span>
                <span>❤️-ga tehtud</span>
                <Link :href="route('privacy')" class="text-theme hover:underline">Privaatsuspoliitika</Link>
                <a href="mailto:info@lasteaiapildid.ee" class="text-theme hover:underline">info@lasteaiapildid.ee</a>
            </div>
        </div>
    </footer>
</template>
