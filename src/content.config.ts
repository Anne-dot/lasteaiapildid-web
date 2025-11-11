import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const bugs = defineCollection({
  loader: glob({ pattern: "**/*.md", base: "./src/data/bugs" }),
  schema: z.object({
    title: z.string(),
    problem: z.string(),
    workaround: z.string(),
    status: z.string(),
    severity: z.string(),
    order: z.number(),
  })
});

const features = defineCollection({
  loader: glob({ pattern: "**/*.md", base: "./src/data/features" }),
  schema: z.object({
    title: z.string(),
    description: z.string(),
    status: z.string(),
    priority: z.string(),
    order: z.number(),
  })
});

export const collections = { bugs, features };
