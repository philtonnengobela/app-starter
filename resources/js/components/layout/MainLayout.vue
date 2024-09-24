<script setup lang="ts">
import { Bell, CircleUser, Home, LineChart, Menu, Package, Package2, Search, ShoppingCart, Users } from 'lucide-vue-next'

import { Badge } from '@/components/ui/badge'
import { Button } from '@/components/ui/button'
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card'
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu'
import { Input } from '@/components/ui/input'
import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet'

function logout() {
  axios.post('/logout', {
    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
  })
  .then(() => {
    window.location.href = '/login';
  })
  .catch(error => {
    console.error('Logout failed:', error);
  });
}

import { ref } from 'vue';
const user = ref(window.user);

</script>

<template>  
   
    <div class="flex h-full max-h-screen flex-col gap-2">
      <div class="flex h-28 items-center bg-black border-b py-2 px-4 lg:h-[180px] lg:px-6">
        <a href="/" class="flex items-center text-center gap-2 font-semibold">
          <img src="images/logo.png" class="size-32 center">
        </a>
        <Button variant="outline" size="icon" class="ml-auto h-8 w-8">
          <Bell class="h-4 w-4" />
          <span class="sr-only">Toggle notifications</span>
        </Button>
      </div>
      <div class="flex-1">
  <nav class="grid items-start px-2 text-xl font-medium lg:px-4 mt-3 space-y-2">
    <a
      href="/"
      class="flex items-center gap-3 rounded-xl px-4 py-3 transition-all hover:bg-primary hover:text-white bg-[#b6e3cf] text-secondary shadow-lg"
    >
      <Icon icon="fa6-solid:hospital-user" class="text-lg text-secondary" />
      <span class="text-lg">Dashboard</span>
    </a>
    <a
      href="#"
      class="flex items-center gap-3 rounded-xl px-4 py-3 transition-all hover:bg-primary hover:text-white text-muted-foreground shadow-md"
    >
      <Icon icon="vaadin:folder-open" class="text-lg text-muted-foreground" />
      <span class="text-lg">My Membership</span>
    </a>
    <a
      href="#"
      class="flex items-center gap-3 rounded-xl px-4 py-3 transition-all hover:bg-primary hover:text-white text-muted-foreground shadow-md"
    >
      <Icon icon="ion:briefcase" class="text-lg text-muted-foreground" />
      <span class="text-lg">Events</span>
    </a>
    <a
      href="#"
      class="flex items-center gap-3 rounded-xl px-4 py-3 transition-all hover:bg-primary hover:text-white text-muted-foreground shadow-md"
    >
      <Icon icon="fa-solid:user-cog" class="text-lg text-muted-foreground" />
      <span class="text-lg">My Profile</span>
    </a>
    <a
      href="javascript:;"
      @click="logout"
      class="flex items-center gap-3 rounded-xl px-4 py-3 transition-all hover:bg-red-500 hover:text-white text-muted-foreground shadow-md"
    >
      <Icon icon="fa:lock" class="text-lg text-muted-foreground" />
      <span class="text-lg">Logout</span>
    </a>
  </nav>
</div>

      <div class="mt-auto p-4">
        <Card>
          <CardHeader class="p-2 pt-0 md:p-4">
            <CardTitle>Upgrade to Pro</CardTitle>
            <CardDescription>
              Unlock all features and get unlimited access to our support
              team.
            </CardDescription>
          </CardHeader>
          <CardContent class="p-2 pt-0 md:p-4 md:pt-0">
            <Button size="sm" class="w-full">
              Upgrade
            </Button>
          </CardContent>
        </Card>
      </div>
    </div>
</template>

