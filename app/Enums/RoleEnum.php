<?php

namespace App\Enums;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case WAREHOUSE_STAFF = 'warehouse_staff';
    case SUPERVISOR = 'supervisor';
    case PROCUREMENT_MANAGER = 'procurement_manager';
    case DELIVERY_AGENT = 'delivery_agent';
    case AUDITOR = 'auditor';
}
