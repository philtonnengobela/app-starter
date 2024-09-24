<script setup lang="ts">
import {
  CircleUser,
  File,
  Home,
  LineChart,
  ListFilter,
  MoreHorizontal,
  Package,
  Package2,
  PanelLeft,
  PlusCircle,
  Search,
  Settings,
  ShoppingCart,
  Users2,
} from 'lucide-vue-next'

import { Badge } from '@/components/ui/badge'
import { Button } from '@/components/ui/button'
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/components/ui/card'
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu'
import { Input } from '@/components/ui/input'
import {
  Breadcrumb,
  BreadcrumbItem,
  BreadcrumbLink,
  BreadcrumbList,
  BreadcrumbPage,
  BreadcrumbSeparator,
} from '@/components/ui/breadcrumb'
import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet'
import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@/components/ui/table'
import {
  Tabs,
  TabsContent,
  TabsList,
  TabsTrigger,
} from '@/components/ui/tabs'
import {
  Tooltip,
  TooltipContent,
  TooltipProvider,
  TooltipTrigger,
} from '@/components/ui/tooltip'

let products = [
  {
    id: 1,
    name: 'Laser Lemonade Machine',
    status: 'draft',
    price: '$499.99',
    totalSales: 25,
    createdAt: '2023-07-12 10:42 AM',
  },
  {
    id: 2,
    name: 'Hypernova Headphones',
    status: 'active',
    price: '$129.99',
    totalSales: 100,
    createdAt: '2023-10-18 03:21 PM',
  },
  {
    id: 3,
    name: 'AeroGlow Desk Lamp',
    status: 'active',
    price: '$39.99',
    totalSales: 50,
    createdAt: '2023-11-29 08:15 AM',
  },
  {
    id: 4,
    name: 'TechTonic Energy Drink',
    status: 'draft',
    price: '$2.99',
    totalSales: 0,
    createdAt: '2023-12-25 11:59 PM',
  },
  {
    id: 5,
    name: 'Gamer Gear Pro Controller',
    status: 'active',
    price: '$59.99',
    totalSales: 75,
    createdAt: '2024-01-01 12:00 AM',
  },
  {
    id: 6,
    name: 'Luminous VR Headset',
    status: 'active',
    price: '$199.99',
    totalSales: 30,
    createdAt: '2024-02-14 02:14 PM',
  },
]
</script>

<template>
  <main class="grid flex-1 items-start">
        <Tabs default-value="all">
          <div class="flex items-center">
            <TabsList>
              <TabsTrigger value="all">
                All
              </TabsTrigger>
              <TabsTrigger value="active">
                Active
              </TabsTrigger>
              <TabsTrigger value="draft">
                Pending
              </TabsTrigger>
              <TabsTrigger value="archived" class="hidden sm:flex">
                Declined
              </TabsTrigger>
            </TabsList>
            <div class="ml-auto flex items-center gap-2">
              <DropdownMenu>
                <DropdownMenuTrigger as-child>
                  <Button variant="outline" size="sm" class="h-7 gap-1">
                    <ListFilter class="h-3.5 w-3.5" />
                    <span class="sr-only sm:not-sr-only sm:whitespace-nowrap">
                      Filter
                    </span>
                  </Button>
                </DropdownMenuTrigger>
                <DropdownMenuContent align="end">
                  <DropdownMenuLabel>Filter by</DropdownMenuLabel>
                  <DropdownMenuSeparator />
                  <DropdownMenuItem checked>
                    Active
                  </DropdownMenuItem>
                  <DropdownMenuItem>Draft</DropdownMenuItem>
                  <DropdownMenuItem>
                    Pending
                  </DropdownMenuItem>
                </DropdownMenuContent>
              </DropdownMenu>
              <Button size="sm" variant="outline" class="h-7 gap-1">
                <File class="h-3.5 w-3.5" />
                <span class="sr-only sm:not-sr-only sm:whitespace-nowrap">
                  Export
                </span>
              </Button>
              <Button size="sm" class="h-7 gap-1">
                <PlusCircle class="h-3.5 w-3.5" />
                <span class="sr-only sm:not-sr-only sm:whitespace-nowrap">
                  Add Member
                </span>
              </Button>
            </div>
          </div>
          <TabsContent value="all">
            <Card>
              <CardHeader>
                <CardTitle>AWUSA Membership</CardTitle>
                <CardDescription>
                  Manage your members and manage their portfolio.
                </CardDescription>
              </CardHeader>
              <CardContent>
                <Table>
                  <TableHeader>
                    <TableRow>                     
                      <TableHead>Name</TableHead>
                      <TableHead>Status</TableHead>
                      <TableHead class="hidden md:table-cell">
                        Price
                      </TableHead>
                      <TableHead class="hidden md:table-cell">
                        Total Sales
                      </TableHead>
                      <TableHead class="hidden md:table-cell">
                        Created at
                      </TableHead>
                      <TableHead>
                        <span class="sr-only">Actions</span>
                      </TableHead>
                    </TableRow>
                  </TableHeader>
                  <TableBody>
                    <TableRow v-for="product in products">
                    
                      <TableCell class="font-medium">
                        {{ product.name }}
                      </TableCell>
                      <TableCell>
                        <Badge variant="outline">
                          {{ product.status }}
                        </Badge>
                      </TableCell>
                      <TableCell class="hidden md:table-cell">
                       {{ product.price }}
                      </TableCell>
                      <TableCell class="hidden md:table-cell">
                        {{ product.totalSales }}
                      </TableCell>
                      <TableCell class="hidden md:table-cell">
                        {{ product.createdAt }}
                      </TableCell>
                      <TableCell>
                        <DropdownMenu>
                          <DropdownMenuTrigger as-child>
                            <Button
                              aria-haspopup="true"
                              size="icon"
                              variant="ghost"
                            >
                              <MoreHorizontal class="h-4 w-4" />
                              <span class="sr-only">Toggle menu</span>
                            </Button>
                          </DropdownMenuTrigger>
                          <DropdownMenuContent align="end">
                            <DropdownMenuLabel>Actions</DropdownMenuLabel>
                            <DropdownMenuItem>Edit</DropdownMenuItem>
                            <DropdownMenuItem>Delete</DropdownMenuItem>
                          </DropdownMenuContent>
                        </DropdownMenu>
                      </TableCell>
                    </TableRow>
                    
                  </TableBody>
                </Table>
              </CardContent>
              <CardFooter>
                <div class="text-xs text-muted-foreground">
                  Showing <strong>1-10</strong> of <strong>32</strong>
                  products
                </div>
              </CardFooter>
            </Card>
          </TabsContent>
        </Tabs>
      </main>
</template>