import type { LucideIcon } from 'lucide-vue-next';
import type { Config } from 'ziggy-js';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface Specifications {
    id: number;
    engine: string;
    drive: string;
    transmission: string;
    power: string;
    cars_id: number;
}
export interface Pivot {
    cars_id: number;
    colors_id: number;
}

export interface Colors {
    id: number;
    name: number;
    code:number;
    hex: number;
    pivot:Pivot;
}
export interface Car {
    id: number;
    name: string;
    code: string;
    header: string;
    title: string;
    description: string;
    price: number;
    active_position: number;
    specifications: Specifications;
    colors:Colors[]
}


export interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon;
    isActive?: boolean;
}

export type AppPageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    ziggy: Config & { location: string };
    sidebarOpen: boolean;
};

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
}

export type BreadcrumbItemType = BreadcrumbItem;
