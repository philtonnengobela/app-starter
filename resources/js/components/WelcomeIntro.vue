<script setup lang="ts">
import { Button } from '@/components/ui/button'
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/components/ui/card'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
</script>

<template>
  <div class="h-screen w-screen flex items-center justify-center">
    <Card class="w-full max-w-md p-4">
      <CardContent class="grid items-center justify-center">
        <div class="grid">
          <img src="/images/logo.png" alt="Logo" class="w-full md:w-64 mx-auto" />
          <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent" bis_skin_checked="1"></div>
          <h1 class="text-center p-4 break-words"><span class="text-4xl text-center font-bold text-white">Allied Workers Union Of South Africa</span></h1>
        </div>
      </CardContent>
      <CardFooter>
        <Button class="w-full bg-secondary" variant="secondary" asChild>
          <a href="/login" target="_self">Sign In</a>
        </Button>
      </CardFooter>
    </Card>
  </div>
</template>