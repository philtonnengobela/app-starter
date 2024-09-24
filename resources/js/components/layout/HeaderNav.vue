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
  
  <header class="flex h-14 items-center gap-4 border-b bg-muted/40 px-4 lg:h-[180px] lg:px-6"> 
        <Sheet>
            <SheetTrigger as-child>
            <Button
                variant="outline"
                size="icon"
                class="shrink-0 md:hidden"
            >
                <Menu class="h-5 w-5" />
                <span class="sr-only">Toggle navigation menu</span>
            </Button>
            </SheetTrigger>
            <SheetContent side="left" class="flex flex-col">
            <nav class="grid gap-2 text-lg font-medium">
                <a href="/" class="flex items-center text-center gap-2 font-semibold">
                <img src="images/logo.png" class="size-24">
                </a>
                <a
                href="#"
                class="mx-[-0.65rem] flex items-center gap-4 rounded-xl px-3 py-2 text-foreground hover:text-foreground bg-[#b6e3cf]"
                >
                <Icon icon="fa6-solid:hospital-user" />
                Dashboard
                </a>
                <a
                href="#"
                class="mx-[-0.65rem] flex items-center gap-4 rounded-xl px-3 py-2 text-muted-foreground hover:text-foreground"
                >
                <Icon icon="vaadin:folder-open" />
                My Membership
                </a>
                <a
                href="#"
                class="mx-[-0.65rem] flex items-center gap-4 rounded-xl px-3 py-2 text-muted-foreground hover:text-foreground"
                >
                <Icon icon="ion:briefcase" />
                Events
                </a>
                <a
                href="#"
                class="mx-[-0.65rem] flex items-center gap-4 rounded-xl px-3 py-2 text-muted-foreground hover:text-foreground"
                >
                <Icon icon="fa-solid:user-cog" />
                My Profile
                </a>
                <a
                href="#"
                @click="logout"
                class="mx-[-0.65rem] flex items-center gap-4 rounded-xl px-3 py-2 text-muted-foreground hover:text-foreground"
                >
                <Icon icon="fa:lock" />
                Logout
                </a>
            </nav>
            <div class="mt-auto">
                <Card>
                <CardHeader>
                    <CardTitle>Upgrade to Pro</CardTitle>
                    <CardDescription>
                    Unlock all features and get unlimited access to our
                    support team.
                    </CardDescription>
                </CardHeader>
                <CardContent>
                    <Button size="sm" class="w-full">
                    Upgrade
                    </Button>
                </CardContent>
                </Card>
            </div>
            </SheetContent>
        </Sheet>
        <div class="w-full flex-1">
            <div id="welcome" class="w-full lg:w-auto">
            <h1 class="text-md hidden lg:block lg:text-4xl font-bold">Allied <span class="text-[#ed1c24]">Workers</span> Union<br> Of South Africa </h1>
            <p class="mt-0 md:mt-3 text-sm lg:text-2xl text-secondary">Federated Member Zone</p>
            </div>
        </div>
        <DropdownMenu class="lg:justify-start">
            <DropdownMenuTrigger as-child>            
            <Button variant="transparent">
                <div class="text-sm lg:text-base">Hi {{ user.name }}</div>
                <div class="flex items-center gap-2"> 
                <img src="images/profile-avatar.png" class="size-12 lg:size-20 ">              
                <Icon icon="bxs:down-arrow" className="home-icon" />
                <span class="sr-only">Toggle user menu</span>
                </div>
            </Button>
            
            </DropdownMenuTrigger>
            <DropdownMenuContent align="end">
            <DropdownMenuLabel>My Account</DropdownMenuLabel>
            <DropdownMenuSeparator />
            <DropdownMenuItem>Settings</DropdownMenuItem>
            <DropdownMenuItem>Support</DropdownMenuItem>
            <DropdownMenuSeparator />
            <DropdownMenuItem @click="logout">Logout</DropdownMenuItem>
            </DropdownMenuContent>
        </DropdownMenu>
    </header>   
</template>

